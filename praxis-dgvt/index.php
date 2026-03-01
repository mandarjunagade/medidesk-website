<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praxis DGVT Erlangen – KI-Assistent</title>
    <meta name="description" content="Stellen Sie Ihre Fragen an unseren KI-Assistenten der Praxis DGVT Erlangen.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="dns-prefetch" href="https://widget.medideskr.cloud">
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --primary: #0e7490;
            --primary-dark: #155e75;
            --primary-light: #a5f3fc;
            --primary-bg: #ecfeff;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --text: #0f172a;
            --text-secondary: #475569;
            --text-muted: #94a3b8;
            --border: #e2e8f0;
            --border-light: #f1f5f9;
            --shadow-sm: 0 1px 2px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.07), 0 2px 4px -2px rgba(0,0,0,0.05);
            --shadow-lg: 0 10px 15px -3px rgba(0,0,0,0.08), 0 4px 6px -4px rgba(0,0,0,0.04);
            --radius: 12px;
            --radius-lg: 16px;
            --radius-full: 9999px;
            --font: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        }

        body {
            font-family: var(--font);
            background: var(--surface-alt);
            color: var(--text);
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
        }

        /* ── Header ── */
        .site-header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            padding: 0 24px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 50;
            box-shadow: var(--shadow-sm);
        }
        .site-header .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: var(--text);
        }
        .site-header .brand-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            flex-shrink: 0;
        }
        .site-header .brand-text h1 {
            font-size: 17px;
            font-weight: 700;
            line-height: 1.2;
        }
        .site-header .brand-text span {
            font-size: 12px;
            color: var(--text-muted);
            font-weight: 500;
        }
        .header-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            background: var(--primary-bg);
            color: var(--primary);
            border-radius: var(--radius-full);
            font-size: 13px;
            font-weight: 600;
        }
        .header-badge .dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: pulse-dot 2s infinite;
        }
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }

        /* ── Main Content ── */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            max-width: 860px;
            width: 100%;
            margin: 0 auto;
            padding: 0 16px;
        }

        /* ── Chat Container ── */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 24px 0 16px;
            gap: 16px;
        }

        /* ── Welcome State ── */
        .welcome-state {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 32px 16px;
            animation: fadeInUp 0.5s ease;
        }
        .welcome-icon {
            width: 72px;
            height: 72px;
            border-radius: 20px;
            background: linear-gradient(135deg, var(--primary-bg), #cffafe);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            margin-bottom: 20px;
        }
        .welcome-state h2 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text);
        }
        .welcome-state p {
            font-size: 15px;
            color: var(--text-secondary);
            max-width: 480px;
            line-height: 1.6;
            margin-bottom: 28px;
        }
        .suggestions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            max-width: 600px;
        }
        .suggestion-btn {
            padding: 10px 18px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-full);
            font-size: 14px;
            color: var(--text-secondary);
            cursor: pointer;
            transition: all 0.2s;
            font-family: var(--font);
            white-space: nowrap;
        }
        .suggestion-btn:hover {
            background: var(--primary-bg);
            border-color: var(--primary-light);
            color: var(--primary);
            box-shadow: var(--shadow-sm);
        }

        /* ── Messages Area ── */
        .messages-area {
            flex: 1;
            overflow-y: auto;
            padding: 8px 0;
            display: none;
            flex-direction: column;
            gap: 20px;
            scroll-behavior: smooth;
        }
        .messages-area.active {
            display: flex;
        }
        .message {
            display: flex;
            gap: 12px;
            max-width: 100%;
            animation: fadeInUp 0.3s ease;
        }
        .message.user {
            flex-direction: row-reverse;
        }
        .message-avatar {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }
        .message.assistant .message-avatar {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: #fff;
        }
        .message.user .message-avatar {
            background: var(--border-light);
            color: var(--text-secondary);
        }
        .message-bubble {
            padding: 14px 18px;
            border-radius: var(--radius-lg);
            max-width: 75%;
            line-height: 1.65;
            font-size: 14.5px;
        }
        .message.assistant .message-bubble {
            background: var(--surface);
            border: 1px solid var(--border);
            box-shadow: var(--shadow-sm);
            border-top-left-radius: 4px;
        }
        .message.user .message-bubble {
            background: var(--primary);
            color: #fff;
            border-top-right-radius: 4px;
        }

        /* Markdown styling inside assistant messages */
        .message.assistant .message-bubble p { margin-bottom: 10px; }
        .message.assistant .message-bubble p:last-child { margin-bottom: 0; }
        .message.assistant .message-bubble ul,
        .message.assistant .message-bubble ol { margin: 8px 0; padding-left: 20px; }
        .message.assistant .message-bubble li { margin-bottom: 4px; }
        .message.assistant .message-bubble strong { font-weight: 600; }
        .message.assistant .message-bubble code {
            background: var(--surface-alt);
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 13px;
        }
        .message.assistant .message-bubble pre {
            background: #1e293b;
            color: #e2e8f0;
            padding: 14px;
            border-radius: 8px;
            overflow-x: auto;
            margin: 10px 0;
            font-size: 13px;
        }
        .message.assistant .message-bubble pre code {
            background: none;
            padding: 0;
            color: inherit;
        }
        .message.assistant .message-bubble a {
            color: var(--primary);
            text-decoration: underline;
        }
        .message.assistant .message-bubble h1,
        .message.assistant .message-bubble h2,
        .message.assistant .message-bubble h3 {
            margin: 14px 0 8px;
            font-weight: 600;
        }
        .message.assistant .message-bubble h1 { font-size: 18px; }
        .message.assistant .message-bubble h2 { font-size: 16px; }
        .message.assistant .message-bubble h3 { font-size: 15px; }

        /* ── Typing Indicator ── */
        .typing-indicator {
            display: flex;
            gap: 12px;
            animation: fadeInUp 0.3s ease;
        }
        .typing-dots {
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 14px 20px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius-lg);
            border-top-left-radius: 4px;
            box-shadow: var(--shadow-sm);
        }
        .typing-dots span {
            width: 8px;
            height: 8px;
            background: var(--text-muted);
            border-radius: 50%;
            animation: bounce 1.4s infinite;
        }
        .typing-dots span:nth-child(2) { animation-delay: 0.2s; }
        .typing-dots span:nth-child(3) { animation-delay: 0.4s; }
        @keyframes bounce {
            0%, 60%, 100% { transform: translateY(0); }
            30% { transform: translateY(-6px); }
        }

        /* ── Input Area ── */
        .input-area {
            padding: 16px 0 24px;
            position: sticky;
            bottom: 0;
            background: var(--surface-alt);
        }
        .input-wrapper {
            display: flex;
            align-items: flex-end;
            gap: 10px;
            background: var(--surface);
            border: 2px solid var(--border);
            border-radius: var(--radius-lg);
            padding: 8px 8px 8px 18px;
            transition: border-color 0.2s, box-shadow 0.2s;
            box-shadow: var(--shadow-sm);
        }
        .input-wrapper:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(14,116,144,0.1);
        }
        .input-wrapper textarea {
            flex: 1;
            border: none;
            outline: none;
            resize: none;
            font-family: var(--font);
            font-size: 15px;
            line-height: 1.5;
            color: var(--text);
            background: transparent;
            min-height: 24px;
            max-height: 120px;
            padding: 6px 0;
        }
        .input-wrapper textarea::placeholder {
            color: var(--text-muted);
        }
        .send-btn {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            border: none;
            background: var(--primary);
            color: #fff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s, transform 0.1s;
            flex-shrink: 0;
        }
        .send-btn:hover { background: var(--primary-dark); }
        .send-btn:active { transform: scale(0.95); }
        .send-btn:disabled {
            background: var(--border);
            cursor: not-allowed;
        }
        .send-btn svg { width: 20px; height: 20px; }

        .input-hint {
            text-align: center;
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 8px;
        }

        /* ── Typewriter cursor ── */
        .typewriter-cursor::after {
            content: '|';
            animation: blink-cursor 0.8s infinite;
            color: var(--primary);
            font-weight: 300;
        }
        @keyframes blink-cursor {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }

        /* ── Error message ── */
        .error-toast {
            position: fixed;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            background: #fee2e2;
            color: #991b1b;
            border: 1px solid #fecaca;
            padding: 12px 24px;
            border-radius: var(--radius);
            font-size: 14px;
            box-shadow: var(--shadow-lg);
            z-index: 100;
            animation: fadeInUp 0.3s ease;
        }
        .error-toast.hidden { display: none; }

        /* ── Animations ── */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ── Scrollbar ── */
        .messages-area::-webkit-scrollbar { width: 6px; }
        .messages-area::-webkit-scrollbar-track { background: transparent; }
        .messages-area::-webkit-scrollbar-thumb {
            background: var(--border);
            border-radius: 3px;
        }
        .messages-area::-webkit-scrollbar-thumb:hover { background: var(--text-muted); }

        /* ── Responsive ── */
        @media (max-width: 640px) {
            .site-header { padding: 0 16px; }
            .header-badge { display: none; }
            .site-header .brand-text span { display: none; }
            .welcome-state h2 { font-size: 19px; }
            .welcome-state p { font-size: 14px; }
            .suggestions { gap: 8px; }
            .suggestion-btn { font-size: 13px; padding: 8px 14px; }
            .message-bubble { max-width: 85%; }
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="site-header">
    <a href="#" class="brand">
        <div class="brand-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5"/>
            </svg>
        </div>
        <div class="brand-text">
            <h1>Praxis DGVT Erlangen</h1>
            <span>Verhaltenstherapie &amp; Beratung</span>
        </div>
    </a>
    <div class="header-badge">
        <span class="dot"></span>
        KI-Assistent Online
    </div>
</header>

<!-- Main Content -->
<div class="main-content">
    <div class="chat-container">

        <!-- Welcome Screen (shown before first message) -->
        <div class="welcome-state" id="welcomeState">
            <div class="welcome-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" viewBox="0 0 24 24" stroke="#0e7490" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z"/>
                </svg>
            </div>
            <h2>Willkommen beim KI-Assistenten</h2>
            <p>Ich bin der digitale Assistent der Praxis DGVT Erlangen. Stellen Sie mir Ihre Fragen – ich helfe Ihnen gerne weiter.</p>
            <div class="suggestions">
                <button class="suggestion-btn" onclick="sendSuggestion(this)">Welche Therapieangebote gibt es?</button>
                <button class="suggestion-btn" onclick="sendSuggestion(this)">Wie kann ich einen Termin vereinbaren?</button>
                <button class="suggestion-btn" onclick="sendSuggestion(this)">Was sind die Sprechzeiten?</button>
                <button class="suggestion-btn" onclick="sendSuggestion(this)">Wie läuft eine Erstberatung ab?</button>
            </div>
        </div>

        <!-- Messages (shown after first message) -->
        <div class="messages-area" id="messagesArea"></div>
    </div>

    <!-- Input Area -->
    <div class="input-area">
        <div class="input-wrapper">
            <textarea id="chatInput"
                      rows="1"
                      placeholder="Stellen Sie Ihre Frage..."
                      onkeydown="handleKeyDown(event)"
                      oninput="autoResize(this)"></textarea>
            <button class="send-btn" id="sendBtn" onclick="sendMessage()" disabled>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"/>
                </svg>
            </button>
        </div>
        <div class="input-hint">KI-gestützt – Antworten können ungenau sein. Bei Notfällen rufen Sie 112 an.</div>
    </div>
</div>

<!-- Error Toast -->
<div class="error-toast hidden" id="errorToast"></div>

<!-- MediDesk Chat Widget -->
<script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="69946325cccfe5db168fa4fc"></script>

<script>
(function() {
    const messagesArea  = document.getElementById('messagesArea');
    const welcomeState  = document.getElementById('welcomeState');
    const chatInput     = document.getElementById('chatInput');
    const sendBtn       = document.getElementById('sendBtn');
    const errorToast    = document.getElementById('errorToast');

    let currentResponseId = null;
    let isLoading = false;

    // ── Enable/disable send button based on input ──
    chatInput.addEventListener('input', () => {
        sendBtn.disabled = chatInput.value.trim() === '' || isLoading;
    });

    // ── Auto-resize textarea ──
    window.autoResize = function(el) {
        el.style.height = 'auto';
        el.style.height = Math.min(el.scrollHeight, 120) + 'px';
    };

    // ── Handle Enter key ──
    window.handleKeyDown = function(e) {
        if (e.key === 'Enter' && !e.shiftKey) {
            e.preventDefault();
            sendMessage();
        }
    };

    // ── Send a suggested question ──
    window.sendSuggestion = function(btn) {
        chatInput.value = btn.textContent;
        sendMessage();
    };

    // ── Main send function ──
    window.sendMessage = async function() {
        const text = chatInput.value.trim();
        if (!text || isLoading) return;

        isLoading = true;
        sendBtn.disabled = true;

        // Hide welcome, show messages
        welcomeState.style.display = 'none';
        messagesArea.classList.add('active');

        // Add user message
        appendMessage('user', text);
        chatInput.value = '';
        chatInput.style.height = 'auto';

        // Show typing indicator
        const typingEl = showTyping();
        scrollToBottom();

        try {
            const res = await fetch('api.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    message: text,
                    response_id: currentResponseId
                })
            });

            const data = await res.json();

            // Remove typing indicator
            typingEl.remove();

            if (!res.ok || data.error) {
                throw new Error(data.error || 'Ein Fehler ist aufgetreten.');
            }

            // Save response_id for conversation continuity
            currentResponseId = data.response_id || null;

            // Add assistant message with typewriter effect
            await appendAssistantWithTypewriter(data.response);

        } catch (err) {
            typingEl.remove();
            appendMessage('assistant', 'Entschuldigung, etwas ist schiefgelaufen. Bitte versuchen Sie es später erneut.');
        }

        isLoading = false;
        sendBtn.disabled = chatInput.value.trim() === '';
        chatInput.focus();
    };

    // ── Append a message to the chat ──
    function appendMessage(role, text) {
        const msg = document.createElement('div');
        msg.className = 'message ' + role;

        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        avatar.innerHTML = role === 'assistant'
            ? '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456Z"/></svg>'
            : '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/></svg>';

        const bubble = document.createElement('div');
        bubble.className = 'message-bubble';

        if (role === 'user') {
            bubble.textContent = text;
        } else {
            bubble.innerHTML = renderMarkdown(text);
        }

        msg.appendChild(avatar);
        msg.appendChild(bubble);
        messagesArea.appendChild(msg);
        scrollToBottom();
        return bubble;
    }

    // ── Typewriter effect for assistant messages ──
    async function appendAssistantWithTypewriter(fullText) {
        const msg = document.createElement('div');
        msg.className = 'message assistant';

        const avatar = document.createElement('div');
        avatar.className = 'message-avatar';
        avatar.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456Z"/></svg>';

        const bubble = document.createElement('div');
        bubble.className = 'message-bubble typewriter-cursor';

        msg.appendChild(avatar);
        msg.appendChild(bubble);
        messagesArea.appendChild(msg);

        // Type out the text in chunks for speed
        const chunkSize = 3;
        let displayed = '';
        for (let i = 0; i < fullText.length; i += chunkSize) {
            displayed += fullText.slice(i, i + chunkSize);
            bubble.innerHTML = renderMarkdown(displayed);
            scrollToBottom();
            await sleep(15);
        }

        // Ensure full text is rendered and remove cursor
        bubble.innerHTML = renderMarkdown(fullText);
        bubble.classList.remove('typewriter-cursor');
        scrollToBottom();
    }

    // ── Show typing indicator ──
    function showTyping() {
        const el = document.createElement('div');
        el.className = 'typing-indicator';
        el.innerHTML = `
            <div class="message-avatar" style="background:linear-gradient(135deg,var(--primary),var(--primary-dark));color:#fff;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.455 2.456L21.75 6l-1.036.259a3.375 3.375 0 0 0-2.455 2.456Z"/></svg>
            </div>
            <div class="typing-dots"><span></span><span></span><span></span></div>`;
        messagesArea.appendChild(el);
        return el;
    }

    // ── Render markdown ──
    function renderMarkdown(text) {
        if (typeof marked !== 'undefined') {
            marked.setOptions({ breaks: true, gfm: true });
            return marked.parse(text);
        }
        // Fallback: basic text with line breaks
        return text.replace(/\n/g, '<br>');
    }

    // ── Scroll to bottom ──
    function scrollToBottom() {
        messagesArea.scrollTop = messagesArea.scrollHeight;
    }

    // ── Show error toast ──
    function showError(message) {
        errorToast.textContent = message;
        errorToast.classList.remove('hidden');
        setTimeout(() => errorToast.classList.add('hidden'), 5000);
    }

    // ── Sleep utility ──
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    // Focus input on load
    chatInput.focus();
})();
</script>

</body>
</html>
