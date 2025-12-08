<?php include '../../includes/meta.php'; ?>
<title>Online-Rezeption für Onkologie - MediDesk® | Digitale Krebspraxis & Tumortherapie</title>
<meta name="description" content="Die digitale Online-Rezeption speziell für Onkologen und onkologische Praxen. Chemotherapie-Termine koordinieren, Nebenwirkungen erfassen, Tumorpatienten strukturiert betreuen, bis zu 65% weniger Telefonate. DSGVO-konform und klinikintegrierbar.">
<meta name="keywords" content="Online-Rezeption Onkologie, digitale Praxisverwaltung Onkologe, Chemotherapie Terminplanung, Tumorpatienten Management, onkologische Ambulanz digital, Nebenwirkungsmanagement, Tumornachsorge digital, MediDesk Onkologie, Krebstherapie Organisation">
<meta name="author" content="MediDesk - Digitale Lösungen für Onkologie">
<meta property="og:title" content="Online-Rezeption für Onkologie | MediDesk®">
<meta property="og:description" content="Spezialisierte digitale Lösung für Onkologen: Chemotherapie-Zyklen koordinieren, Nebenwirkungen erfassen, Tumorpatienten einfühlsam betreuen.">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $root; ?>fachrichtungen/onkologie">
<link rel="canonical" href="<?= $root; ?>fachrichtungen/onkologie">

<style>
/* ============= ONKOLOGIE PAGE RESPONSIVE FIXES ============= */

/* Mobile Fixes for Challenge Cards - Force Centered Stack */
@media (max-width: 991px) {
  .challenges-section {
    padding: 70px 20px;
  }

  .challenges-container {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    gap: 20px !important;
  }

  .challenge-card {
    align-self: center !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    width: 100% !important;
    max-width: 450px !important;
  }

  /* Override all nth-child positioning on mobile */
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
    font-size: 32px;
  }

  .section-header .subline {
    font-size: 16px;
  }

  .challenge-card {
    padding: 20px;
    min-width: auto;
  }

  .challenge-card h3 {
    font-size: 17px;
  }

  .challenge-card p {
    font-size: 14px;
  }

  .icon-wrapper {
    width: 36px;
    height: 36px;
  }

  .icon-wrapper i {
    font-size: 18px;
  }

  .transition-box {
    padding: 35px 25px;
    margin-top: 50px;
  }

  .transition-box h4 {
    font-size: 26px;
  }

  .transition-box p {
    font-size: 16px;
  }
}

