<?php
// SEO Configuration for Zahnmedizin
$page_title = "Online-Rezeption für Zahnärzte & Zahnarztpraxen - MediDesk® | Digitale Praxisverwaltung";
$page_description = "Die digitale Online-Rezeption speziell für Zahnarztpraxen. Reduzieren Sie Telefonanrufe um 80%, optimieren Sie Prophylaxe-Recall und Terminmanagement. DSGVO-konform, in 48h startklar.";
$page_keywords = "Online-Rezeption Zahnarzt, digitale Zahnarztpraxis, Zahnmedizin Terminverwaltung, Online-Terminbuchung Zahnarzt, MediDesk Zahnarzt";
$page_canonical = "https://medideskr.cloud/fachrichtungen/zahnmedizin/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for Zahnmedizin -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Rezeption für Zahnmedizin",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Digitale Online-Rezeption speziell für Zahnarztpraxen. Prophylaxe-Recall, Schmerzpatienten-Management, Zahnersatz-Koordination und Kostenvoranschlag-Bearbeitung.",
  "url": "https://medideskr.cloud/fachrichtungen/zahnmedizin/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Automatisches Prophylaxe-Recall",
    "Schmerzpatienten-Priorisierung",
    "Zahnersatz-Koordination",
    "Kostenvoranschlag-Management",
    "Bonusheft-Erinnerungen",
    "DSGVO-konform",
    "EU-Hosting",
    "48h Einrichtungszeit"
  ],
  "provider": {
    "@type": "Organization",
    "name": "MediDesk®",
    "url": "https://medideskr.cloud/"
  }
}
</script>

<!-- Schema.org Structured Data - FAQPage for Zahnmedizin -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® Zahnarztpraxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® reduziert den Telefonaufwand in Zahnarztpraxen um bis zu 80%. Patienten können online Termine buchen, Prophylaxe-Recall wird automatisiert und Schmerzpatienten werden priorisiert."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert das automatische Prophylaxe-Recall-System?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Patienten erhalten automatische Erinnerungen für ihre nächste Prophylaxe (6 oder 12 Monate). Sie können direkt online einen Termin buchen. Das Ergebnis: 85% höhere Prophylaxe-Quote und 70% weniger manuelle Recall-Anrufe."
      }
    },
    {
      "@type": "Question",
      "name": "Können Schmerzpatienten priorisiert werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten wählen bei der Online-Anfrage die Dringlichkeit aus. Schmerzpatienten werden rot markiert und erscheinen ganz oben. 95% werden am selben oder nächsten Tag versorgt."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® die Zahnersatz-Koordination?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Zahnersatz-Anfragen werden strukturiert erfasst: Art der Versorgung, Wünsche, finanzielle Möglichkeiten. Kostenvoranschläge können vorbereitet und Folgetermine koordiniert werden."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es automatische Bonusheft-Erinnerungen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten erhalten automatisch Erinnerungen an ihren jährlichen Vorsorge-Stempel für das Bonusheft. So verpassen weniger Patienten ihre Vorsorge und behalten ihre Bonusansprüche."
      }
    },
    {
      "@type": "Question",
      "name": "Können Kostenvoranschläge digital verwaltet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, der Status von Kostenvoranschlägen wird nachverfolgt: Erstellt, bei Krankenkasse, genehmigt, Termin vereinbaren. Patienten erhalten automatische Updates und können Fragen stellen."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für Zahnarztpraxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist vollständig DSGVO-konform mit EU-Hosting in Deutschland, Ende-zu-Ende-Verschlüsselung und KV-Zertifizierung. Patientendaten sind maximal geschützt."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für eine Zahnarztpraxis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise beginnen bei 119 EUR pro Monat für 1-2 Behandler. Inkludiert sind Prophylaxe-Recall, Schmerzpatienten-Priorisierung und Zahnersatz-Koordination. Eine kostenlose 30-Tage-Testphase ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einer Zahnarztpraxis eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist innerhalb von 48 Stunden einsatzbereit. Die zahnmedizinspezifische Konfiguration umfasst Prophylaxe-Recall-Workflows, Schmerzpatienten-Triage und Zahnersatz-Formulare."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® für größere Zahnarztpraxen und MVZ geeignet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® skaliert für große Zahnarztpraxen und Zahn-MVZs. Multi-Standort-Management, PVS-Anbindung und Spezialisierungen wie Kieferorthopädie oder Implantologie werden unterstützt."
      }
    }
  ]
}
</script>

