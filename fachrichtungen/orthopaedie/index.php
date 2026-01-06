<?php
// SEO Configuration for Orthopaedie
$page_title = "Online-Rezeption für Orthopädie & Unfallchirurgie - MediDesk® | Digitale Patientenverwaltung";
$page_description = "Die spezialisierte Online-Rezeption für orthopädische Praxen und Unfallchirurgie. Reduzieren Sie Telefonanrufe um 75%, optimieren Sie Bildgebung-Koordination und Post-OP-Nachsorge. DSGVO-konform.";
$page_keywords = "Online-Rezeption Orthopädie, digitale Praxisverwaltung Orthopädie, Orthopädie Terminverwaltung, MediDesk Orthopädie, Online-Terminbuchung Orthopäde";
$page_canonical = "https://medideskr.cloud/fachrichtungen/orthopaedie/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for Orthopädie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Rezeption für Orthopädie",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Digitale Online-Rezeption speziell für orthopädische Praxen und Unfallchirurgie. Bildgebung-Koordination, Post-OP-Nachsorge, Physiotherapie-Verordnungen und Sportorthopädie.",
  "url": "https://medideskr.cloud/fachrichtungen/orthopaedie/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Bildgebung-Koordination (MRT, CT, Röntgen)",
    "Post-OP-Nachsorge Management",
    "Physiotherapie-Verordnungen",
    "Sportorthopädie-Anfragen",
    "Schmerzmanagement digital",
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

