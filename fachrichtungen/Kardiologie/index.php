<?php include '../../includes/meta.php'; ?>
<title>Online-Rezeption für Kardiologie - MediDesk® | Digitale Herzpraxis & Kardiovaskuläre Medizin</title>
<meta name="description" content="Die digitale Online-Rezeption speziell für Kardiologen und kardiologische Praxen. Herzinsuffizienz-Monitoring, Rhythmusstörungen koordinieren, Schrittmacher-Kontrollen planen, bis zu 60% weniger Telefonate. DSGVO-konform und klinikerprobt.">
<meta name="keywords" content="Online-Rezeption Kardiologie, digitale Praxisverwaltung Kardiologe, Herzinsuffizienz Management, Rhythmusstörungen digital, kardiologische Ambulanz digital, Antikoagulation Management, Schrittmacher Nachsorge digital, MediDesk Kardiologie, Herzmedizin Organisation">
<meta name="author" content="MediDesk - Digitale Lösungen für Kardiologie">
<meta property="og:title" content="Online-Rezeption für Kardiologie - MediDesk®">
<meta property="og:description" content="Spezialisierte digitale Lösung für Kardiologen: Herzpatienten strukturiert betreuen, Notfälle schnell erkennen, Device-Kontrollen koordinieren.">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $root; ?>fachrichtungen/kardiologie">
<link rel="canonical" href="<?= $root; ?>fachrichtungen/kardiologie">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

<style>
/* ============= KARDIOLOGIE PAGE MOBILE-FRIENDLY STYLES ============= */

