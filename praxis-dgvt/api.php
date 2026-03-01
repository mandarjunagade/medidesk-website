<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$config = require __DIR__ . '/config.php';

$input = json_decode(file_get_contents('php://input'), true);

if (!$input || empty($input['message'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Message is required']);
    exit;
}

$userMessage = trim($input['message']);
$previousResponseId = $input['response_id'] ?? null;

$instructions = 'You are an assistant that answers user queries by reading provided files and using their content as context. For every user question, read and analyze the supplied files to generate a relevant and accurate response.

Always detect the input language used by the user, and reply in that same language.

# Steps

- Read and understand the contents of all files provided by the user.
- Analyze the user\'s query, utilizing information from the files as needed.
- Compose a thorough, helpful, and contextually accurate answer that directly addresses the user\'s query.
- Detect the user\'s input language and ensure your reply is in that language.

# Output Format

Respond in natural language as a clear, well-structured paragraph (or multiple paragraphs if needed) in the same language as the user\'s input.

# Notes

- If the user asks a question not answerable with the provided files, politely indicate this in the user\'s language.
- Do not translate the user\'s query; respond in the exact language they used.
- Remain concise and relevant, but provide detailed information if the user\'s query requires it.

Reminder: Read and use file contents to answer, and always reply in the user\'s input language.';

// Build the request body for OpenAI Responses API
$body = [
    'model'            => $config['model'],
    'instructions'     => $instructions,
    'input'            => [
        [
            'role'    => 'user',
            'content' => $userMessage,
        ]
    ],
    'tools'            => [
        [
            'type'             => 'file_search',
            'vector_store_ids' => [$config['vector_store_id']],
        ]
    ],
    'temperature'      => $config['temperature'],
    'top_p'            => $config['top_p'],
    'max_output_tokens'=> $config['max_tokens'],
    'store'            => true,
];

// If continuing a conversation, use previous_response_id
if ($previousResponseId) {
    $body['previous_response_id'] = $previousResponseId;
}

$ch = curl_init('https://api.openai.com/v1/responses');
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $config['openai_api_key'],
    ],
    CURLOPT_POSTFIELDS     => json_encode($body),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 120,
    CURLOPT_SSL_VERIFYPEER => true,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

if ($curlError) {
    http_response_code(502);
    echo json_encode(['error' => 'Failed to reach OpenAI API: ' . $curlError]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code($httpCode);
    $errorData = json_decode($response, true);
    $errorMessage = $errorData['error']['message'] ?? 'OpenAI API error';
    echo json_encode(['error' => $errorMessage]);
    exit;
}

$data = json_decode($response, true);

// Extract the assistant's text from the response output
$assistantText = '';
$responseId = $data['id'] ?? null;

if (!empty($data['output'])) {
    foreach ($data['output'] as $outputItem) {
        if (($outputItem['type'] ?? '') === 'message' && ($outputItem['role'] ?? '') === 'assistant') {
            foreach ($outputItem['content'] as $contentItem) {
                if (($contentItem['type'] ?? '') === 'output_text') {
                    $assistantText .= $contentItem['text'];
                }
            }
        }
    }
}

if (empty($assistantText)) {
    $assistantText = 'Es tut mir leid, ich konnte keine Antwort generieren. Bitte versuchen Sie es erneut.';
}

echo json_encode([
    'response'    => $assistantText,
    'response_id' => $responseId,
]);