<!-- Schema.org Structured Data - Service -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Digitale Online-Rezeption für Zahnmedizin",
  "name": "MediDesk® für Zahnärzte",
  "description": "Spezialisierte digitale Lösung für Zahnarztpraxen mit Prophylaxe-Recall, Schmerzpatienten-Priorisierung und Zahnersatz-Koordination.",
  "provider": {
    "@type": "Organization",
    "name": "MediDesk®",
    "url": "https://medideskr.cloud/"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Germany"
  },
  "audience": {
    "@type": "Audience",
    "audienceType": "Zahnärzte, Zahnarztpraxen, Zahn-MVZ, Kieferorthopäden, Oralchirurgen"
  }
}
</script>
</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section - Zahnmedizin-spezifisch -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">Zahnärzte</span> & Zahnarztpraxen</h1>
                        <p class="subheading">
                            Die digitale Lösung für Zahnarztpraxen: Terminflut meistern, Prophylaxe-Recall automatisieren, Schmerzpatienten priorisieren – ohne Telefonstress
                        </p>

                        <ul class="features-list">
                            <li><span>Bis zu 80% weniger Telefonanrufe</span> – Patienten buchen online</li>
                            <li><span>Automatisches Prophylaxe-Recall-System</span> – 85% höhere Prophylaxe-Quote</li>
                            <li><span>Schmerzpatienten sofort erkennbar</span> – rote Markierung für Notfälle</li>
                            <li><span>Zahnersatz-Anfragen strukturiert</span> – Kostenvoranschläge effizient bearbeiten</li>
                            <li><span>Bonusheft-Erinnerungen automatisch</span> – mehr Vorsorge, zufriedenere Patienten</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Live-Demo für Zahnärzte</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für Zahnärzte">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section - Zahnmedizin-spezifische Herausforderungen -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in <span>Zahnarztpraxen</span></span>
                <h2>Diese <span class="highlight-text-red">Probleme</span> kennen Sie aus Ihrem Praxisalltag</h2>
                <p class="subline">
                    Zahnarztpraxen haben eine besonders hohe Terminfrequenz: Vorsorge, Prophylaxe, Behandlungen, Schmerzpatienten. Das Telefon steht nicht still – und Ihr Team kommt kaum hinterher.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Telefon klingelt ununterbrochen</h3>
                    <p>60-100 Anrufe täglich: Termine vereinbaren, verschieben, absagen. Vorsorge-Termine, Prophylaxe, Kontrolltermine, Schmerzpatienten – alles durcheinander.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-calendar-xmark"></i>
                    </div>
                    <h3>Terminabsagen in letzter Minute</h3>
                    <p>"Ich kann heute doch nicht kommen" – und schon steht ein Behandlungsstuhl leer. Nachbesetzen ist kaum möglich, weil niemand so kurzfristig erreichbar ist.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-tooth"></i>
                    </div>
                    <h3>Prophylaxe-Recall ist mühsam</h3>
                    <p>Manuell Listen durchgehen, Patienten anrufen, Mailbox sprechen, Termine koordinieren – das bindet täglich 1-2 Stunden Arbeitszeit.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <h3>Schmerzpatienten gehen im Chaos unter</h3>
                    <p>Akute Schmerzen müssen priorisiert werden – aber zwischen 50 Routineanrufen ist nicht immer klar, wer wirklich dringend ist.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-euro-sign"></i>
                    </div>
                    <h3>Kostenvoranschläge dauern ewig</h3>
                    <p>Zahnersatz-Anfragen am Telefon: "Welche Zähne? Material? Vorbehandlungen?" – Die Hälfte der Informationen fehlt, alles muss nachgefragt werden.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-book"></i>
                    </div>
                    <h3>Bonusheft-Verwaltung ist unübersichtlich</h3>
                    <p>Wer braucht noch seinen Stempel? Wer war letztes Jahr nicht zur Vorsorge? Patienten vergessen es, Ihr Team muss hinterherlaufen.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Zahnärzte brauchen spezialisierte Lösungen</h4>
                <p>
                    Standardlösungen ignorieren die Besonderheiten von Zahnarztpraxen. MediDesk® wurde mit Zahnärzten entwickelt und deckt alle zahnmedizinischen Anforderungen ab.
                </p>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Answer Section - Zahnmedizin-spezifische Lösung -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    So funktioniert die <span>digitale Zahnarzt-Rezeption</span>
                </span>
                <h2>MediDesk® für <span class="highlight-text-green">Zahnärzte</span> & Zahnarztpraxen</h2>
                <p class="subline">
                    Automatisierte Terminverwaltung, intelligentes Recall-System und strukturierte Patientenkommunikation
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-calendar-check"></i>
                    </div>
                    <p class="answer-card-step">Patient wählt sein Anliegen</p>
                    <h3>Spezialisierte Zahnmedizin-Formulare</h3>
                    <p>Vorsorgeuntersuchung, Prophylaxe, Kontrolltermin, akute Schmerzen, Zahnersatz-Beratung, Termin verschieben/absagen – jedes Anliegen hat ein optimiertes Formular</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-clipboard-list"></i>
                    </div>
                    <p class="answer-card-step">System erfasst alle relevanten Infos</p>
                    <h3>Intelligente Datenerfassung ohne Rückfragen</h3>
                    <p>Beschwerdebild, betroffene Zähne, Dringlichkeit, Schmerzlevel, bisherige Behandlungen, Allergien, gewünschter Zeitraum – vollständig strukturiert</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-doctor"></i>
                    </div>
                    <p class="answer-card-step">Praxisteam bearbeitet priorisiert</p>
                    <h3>Schmerzpatienten zuerst, dann Routine</h3>
                    <p>Dringende Fälle rot markiert, Routinetermine grün. Ihr Team vergibt Termine effizient, ohne ständige Unterbrechungen am Telefon</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Konkrete Zeitersparnis in Zahnarztpraxen</h4>
                <p><strong>Terminverwaltung:</strong> Von 90-120 Minuten täglich auf 20-30 Minuten<br>
                <strong>Prophylaxe-Recall:</strong> Automatisch statt 60-90 Minuten manueller Arbeit<br>
                <strong>Kostenvoranschläge:</strong> Alle Infos vollständig, keine Rückfragen nötig</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt 30 Tage kostenlos testen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Use Cases Section - Zahnmedizin-spezifische Anwendungsfälle -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle</span>
            <h2>Diese <span class="highlight-text-bg2">zahnmedizinischen Anfragen</span> können Ihre Patienten online stellen</h2>
            <p class="section-4-subline">Speziell für die Bedürfnisse von Zahnarztpraxen entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <path d="M24 28h16v2H24z" fill="#1976D2"/>
                        <path d="M24 34h16v2H24z" fill="#1976D2"/>
                        <circle cx="28" cy="31" r="1.5" fill="#1976D2"/>
                        <circle cx="36" cy="31" r="1.5" fill="#1976D2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Vorsorge & Prophylaxe-Termine</h3>
                <p class="section-4-description">
                    <strong>Automatisches Recall-System:</strong> Patienten erhalten rechtzeitig Erinnerungen (6 oder 12 Monate). Online-Buchung der nächsten Vorsorge. Bonusheft-Status wird automatisch geprüft. Wunschtermin-Anfrage möglich.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 85% höhere Prophylaxe-Quote<br>
                    ✓ 70% weniger manuelle Recall-Anrufe<br>
                    ✓ Automatische Bonusheft-Erinnerungen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFEBEE"/>
                        <path d="M32 24l-4 8h8l-4 8" stroke="#D32F2F" stroke-width="2"/>
                        <circle cx="32" cy="32" r="12" stroke="#D32F2F" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Schmerzpatienten & Notfälle</h3>
                <p class="section-4-description">
                    <strong>Prioritäts-System:</strong> Schmerzlevel (1-10), seit wann Schmerzen, betroffene Zähne, Schwellung/Fieber, bisherige Selbstmedikation. System markiert Notfälle automatisch rot. Ihr Team sieht sofort, wer dringend ist.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 95% der Schmerzpatienten am selben/nächsten Tag<br>
                    ✓ Keine Notfälle mehr übersehen<br>
                    ✓ Bessere Triage, weniger Stress
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <rect x="26" y="26" width="12" height="12" rx="2" fill="#F57C00"/>
                        <path d="M29 30h6M29 34h6" stroke="#FFF" stroke-width="1.5"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Zahnersatz & Kostenvoranschläge</h3>
                <p class="section-4-description">
                    <strong>Strukturierte Erfassung:</strong> Welche Zähne betroffen, Art des Zahnersatzes (Krone, Brücke, Implantat), Material-Wunsch (Keramik, Metall), Kostenübernahme Krankenkasse, Vorbehandlungen, Allergien. Alle Infos für HKP vollständig.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Keine Rückfragen mehr nötig<br>
                    ✓ HKP-Erstellung 60% schneller<br>
                    ✓ Höhere Annahmequote durch Transparenz
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <circle cx="32" cy="28" r="4" fill="#388E3C"/>
                        <path d="M32 32v8" stroke="#388E3C" stroke-width="2"/>
                        <path d="M28 36h8" stroke="#388E3C" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Kontrolltermine & Nachsorge</h3>
                <p class="section-4-description">
                    <strong>Nach Behandlungen:</strong> Füllungs-Kontrolle, Wurzelbehandlungs-Nachsorge, Implantat-Kontrolle, Zahnersatz-Anpassung. Patient beschreibt aktuellen Zustand. Sie entscheiden, ob Termin nötig oder telefonische Beratung ausreicht.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Strukturierte Nachsorge-Dokumentation<br>
                    ✓ Weniger unnötige Kontrolltermine<br>
                    ✓ Früherkennung von Komplikationen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <path d="M28 28h8M28 32h8M28 36h6" stroke="#7B1FA2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Parodontologie-Behandlung</h3>
                <p class="section-4-description">
                    <strong>Parodontitis-Management:</strong> Blutungsneigung, Zahnfleischrückgang, Zahnlockerung, bisherige PA-Behandlungen, Mundhygiene-Status. Termin für PA-Vorbehandlung, Hauptbehandlung oder Nachsorge vereinbaren.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Bessere PA-Compliance der Patienten<br>
                    ✓ Strukturierte Recall-Erinnerungen (3/6 Monate)<br>
                    ✓ Dokumentation für PA-Verlauf
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M28 30h8M26 34h12" stroke="#C2185B" stroke-width="2"/>
                        <circle cx="32" cy="32" r="10" stroke="#C2185B" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Kieferorthopädie (KFO)</h3>
                <p class="section-4-description">
                    <strong>Für KFO-Praxen & Zahnärzte mit KFO:</strong> Erstberatung-Wunsch, Kontrolltermine für Brackets/Aligner, Notfälle (Bracket abgebrochen), Retainer-Kontrolle. Spezielle KFO-Formulare mit Altersangabe (Kinder/Jugendliche/Erwachsene).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Eltern können für Kinder buchen<br>
                    ✓ Automatische 4-6 Wochen Kontroll-Recalls<br>
                    ✓ KFO-Notfälle priorisiert erkennbar
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>"In Zahnarztpraxen sind 75% aller Anrufe Routinetermine – genau diese übernimmt MediDesk® vollautomatisch."</p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Wie sieht das konkret für meine Zahnarztpraxis aus?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Benefits Section - Zahnmedizin-spezifische Vorteile -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für Zahnarztpraxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer Zahnarztpraxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Effizienz, Prophylaxe-Quote und Patientenzufriedenheit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bis zu 80% weniger Telefonanrufe für Termine</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> 60-100 Terminanrufe täglich (je 3-5 Minuten) = 3-8 Stunden reines Telefonieren.<br>
                        <strong>Nachher:</strong> 75% der Termine werden online gebucht, nur noch 15-25 Anrufe.<br>
                        <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">2-6 Stunden täglich für wichtigere Aufgaben gewonnen</span> – Ihre ZFA können sich auf Behandlungsassistenz und Patientenbetreuung konzentrieren.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-calendar-days" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Automatisches Prophylaxe-Recall steigert Vorsorge-Quote</h3>
                    <p class="section-5-feature-description">
                        Das System erinnert Patienten automatisch an ihre nächste Vorsorge/Prophylaxe (individuell: 6 oder 12 Monate). <strong>Per E-Mail, SMS oder im Patienten-Portal.</strong> Patienten können direkt online buchen, ohne anzurufen. Ihr Team muss nicht mehr manuell Listen durchgehen und telefonieren.<br>
                        <strong>Messbare Erfolge:</strong> <span style="color: #388E3C; font-weight: 700;">85% höhere Prophylaxe-Compliance</span> – mehr Patienten kommen regelmäßig, Ihre Umsätze steigen, Zahngesundheit verbessert sich.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);">
                    <i class="fa-solid fa-heart-pulse" style="color: #D32F2F; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Schmerzpatienten werden sofort erkannt & priorisiert</h3>
                    <p class="section-5-feature-description">
                        Bei akuten Zahnschmerzen zählt jede Minute. Patienten geben online Schmerzlevel (1-10), Dauer und Symptome an. <strong>Das System markiert Notfälle automatisch rot</strong> und sortiert sie ganz oben in der Liste. Ihr Team sieht sofort: "Patient X hat starke Schmerzen seit gestern Abend – dringend!"<br>
                        <span style="color: #D32F2F; font-weight: 700;">Kein Schmerzpatient geht mehr im Anruf-Chaos unter.</span> Durchschnittlich 95% Versorgung am selben oder nächsten Tag. Zufriedenere Patienten, weniger Frustration im Team.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-money-bill-wave" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Zahnersatz-Anfragen strukturiert = schnellere HKP-Erstellung</h3>
                    <p class="section-5-feature-description">
                        Kostenvoranschläge am Telefon sind zeitraubend: "Welcher Zahn? Material? Allergien?" – Die Hälfte der Infos fehlt immer. <strong>MediDesk® erfasst alles strukturiert:</strong> Betroffene Zähne, gewünschte Versorgung (Krone, Brücke, Implantat), Material-Präferenz, Vorerkrankungen, Kassenstatus.<br>
                        Ihr Zahnarzt/Ihre Zahnärztin hat alle Infos auf einen Blick, der HKP kann <span style="color: #F9A825; font-weight: 700;">60% schneller erstellt werden</span>. Weniger Rückfragen, schnellere Behandlungsplanung. <strong>Höhere Annahmequote</strong> durch transparente Kommunikation.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-calendar-xmark" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Weniger Last-Minute-Absagen & bessere Terminauslastung</h3>
                    <p class="section-5-feature-description">
                        Patienten können online rund um die Uhr Termine absagen/verschieben – auch abends um 22 Uhr. <strong>Automatische Erinnerungen</strong> 24h vor dem Termin reduzieren Vergesslichkeit. Bei Absagen können Sie freie Slots automatisch an Wartelisten-Patienten anbieten.<br>
                        <strong>Ergebnis:</strong> <span style="color: #7B1FA2; font-weight: 700;">30-40% weniger kurzfristige Absagen</span> – bessere Auslastung Ihrer Behandlungsstühle, weniger Leerlauf, höhere Produktivität.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);">
                    <i class="fa-solid fa-book-medical" style="color: #00796B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bonusheft-Management automatisiert</h3>
                    <p class="section-5-feature-description">
                        Das System verfolgt automatisch, welche Patienten ihren jährlichen Vorsorge-Stempel benötigen. <strong>Automatische Erinnerungen</strong> an Patienten: "Ihr Bonusheft-Stempel läuft bald ab – jetzt Termin buchen!" Ihr Team sieht auf einen Blick, wer seinen Stempel noch braucht.<br>
                        <span style="color: #00796B; font-weight: 700;">Mehr Patienten wahren ihre Bonusheft-Kontinuität</span> – zufriedenere Patienten (höhere Zuschüsse bei Zahnersatz), bessere Bindung, mehr regelmäßige Vorsorge-Patienten.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>"Zahnarztpraxen mit MediDesk® haben durchschnittlich 4-6 Stunden mehr Zeit pro Tag für Behandlung und Patientenbetreuung statt Telefonieren."</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Jetzt persönliche Beratung für Zahnärzte</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Success Stories Section -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So nutzen <span class="highlight-text-bg">Zahnarztpraxen</span> MediDesk®</h2>
            <p class="section-7-subline">Reale Anwendungsfälle aus der Praxis</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-tooth"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Familien-Zahnarztpraxis (2 Zahnärzte, 1200 Patienten)</h3>
                            <p class="section-7-step-description">
                                <strong>Ausgangslage:</strong> Täglich 80-100 Terminanrufe, davon 70% Routinetermine (Vorsorge, Prophylaxe). ZFA am Empfang dauerhaft im Stress.<br>
                                <strong>Ergebnis nach 2 Monaten:</strong> 78% der Termine werden online gebucht. Nur noch 18-22 Anrufe täglich. ZFA hat Zeit für Behandlungsassistenz. <strong>Prophylaxe-Quote von 42% auf 71% gestiegen</strong> durch automatische Recalls. Patientenzufriedenheit: 4,3 → 4,8 Sterne.
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
                            <i class="fa-solid fa-suitcase-medical"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Implantologie-Schwerpunktpraxis</h3>
                            <p class="section-7-step-description">
                                <strong>Besonderheit:</strong> Komplexe Behandlungsplanungen, Kostenvoranschläge für Implantate, langwierige Nachsorge.<br>
                                <strong>MediDesk-Lösung:</strong> Strukturierte Erstanfragen mit Röntgenbildern (Upload), detaillierte Post-OP-Verlaufsberichte, automatische Kontroll-Erinnerungen (1 Woche, 3 Monate, 6 Monate).<br>
                                <strong>Ergebnis:</strong> HKP-Erstellung 55% schneller. Bessere Post-OP-Dokumentation. <strong>Weniger Komplikationen durch strukturierte Nachsorge.</strong> Höhere Implantat-Annahme durch transparente Kommunikation.
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
                            <i class="fa-solid fa-hospital"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Zahnmedizinisches Versorgungszentrum (ZMV, 6 Behandler)</h3>
                            <p class="section-7-step-description">
                                <strong>Herausforderung:</strong> Hohe Patientenfrequenz, verschiedene Fachbereiche (Allgemein, KFO, Implantologie, Parodontologie), 150+ Anrufe täglich.<br>
                                <strong>MediDesk-Lösung:</strong> Patienten wählen Fachbereich online, Termine werden automatisch dem richtigen Behandler zugeordnet. Separate Formulare für KFO, Implantologie, etc.<br>
                                <strong>Ergebnis:</strong> <strong>82% weniger Koordinations-Telefonate.</strong> Behandler haben korrekt vorbereitete Termine. 2 Empfangsmitarbeiter eingespart (durch Fluktuation, nicht Kündigung). Bessere Work-Life-Balance für das Team.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kontakt" class="btn btn-primary">Könnte das auch in meiner Zahnarztpraxis funktionieren?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- FAQ Section - Zahnmedizin-spezifisch -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Zahnärzten</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie hilft MediDesk® bei der Prophylaxe-Recall-Organisation?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® automatisiert Ihr Recall-System vollständig. Das System speichert, wann jeder Patient seine letzte Vorsorge/Prophylaxe hatte. <strong>6 Monate vor dem nächsten empfohlenen Termin</strong> (oder 12 Monate, je nach Ihrer Einstellung) erhält der Patient automatisch eine Erinnerung per E-Mail oder SMS: "Ihre nächste Vorsorge steht an – jetzt Termin buchen!" Der Patient kann direkt online buchen, ohne anzurufen. Ihr Team sieht im Dashboard alle fälligen Prophylaxe-Patienten und kann gezielt nachfassen, falls jemand nicht reagiert. <strong>Ergebnis:</strong> Durchschnittlich <span style="color: #388E3C; font-weight: 700;">85% höhere Prophylaxe-Quote</span> und 70% weniger manuelle Recall-Anrufe. Mehr regelmäßige Patienten = gesündere Zähne + höhere Umsätze.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Schmerzpatienten priorisiert werden?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut – das ist eine Kernfunktion. Bei der Online-Anfrage wählen Patienten die Dringlichkeit aus: <strong>"Akute Schmerzen / Notfall"</strong>, "Zeitnah gewünscht" oder "Routinetermin". Bei akuten Schmerzen gibt der Patient zusätzlich an: Schmerzlevel (1-10), seit wann, welche Zähne, Schwellung/Fieber vorhanden, bereits Schmerzmittel genommen. Das System markiert diese Anfragen automatisch <strong>rot</strong> und sortiert sie ganz oben in der Liste. Ihr Team sieht sofort: "Patient hat starke Schmerzen (8/10) seit gestern – DRINGEND!" Sie können sofort reagieren und einen Notfall-Termin koordinieren. <span style="color: #D32F2F; font-weight: 700;">Durchschnittlich 95% aller Schmerzpatienten werden am selben oder nächsten Tag versorgt.</span>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die Koordination von Zahnersatz-Anfragen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Kostenvoranschläge am Telefon sind zeitraubend. MediDesk® erfasst alle relevanten Informationen strukturiert: Welche Zähne sind betroffen (z.B. "Zahn 16 und 17"), Art der gewünschten Versorgung (Krone, Brücke, Implantat), Material-Präferenz (Vollkeramik, Metall, Gold), Kostenübernahme Krankenkasse (ja/nein/unklar), bisherige Vorbehandlungen (Wurzelbehandlung, etc.), Allergien/Unverträglichkeiten, Zeitrahmen für Behandlung. Ihr Zahnarzt/Ihre Zahnärztin hat <strong>alle Informationen auf einen Blick</strong> und kann den Heil- und Kostenplan (HKP) ohne Rückfragen erstellen. <strong>Ergebnis:</strong> HKP-Erstellung <span style="color: #F9A825; font-weight: 700;">60% schneller</span>, höhere Annahmequote durch transparente Vorab-Information, zufriedenere Patienten.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Eignet sich MediDesk® auch für Kieferorthopädie (KFO)?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, MediDesk® hat spezielle KFO-Formulare. Diese decken ab: Erstberatungs-Wunsch, Kontrolltermine für Brackets/Aligner, KFO-Notfälle (Bracket abgebrochen, Draht sticht), Retainer-Kontrolle. Bei Kindern/Jugendlichen können Eltern stellvertretend buchen. <strong>Besonderheiten:</strong> Automatische Kontroll-Recalls (typischerweise alle 4-6 Wochen bei aktiver Behandlung), Altersangabe wird erfasst (Kinder/Jugendliche/Erwachsene), Behandlungsphase kann angegeben werden (Anfang, Mitte, Ende, nur Retainer). KFO-Notfälle werden priorisiert dargestellt. <strong>Vorteil:</strong> Eltern können abends um 21 Uhr den nächsten KFO-Termin buchen, statt während Ihrer Sprechzeiten anzurufen. Weniger Telefonstress für Ihr Team, zufriedenere Eltern.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert das auch für ältere Patienten ohne Smartphone?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, MediDesk® ist bewusst benutzerfreundlich gestaltet: Große Schaltflächen, klare Sprache, einfache Navigation. Die meisten Senioren (60-80 Jahre) nutzen es problemlos – viele haben heute Smartphones oder Tablets. <strong>Wichtig:</strong> Das Telefon bleibt verfügbar! MediDesk® ist eine Ergänzung, kein Ersatz. In der Praxis nutzen typischerweise 60-75% der Patienten die Online-Buchung, 25-40% rufen weiterhin an. <strong>Der Unterschied:</strong> Ihr Team hat jetzt Zeit für diese Gespräche, weil nicht mehr 80-100 Anrufe reinkommen, sondern nur noch 20-30. Auch ältere Patienten profitieren: Sie können zu jeder Tageszeit einen Termin buchen, ohne in der Warteschleife zu hängen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Reduziert MediDesk® wirklich Last-Minute-Absagen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, messbar um 30-40%. <strong>Wie das funktioniert:</strong> (1) Automatische Termin-Erinnerungen 24 Stunden vor dem Termin per E-Mail/SMS reduzieren Vergesslichkeit. (2) Patienten können online rund um die Uhr Termine absagen/verschieben – auch abends um 22 Uhr, wenn sie merken, dass sie nicht können. (3) Bei Absagen können Sie automatisch Wartelisten-Patienten benachrichtigen: "Es ist ein Termin frei geworden – möchten Sie ihn?" (4) Patienten müssen nicht mehr "heimlich fernbleiben", weil sie Angst haben, anzurufen. <strong>Ergebnis:</strong> Weniger kurzfristige Absagen, freie Slots werden schneller nachbesetzt, <span style="color: #7B1FA2; font-weight: 700;">bessere Auslastung Ihrer Behandlungsstühle</span>, höhere Produktivität.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Kann MediDesk® mit meinem Praxisverwaltungssystem (PVS) verbunden werden?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® funktioniert unabhängig von Ihrem PVS – keine Integration notwendig. Anfragen kommen online rein, Sie bearbeiten sie im MediDesk-Dashboard und tragen Termine manuell in Ihr PVS ein (wie gewohnt, nur ohne Telefonate). <strong>Optionale PVS-Integration möglich</strong> für: Dampsoft, Evident (Charly), Z1, solutio, medatixx. Bei Integration werden Termine automatisch ins PVS übertragen. <strong>Kosten:</strong> Einmalig 499€ Setup + 49€/Monat. <strong>Aber:</strong> Viele Praxen verzichten bewusst darauf, weil die manuelle Eingabe nur 5-10 Minuten täglich dauert (vorher 2-4 Stunden Telefon) – sie sparen trotzdem massiv Zeit.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell ist MediDesk® in meiner Zahnarztpraxis einsatzbereit?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>In der Regel 48 Stunden.</strong><br>
                        <strong>Tag 1 (45 Min):</strong> Erstgespräch per Video-Call. Wir verstehen Ihre Praxis-Abläufe: Wie viele Behandler? Welche Schwerpunkte (Allgemein, KFO, Implantologie)? Recall-Intervalle? Sprechzeiten? Wir schalten passende Formulare frei und konfigurieren alles.<br>
                        <strong>Tag 2 (60 Min):</strong> Website-Integration (15 Min) – ein kleiner Code-Snippet, fertig. Team-Schulung (45 Min) – Ihre ZFA lernen das Dashboard, Anfragen bearbeiten, Notfälle erkennen.<br>
                        <strong>Ab Tag 3:</strong> Sie sind live. Die ersten Online-Buchungen kommen rein. Wir begleiten Sie die ersten 2 Wochen eng (Support per E-Mail/Telefon).<br>
                        <strong>Keine IT-Expertise nötig.</strong> Wir machen alles für Sie.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für meine Zahnarztpraxis?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Transparente Preise nach Praxisgröße:</strong><br>
                        • 1-2 Zahnärzte: 119,00€/Monat<br>
                        • 3-4 Zahnärzte: 179,00€/Monat<br>
                        • 5-6 Zahnärzte: 298,00€/Monat<br>
                        • Größere Praxen/ZMV: individuelles Angebot<br>
                        (alle Preise zzgl. MwSt.)<br><br>
                        <strong>Inklusive:</strong> Einrichtung, Schulung, alle Formulare (Vorsorge, Prophylaxe, Schmerz, Zahnersatz, KFO, etc.), automatisches Recall-System, Bonusheft-Erinnerungen, Updates, Support, DSGVO-Paket, unbegrenzte Anfragen, 30 Tage Geld-zurück-Garantie.<br><br>
                        <strong>Rechenbeispiel:</strong> Wenn Ihr Team täglich 3-6 Stunden durch MediDesk® einspart, entspricht das 60-120 Stunden pro Monat – <span style="color: #388E3C; font-weight: 700;">deutlich mehr als die Kosten einer ZFA</span>. Die Investition amortisiert sich meist im ersten Monat.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere Zahnarztpraxis mit mehr Zeit für Behandlung?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase – ohne Risiko, ohne Vertragsbindung, mit persönlicher Einrichtung und Team-Schulung
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Live-Demo für Zahnärzte</span>
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
                    <span>Einsatzbereit in 48h</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Keine PVS-Integration nötig</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Geld-zurück-Garantie</span>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/testen-popup.php'; ?>

    <!-- FAQ Toggle Script -->
    <script>
        function toggleFaq(element) {
            const faqItem = element.parentElement;
            const isActive = faqItem.classList.contains('active');
            
            // Close all other FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Toggle current FAQ
            if (!isActive) {
                faqItem.classList.add('active');
            }
        }
    </script>
</body>
</html>