@media (max-width: 767px) {
  /* Hero Section */
  .hero-section {
    padding: 120px 20px 60px 20px;
  }

  .hero-banner h1 {
    font-size: 28px;
  }

  .subheading {
    font-size: 16px;
  }

  .features-list li {
    font-size: 14px;
  }

  .btn {
    padding: 14px 28px;
    font-size: 14px;
  }

  /* Challenge Section */
  .challenges-section {
    padding: 60px 15px;
  }

  .section-header h2 {
    font-size: 26px;
  }

  .section-header .subline {
    font-size: 15px;
  }

  .challenge-card {
    padding: 18px 16px;
    gap: 12px;
    width: 100% !important;
    max-width: 100% !important;
  }

  .challenge-card h3 {
    font-size: 16px;
    line-height: 1.4;
  }

  .challenge-card p {
    font-size: 13px;
    line-height: 1.5;
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

  /* Use Cases Section (Benefits Grid) */
  .section-4-benefits {
    padding: 60px 15px;
  }

  .section-4-header h2 {
    font-size: 26px;
  }

  .section-4-subline {
    font-size: 16px;
  }

  .section-4-grid {
    grid-template-columns: 1fr;
    gap: 20px;
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
  }

  .section-4-quote {
    padding: 0 15px;
  }

  .section-4-quote p {
    font-size: 16px;
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

  .section-5-cards-container {
    max-width: 100%;
  }

  .section-5-feature-card {
    flex-direction: column;
    padding: 25px 20px;
    text-align: center;
    align-items: center;
    max-width: 100%;
  }

  /* Remove zig-zag on mobile */
  .section-5-feature-card:nth-child(odd),
  .section-5-feature-card:nth-child(even) {
    align-self: stretch;
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
    font-size: 16px;
  }

  /* Tumor Types Table */
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
  }

  .section-6-table-icon {
    width: 60px;
    height: 60px;
    margin-bottom: 12px;
  }

  .section-6-table-icon i {
    font-size: 28px;
  }

  .section-6-table-fach {
    font-size: 18px;
    margin-bottom: 8px;
    display: block;
  }

  .section-6-table-desc {
    font-size: 14px;
  }

  .section-6-footer-text {
    width: 100% !important;
    font-size: 16px;
    padding: 10px 15px;
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

  .section-7-step-icon {
    width: 45px;
    height: 45px;
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
  }

  /* Final CTA */
  .section-final-cta {
    margin: 0 15px;
    padding: 35px 20px;
  }

  .cta-header h2 {
    font-size: 24px;
    margin-bottom: 20px;
  }

  .cta-subline {
    font-size: 15px;
    margin-bottom: 30px;
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

/* Extra Small Devices */
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

  .section-4-card,
  .section-5-feature-card,
  .section-7-step-card {
    padding: 20px 15px;
  }

  .section-6-footer-text {
    font-size: 14px;
  }

  .cta-header h2 {
    font-size: 20px;
  }

  .cta-subline {
    font-size: 14px;
  }
}

/* Ensure cards never overflow horizontally */
@media (max-width: 991px) {
  .challenge-card,
  .answer-card,
  .section-4-card,
  .section-5-feature-card {
    box-sizing: border-box;
    word-wrap: break-word;
    overflow-wrap: break-word;
  }

  .challenge-card h3,
  .challenge-card p {
    word-wrap: break-word;
    overflow-wrap: break-word;
  }
}
</style>

</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">Onkologie</span></h1>
                        <p class="subheading">
                            Die spezialisierte digitale Lösung für onkologische Praxen: Chemotherapie-Zyklen koordinieren, Nebenwirkungen systematisch erfassen, Tumorpatienten einfühlsam betreuen, interdisziplinär kommunizieren
                        </p>

                        <ul class="features-list">
                            <li><span>Bis zu 65% weniger Telefonstress</span> durch strukturierte Anfragen & Symptom-Erfassung</li>
                            <li><span>Speziell für Krebstherapie entwickelt</span> – Chemo, Immuntherapie, Strahlentherapie</li>
                            <li><span>Nebenwirkungsmanagement</span> – CTCAE-basierte Symptomerfassung zwischen Zyklen</li>
                            <li><span>Psychoonkologie-Integration</span> – Belastung erkennen, Support anbieten</li>
                            <li><span>Tumornachsorge strukturiert</span> – Follow-up-Termine, Rezidiv-Früherkennung</li>
                            <li><span>DSGVO-konform & sensibel</span> – Höchste Datensicherheit für onkologische Patienten</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#demo" class="btn btn-secondary">Praxis-Demo für Onkologen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für Onkologie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in der <span>Onkologie</span></span>
                <h2>Warum onkologische Praxen besondere <span class="highlight-text-red">Herausforderungen</span> haben</h2>
                <p class="subline">
                    Als Onkologe betreuen Sie schwerkranke Patienten mit komplexen Therapien und emotionalen Belastungen. Täglich kommen 60-90 Anrufe – für Nebenwirkungen, Ängste, Therapiefragen und Notfallsituationen.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-syringe"></i>
                    </div>
                    <h3>Komplexe Therapie-Koordination</h3>
                    <p>Chemotherapie-Zyklen, Immuntherapie, Strahlentherapie, OP-Termine – alles muss zeitlich präzise koordiniert werden, Verzögerungen können kritisch sein</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <h3>Nebenwirkungen erkennen & bewerten</h3>
                    <p>Übelkeit, Fatigue, Neutropenie, Hand-Fuß-Syndrom – telefonisch schwer einzuschätzen: Grad 1 (harmlos) oder Grad 4 (lebensbedrohlich)?</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Angehörige & Notfalltelefonate</h3>
                    <p>Patienten rufen nachts wegen Fieber an, Angehörige sind verzweifelt – emotionale Gespräche am Telefon sind zeit- und kraftraubend</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-pills"></i>
                    </div>
                    <h3>Supportivtherapie-Management</h3>
                    <p>Antiemetika, Schmerzmittel, Wachstumsfaktoren, Erythropoietin – ständige Dosisanpassungen, Rezeptverlängerungen, Nebenwirkungschecks</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-heartbeat"></i>
                    </div>
                    <h3>Psychische Belastung & Angst</h3>
                    <p>Patienten haben Angst vor Rezidiv, Progression, Tod – telefonisch schwer aufzufangen, Zeit für Gespräche fehlt</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-hospital"></i>
                    </div>
                    <h3>Interdisziplinäre Abstimmung</h3>
                    <p>Tumorkonfernz, Chirurgen, Strahlentherapeuten, Pathologen, Radiologen – viele Beteiligte, viele Telefonate, viele Befunde</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Onkologische Praxen brauchen mehr als Standardlösungen</h4>
                <p>
                    MediDesk® versteht die Sensibilität der Krebstherapie: Nebenwirkungen strukturiert erfassen, Notfälle priorisieren, Patienten einfühlsam begleiten, interdisziplinär kommunizieren.
                </p>
            </div>
        </div>
    </section>

    <section class="wave"></section>

    <!-- Answer Section -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    Die digitale Lösung für <span>onkologische Praxen</span>
                </span>
                <h2>So funktioniert MediDesk® <span class="highlight-text-green">für Onkologie</span></h2>
                <p class="subline">
                    Speziell entwickelt für die Bedürfnisse von Onkologen und onkologischen Ambulanzen
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-nurse"></i>
                    </div>
                    <p class="answer-card-step">Patient meldet Anliegen</p>
                    <h3>Strukturierte Symptomerfassung</h3>
                    <p>Nebenwirkungen (CTCAE-basiert), Therapiefragen, Notfall-Symptome, psychische Belastung, Supportivtherapie-Anfrage – alles klar kategorisiert</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-exclamation-circle"></i>
                    </div>
                    <p class="answer-card-step">Intelligente Triage</p>
                    <h3>Notfall oder Routine?</h3>
                    <p>Red Flags (Fieber >38,5°C, Neutropenie, Thoraxschmerz, Atemnot) werden automatisch als DRINGEND markiert – Ihr Team reagiert sofort</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <p class="answer-card-step">Empathische Betreuung</p>
                    <h3>Zeit für das Wesentliche</h3>
                    <p>Routineanfragen digital, kritische Fälle telefonisch/persönlich – mehr Zeit für die Patienten, die Sie wirklich brauchen</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Ergebnis: 55-65% weniger Telefonate, bessere Früherkennung von Komplikationen</h4>
                <p>Nebenwirkungen werden nicht übersehen, Notfälle schneller erkannt, Patienten fühlen sich besser betreut</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Onkologie testen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wave2"></section>

    <!-- Use Cases Section -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle in der Onkologie</span>
            <h2>Diese <span class="highlight-text-bg2">onkologischen Anfragen</span> können online gestellt werden</h2>
            <p class="section-4-subline">Speziell für Chemotherapie, Immuntherapie, Tumornachsorge und Supportivtherapie entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <path d="M32 18v28M18 32h28" stroke="#1976D2" stroke-width="3"/>
                        <circle cx="32" cy="32" r="12" stroke="#1976D2" stroke-width="2" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Chemotherapie-Management</h3>
                <p class="section-4-description">
                    <strong>Zyklusplanung:</strong> Chemo-Termine koordinieren, Laborwerte vorab prüfen<br>
                    <strong>Prämedikation:</strong> Antiemetika, Dexamethason rechtzeitig organisieren<br>
                    <strong>Port-Kontrolle:</strong> Port-Spülung, Portprobleme melden<br>
                    <strong>Therapiewechsel:</strong> Progression, neue Therapielinie planen<br>
                    <strong>Pausenmanagement:</strong> Therapiepause wegen Toxizität, Neustart koordinieren
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Automatische Labor-Erinnerung 3 Tage vor Chemo
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFEBEE"/>
                        <path d="M32 20l-3 3-3-3M32 44l-3-3-3 3M20 32l3-3-3-3M44 32l-3-3 3-3" stroke="#D32F2F" stroke-width="2"/>
                        <circle cx="32" cy="32" r="8" fill="#D32F2F"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Nebenwirkungsmanagement (CTCAE)</h3>
                <p class="section-4-description">
                    <strong>Hämatotoxizität:</strong> Neutropenie, Anämie, Thrombopenie – Grad-Einteilung<br>
                    <strong>Gastrointestinal:</strong> Übelkeit, Erbrechen, Diarrhö, Mukositis<br>
                    <strong>Dermatologisch:</strong> Hand-Fuß-Syndrom, Rash, Alopezie<br>
                    <strong>Neurologisch:</strong> Polyneuropathie, Fatigue, Schwindel<br>
                    <strong>Kardiotoxizität:</strong> Dyspnoe, Ödeme, EKG-Veränderungen
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ CTCAE Grad 3/4 → automatisch als NOTFALL markiert
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <rect x="24" y="22" width="16" height="20" rx="2" fill="#7B1FA2"/>
                        <circle cx="28" cy="28" r="1.5" fill="#FFF"/>
                        <circle cx="36" cy="28" r="1.5" fill="#FFF"/>
                        <path d="M28 34h8" stroke="#FFF" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Supportivtherapie & Begleitmedikation</h3>
                <p class="section-4-description">
                    <strong>Antiemetika:</strong> Ondansetron, Aprepitant – Dosierung anpassen<br>
                    <strong>Wachstumsfaktoren:</strong> G-CSF (Filgrastim, Pegfilgrastim) bei Neutropenie<br>
                    <strong>Erythropoietin:</strong> EPO bei Anämie, Eisensubstitution<br>
                    <strong>Schmerztherapie:</strong> Opioide, Tumorschmerz-Management<br>
                    <strong>Bisphosphonate:</strong> Knochenmetastasen, Hyperkalzämie
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Vollständige Medikationsliste immer aktuell
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M32 20v24M20 32h24" stroke="#F57C00" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="32" cy="20" r="3" fill="#F57C00"/>
                        <circle cx="32" cy="44" r="3" fill="#F57C00"/>
                        <circle cx="20" cy="32" r="3" fill="#F57C00"/>
                        <circle cx="44" cy="32" r="3" fill="#F57C00"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Tumornachsorge & Follow-Up</h3>
                <p class="section-4-description">
                    <strong>Nachsorgetermine:</strong> 3/6/12 Monate nach Therapieende<br>
                    <strong>Tumormarker:</strong> CEA, CA 19-9, PSA, CA 125 – Kontrollen planen<br>
                    <strong>Bildgebung:</strong> CT, MRT, PET-CT zur Rezidiv-Ausschluss<br>
                    <strong>Rezidiv-Symptome:</strong> Neue Beschwerden frühzeitig erkennen<br>
                    <strong>Langzeitnebenwirkungen:</strong> Fatigue, Neuropathie, Infertilität
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Automatische Erinnerung an fällige Nachsorgetermine
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <path d="M32 20c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12z" fill="#388E3C"/>
                        <path d="M28 32l3 3 5-6" stroke="#FFF" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Psychoonkologie & Lebensqualität</h3>
                <p class="section-4-description">
                    <strong>Belastungs-Screening:</strong> Distress-Thermometer, Angst/Depression erkennen<br>
                    <strong>Psychoonkologe:</strong> Vermittlung psychoonkologischer Unterstützung<br>
                    <strong>Soziale Beratung:</strong> Reha, Schwerbehinderung, Rentenfragen<br>
                    <strong>Palliativbetreuung:</strong> Symptomlast, Advance Care Planning<br>
                    <strong>Angehörigen-Support:</strong> Belastung der Familie, Trauer
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Psychische Belastung frühzeitig erkennen & intervenieren
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M24 28h16v12H24z" fill="#C2185B"/>
                        <circle cx="28" cy="24" r="2" fill="#E91E63"/>
                        <circle cx="36" cy="24" r="2" fill="#E91E63"/>
                        <path d="M28 44h8v4h-8z" fill="#C2185B"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Notfall-Triage & Komplikationen</h3>
                <p class="section-4-description">
                    <strong>Febrile Neutropenie:</strong> Fieber >38,5°C + Leukopenie – sofort einbestellen<br>
                    <strong>Thromboembolie:</strong> Lungenembolie, TVT – Red Flag<br>
                    <strong>Tumorlyse-Syndrom:</strong> Elektrolytentgleisung, Nierenversagen<br>
                    <strong>Blutungen:</strong> Hämatome, GI-Blutung, Hämaturie<br>
                    <strong>Infektionen:</strong> Pneumonie, Sepsis, Katheter-Infektion
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Lebensbedrohliche Komplikationen werden NIE übersehen
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>„Als Hämato-Onkologe behandle ich täglich Patienten mit Leukämien, Lymphomen und soliden Tumoren. Früher klingelte unser Telefon 85-mal täglich – Nebenwirkungsanfragen, Ängste, Supportivtherapie-Fragen. Mit MediDesk® sind es nur noch 26 Anrufe. Patienten melden Nebenwirkungen strukturiert online (CTCAE-basiert), wir sehen sofort den Schweregrad. Bei Grad 3/4 wird NOTFALL markiert – wir rufen sofort zurück. Routine-Nebenwirkungen (Grad 1/2) bearbeiten wir digital, geben Tipps, passen Antiemetika an. Echte Notfälle wie febrile Neutropenie werden NIE übersehen. Patienten fühlen sich besser betreut, unser Team ist entlastet."</p>
            <p style="margin-top: 15px; font-size: 16px; font-weight: 600; color: var(--highlighted-color);">
                – Dr. med. Thomas Becker, Facharzt für Hämatologie & Onkologie, Onkologische Praxis Hamburg
            </p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Live-Demo für Onkologen ansehen</a>
        </div>
    </section>

    <section class="wave"></section>

    <!-- Benefits Section -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für onkologische Praxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer onkologischen Praxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Nebenwirkungsmanagement, Notfall-Erkennung und Patientenzufriedenheit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);">
                    <i class="fa-solid fa-exclamation-triangle" style="color: #D32F2F; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Nebenwirkungen werden nicht übersehen</h3>
                    <p class="section-5-feature-description">
                        CTCAE-basierte Symptomerfassung: Grad 1-2 = Routine, Grad 3-4 = NOTFALL. <strong>Kein Übersehen kritischer Nebenwirkungen mehr.</strong> Febrile Neutropenie, Thromboembolie, schwere Blutungen werden automatisch als dringend markiert. <strong>30% weniger Notaufnahmen</strong> durch Früherkennung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">55-65% weniger Telefonstress</h3>
                    <p class="section-5-feature-description">
                        Nebenwirkungsanfragen, Supportivtherapie, Rezeptverlängerungen werden online gestellt. <strong>Vorher:</strong> 70-90 Anrufe/Tag → <strong>Nachher:</strong> 25-35 Anrufe/Tag. Ihr Team hat mehr Zeit für kritische Patienten. <strong>2 Stunden täglich gewonnen</strong> für Patientengespräche.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-heart" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Psychische Belastung wird erkannt</h3>
                    <p class="section-5-feature-description">
                        Integriertes Distress-Thermometer: Patienten geben psychische Belastung (0-10) an. <strong>Bei Wert >6:</strong> Automatischer Hinweis an psychoonkologische Unterstützung. Angst/Depression wird nicht übersehen. <strong>Bessere Lebensqualität</strong> trotz Krebstherapie.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-calendar-check" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Chemo-Zyklen perfekt koordiniert</h3>
                    <p class="section-5-feature-description">
                        Automatische Labor-Erinnerung 3 Tage vor Chemo, Port-Check, Prämedikation organisieren. <strong>Keine vergessenen Blutwerte mehr.</strong> Chemo-Absagen wegen fehlender Werte sinken um 40%. Therapieadhärenz steigt. <strong>Optimale Behandlungskontinuität.</strong>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-hospital" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Interdisziplinäre Kommunikation optimiert</h3>
                    <p class="section-5-feature-description">
                        Tumorkonferenz-Ergebnisse, Radiologie-Befunde, Path-Berichte, OP-Briefe – alles zentral verfügbar. <strong>Kein Suchen mehr.</strong> Zuweiser erhalten strukturierte Updates. <strong>Schnellere Therapieentscheidungen,</strong> bessere Patientenversorgung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-user-check" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Tumornachsorge strukturiert</h3>
                    <p class="section-5-feature-description">
                        Automatische Erinnerung an Nachsorgetermine (3/6/12 Monate), Tumormarker, Bildgebung. <strong>Kein Patient fällt durchs Raster.</strong> Rezidive werden früher erkannt. <strong>Langzeitüberlebende</strong> optimal betreut. Bessere Outcomes.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);">
                    <i class="fa-solid fa-shield-halved" style="color: #00796B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Sensible Daten maximal geschützt</h3>
                    <p class="section-5-feature-description">
                        Krebsdiagnose = sensitivste Gesundheitsdaten. <strong>Ende-zu-Ende-Verschlüsselung,</strong> EU-Hosting, KV-zertifiziert, ISO 27001. Zwei-Faktor-Authentifizierung. Audit-Log protokolliert jeden Zugriff. <strong>Patienten vertrauen darauf,</strong> dass ihre Daten sicher sind.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-smile-beam" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Patienten fühlen sich besser betreut</h3>
                    <p class="section-5-feature-description">
                        Jederzeit Kontakt möglich, schnelle Antworten, empathische Kommunikation. <strong>Patientenzufriedenheit steigt messbar.</strong> Weniger Angst, mehr Vertrauen, bessere Therapieadhärenz. <strong>Team-Entlastung</strong> ermöglicht mehr Zeit für persönliche Gespräche.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>Eine ruhigere onkologische Praxis mit strukturiertem Nebenwirkungsmanagement, in der kritische Komplikationen nie übersehen werden und Patienten sich trotz schwerer Krankheit gut aufgehoben fühlen</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Persönliche Beratung für Onkologen vereinbaren</a>
        </div>
    </section>

    <section class="wave2"></section>

    <!-- Tumor Types Section -->
    <section class="section-6-fachrichtungen">
        <div class="section-6-header">
            <h2>MediDesk® für alle <span class="highlight-text-bg2">Tumorentitäten</span></h2>
            <p class="section-6-subline">
                Von hämatologischen Neoplasien bis zu soliden Tumoren – MediDesk® passt sich Ihren Therapieprotokollen an
            </p>
        </div>

        <div class="section-6-table-wrapper">
            <table class="section-6-table">
                <tbody>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);"><i class="fa-solid fa-droplet" style="color: #D32F2F;"></i></span></td>
                        <td><span class="section-6-table-fach">Hämatologische Onkologie</span></td>
                        <td><span class="section-6-table-desc">Leukämien (AML, ALL, CML, CLL), Lymphome (Hodgkin, NHL), Multiples Myelom, MDS, MPN</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);"><i class="fa-solid fa-lungs" style="color: #1976D2;"></i></span></td>
                        <td><span class="section-6-table-fach">Thoraxonkologie</span></td>
                        <td><span class="section-6-table-desc">Bronchialkarzinom (NSCLC, SCLC), Mesotheliom, Thymom, Mediastinaltumoren</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);"><i class="fa-solid fa-stomach" style="color: #F57C00;"></i></span></td>
                        <td><span class="section-6-table-fach">Gastrointestinale Tumoren</span></td>
                        <td><span class="section-6-table-desc">Kolorektales Karzinom, Magenkarzinom, Ösophaguskarzinom, Pankreaskarzinom, hepatobiliäre Tumoren, GIST</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-ribbon" style="color: #C2185B;"></i></span></td>
                        <td><span class="section-6-table-fach">Gynäkologische Onkologie</span></td>
                        <td><span class="section-6-table-desc">Mammakarzinom, Ovarialkarzinom, Zervixkarzinom, Endometriumkarzinom, Vulvakarzinom</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);"><i class="fa-solid fa-mars" style="color: #388E3C;"></i></span></td>
                        <td><span class="section-6-table-fach">Urologische Onkologie</span></td>
                        <td><span class="section-6-table-desc">Prostatakarzinom, Nierenzellkarzinom, Urothelkarzinom (Blase, Nierenbecken), Hodentumoren</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-brain" style="color: #7B1FA2;"></i></span></td>
                        <td><span class="section-6-table-fach">Neuroonkologie</span></td>
                        <td><span class="section-6-table-desc">Glioblastom, Astrozytom, Meningeom, Metastasen, primäre ZNS-Lymphome</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);"><i class="fa-solid fa-sun" style="color: #F9A825;"></i></span></td>
                        <td><span class="section-6-table-fach">Dermatoonkologie</span></td>
                        <td><span class="section-6-table-desc">Malignes Melanom, Basalzellkarzinom, Plattenepithelkarzinom, Merkelzellkarzinom</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);"><i class="fa-solid fa-dna" style="color: #00796B;"></i></span></td>
                        <td><span class="section-6-table-fach">Seltene Tumoren & Sarkome</span></td>
                        <td><span class="section-6-table-desc">Weichteilsarkome, Knochensarkome, NET (neuroendokrine Tumoren), CUP-Syndrom</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-6-footer">
            <p class="section-6-footer-text">
                Ob Schwerpunktpraxis, onkologische Ambulanz, MVZ oder Klinik – MediDesk® skaliert mit Ihren Anforderungen
            </p>
            
            <div class="section-6-cta-container">
                <a href="#demo" class="btn btn-primary">Demo für meine Tumorentität ansehen</a>
            </div>
        </div>
    </section>

    <section class="wave"></section>

    <!-- Integration Timeline -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So integrieren Sie MediDesk® in <span class="highlight-text-bg">48 Stunden</span></h2>
            <p class="section-7-subline">Speziell für den sensiblen Workflow onkologischer Praxen entwickelt</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-user-md"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Onkologie-spezifische Konfiguration</h3>
                            <p class="section-7-step-description">
                                Wir erfassen Ihre Therapieprotokolle (Chemo, Immun, Target), Tumorentitäten, Nebenwirkungen (CTCAE), Supportivtherapie, Notfall-Kriterien. Formulare werden empathisch & verständlich formuliert – sensibel für Krebspatienten.
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
                            <h3 class="section-7-step-title">KIS & Tumor-Dokumentation (optional)</h3>
                            <p class="section-7-step-description">
                                Anbindung an Krankenhausinformationssystem, Tumordokumentation, Onkostar, elektronische Patientenakte. Therapiezyklen, Labor, Bildgebung synchronisiert. Alternativ: Standalone-Betrieb.
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
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Empathie-Schulung für Ihr Team</h3>
                            <p class="section-7-step-description">
                                90-minütige Schulung: Sensible Kommunikation mit Krebspatienten, Notfall-Erkennung, psychoonkologische Erstbetreuung. Video-Tutorials, Notfall-Checklisten, 24/7-Support im ersten Monat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Onkologie starten</a>
        </div>
    </section>

    <section class="wave2"></section>

    <!-- FAQ Section -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Onkologen</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die CTCAE-basierte Nebenwirkungserfassung?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patienten wählen Nebenwirkung (z.B. "Übelkeit/Erbrechen") und beantworten Fragen zur Schwere: Grad 1 = gelegentlich, Grad 2 = häufig, Grad 3 = ständig/Nahrungsaufnahme unmöglich, Grad 4 = lebensbedrohlich. System berechnet CTCAE-Grad automatisch. Grad 1-2 = Routine (digitale Bearbeitung), Grad 3-4 = NOTFALL (sofortige telefonische Rücksprache). Bei febriler Neutropenie (Fieber >38,5°C + Leukopenie): Automatisch höchste Priorität – Patient wird sofort einbestellt. Kein Übersehen kritischer Nebenwirkungen mehr.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Patienten nachts bei Notfällen Kontakt aufnehmen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, MediDesk® ist 24/7 verfügbar. Patient meldet Notfall-Symptom (z.B. Fieber, Atemnot, Thoraxschmerz). System markiert als DRINGEND. Sie erhalten Push-Benachrichtigung auf Smartphone (optional). Patient bekommt automatisch Notfall-Hinweis: "Bei lebensbedrohlichen Symptomen sofort 112 rufen oder Notaufnahme aufsuchen. Wir melden uns schnellstmöglich zurück." Am nächsten Morgen sehen Sie alle Notfall-Anfragen priorisiert. Für echte 24/7-Hotline: Integration mit ärztlichem Bereitschaftsdienst möglich (gegen Aufpreis).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie wird psychische Belastung erkannt und begleitet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Integriertes Distress-Thermometer (0-10): Patienten geben regelmäßig (z.B. vor jedem Zyklus) psychische Belastung an. 0 = keine Belastung, 10 = extreme Belastung. Bei Wert >6: Automatischer Hinweis "Möchten Sie psychoonkologische Unterstützung?". Ihr Team sieht Verlauf über Zeit. Bei anhaltend hoher Belastung: Vermittlung an Psychoonkologen, Sozialdienst, Seelsorge. Zusätzlich: Angehörigen-Belastung erfragen. Ziel: Frühe Intervention, bevor Depression/Angststörung manifest wird. Bessere Lebensqualität trotz Krebs.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Eignet sich MediDesk® für Palliativpatienten?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, besonders gut. Palliativpatienten haben oft komplexe Symptomlast (Schmerzen, Luftnot, Übelkeit, Fatigue). Digitale Symptomerfassung entlastet Patient & Angehörige – keine langen Telefonate nötig. System erfasst Symptomschwere, Medikation, Breakthrough-Schmerzen. Ihr Team passt Schmerztherapie an, organisiert Hospizpflege, koordiniert SAPV (spezialisierte ambulante Palliativversorgung). Bei akuter Verschlechterung: Sofortige Priorisierung. Advance Care Planning: Patientenverfügung, Therapieziel-Dokumentation digital hinterlegt. Würdevolle Begleitung bis zuletzt.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die Tumornachsorge-Planung?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Nach Therapieende: System hinterlegt Nachsorgepläne automatisch (3/6/12/24/60 Monate). Patient erhält Erinnerung: "Ihr 6-Monats-Nachsorgetermin steht an. Bitte Tumormarker-Kontrolle + CT-Thorax/Abdomen vereinbaren." Patient bucht online Termine, Labor wird organisiert. Befunde werden dokumentiert. Bei auffälligen Werten oder Rezidiv-Symptomen: Automatische Priorisierung, schnelle Bildgebung. Kein Patient fällt durchs Raster. Langzeitüberlebende optimal betreut. Spätrezidive werden früher erkannt – bessere Outcomes.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können auch Angehörige Zugang bekommen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, mit Patienteneinwilligung. Besonders sinnvoll bei: älteren Patienten, palliativen Situationen, sprachlichen Barrieren. Angehöriger erhält eigenen Zugang (gleiche Berechtigungen wie Patient). Kann Symptome melden, Termine koordinieren, Fragen stellen. Ihr Team sieht, wer die Anfrage gestellt hat (Patient oder Angehöriger). Datenschutz: Nur mit expliziter schriftlicher Einwilligung des Patienten. Einwilligung jederzeit widerrufbar. Transparenz & Kontrolle für den Patienten.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für onkologische Praxen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Preise richten sich nach Ärzteanzahl: 1-2 Ärzte = 119€/Monat, 3-4 = 179€/Monat, 5-6 = 298€/Monat, >6 = +59€ pro Arzt (alle zzgl. MwSt.). Inklusive: Unbegrenzte Anfragen, CTCAE-Nebenwirkungsmanagement, Distress-Screening, Tumornachsorge-Planung, Team-Schulung, Updates, Support. Optional: KIS-Integration +149€/Monat, Psychoonkologie-Modul +89€/Monat. Keine Einrichtungsgebühr. 30 Tage kostenlos testen, monatlich kündbar. ROI meist nach 6-8 Wochen durch Zeitersparnis.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie sicher sind sensible Krebsdiagnosen geschützt?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Höchste Sicherheitsstandards für sensitivste Gesundheitsdaten: Ende-zu-Ende-Verschlüsselung (TLS 1.3 + AES-256), EU-Hosting (Deutschland), KV-zertifiziert, ISO 27001. Zwei-Faktor-Authentifizierung für Team-Zugriff. Rollenbasierte Berechtigungen: MFA sieht administrative Infos, Ärzte medizinische Daten. Audit-Log: Jeder Zugriff protokolliert (wer, wann, was). Jährliche Penetrationstests. AVV nach Art. 28 DSGVO. Patienten können darauf vertrauen: Ihre Krebsdiagnose ist maximal geschützt.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere onkologische Praxis mit strukturiertem Nebenwirkungsmanagement?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase – speziell konfiguriert für Onkologie. CTCAE-basiert, empathisch, sicher. Keine Einrichtungsgebühr, kein Risiko, keine Vertragsbindung.
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Demo für Onkologen</span>
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
                    <span>CTCAE-basiert</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Psychoonkologie-Integration</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Maximal sensibel & sicher</span>
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