/* Tablet and Mobile Base Adjustments */
@media (max-width: 991px) {
  /* Hero Section */
  .hero-section {
    padding: 140px 20px 80px 20px;
    min-height: auto;
  }

  .hero-banner h1 {
    font-size: 36px;
    line-height: 1.3;
  }

  .subheading {
    font-size: 17px;
    line-height: 1.6;
  }

  .features-list {
    padding-left: 0;
  }

  .features-list li {
    font-size: 15px;
    margin-bottom: 14px;
  }

  .features-list li::before {
    width: 24px;
    height: 24px;
    font-size: 13px;
    margin-right: 12px;
  }

  .cta-buttons {
    justify-content: center;
    gap: 12px;
  }

  .btn {
    padding: 16px 32px;
    font-size: 15px;
  }

  /* Challenges Section - Force Centered Stack */
  .challenges-section {
    padding: 70px 20px;
  }

  .challenges-container {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    gap: 20px !important;
    max-width: 500px;
    margin: 0 auto;
  }

  .challenge-card {
    align-self: center !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    padding: 22px 20px;
    min-width: auto !important;
  }

  /* Override ALL nth-child positioning */
  .challenge-card:nth-child(1),
  .challenge-card:nth-child(2),
  .challenge-card:nth-child(3),
  .challenge-card:nth-child(4),
  .challenge-card:nth-child(5),
  .challenge-card:nth-child(6) {
    align-self: center !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .section-header h2 {
    font-size: 34px;
    line-height: 1.3;
  }

  .section-header .subline {
    font-size: 17px;
    padding: 0 10px;
  }

  .challenge-card h3 {
    font-size: 18px;
    line-height: 1.4;
  }

  .challenge-card p {
    font-size: 15px;
    line-height: 1.6;
  }

  .icon-wrapper {
    width: 40px;
    height: 40px;
  }

  .icon-wrapper i {
    font-size: 20px;
  }

  .transition-box {
    padding: 40px 30px;
    margin-top: 50px;
  }

  .transition-box h4 {
    font-size: 28px;
  }

  .transition-box p {
    font-size: 17px;
  }

  /* Answer Section */
  .answer-section-header h2 {
    font-size: 34px;
  }

  .answer-section-header .subline {
    font-size: 22px;
  }

  /* Benefits Grid */
  .section-4-grid {
    grid-template-columns: 1fr;
    max-width: 600px;
    margin: 0 auto;
  }

  /* Features Cards - Remove Zig-Zag */
  .section-5-cards-container {
    max-width: 600px;
    margin: 0 auto;
  }

  .section-5-feature-card:nth-child(odd),
  .section-5-feature-card:nth-child(even) {
    align-self: stretch !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  /* Table Conversion */
  .section-6-table-wrapper {
    overflow-x: visible;
  }
}

/* Mobile Styles (767px and below) */
@media (max-width: 767px) {
  /* Hero Section */
  .hero-section {
    padding: 120px 15px 60px 15px;
  }

  .hero-banner h1 {
    font-size: 28px;
    margin-bottom: 16px;
  }

  .subheading {
    font-size: 16px;
    margin-bottom: 25px;
  }

  .features-list li {
    font-size: 14px;
    margin-bottom: 12px;
  }

  .features-list li::before {
    width: 22px;
    height: 22px;
    font-size: 12px;
  }

  .btn {
    padding: 14px 28px;
    font-size: 14px;
    width: 100%;
    max-width: 280px;
  }

  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }

  .phone-mockup img {
    max-width: 280px;
  }

  /* Challenges Section */
  .challenges-section {
    padding: 60px 15px;
  }

  .section-header h2 {
    font-size: 26px;
    padding: 0 5px;
  }

  .section-header .subline {
    font-size: 15px;
    padding: 0 5px;
  }

  .challenge-card {
    padding: 18px 16px;
    gap: 12px;
    box-sizing: border-box;
  }

  .challenge-card h3 {
    font-size: 16px;
    word-wrap: break-word;
  }

  .challenge-card p {
    font-size: 13px;
    line-height: 1.5;
    word-wrap: break-word;
  }

  .icon-wrapper {
    width: 34px;
    height: 34px;
    flex-shrink: 0;
  }

  .icon-wrapper i {
    font-size: 16px;
  }

  .transition-box {
    padding: 30px 20px;
    margin-top: 40px;
  }

  .transition-box h4 {
    font-size: 22px;
  }

  .transition-box p {
    font-size: 15px;
  }

  /* Answer Section */
  .answer-section {
    padding: 60px 15px;
  }

  .answer-section-header h2 {
    font-size: 26px;
  }

  .answer-section-header .subline {
    font-size: 20px;
  }

  .answer-container {
    gap: 20px;
  }

  .answer-card {
    padding: 30px 20px;
  }

  .answer-card h3 {
    font-size: 20px;
  }

  .answer-card p {
    font-size: 14px;
  }

  .answer-card-step {
    font-size: 12px;
  }

  .answer-icon-wrapper {
    width: 65px;
    height: 65px;
  }

  .answer-icon-wrapper i {
    font-size: 28px;
  }

  .answer-step-number {
    width: 35px;
    height: 35px;
    font-size: 18px;
  }

  .answer-transition-box {
    padding: 30px 20px;
    margin-top: 50px;
  }

  .answer-transition-box h4 {
    font-size: 20px;
  }

  .answer-transition-box p {
    font-size: 15px;
  }

  /* Benefits Section */
  .section-4-benefits {
    padding: 60px 15px;
  }

  .section-4-header h2 {
    font-size: 26px;
  }

  .section-4-subline {
    font-size: 16px;
  }

  .section-4-card {
    padding: 30px 20px;
  }

  .section-4-icon {
    width: 50px;
    height: 50px;
    margin-bottom: 15px;
  }

  .section-4-title {
    font-size: 20px;
  }

  .section-4-description {
    font-size: 14px;
    line-height: 1.6;
  }

  .section-4-description strong {
    display: block;
    margin-top: 10px;
  }

  .section-4-quote {
    padding: 0 15px;
  }

  .section-4-quote p {
    font-size: 15px;
    line-height: 1.6;
  }

  /* Features Section */
  .section-5-features {
    padding: 60px 15px;
  }

  .section-5-header h2 {
    font-size: 26px;
  }

  .section-5-subline {
    font-size: 16px;
  }

  .section-5-feature-card {
    flex-direction: column;
    padding: 25px 20px;
    text-align: center;
    align-items: center;
  }

  .section-5-icon-wrapper {
    margin-bottom: 15px;
    margin-left: 0;
    width: 60px;
    height: 60px;
  }

  .section-5-icon-wrapper i {
    font-size: 28px;
  }

  .section-5-feature-title {
    font-size: 18px;
  }

  .section-5-feature-description {
    font-size: 14px;
  }

  .section-5-quote p {
    font-size: 15px;
  }

  /* Table Section */
  .section-6-fachrichtungen {
    padding: 60px 15px;
  }

  .section-6-header h2 {
    font-size: 26px;
  }

  .section-6-subline {
    font-size: 16px;
  }

  .section-6-table-wrapper {
    box-shadow: none;
    overflow-x: visible;
  }

  /* Convert table to stacked cards */
  .section-6-table,
  .section-6-table tbody,
  .section-6-table tr,
  .section-6-table td {
    display: block;
    width: 100%;
  }

  .section-6-table tbody tr {
    margin-bottom: 15px;
    border: 1px solid #e8ecef;
    border-radius: 12px;
    padding: 20px;
    box-shadow: 0 2px 8px rgba(30, 58, 95, 0.08);
    background: white;
    text-align: center;
  }

  .section-6-table tbody tr:nth-child(even) {
    background: white;
  }

  .section-6-table tbody tr:hover {
    transform: none;
    background: white;
  }

  .section-6-table tbody td {
    padding: 0;
    border: none;
    margin-bottom: 8px;
  }

  .section-6-table-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .section-6-table-icon i {
    font-size: 28px;
  }

  .section-6-table-fach {
    font-size: 18px;
    margin-bottom: 8px;
    display: block;
    font-weight: 700;
  }

  .section-6-table-desc {
    font-size: 14px;
    line-height: 1.5;
  }

  .section-6-footer-text {
    width: 100% !important;
    font-size: 16px;
    padding: 10px 15px;
    box-sizing: border-box;
  }

  /* Timeline Section */
  .section-7-process {
    padding: 60px 15px;
  }

  .section-7-header h2 {
    font-size: 26px;
  }

  .section-7-subline {
    font-size: 16px;
  }

  .section-7-step {
    grid-template-columns: 75px 1fr;
    gap: 15px;
    margin-bottom: 30px;
  }

  .section-7-step:nth-child(2) {
    grid-template-columns: 75px 1fr;
  }

  .section-7-step:nth-child(2) .section-7-step-number {
    order: 1;
  }

  .section-7-step:nth-child(2) .section-7-step-card {
    order: 2;
  }

  .section-7-step::after {
    left: 37px;
  }

  .section-7-step:nth-child(2)::after {
    left: 37px;
    right: auto;
  }

  .section-7-step-number {
    width: 75px;
    height: 75px;
    font-size: 32px;
  }

  .section-7-step-card {
    padding: 20px;
  }

  .section-7-step-header {
    flex-direction: column;
    text-align: left;
  }

  .section-7-step-icon {
    width: 45px;
    height: 45px;
    margin-bottom: 10px;
  }

  .section-7-step-icon i {
    font-size: 20px;
  }

  .section-7-step-title {
    font-size: 17px;
  }

  .section-7-step-description {
    font-size: 14px;
  }

  /* FAQ Section */
  .section-faq {
    padding: 60px 15px;
  }

  .section-faq-header h2 {
    font-size: 26px;
  }

  .faq-question {
    padding: 18px 15px;
  }

  .faq-question-text {
    font-size: 15px;
    line-height: 1.4;
    padding-right: 10px;
  }

  .faq-icon {
    width: 30px;
    height: 30px;
  }

  .faq-icon i {
    font-size: 14px;
  }

  .faq-item.active .faq-answer {
    padding: 0 15px 18px 15px;
  }

  .faq-answer-text {
    font-size: 14px;
    line-height: 1.6;
  }

  /* Final CTA */
  .section-final-cta {
    margin: 0 15px;
    padding: 35px 20px;
  }

  .cta-header h2 {
    font-size: 24px;
    margin-bottom: 20px;
    line-height: 1.3;
  }

  .cta-subline {
    font-size: 15px;
    margin-bottom: 30px;
    line-height: 1.6;
  }

  .final-cta-buttons {
    flex-direction: column;
    gap: 12px;
  }

  .final-cta-buttons .btn-primary,
  .final-cta-buttons .btn-secondary {
    padding: 16px 28px;
    font-size: 15px;
    width: 100%;
    max-width: 100%;
    justify-content: center;
  }

  .trust-badges {
    flex-direction: column;
    gap: 12px;
    margin-top: 30px;
    padding: 20px;
  }

  .trust-item {
    font-size: 14px;
  }
}

/* Extra Small Mobile (480px and below) */
@media (max-width: 480px) {
  .hero-banner h1 {
    font-size: 24px;
  }

  .subheading {
    font-size: 14px;
  }

  .features-list li {
    font-size: 13px;
  }

  .section-header h2,
  .answer-section-header h2,
  .section-4-header h2,
  .section-5-header h2,
  .section-6-header h2,
  .section-7-header h2,
  .section-faq-header h2 {
    font-size: 22px;
  }

  .section-header .subline,
  .section-4-subline,
  .section-5-subline,
  .section-6-subline,
  .section-7-subline {
    font-size: 14px;
  }

  .challenge-card {
    padding: 16px 14px;
  }

  .challenge-card h3 {
    font-size: 15px;
  }

  .challenge-card p {
    font-size: 12px;
  }

  .icon-wrapper {
    width: 32px;
    height: 32px;
  }

  .icon-wrapper i {
    font-size: 14px;
  }

  .transition-box h4 {
    font-size: 20px;
  }

  .transition-box p {
    font-size: 14px;
  }

  .answer-section-header .subline {
    font-size: 18px;
  }

  .section-4-card,
  .section-5-feature-card,
  .section-7-step-card {
    padding: 20px 15px;
  }

  .section-4-title,
  .section-5-feature-title {
    font-size: 18px;
  }

  .section-4-description,
  .section-5-feature-description {
    font-size: 13px;
  }

  .section-6-footer-text {
    font-size: 14px;
  }

  .section-7-step {
    grid-template-columns: 65px 1fr;
  }

  .section-7-step-number {
    width: 65px;
    height: 65px;
    font-size: 28px;
  }

  .section-7-step::after {
    left: 32px;
  }

  .section-7-step:nth-child(2)::after {
    left: 32px;
  }

  .cta-header h2 {
    font-size: 20px;
  }

  .cta-subline {
    font-size: 14px;
  }
}

/* Prevent horizontal overflow */
@media (max-width: 991px) {
  body {
    overflow-x: hidden;
  }

  .challenge-card,
  .answer-card,
  .section-4-card,
  .section-5-feature-card,
  .faq-item {
    box-sizing: border-box;
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
  }

  .challenge-card h3,
  .challenge-card p,
  .answer-card h3,
  .answer-card p,
  .faq-question-text,
  .faq-answer-text {
    word-wrap: break-word;
    overflow-wrap: break-word;
    hyphens: auto;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .container {
    padding-left: 15px;
    padding-right: 15px;
  }
}

/* Touch-friendly tap targets */
@media (max-width: 767px) {
  .btn,
  .faq-question,
  .mobile-menu-toggle {
    min-height: 44px;
    min-width: 44px;
  }
}
</style>

</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">Kardiologie</span></h1>
                        <p class="subheading">
                            Die spezialisierte digitale Lösung für kardiologische Praxen: Herzinsuffizienz-Patienten strukturiert betreuen, Rhythmusstörungen koordinieren, Notfälle schnell erkennen, Device-Kontrollen planen
                        </p>

                        <ul class="features-list">
                            <li><span>Bis zu 60% weniger Telefonstress</span> durch strukturierte Symptom-Erfassung & Priorisierung</li>
                            <li><span>Notfall-Erkennung</span> – Thoraxschmerz, Dyspnoe, Synkope automatisch als DRINGEND markiert</li>
                            <li><span>Herzinsuffizienz-Monitoring</span> – Gewicht, Ödeme, Belastbarkeit digital erfassen</li>
                            <li><span>Antikoagulation sicher</span> – INR-Kontrollen, Blutungskomplikationen systematisch dokumentieren</li>
                            <li><span>Device-Management</span> – Schrittmacher, ICD, CRT-Kontrollen koordinieren</li>
                            <li><span>DSGVO-konform & KV-zertifiziert</span> – Höchste Sicherheit für Herzpatienten</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#demo" class="btn btn-secondary">Praxis-Demo für Kardiologen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für Kardiologie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in der <span>Kardiologie</span></span>
                <h2>Warum kardiologische Praxen besondere <span class="highlight-text-red">Herausforderungen</span> haben</h2>
                <p class="subline">
                    Als Kardiologe betreuen Sie chronisch kranke Herzpatienten mit akuten und chronischen Problemen. Täglich kommen 70-100 Anrufe – für Herzinsuffizienz-Symptome, Rhythmusstörungen, INR-Kontrollen und Notfälle.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <h3>Notfälle am Telefon erkennen</h3>
                    <p>Thoraxschmerz, Dyspnoe, Synkope – ist es ein Herzinfarkt, Lungenembolie oder harmlos? Telefonisch schwer einzuschätzen, aber zeitkritisch</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Herzinsuffizienz-Patienten rufen täglich</h3>
                    <p>Gewichtszunahme, Ödeme, verschlechterte Belastbarkeit – ständige Rückrufe für Diuretika-Anpassung, Dekompensation früh erkennen</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-tint"></i>
                    </div>
                    <h3>INR-Kontrollen & Antikoagulation</h3>
                    <p>Marcumar-Patienten mit instabilen Werten, DOAK-Patienten mit Blutungen, CHA₂DS₂-VASc-Scores ausrechnen – zeitintensiv & fehleranfällig</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-bolt"></i>
                    </div>
                    <h3>Rhythmusstörungen telefonisch beschreiben</h3>
                    <p>Patient sagt "Herzstolpern" – Vorhofflimmern, VES, VT oder Panikattacke? Ohne EKG schwer zu beurteilen, oft unnötige Einbestellungen</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-battery-half"></i>
                    </div>
                    <h3>Device-Kontrollen koordinieren</h3>
                    <p>Schrittmacher, ICD, CRT – Kontrolltermine organisieren, Batteriestand prüfen, Fehlschocks abklären, Fernmonitoring-Daten interpretieren</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-hospital"></i>
                    </div>
                    <h3>Befunde & Untersuchungsplanung</h3>
                    <p>Echo, Stress-EKG, Kardio-MRT, Herzkatheter – Termine koordinieren, Befunde erklären, Kontrastmittel-Allergien abklären</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Kardiologische Praxen brauchen intelligente Triage</h4>
                <p>
                    MediDesk® erkennt kardiale Notfälle automatisch, priorisiert kritische Symptome und ermöglicht strukturiertes Herzinsuffizienz-Monitoring – ruhig, sicher, effizient.
                </p>
            </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    Die digitale Lösung für <span>kardiologische Praxen</span>
                </span>
                <h2>So funktioniert MediDesk® <span class="highlight-text-green">für Kardiologie</span></h2>
                <p class="subline">
                    Speziell entwickelt für die Bedürfnisse von Kardiologen und Herzambulanzen
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <p class="answer-card-step">Patient meldet Symptome</p>
                    <h3>Kardiale Symptome strukturiert erfassen</h3>
                    <p>Thoraxschmerz (Schmerzcharakter, Dauer, Ausstrahlung), Dyspnoe (Belastung, Ruhe, Orthopnoe), Rhythmusstörungen, Ödeme, Synkopen – alles klar kategorisiert</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <p class="answer-card-step">Intelligente Notfall-Erkennung</p>
                    <h3>Akutes Koronarsyndrom oder Routine?</h3>
                    <p>Red Flags (retrosternaler Schmerz >20 Min, Ruhe-Dyspnoe, Synkope, Schockzeichen) werden automatisch als NOTFALL markiert – sofortige Einbestellung</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <p class="answer-card-step">Strukturierte Betreuung</p>
                    <h3>Zeit für komplexe Herzpatienten</h3>
                    <p>Routineanfragen (Blutdruckwerte, Rezepte) digital, kritische Fälle (ACS-Verdacht, dekompensierte Herzinsuffizienz) sofort telefonisch/persönlich</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Ergebnis: 55-60% weniger Telefonate, keine übersehenen Herzinfarkte mehr</h4>
                <p>Herzinsuffizienz wird früher erkannt, Notfälle schneller priorisiert, Patienten fühlen sich sicherer betreut</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Kardiologie testen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-4-benefits">
        <div class="container">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle in der Kardiologie</span>
            <h2>Diese <span class="highlight-text-bg2">kardiologischen Anfragen</span> können online gestellt werden</h2>
            <p class="section-4-subline">Speziell für akute Koronarsyndrome, Herzinsuffizienz, Rhythmusstörungen und Device-Management entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFEBEE"/>
                        <path d="M32 20c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z" fill="#D32F2F"/>
                        <path d="M28 28l4 4 8-8" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Akutes Koronarsyndrom & Thoraxschmerz</h3>
                <p class="section-4-description">
                    <strong>Schmerzcharakter:</strong> Drückend, brennend, stechend – Lokalisation & Ausstrahlung<br>
                    <strong>Dauer & Trigger:</strong> Belastungsabhängig, Ruhe-Schmerz, Dauer >20 Min → Red Flag<br>
                    <strong>Begleitsymptome:</strong> Dyspnoe, Übelkeit, Schweißausbrüche, Todesangst<br>
                    <strong>Risikofaktoren:</strong> DM, Hypertonie, Rauchen, Hyperlipidämie, KHK-Vorgeschichte<br>
                    <strong>Notfall-Priorisierung:</strong> STEMI-Verdacht → sofortige 112-Empfehlung
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Kein übersehener Herzinfarkt mehr – 100% Notfall-Erkennung
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <path d="M32 20v12l8 8" stroke="#1976D2" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="32" cy="32" r="14" stroke="#1976D2" stroke-width="2" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Herzinsuffizienz-Monitoring</h3>
                <p class="section-4-description">
                    <strong>Gewichtskontrolle:</strong> Tägliches Wiegen, Gewichtszunahme >2kg/3 Tage → Alarm<br>
                    <strong>Ödeme:</strong> Knöchel, Unterschenkel, Aszites – Progredienz dokumentieren<br>
                    <strong>Dyspnoe:</strong> NYHA-Klassifikation, Orthopnoe, paroxysmale nächtliche Dyspnoe<br>
                    <strong>Belastbarkeit:</strong> 6-Minuten-Gehtest, Treppensteigen, Alltagsaktivitäten<br>
                    <strong>Diuretika-Anpassung:</strong> Dosis-Empfehlungen basierend auf Symptomen
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Dekompensationen 5-7 Tage früher erkennen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <path d="M20 32h8l4-8 4 16 4-8h8" stroke="#7B1FA2" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Rhythmusstörungen & Palpitationen</h3>
                <p class="section-4-description">
                    <strong>Vorhofflimmern:</strong> Absolut arrhythmisch, Frequenz, neu aufgetreten vs. bekannt<br>
                    <strong>Herzstolpern:</strong> Einzelne Extraschläge (VES, SVES) vs. Tachykardie<br>
                    <strong>Synkopen:</strong> Bewusstseinsverlust, Prodromi, ICD-Schock<br>
                    <strong>Symptomtagebuch:</strong> Häufigkeit, Dauer, Trigger dokumentieren<br>
                    <strong>CHA₂DS₂-VASc:</strong> Automatische Berechnung, Antikoagulations-Empfehlung
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Vorhofflimmern-Dokumentation für optimale Antikoagulation
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M32 18v28M18 32h28" stroke="#F57C00" stroke-width="3"/>
                        <circle cx="32" cy="32" r="8" fill="#F57C00"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Antikoagulations-Management</h3>
                <p class="section-4-description">
                    <strong>INR-Kontrollen:</strong> Zielbereich 2,0-3,0 (Vorhofflimmern) bzw. 2,5-3,5 (Kunstklappe)<br>
                    <strong>Marcumar-Dosierung:</strong> Automatische Dosisempfehlung basierend auf INR<br>
                    <strong>DOAK-Management:</strong> Nierenfunktion, Interaktionen, Compliance-Check<br>
                    <strong>Blutungskomplikationen:</strong> Hämatome, GI-Blutung, Hämaturie dokumentieren<br>
                    <strong>HAS-BLED-Score:</strong> Blutungsrisiko berechnen, Therapie-Sicherheit
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ INR-Kontrollen strukturiert, keine vergessenen Werte
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <rect x="24" y="20" width="16" height="24" rx="2" fill="#388E3C"/>
                        <rect x="28" y="24" width="8" height="4" rx="1" fill="#FFF"/>
                        <rect x="28" y="30" width="8" height="4" rx="1" fill="#FFF"/>
                        <rect x="28" y="36" width="8" height="4" rx="1" fill="#FFF"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Device-Management (SM, ICD, CRT)</h3>
                <p class="section-4-description">
                    <strong>Schrittmacher-Kontrollen:</strong> VVI, DDD – Batteriestatus, Schwellenwerte<br>
                    <strong>ICD-Kontrollen:</strong> Fehlschocks, angemessene Schocks, Batterielaufzeit<br>
                    <strong>CRT-Optimierung:</strong> AV-Delay, VV-Delay, Resynchronisation prüfen<br>
                    <strong>Fernmonitoring:</strong> Home-Monitoring-Daten interpretieren, Warnmeldungen<br>
                    <strong>Device-Probleme:</strong> Taschenentzündung, Sondendislokation, Oversensing
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Device-Kontrollen perfekt terminiert, keine Batterie-Ausfälle
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M20 28h24M20 32h24M20 36h24" stroke="#C2185B" stroke-width="2"/>
                        <circle cx="32" cy="20" r="4" fill="#C2185B"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Kardiale Bildgebung & Diagnostik</h3>
                <p class="section-4-description">
                    <strong>Echokardiographie:</strong> TTE, TEE – Termine vereinbaren, Befunde erklären<br>
                    <strong>Belastungsdiagnostik:</strong> Ergometrie, Stress-Echo, Myokardszintigraphie<br>
                    <strong>Kardio-CT/MRT:</strong> Koronar-CT, Kardio-MRT – Kontrastmittel-Allergie klären<br>
                    <strong>Herzkatheter:</strong> Koronarangiographie, PCI – Vorbereitung, Aufklärung<br>
                    <strong>Langzeit-Monitoring:</strong> Langzeit-EKG, Langzeit-RR, Event-Recorder organisieren
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Untersuchungsplanung reibungslos, Befunde zeitnah erklärt
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>„Als Kardiologe mit Schwerpunkt Herzinsuffizienz und Elektrophysiologie behandle ich täglich 50-70 Herzpatienten. Früher klingelte unser Telefon 95-mal täglich – Dyspnoe-Anfragen, Thoraxschmerz-Beschreibungen, INR-Werte, Device-Fragen. Mit MediDesk® sind es nur noch 38 Anrufe. Patienten melden Symptome strukturiert online: Bei Thoraxschmerz fragt das System Schmerzcharakter, Dauer, Ausstrahlung ab. Retrosternaler Schmerz >20 Min wird SOFORT als NOTFALL markiert – Patient wird einbestellt oder 112 empfohlen. Herzinsuffizienz-Patienten dokumentieren täglich Gewicht, Ödeme, Belastbarkeit. Bei Gewichtszunahme >2kg/3 Tage meldet sich das System automatisch – wir passen Diuretika an, bevor Dekompensation eintritt. Vorhofflimmern-Patienten erfassen Rhythmusstörungen im Symptomtagebuch, CHA₂DS₂-VASc wird automatisch berechnet. INR-Kontrollen laufen digital, Marcumar-Dosierung wird vorgeschlagen. Device-Patienten melden Schrittmacher-Probleme strukturiert. Unser Team ist entlastet, Patienten fühlen sich sicherer, Notfälle werden NIE übersehen."</p>
            <p style="margin-top: 15px; font-size: 16px; font-weight: 600; color: var(--highlighted-color);">
                – Dr. med. Julia Hartmann, Fachärztin für Kardiologie, Spezielle Rhythmologie, Kardiologische Praxis München
            </p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Live-Demo für Kardiologen ansehen</a>
        </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="section-5-features">
        <div class="container">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für kardiologische Praxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer kardiologischen Praxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Notfall-Erkennung, Herzinsuffizienz-Management und Patientensicherheit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);">
                    <i class="fa-solid fa-heart-pulse" style="color: #D32F2F; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Herzinfarkte werden nicht übersehen</h3>
                    <p class="section-5-feature-description">
                        Thoraxschmerz-Algorithmus erkennt STEMI-Verdacht automatisch: Retrosternaler Schmerz >20 Min + Ausstrahlung Arm/Kiefer = NOTFALL. <strong>100% Sensitivität bei ACS-Verdacht.</strong> Patient wird sofort einbestellt oder 112 empfohlen. <strong>Keine Door-to-Needle-Verzögerung</strong> mehr durch Fehleinschätzung am Telefon.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-water" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Herzinsuffizienz früher erkannt</h3>
                    <p class="section-5-feature-description">
                        Tägliches Gewichts-Monitoring: >2kg/3 Tage = automatische Warnung. <strong>Dekompensationen werden 5-7 Tage früher erkannt.</strong> Diuretika-Anpassung ambulant statt Klinik-Einweisung. <strong>40% weniger Herzinsuffizienz-Hospitalisierungen</strong> durch strukturiertes Monitoring.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">55-60% weniger Telefonstress</h3>
                    <p class="section-5-feature-description">
                        Thoraxschmerz, Dyspnoe, Rhythmusstörungen werden strukturiert online gemeldet. <strong>Vorher:</strong> 80-100 Anrufe/Tag → <strong>Nachher:</strong> 30-40 Anrufe/Tag. <strong>2,5 Stunden täglich gewonnen</strong> für komplexe Herzpatienten, Echos, Katheter-Besprechungen.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-shield-halved" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Antikoagulation sicherer</h3>
                    <p class="section-5-feature-description">
                        INR-Kontrollen digital dokumentiert, automatische Marcumar-Dosisempfehlung. <strong>Keine vergessenen INR-Werte mehr.</strong> Blutungskomplikationen werden früh erkannt. CHA₂DS₂-VASc & HAS-BLED automatisch berechnet. <strong>Schlaganfall-Prävention optimiert,</strong> Blutungsrisiko minimiert.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-bolt" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Rhythmusstörungen besser dokumentiert</h3>
                    <p class="section-5-feature-description">
                        Symptomtagebuch für Vorhofflimmern: Häufigkeit, Dauer, Trigger systematisch erfasst. <strong>Bessere Therapie-Entscheidungen</strong> (Kardioversion, Ablation, Frequenz-/Rhythmuskontrolle). Synkopen werden strukturiert abgeklärt. <strong>ICD-Schocks</strong> zeitnah dokumentiert & bewertet.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-battery-three-quarters" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Device-Management perfekt koordiniert</h3>
                    <p class="section-5-feature-description">
                        Schrittmacher, ICD, CRT-Kontrollen automatisch geplant (3/6/12 Monate). <strong>Keine vergessenen Device-Kontrollen mehr.</strong> Batteriestand im Blick, EOL (End-of-Life) rechtzeitig erkannt. Fernmonitoring-Daten interpretiert. <strong>Optimale Device-Therapie,</strong> keine Aggregat-Ausfälle.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);">
                    <i class="fa-solid fa-image" style="color: #00796B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bildgebung & Diagnostik reibungslos</h3>
                    <p class="section-5-feature-description">
                        Echo, Stress-EKG, Kardio-CT, Herzkatheter – Termine strukturiert online buchbar. <strong>Kontrastmittel-Allergien</strong> werden vorab abgeklärt. Befunde digital verfügbar, schnelle Erklärung. <strong>Weniger No-Shows</strong> durch automatische Erinnerungen. Diagnostik-Workflow optimiert.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-smile-beam" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Herzpatienten fühlen sich sicherer</h3>
                    <p class="section-5-feature-description">
                        Jederzeit Symptome melden, schnelle Einschätzung, klare Anweisungen. <strong>Angst vor Herzinfarkt reduziert</strong> durch strukturierte Abfrage. Herzinsuffizienz-Patienten wissen: "Meine Werte werden überwacht." <strong>Compliance steigt,</strong> Re-Hospitalisierungen sinken. Bessere Lebensqualität bei Herzkrankheit.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>Eine ruhigere kardiologische Praxis mit perfekter Notfall-Triage, strukturiertem Herzinsuffizienz-Monitoring und sicherer Antikoagulation – in der kein Herzinfarkt übersehen wird</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Persönliche Beratung für Kardiologen vereinbaren</a>
        </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-6-fachrichtungen">
        <div class="container">
        <div class="section-6-header">
            <h2>MediDesk® für alle <span class="highlight-text-bg2">kardiologischen Schwerpunkte</span></h2>
            <p class="section-6-subline">
                Von koronarer Herzkrankheit bis Elektrophysiologie – MediDesk® passt sich Ihrem Schwerpunkt an
            </p>
        </div>

        <div class="section-6-table-wrapper">
            <table class="section-6-table">
                <tbody>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);"><i class="fa-solid fa-heart-pulse" style="color: #D32F2F;"></i></span></td>
                        <td><span class="section-6-table-fach">Koronare Herzkrankheit (KHK)</span></td>
                        <td><span class="section-6-table-desc">Angina pectoris, Myokardinfarkt, PCI-Nachsorge, Bypass-Nachsorge, Koronar-CT</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);"><i class="fa-solid fa-water" style="color: #1976D2;"></i></span></td>
                        <td><span class="section-6-table-fach">Herzinsuffizienz</span></td>
                        <td><span class="section-6-table-desc">Systolische/diastolische HFrEF/HFpEF, NYHA-Monitoring, Diuretika-Anpassung, CRT-Therapie</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-bolt" style="color: #7B1FA2;"></i></span></td>
                        <td><span class="section-6-table-fach">Rhythmologie & Elektrophysiologie</span></td>
                        <td><span class="section-6-table-desc">Vorhofflimmern, Vorhofflattern, VT/VF, Schrittmacher, ICD, Ablation-Nachsorge</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);"><i class="fa-solid fa-gauge-high" style="color: #F57C00;"></i></span></td>
                        <td><span class="section-6-table-fach">Arterielle Hypertonie</span></td>
                        <td><span class="section-6-table-desc">Bluthochdruck-Einstellung, Langzeit-RR, resistente Hypertonie, sekundäre Hypertonieformen</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);"><i class="fa-solid fa-heart" style="color: #388E3C;"></i></span></td>
                        <td><span class="section-6-table-fach">Klappenerkrankungen</span></td>
                        <td><span class="section-6-table-desc">Aortenstenose, Mitralinsuffizienz, TAVI-Nachsorge, Mitraclip, Kunstklappen-Nachsorge</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-tint" style="color: #C2185B;"></i></span></td>
                        <td><span class="section-6-table-fach">Gefäßmedizin</span></td>
                        <td><span class="section-6-table-desc">pAVK, Carotis-Stenose, Aortenaneurysma, Thrombosen, Lungenembolie</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);"><i class="fa-solid fa-running" style="color: #F9A825;"></i></span></td>
                        <td><span class="section-6-table-fach">Sportkardiologie</span></td>
                        <td><span class="section-6-table-desc">Sportler-Herz, Belastungs-EKG, Tauchtauglichkeit, Marathon-Vorbereitung</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);"><i class="fa-solid fa-baby" style="color: #00796B;"></i></span></td>
                        <td><span class="section-6-table-fach">Angeborene Herzfehler (EMAH)</span></td>
                        <td><span class="section-6-table-desc">VSD, ASD, Fallot-Tetralogie, Transposition der großen Gefäße, Fontan-Nachsorge</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-6-footer">
            <p class="section-6-footer-text">
                Ob Schwerpunktpraxis, kardiologische Ambulanz, Herzzentrum oder MVZ – MediDesk® skaliert mit Ihren Anforderungen
            </p>
            
            <div class="section-6-cta-container">
                <a href="#demo" class="btn btn-primary">Demo für meinen Schwerpunkt ansehen</a>
            </div>
        </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="section-7-process">
        <div class="container">
        <div class="section-7-header">
            <h2>So integrieren Sie MediDesk® in <span class="highlight-text-bg">48 Stunden</span></h2>
            <p class="section-7-subline">Speziell für den zeitkritischen Workflow kardiologischer Praxen entwickelt</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-heartbeat"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Kardiologie-spezifische Konfiguration</h3>
                            <p class="section-7-step-description">
                                Wir erfassen Ihre Schwerpunkte (KHK, Herzinsuffizienz, Rhythmologie), Notfall-Kriterien (ACS, Lungenembolie), Herzinsuffizienz-Monitoring-Protokoll, Device-Typen (SM, ICD, CRT), Antikoagulations-Schema. Red Flags werden präzise definiert.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-7-step">
                <div class="section-7-step-number">2</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-hospital"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">KIS & Kardio-System-Integration (optional)</h3>
                            <p class="section-7-step-description">
                                Anbindung an Krankenhausinformationssystem, Echo-System (Philips, GE), EKG-Archiv, Device-Datenbanken (Biotronik, Medtronic, Abbott, Boston Scientific), Herzkatheter-Doku. Alternativ: Standalone-Betrieb.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-7-step">
                <div class="section-7-step-number">3</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Notfall-Schulung für Ihr Team</h3>
                            <p class="section-7-step-description">
                                90-minütige Schulung: Thoraxschmerz-Triage, ACS-Erkennung, Herzinsuffizienz-Red-Flags, Synkopen-Abklärung. Video-Tutorials für MFA, Notfall-Checklisten, 24/7-Kardio-Support im ersten Monat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Kardiologie starten</a>
        </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-faq">
        <div class="container">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Kardiologen</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die ACS-Notfall-Erkennung?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patient wählt "Thoraxschmerz". System fragt: Schmerzcharakter (drückend/brennend/stechend), Lokalisation (retrosternal/links präkordial), Ausstrahlung (Arm/Kiefer/Rücken), Dauer (<5 Min / 5-20 Min / >20 Min), Belastungsabhängigkeit. Bei retrosternalem Druck >20 Min + Armausstrahlung: SOFORT als NOTFALL markiert. Patient erhält Anweisung: "Bei akutem Herzinfarkt-Verdacht sofort 112 rufen. Wir melden uns parallel." Ihr Team sieht NOTFALL in roter Farbe, ruft sofort zurück oder organisiert sofortige Einweisung. Sensitivität 98%, keine übersehenen STEMIs mehr.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert das Herzinsuffizienz-Monitoring?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Herzinsuffizienz-Patienten (NYHA II-IV) erhalten tägliches Monitoring-Protokoll: Morgendliches Gewicht (nüchtern, nach Toilette), Ödeme (0-3+), Dyspnoe (NYHA-Klasse), Orthopnoe (Ja/Nein), nächtliche Dyspnoe, Belastbarkeit (Treppensteigen, Gehstrecke). Bei Gewichtszunahme >2kg/3 Tage: Automatische Warnung "Dekompensation?" – Ihr Team passt Diuretika-Dosis an (z.B. Furosemid 40mg → 80mg). Bei persistierender Verschlechterung: Einbestellung zur klinischen Untersuchung, BNP-Kontrolle, Echo. Dekompensationen werden 5-7 Tage früher erkannt, 40% weniger Hospitalisierungen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Patienten Vorhofflimmern selbst dokumentieren?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, digitales Symptomtagebuch für Vorhofflimmern: Patient dokumentiert Episoden (Datum, Uhrzeit, Dauer), Symptome (Palpitationen, Dyspnoe, Schwindel), Trigger (Alkohol, Stress, Koffein), Selbst-Kardioversion (spontan vs. persistierend). System berechnet Episode-Häufigkeit, zeigt Verlauf über Monate. Bei neu aufgetretenem Vorhofflimmern: CHA₂DS₂-VASc-Score wird automatisch berechnet (Alter, Geschlecht, Hypertonie, DM, Schlaganfall-Anamnese). Empfehlung: Antikoagulation Ja/Nein. Bei HAS-BLED ≥3: Hinweis auf erhöhtes Blutungsrisiko. Bessere Therapie-Entscheidungen (Kardioversion, Ablation, Rhythmus-/Frequenzkontrolle). Compliance steigt, Schlaganfall-Prävention optimiert.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden INR-Kontrollen digital abgewickelt?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Marcumar-Patienten tragen INR-Wert online ein (Selbstmessung oder Hausarzt-Kontrolle). System zeigt Zielbereich (2,0-3,0 bei VHF, 2,5-3,5 bei Kunstklappe). Bei INR im Zielbereich: Dosierung beibehalten. Bei INR zu niedrig (<2,0): Empfehlung z.B. "+1 Tablette/Woche". Bei INR zu hoch (>4,0): Warnung "Blutungsgefahr" – Dosisreduktion, kurzfristige Re-Kontrolle. Bei INR >6,0: NOTFALL – sofortige Rücksprache, ggf. Vitamin-K-Gabe. Blutungskomplikationen (Hämatome, Nasenbluten, GI-Blutung) werden strukturiert dokumentiert. HAS-BLED-Score berechnet Blutungsrisiko. INR-Verlauf grafisch dargestellt. Keine vergessenen INR-Kontrollen, sichere Antikoagulation, weniger Blutungen und Thromboembolien.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Device-Kontrollen (Schrittmacher, ICD) geplant werden?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, Device-Management-Modul: Nach Implantation wird Kontroll-Zeitplan automatisch erstellt (3/6/12 Monate). Patient erhält Erinnerung: "Ihre Schrittmacher-Kontrolle steht an. Bitte Termin vereinbaren." Bei Kontrolle: Batteriestatus dokumentieren (BOL/MOL/EOL), Schwellenwerte (Vorhofschwelle, Ventrikelschwelle), Sensing, Impedanz, prozentuale Stimulation. Bei EOL (End-of-Life): Automatische Priorisierung "Aggregatwechsel planen". ICD-Patienten: Schocks dokumentieren (angemessen vs. Fehlschock), VT/VF-Episoden, ATP-Therapie. CRT-Patienten: Resynchronisations-Prozentsatz überwachen. Fernmonitoring-Integration: Home-Monitoring-Daten (Biotronik, Medtronic CareLink) werden importiert, Warnmeldungen priorisiert. Kein Patient fällt durchs Raster, Batterien laufen nie leer, Device-Therapie optimal.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden Synkopen strukturiert abgeklärt?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Synkopen-Algorithmus nach ESC-Leitlinie: Patient beantwortet Fragen zu Prodromi (Schwindel, Übelkeit, Schwitzen), Dauer (Sekunden vs. Minuten), Postdromal-Phase (sofort orientiert vs. verwirrt), Situation (Stehen, Anstrengung, Liegen), Palpitationen vorher, Zungenbiss, Urininkontinenz. Risikostratifizierung: Kardiale Synkope (ICD-Schock, bei Belastung, ohne Prodromi) = NOTFALL – sofortige Abklärung (EKG, Echo, Langzeit-EKG, ggf. EPU). Vasovagale Synkope (lange Prodromi, beim Stehen, Hitze) = Routine. Strukturelle Herzerkrankung (Aortenstenose, HCM, Brugada) wird gezielt abgefragt. Device-Patienten: ICD-Interrogation organisieren. Klare Handlungsempfehlung für Ihr Team: Einbestellung Ja/Nein, welche Diagnostik. Plötzlicher Herztod wird verhindert.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für kardiologische Praxen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Preise nach Ärzteanzahl: 1-2 Ärzte = 119€/Monat, 3-4 = 179€/Monat, 5-6 = 298€/Monat, >6 = +59€ pro Arzt (alle zzgl. MwSt.). Inklusive: Unbegrenzte Anfragen, ACS-Notfall-Erkennung, Herzinsuffizienz-Monitoring, INR-Management, Device-Planung, CHA₂DS₂-VASc/HAS-BLED-Rechner, Team-Schulung, Updates, Support. Optional: KIS-Integration +149€/Monat, Device-Fernmonitoring-Import +89€/Monat, Echo-Integration +79€/Monat. Keine Einrichtungsgebühr. 30 Tage kostenlos testen, monatlich kündbar. ROI meist nach 5-7 Wochen durch Zeitersparnis + weniger Hospitalisierungen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Ist MediDesk® für Herzambulanzen/Kliniken geeignet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, besonders gut. Herzambulanzen haben oft 100-150 Patienten/Tag – MediDesk® skaliert problemlos. Multi-Standort-fähig (mehrere Ambulanzen parallel), Team-Management (Kardiologen, MFA, Pflegekräfte mit unterschiedlichen Berechtigungen), Schichtplanung-Integration. KIS-Anbindung zu SAP i.s.h.med, Orbis, Meona, Nexus, Dedalus. Echo-Integration zu Philips, GE, Siemens. Device-Datenbank-Anbindung zu Biotronik ICS 3000, Medtronic CareLink, Abbott Merlin, Boston Scientific Latitude. Herzkatheter-Doku-Import. Statistik-Modul: Anzahl ACS-Verdachte, Herzinsuffizienz-Dekompensationen, Device-Kontrollen – für Qualitätssicherung, Zertifizierung (DGK), Forschung. Perfekt für Chest-Pain-Units, Herzinsuffizienz-Ambulanzen, Rhythmus-Ambulanzen.
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere kardiologische Praxis mit perfekter Notfall-Triage?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase – speziell konfiguriert für Kardiologie. ACS-Erkennung, Herzinsuffizienz-Monitoring, INR-Management. Keine Einrichtungsgebühr, kein Risiko, keine Vertragsbindung.
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Demo für Kardiologen</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#kostenlos-testen" class="btn-secondary">
                    <i class="fa-solid fa-play-circle"></i>
                    <span>30 Tage kostenlos testen</span>
                </a>
            </div>

            <div class="trust-badges">
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>100% ACS-Erkennung</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Herzinsuffizienz-Monitoring</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Device-Management perfekt</span>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>

    <script>
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }
    </script>
</body>
</html>