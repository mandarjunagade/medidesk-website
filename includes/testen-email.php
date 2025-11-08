<?php
/**
 * Testen Form Email Handler
 * Processes form submission and sends email using PHPMailer
 */

// Turn off error display to prevent breaking JSON
error_reporting(0);
ini_set('display_errors', 0);

// Prevent direct access
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Ungültige Anfrage']);
    exit;
}

// Set content type for JSON response FIRST
header('Content-Type: application/json');

// Include PHPMailer with error handling
try {
    require_once __DIR__ . '/../PHPMailer/PHPMailer.php';
    require_once __DIR__ . '/../PHPMailer/SMTP.php';
    require_once __DIR__ . '/../PHPMailer/Exception.php';
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'System-Fehler. Bitte kontaktieren Sie uns direkt per E-Mail.']);
    exit;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Function to sanitize input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize response
$response = array(
    'success' => false,
    'message' => ''
);

try {
    // Validate and sanitize form data
    $rolle = isset($_POST['rolle']) ? sanitize_input($_POST['rolle']) : '';
    $name = isset($_POST['name']) ? sanitize_input($_POST['name']) : '';
    $praxis = isset($_POST['praxis']) ? sanitize_input($_POST['praxis']) : 'Nicht angegeben';
    $telefon = isset($_POST['telefon']) ? sanitize_input($_POST['telefon']) : '';
    $email = isset($_POST['email']) ? sanitize_input($_POST['email']) : '';

    // Validation
    if (empty($rolle) || empty($name) || empty($email) || empty($telefon)) {
        throw new Exception('Bitte füllen Sie alle Pflichtfelder aus.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Bitte geben Sie eine gültige E-Mail-Adresse ein.');
    }

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@medideskr.cloud';
    $mail->Password   = 'Shima21394#';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // SSL encryption
    $mail->Port       = 465;
    $mail->CharSet    = 'UTF-8';

    // Recipients
    $mail->setFrom('info@medideskr.cloud', 'MediDesk® Website');
    $mail->addAddress('info@medideskr.cloud', 'MediDesk® Team');
    $mail->addReplyTo($email, $name);

    // Email subject
    $mail->Subject = '🔔 Neue Testanfrage: 4 Wochen kostenlos - ' . $name;

    // Email body (HTML)
    $mail->isHTML(true);
    $mail->Body = '
    <!DOCTYPE html>
    <html lang="de">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: "Inter", Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            .email-container {
                background: #ffffff;
                border-radius: 16px;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
                overflow: hidden;
            }
            .email-header {
                background: linear-gradient(135deg, #1e4472 0%, #052448 100%);
                color: white;
                padding: 30px;
                text-align: center;
            }
            .email-header h1 {
                margin: 0;
                font-size: 24px;
                font-weight: 700;
            }
            .email-header p {
                margin: 10px 0 0;
                font-size: 14px;
                opacity: 0.9;
            }
            .email-body {
                padding: 30px;
            }
            .info-section {
                background: #f8fafc;
                border-left: 4px solid #1e4472;
                padding: 20px;
                margin-bottom: 20px;
                border-radius: 8px;
            }
            .info-section h2 {
                color: #1e4472;
                font-size: 18px;
                margin: 0 0 15px 0;
                font-weight: 600;
            }
            .info-row {
                display: flex;
                padding: 12px 0;
                border-bottom: 1px solid #e8ecef;
            }
            .info-row:last-child {
                border-bottom: none;
            }
            .info-label {
                font-weight: 600;
                color: #1e4472;
                min-width: 150px;
            }
            .info-value {
                color: #333;
                flex: 1;
            }
            .email-footer {
                background: #f8fafc;
                padding: 20px 30px;
                text-align: center;
                font-size: 13px;
                color: #666;
            }
            .timestamp {
                font-size: 12px;
                color: #999;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <div class="email-container">
            <div class="email-header">
                <h1>✨ Neue Testanfrage: 4 Wochen kostenlos</h1>
                <p>Jemand möchte MediDesk® unverbindlich testen</p>
            </div>
            
            <div class="email-body">
                <div class="info-section">
                    <h2>👤 Kontaktinformationen</h2>
                    <div class="info-row">
                        <div class="info-label">Rolle:</div>
                        <div class="info-value">' . htmlspecialchars($rolle) . '</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Name:</div>
                        <div class="info-value">' . htmlspecialchars($name) . '</div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">E-Mail:</div>
                        <div class="info-value"><a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></div>
                    </div>
                    <div class="info-row">
                        <div class="info-label">Telefon:</div>
                        <div class="info-value"><a href="tel:' . htmlspecialchars($telefon) . '">' . htmlspecialchars($telefon) . '</a></div>
                    </div>
                </div>

                <div class="info-section">
                    <h2>🏥 Praxis/Klinik</h2>
                    <div class="info-value">' . ($praxis !== 'Nicht angegeben' ? htmlspecialchars($praxis) : '<em>Nicht angegeben</em>') . '</div>
                </div>

                <div class="timestamp">
                    Eingegangen am: ' . date('d.m.Y') . ' um ' . date('H:i') . ' Uhr
                </div>
            </div>
            
            <div class="email-footer">
                <p>Diese E-Mail wurde automatisch über das Kontaktformular auf der MediDesk® Website generiert.</p>
                <p style="margin-top: 10px; font-size: 12px;">
                    <strong>MediDesk®</strong> - Die digitale Online-Rezeption<br>
                    <a href="mailto:info@medideskr.cloud" style="color: #1e4472;">info@medideskr.cloud</a>
                </p>
            </div>
        </div>
    </body>
    </html>
    ';

    // Alternative plain text body
    $mail->AltBody = "
    ═══════════════════════════════════════
    NEUE TESTANFRAGE - 4 WOCHEN KOSTENLOS
    ═══════════════════════════════════════
    
    KONTAKTINFORMATIONEN:
    ─────────────────────────────────────
    Rolle:       $rolle
    Name:        $name
    E-Mail:      $email
    Telefon:     $telefon
    
    PRAXIS/KLINIK:
    ─────────────────────────────────────
    Name:        $praxis
    
    ═══════════════════════════════════════
    Eingegangen am: " . date('d.m.Y H:i') . " Uhr
    ═══════════════════════════════════════
    ";

    // Send email
    if ($mail->send()) {
        $response['success'] = true;
        $response['message'] = '✓ Vielen Dank! Ihre Anfrage wurde erfolgreich gesendet. Wir melden uns in Kürze bei Ihnen.';
        
        // Log success (optional)
        error_log('[MediDesk] Test request sent successfully from: ' . $email);
    } else {
        throw new Exception('E-Mail konnte nicht gesendet werden.');
    }

} catch (Exception $e) {
    $response['success'] = false;
    $response['message'] = '✗ ' . $e->getMessage();
    
    // Log error
    error_log('[MediDesk] Email error: ' . $e->getMessage());
}

// Return JSON response
echo json_encode($response);
exit;