<!-- Schema.org Structured Data - FAQPage for Orthopädie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® orthopädischen Praxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® reduziert den Telefonaufwand in orthopädischen Praxen um bis zu 75%. Patienten können Bildgebungstermine koordinieren, Post-OP-Verläufe dokumentieren und Physiotherapie-Verordnungen anfragen."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert die Bildgebung-Koordination für MRT und CT?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® erfasst strukturiert: Art der Untersuchung, Körperregion, Verdachtsdiagnose und Dringlichkeit. Überweisungen werden automatisch dokumentiert und Befundbesprechungen terminiert. Der Koordinationsaufwand sinkt um 60%."
      }
    },
    {
      "@type": "Question",
      "name": "Eignet sich MediDesk® für die Post-OP-Nachsorge?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten können strukturiert über den Heilungsverlauf berichten: Schmerzniveau, Beweglichkeit und Wundheilung. Nachsorgetermine werden koordiniert und bei Komplikationszeichen wird DRINGEND markiert."
      }
    },
    {
      "@type": "Question",
      "name": "Können Physiotherapie-Verordnungen digital angefragt werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, alle Angaben für Physiotherapie-Verordnungen werden strukturiert erfasst: Diagnose, Behandlungseinheiten, Folgeverordnung. Das Rezept kann vorbereitet abgeholt oder digital bereitgestellt werden."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® für Sportorthopädie geeignet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, speziell für Sportorthopädie optimiert mit Verletzungsdokumentation, Return-to-Sport-Protokollen und mehrsprachiger Unterstützung für internationale Sportler."
      }
    },
    {
      "@type": "Question",
      "name": "Können Schmerzpatienten ihre Beschwerden dokumentieren?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten können Schmerzstärke (VAS-Skala), Lokalisation und Auslöser dokumentieren. Bei Red Flags wie nächtlichen Schmerzen oder neurologischen Ausfällen wird automatisch DRINGEND markiert."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für orthopädische Daten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist vollständig DSGVO-konform mit EU-Hosting in Deutschland, Ende-zu-Ende-Verschlüsselung und KV-Zertifizierung. Bildgebungsbefunde werden sicher übertragen."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für eine orthopädische Praxis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise beginnen bei 119 EUR pro Monat für 1-2 Ärzte. Inkludiert sind Bildgebung-Koordination, Post-OP-Nachsorge und Physiotherapie-Management. Eine kostenlose 30-Tage-Testphase ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einer Orthopädie-Praxis eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist innerhalb von 48 Stunden einsatzbereit. Die orthopädiespezifische Konfiguration umfasst Bildgebungsprotokolle, OP-Nachsorge-Workflows und Physiotherapie-Formulare."
      }
    },
    {
      "@type": "Question",
      "name": "Können auch größere orthopädische Kliniken MediDesk® nutzen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® skaliert für große orthopädische Kliniken und MVZs. Multi-Standort-Management, KIS-Anbindung und Spezialisierungen wie Endoprothetik oder Wirbelsäulenchirurgie werden unterstützt."
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
  "serviceType": "Digitale Online-Rezeption für Orthopädie",
  "name": "MediDesk® für Orthopäden",
  "description": "Spezialisierte digitale Lösung für orthopädische Praxen zur Bildgebung-Koordination, Post-OP-Nachsorge und Physiotherapie-Verordnungen.",
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
    "audienceType": "Orthopäden, Unfallchirurgen, Orthopädische Kliniken, Sportorthopädie, Wirbelsäulenzentren"
  }
}
</script>
</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section - Orthopädie-spezifisch -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">Orthopädie</span> & Unfallchirurgie</h1>
                        <p class="subheading">
                            Die digitale Lösung für orthopädische Praxen : Bildgebung koordinieren, Post-OP-Nachsorge strukturieren, Physiotherapie-Verordnungen effizient bearbeiten
                        </p>

                        <ul class="features-list">
                            <li><span>Bis zu 75% weniger Koordinationsanrufe</span> für Röntgen, MRT und CT-Termine</li>
                            <li><span>Strukturierte Post-OP-Nachsorge</span> – Patienten berichten digital über Heilungsverlauf</li>
                            <li><span>Effiziente Physiotherapie-Verordnungen</span> – alle Angaben vollständig erfasst</li>
                            <li><span>Befundabholung ohne Warteschleife</span> – Patienten wissen, wann Befunde fertig sind</li>
                            <li><span>Deutsch & Englisch</span> – ideal für Sportorthopädie & internationale Patienten</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Live-Demo ansehen</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für Orthopädie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section - Orthopädie-spezifische Herausforderungen -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in <span>orthopädischen Praxen</span></span>
                <h2>Diese <span class="highlight-text-red">administrativen Herausforderungen</span> bremsen Ihre orthopädische Praxis aus</h2>
                <p class="subline">
                    Orthopädische Praxen haben besondere Anforderungen: Komplexe Bildgebung-Koordination, langfristige Post-OP-Betreuung und enge Zusammenarbeit mit Physiotherapeuten. Diese administrativen Aufgaben überfordern oft das Praxisteam.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-x-ray"></i>
                    </div>
                    <h3>Bildgebung-Koordination ist zeitaufwendig</h3>
                    <p>Täglich 20-30 Anrufe für Röntgen-, MRT- und CT-Überweisungen. Welche Bilder? Welche Körperregion? Welches Radiologie-Zentrum? Kontrastmittel nötig?</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-user-injured"></i>
                    </div>
                    <h3>Post-OP-Nachsorge ist unstrukturiert</h3>
                    <p>Nach Operationen rufen Patienten mehrfach an: Fäden ziehen, Schmerzen, Beweglichkeit, Wundheilung. Oft fehlen wichtige Angaben für die Beurteilung.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-notes-medical"></i>
                    </div>
                    <h3>Physiotherapie-Verordnungen dauern ewig</h3>
                    <p>Welche Diagnose? Wie viele Sitzungen? Welche Therapieform? Alles per Telefon zu erfragen kostet Zeit und führt zu Rückfragen.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-file-medical"></i>
                    </div>
                    <h3>Befundabholung bindet Ressourcen</h3>
                    <p>"Ist mein MRT-Befund schon da?" – Diese Frage kommt täglich 15-mal. Ihr Team verbringt viel Zeit mit Nachschauen und Rückrufen.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-calendar-xmark"></i>
                    </div>
                    <h3>Akut- vs. Routinetermine sind schwer zu trennen</h3>
                    <p>Sportverletzungen, akute Schmerzen oder Routinekontrolle? Am Telefon ist nicht immer klar, wie dringend ein Termin wirklich ist.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-language"></i>
                    </div>
                    <h3>Internationale Patienten stellen Sprachbarrieren dar</h3>
                    <p>Sportorthopädie behandelt oft internationale Athleten. Medizinische Fachbegriffe am Telefon zu erklären ist schwierig.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Orthopädie braucht spezialisierte Lösungen</h4>
                <p>
                    Standardlösungen reichen nicht. MediDesk® wurde gemeinsam mit orthopädischen Praxen entwickelt und deckt alle spezifischen Anforderungen ab.
                </p>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Answer Section - Orthopädie-spezifische Lösung -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    So funktioniert die <span>digitale Orthopädie-Rezeption</span>
                </span>
                <h2>MediDesk® für <span class="highlight-text-green">Orthopädie</span> & Unfallchirurgie</h2>
                <p class="subline">
                    Strukturierte Prozesse für Bildgebung, Post-OP-Betreuung und Therapie-Verordnungen
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-laptop-medical"></i>
                    </div>
                    <p class="answer-card-step">Patient wählt sein Anliegen</p>
                    <h3>Spezialisierte Orthopädie-Formulare</h3>
                    <p>Bildgebung anfordern, Post-OP-Status melden, Physio-Rezept beantragen, Befund abholen – jedes Formular erfasst exakt die nötigen Informationen</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-clipboard-check"></i>
                    </div>
                    <p class="answer-card-step">Intelligente Datenerfassung</p>
                    <h3>Alle medizinisch relevanten Details werden strukturiert erfasst</h3>
                    <p>Betroffene Körperregion, Unfallhergang, Beschwerdeverlauf, bisherige Behandlungen, aktuelle Medikation – vollständig und nachvollziehbar</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-doctor"></i>
                    </div>
                    <p class="answer-card-step">Praxisteam bearbeitet effizient</p>
                    <h3>Priorisierte Abarbeitung ohne Unterbrechung</h3>
                    <p>Dringende Fälle werden farblich markiert. Bildgebungs-Anfragen können gebündelt koordiniert werden. Post-OP-Verläufe sind dokumentiert.</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Konkrete Zeitersparnis in orthopädischen Praxen</h4>
                <p><strong>Bildgebung-Koordination:</strong> Von 8-12 Minuten auf 2-3 Minuten pro Anfrage<br>
                <strong>Post-OP-Nachsorge:</strong> 70% weniger Telefonate, bessere Dokumentation<br>
                <strong>Physiotherapie-Verordnungen:</strong> Alle Angaben vollständig, keine Rückfragen</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt 30 Tage kostenlos testen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Use Cases Section - Orthopädie-spezifische Anwendungsfälle -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle</span>
            <h2>Diese <span class="highlight-text-bg2">orthopädischen Anfragen</span> können Ihre Patienten online stellen</h2>
            <p class="section-4-subline">Speziell für die Bedürfnisse orthopädischer Praxen und Unfallchirurgie entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <rect x="24" y="20" width="16" height="20" rx="2" fill="#1976D2"/>
                        <circle cx="32" cy="26" r="2" fill="#FFF"/>
                        <rect x="28" y="30" width="8" height="2" fill="#FFF"/>
                        <rect x="28" y="34" width="8" height="2" fill="#FFF"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Bildgebung koordinieren (Röntgen, MRT, CT)</h3>
                <p class="section-4-description">
                    <strong>Erfasst werden:</strong> Betroffene Körperregion (z.B. linkes Kniegelenk), Verdachtsdiagnose, Unfallhergang bei Trauma, bisherige Bildgebung, Dringlichkeit, Kontraindikationen (Metall-Implantate, Platzangst bei MRT)
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Reduktion der Koordinationszeit um 70%<br>
                    ✓ Weniger Rückfragen vom Radiologiezentrum<br>
                    ✓ Automatische Überweisung-Dokumentation
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M32 20v12l8 4" stroke="#F57C00" stroke-width="3" stroke-linecap="round"/>
                        <circle cx="32" cy="32" r="10" stroke="#F57C00" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Post-OP-Nachsorge & Verlaufskontrolle</h3>
                <p class="section-4-description">
                    <strong>Strukturierte Abfrage von:</strong> Schmerzniveau (VAS-Skala), Bewegungsumfang, Schwellung/Rötung, Wundheilung, Belastbarkeit, Komplikationszeichen, aktuelle Medikation, Fragen an den Arzt
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 65% weniger Post-OP-Anrufe<br>
                    ✓ Bessere Dokumentation des Heilungsverlaufs<br>
                    ✓ Frühzeitige Erkennung von Komplikationen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <path d="M28 30h8M32 26v8" stroke="#388E3C" stroke-width="2"/>
                        <circle cx="32" cy="32" r="8" stroke="#388E3C" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Physiotherapie & Reha-Verordnungen</h3>
                <p class="section-4-description">
                    <strong>Automatisch erfasst:</strong> Hauptdiagnose, betroffenes Gelenk/Körperteil, gewünschte Therapieform (KG, MT, Lymphdrainage), Anzahl Sitzungen, Dringlichkeit, bisherige Therapien, OP-Datum (bei Post-OP)
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Alle Angaben vollständig<br>
                    ✓ Keine Rückfragen nötig<br>
                    ✓ Direkte ICD-10-Zuordnung möglich
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <rect x="26" y="24" width="12" height="16" rx="1" fill="#C2185B"/>
                        <rect x="28" y="28" width="8" height="2" fill="#FFF"/>
                        <rect x="28" y="32" width="6" height="2" fill="#FFF"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Befunde & Bildergebnisse abholen</h3>
                <p class="section-4-description">
                    <strong>Patient wird informiert über:</strong> Befundstatus (in Bearbeitung/fertig), Abholmöglichkeiten (persönlich, Post, E-Mail), Besprechungstermin nötig?, nächste Schritte. System sendet automatische Erinnerungen.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 80% weniger "Ist mein Befund fertig?"-Anrufe<br>
                    ✓ DSGVO-konforme Befundübermittlung<br>
                    ✓ Automatische Terminvorschläge für Besprechung
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <path d="M26 28h12M26 32h12M26 36h8" stroke="#7B1FA2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Hilfsmittel & Orthesen beantragen</h3>
                <p class="section-4-description">
                    <strong>Strukturierte Erfassung:</strong> Art des Hilfsmittels (Bandage, Orthese, Einlagen, Gehhilfen), Grund der Verordnung, Körperseite, Größenangaben, Sanitätshaus-Präferenz, Kostenübernahme geklärt?
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Vollständige Angaben für Sanitätshäuser<br>
                    ✓ Schnellere Versorgung der Patienten<br>
                    ✓ Weniger Genehmigungsverzögerungen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF9C4"/>
                        <path d="M32 24v16M24 32h16" stroke="#F9A825" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Sportorthopädische Beratung</h3>
                <p class="section-4-description">
                    <strong>Speziell für Sportler:</strong> Sportart, Leistungsniveau, Trainingszustand, akute Verletzung vs. Überlastung, bisherige Behandlungen, Wettkampf-Termine, Return-to-Sport-Zeitrahmen
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Schnellere Ersteinschätzung<br>
                    ✓ Priorisierung von Akutverletzungen<br>
                    ✓ Bessere Therapieplanung möglich
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>"In orthopädischen Praxen sind 60% aller Anfragen koordinativ – genau diese übernimmt MediDesk® automatisiert und strukturiert."</p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Wie sieht das konkret für meine Praxis aus?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Benefits Section - Orthopädie-spezifische Vorteile -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für orthopädische Praxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer Orthopädie-Praxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Effizienz, Patientenzufriedenheit und Teambelastung
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-chart-line" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bildgebung-Koordination wird hocheffizient</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> 15-20 Anrufe pro Tag für Überweisungen (je 8-12 Minuten) = 2-4 Stunden täglich.<br>
                        <strong>Nachher:</strong> Online-Anfragen mit allen Details, gebündelte Bearbeitung in 30-45 Minuten.<br>
                        <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">Zeitersparnis von 90-180 Minuten täglich</span> – Ihr Team kann sich auf anwesende Patienten konzentrieren.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-heart-pulse" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Post-OP-Nachsorge wird strukturiert & nachvollziehbar</h3>
                    <p class="section-5-feature-description">
                        Patienten berichten eigenständig über ihren Heilungsverlauf – mit standardisierten Fragen (Schmerz-Skala, Beweglichkeit, Wundheilung). Sie sehen auf einen Blick den Status aller Post-OP-Patienten. <strong>Komplikationen werden früher erkannt</strong>, weil Patienten regelmäßig strukturiert berichten statt nur bei Problemen anzurufen. <span style="color: #388E3C; font-weight: 700;">Bessere medizinische Outcomes bei weniger administrativem Aufwand.</span>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-hands-holding" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bessere Zusammenarbeit mit Physiotherapeuten</h3>
                    <p class="section-5-feature-description">
                        Alle Informationen für Physio-Verordnungen sind vollständig erfasst: Diagnose, betroffenes Gelenk, OP-Datum, gewünschte Therapie. <strong>Physiotherapeuten erhalten alle nötigen Infos</strong>, können direkt starten. Bei Rückfragen können sie digital nachhaken. Dies beschleunigt den Therapiebeginn um durchschnittlich <span style="color: #F9A825; font-weight: 700;">3-5 Tage</span> und verbessert die Behandlungsergebnisse.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-file-medical" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Lückenlose Dokumentation aller Anfragen</h3>
                    <p class="section-5-feature-description">
                        Jede Patientenanfrage ist vollständig dokumentiert mit Zeitstempel, Anfrageinhalt und Bearbeitungsstatus. Bei Rückfragen oder rechtlichen Klärungen haben Sie <strong>alles schwarz auf weiß</strong>. Besonders wichtig bei Arbeitsunfällen und Gutachten-Fällen. <span style="color: #7B1FA2; font-weight: 700;">Rechtssicherheit durch lückenlose Nachvollziehbarkeit.</span>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-person-running" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Ideal für Sportorthopädie & internationale Patienten</h3>
                    <p class="section-5-feature-description">
                        Vollständig auf <strong>Deutsch & Englisch</strong> verfügbar – ideal für Sportorthopädie mit internationalen Athleten. Medizinische Fachbegriffe werden korrekt übersetzt. Sportler können ihre Verletzung detailliert beschreiben (Sportart, Trainingsbelastung, Wettkampf-Termine). <span style="color: #F57C00; font-weight: 700;">Schnellere Return-to-Sport-Entscheidungen durch bessere Datenlage.</span>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);">
                    <i class="fa-solid fa-clock-rotate-left" style="color: #00796B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Mehr Zeit für die eigentliche ärztliche Tätigkeit</h3>
                    <p class="section-5-feature-description">
                        Durchschnittlich gewinnen Orthopäden mit MediDesk® <strong>60-90 Minuten pro Tag</strong> für Patientengespräche, Untersuchungen und Behandlungen zurück. Weniger administrative Unterbrechungen bedeuten: Bessere Konzentration bei Untersuchungen, ausführlichere Aufklärungsgespräche möglich, mehr Zeit für komplexe Fälle. <span style="color: #00796B; font-weight: 700;">Sie sind wieder Arzt – nicht Koordinator.</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>"Orthopädische Praxen mit MediDesk® haben 70% weniger Koordinations-Stress und gleichzeitig zufriedenere Patienten."</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Jetzt persönliche Beratung vereinbaren</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Integration Section - Orthopädie-spezifisch -->
    <section class="section-6-fachrichtungen">
        <div class="section-6-header">
            <h2>Integration in Ihren <span class="highlight-text-bg2">orthopädischen Praxis-Alltag</span></h2>
            <p class="section-6-subline">
                MediDesk® fügt sich nahtlos in Ihre bestehenden Abläufe und Systeme ein
            </p>
        </div>

        <div class="section-6-table-wrapper">
            <table class="section-6-table">
                <tbody>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);"><i class="fa-solid fa-laptop-medical" style="color: #1976D2;"></i></span></td>
                        <td><span class="section-6-table-fach">Praxisverwaltungssysteme (PVS)</span></td>
                        <td><span class="section-6-table-desc">Arbeitet unabhängig oder auf Wunsch mit PVS-Integration (Medatixx, CGM, Compugroup). Termine können manuell oder automatisch übernommen werden.</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);"><i class="fa-solid fa-x-ray" style="color: #388E3C;"></i></span></td>
                        <td><span class="section-6-table-fach">Radiologiezentren & Bildgebung</span></td>
                        <td><span class="section-6-table-desc">Direkte Koordination mit Radiologiezentren möglich. Überweisungen werden strukturiert weitergeleitet. Patienten erhalten Terminerinnerungen.</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);"><i class="fa-solid fa-dumbbell" style="color: #F57C00;"></i></span></td>
                        <td><span class="section-6-table-fach">Physiotherapie-Praxen</span></td>
                        <td><span class="section-6-table-desc">Verordnungen können digital an kooperierende Physio-Praxen weitergeleitet werden. Verlaufsberichte fließen zurück zur orthopädischen Praxis.</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-hospital" style="color: #7B1FA2;"></i></span></td>
                        <td><span class="section-6-table-fach">Kliniken & OP-Zentren</span></td>
                        <td><span class="section-6-table-desc">Pre-OP-Checklisten können digital ausgefüllt werden. Post-OP-Verläufe werden strukturiert dokumentiert. Ambulante OP-Termine koordinierbar.</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-crutch" style="color: #C2185B;"></i></span></td>
                        <td><span class="section-6-table-fach">Sanitätshäuser & Orthopädietechnik</span></td>
                        <td><span class="section-6-table-desc">Hilfsmittel-Verordnungen mit allen nötigen Details. Direkte Weiterleitung an Sanitätshäuser möglich. Versorgungsstatus nachverfolgbar.</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);"><i class="fa-solid fa-shield-heart" style="color: #F9A825;"></i></span></td>
                        <td><span class="section-6-table-fach">Berufsgenossenschaften (BG)</span></td>
                        <td><span class="section-6-table-desc">Arbeitsunfälle werden mit allen erforderlichen Angaben erfasst. D-Arzt-Berichte können vorbereitet werden. BG-Anfragen strukturiert dokumentiert.</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-6-footer">
            <p class="section-6-footer-text">
                MediDesk® wurde gemeinsam mit orthopädischen Praxen entwickelt und deckt alle Besonderheiten ab.
            </p>
            
            <div class="section-6-cta-container">
                <a href="#demo" class="btn btn-primary">Live-Demo für Orthopädie ansehen</a>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Success Stories Section -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So nutzen <span class="highlight-text-bg">orthopädische Praxen</span> MediDesk®</h2>
            <p class="section-7-subline">Reale Anwendungsfälle aus der Praxis</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-hospital"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Orthopädische Gemeinschaftspraxis (4 Ärzte)</h3>
                            <p class="section-7-step-description">
                                <strong>Ausgangslage:</strong> Täglich 80-100 Anrufe, davon 60% für Bildgebung-Koordination und Post-OP-Nachfragen.<br>
                                <strong>Ergebnis nach 3 Monaten:</strong> 72% weniger Koordinations-Anrufe. MFA-Team von 4 auf 3 reduzierbar (Mitarbeiterin in Elternzeit nicht ersetzt). Patientenzufriedenheit gestiegen (Bewertungen 4,2 → 4,7 Sterne).
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
                            <i class="fa-solid fa-person-running"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Sportorthopädische Praxis mit internationalen Patienten</h3>
                            <p class="section-7-step-description">
                                <strong>Besonderheit:</strong> 40% nicht-deutschsprachige Patienten (Profisportler, internationale Athleten).<br>
                                <strong>Lösung:</strong> Deutsch/Englisch-Formulare ermöglichen direkte Kommunikation. Medizinische Fachbegriffe korrekt übersetzt.<br>
                                <strong>Ergebnis:</strong> Keine Sprachbarrieren mehr. Athleten beschreiben Verletzungen präziser. Return-to-Sport-Entscheidungen besser fundiert.
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
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Endoprothetik-Schwerpunktpraxis</h3>
                            <p class="section-7-step-description">
                                <strong>Herausforderung:</strong> Komplexe Post-OP-Nachsorge nach Hüft- und Knie-TEPs. Viele Nachfragen zu Schmerzen, Belastung, Physiotherapie.<br>
                                <strong>MediDesk-Lösung:</strong> Strukturierte wöchentliche Post-OP-Checks mit standardisierten Fragen (Schmerzskala, ROM, Mobilität).<br>
                                <strong>Ergebnis:</strong> Komplikationen werden früher erkannt. Patienten fühlen sich besser betreut. Weniger notwendige Notfalltermine.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kontakt" class="btn btn-primary">Könnte das auch in meiner Praxis funktionieren?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- FAQ Section - Orthopädie-spezifisch -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Orthopäden</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie hilft MediDesk® bei der Koordination von Bildgebung (Röntgen, MRT, CT)?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® erfasst alle relevanten Informationen für Bildgebungs-Anfragen strukturiert: Art der Untersuchung (Röntgen, MRT, CT), betroffene Körperregion (z.B. "linkes Kniegelenk"), Verdachtsdiagnose, Unfallhergang bei Trauma, bisherige Bildgebung, Dringlichkeit, Kontraindikationen (Metall-Implantate, Herzschrittmacher, Platzangst). Die Überweisungen werden automatisch dokumentiert, Termine bei Radiologiezentren können koordiniert werden. Nach der Untersuchung erinnert das System automatisch an die Befundbesprechung. Dies reduziert den Koordinationsaufwand von durchschnittlich 8-12 Minuten pro Anfrage auf 2-3 Minuten – eine <strong>Zeitersparnis von 60-75%</strong>.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Eignet sich MediDesk® für die Post-OP-Nachsorge nach Operationen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, speziell dafür optimiert. Nach OP (z.B. Arthroskopie, Endoprothese, Frakturversorgung) können Patienten strukturiert über ihren Heilungsverlauf berichten: Schmerzniveau (VAS-Skala 0-10), Bewegungsumfang, Schwellung/Rötung, Wundheilung, Belastbarkeit, Komplikationszeichen. Sie als Arzt sehen auf einen Blick den Post-OP-Status aller Patienten und können gezielt reagieren. Das System kann automatisch an Verlaufsberichte erinnern (z.B. 1 Woche, 2 Wochen, 6 Wochen post-OP). <strong>Ergebnis:</strong> Durchschnittlich 65% weniger Post-OP-Telefonate bei gleichzeitig besserer und lückenloserer Dokumentation. Komplikationen werden früher erkannt.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die Koordination mit Physiotherapeuten?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patienten füllen online das Physio-Verordnungs-Formular aus mit allen nötigen Angaben: Hauptdiagnose, betroffenes Gelenk/Körperteil, gewünschte Therapieform (KG, MT, Lymphdrainage, etc.), Anzahl Sitzungen, OP-Datum (bei Post-OP), bisherige Therapien, Dringlichkeit. Sie als Arzt prüfen die Angaben und können die Verordnung direkt an kooperierende Physiotherapie-Praxen weiterleiten (optional). <strong>Vorteil:</strong> Physiotherapeuten erhalten alle Informationen auf einen Blick, können sofort starten. Therapiebeginn beschleunigt sich um durchschnittlich 3-5 Tage. Bessere Behandlungsergebnisse durch frühere Therapie.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Kann ich Akut-Patienten (z.B. Sportverletzungen) priorisieren?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. Bei der Online-Anfrage geben Patienten an: Akute Verletzung/Schmerzen? Seit wann? Unfallhergang? Arbeitsunfall? Das System markiert dringende Fälle farblich (z.B. rot für "akuter Schmerz seit heute"). Sie sehen sofort, welche Anfragen zeitkritisch sind und welche Routinekontrolle. <strong>Besonders bei Sportorthopädie wichtig:</strong> Verletzungen von Leistungssportlern vor Wettkämpfen werden automatisch priorisiert. Routinekontrollen und präventive Checks können in ruhigeren Zeiten bearbeitet werden.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert MediDesk® auch bei älteren Patienten (Endoprothetik)?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, die Benutzeroberfläche ist bewusst seniorenfreundlich gestaltet: Große Schaltflächen, klare Sprache, keine komplizierten Menüs. Viele ältere Patienten (60-80 Jahre) nutzen MediDesk® erfolgreich. Bei unsicheren Patienten helfen oft Angehörige (Kinder, Enkel) beim ersten Mal. <strong>Wichtig:</strong> Das Telefon bleibt verfügbar – MediDesk® ist eine Ergänzung, kein Ersatz. In der Praxis: Etwa 60-70% der Patienten (auch ältere) stellen Anfragen online. Die restlichen 30-40% rufen weiterhin an – aber Ihr Team hat jetzt Zeit für diese Gespräche.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie wird bei Arbeitsunfällen (D-Arzt-Fälle) vorgegangen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® erfasst alle für BG-Fälle relevanten Informationen: Arbeitsunfall ja/nein, Unfallhergang detailliert, Datum/Uhrzeit, Arbeitgeber, bereits erstversorgt?, betroffene Körperregion, Verletzungsart. Als D-Arzt-zugelassener Orthopäde können Sie diese Informationen direkt in Ihren D-Arzt-Bericht übernehmen. <strong>Vorteil:</strong> Alle Angaben sind lückenlos dokumentiert – wichtig für BG-Gutachten und rechtliche Absicherung. Besonders bei späteren Nachfragen haben Sie alles schwarz auf weiß mit Zeitstempel und Patientenangaben.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Ist MediDesk® auch für Sportorthopädie mit internationalen Athleten geeignet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Absolut – das ist sogar eine Stärke von MediDesk®. Die komplette Benutzeroberfläche ist auf <strong>Deutsch und Englisch</strong> verfügbar (weitere Sprachen auf Anfrage). Medizinische Fachbegriffe werden korrekt übersetzt. Sportler können ihre Verletzung detailliert beschreiben: Sportart, Leistungsniveau (Hobby/Amateur/Profi), Trainingszustand, Wettkampf-Termine, Return-to-Sport-Zeitrahmen gewünscht, bisherige Verletzungen. <strong>Vorteil für Sportorthopäden:</strong> Bessere Datenlage für Return-to-Sport-Entscheidungen. Keine Sprachbarrieren mehr. Internationale Athleten fühlen sich besser verstanden.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell ist MediDesk® in meiner orthopädischen Praxis einsatzbereit?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        In der Regel innerhalb von <strong>48 Stunden</strong>. <br>
                        <strong>Tag 1:</strong> Erstgespräch (30-45 Min) – wir verstehen Ihre Praxis-Abläufe, schalten relevante Formulare frei (Bildgebung, Post-OP, Physio, etc.), konfigurieren orthopädie-spezifische Einstellungen.<br>
                        <strong>Tag 2:</strong> Website-Integration (15-20 Min) – ein kleiner Code-Snippet, fertig. Team-Schulung (60 Min) – Ihr Team lernt das Dashboard, Anfragen-Bearbeitung, Priorisierung.<br>
                        <strong>Ab Tag 3:</strong> Sie sind einsatzbereit. Keine IT-Expertise nötig, wir begleiten Sie die ersten Wochen eng.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für meine orthopädische Praxis?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Preise nach Praxisgröße:</strong><br>
                        • 1-2 Orthopäden: 119,00€/Monat<br>
                        • 3-4 Orthopäden: 179,00€/Monat<br>
                        • 5-6 Orthopäden: 298,00€/Monat<br>
                        • Größere Praxen/MVZ: individuelles Angebot<br>
                        (alle Preise zzgl. MwSt.)<br><br>
                        <strong>Inklusive:</strong> Einrichtung, Schulung, alle Formulare (Bildgebung, Post-OP, Physio, etc.), Updates, Support, DSGVO-Paket, unbegrenzte Anfragen, 30 Tage Geld-zurück-Garantie.<br><br>
                        <strong>Rechenbeispiel:</strong> Wenn Ihr Team täglich 60-90 Minuten durch MediDesk® einspart, entspricht das etwa 15-25 Stunden pro Monat – mehr als die Kosten einer halben MFA-Stelle.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine strukturiertere Orthopädie-Praxis?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase – ohne Risiko, ohne Vertragsbindung, mit persönlicher Einrichtung und Schulung
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Live-Demo für Orthopädie</span>
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