<?php
// SEO Configuration for MVZ & Kliniken
$page_title = "Online-Rezeption für MVZ & Kliniken - MediDesk® | Digitale Patientenverwaltung für Medizinische Versorgungszentren";
$page_description = "Die skalierbare Online-Rezeption für MVZ, Kliniken und große Praxisverbünde. Multi-Standort-Management, interdisziplinäre Koordination. DSGVO-konform, in 48h startklar.";
$page_keywords = "Online-Rezeption MVZ, Digitale Klinik-Verwaltung, MVZ Terminverwaltung, Multi-Standort Praxissoftware, MediDesk MVZ";
$page_canonical = "https://medideskr.cloud/fachrichtungen/mvz_kliniken/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for MVZ & Kliniken -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Rezeption für MVZ & Kliniken",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Skalierbare digitale Online-Rezeption für MVZ, Kliniken und Praxisverbünde. Multi-Standort-Management, interdisziplinäre Koordination, zentrale Steuerung.",
  "url": "https://medideskr.cloud/fachrichtungen/mvz_kliniken/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Multi-Standort-Management",
    "Interdisziplinäre Koordination",
    "Zentrale Patientenverwaltung",
    "Team-Management mit Rollenrechten",
    "Großvolumen-Terminverwaltung",
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

<!-- Schema.org Structured Data - FAQPage for MVZ & Kliniken -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® MVZ und Kliniken?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist skalierbar für große Einrichtungen. Alle Standorte werden zentral verwaltet, interdisziplinäre Terminkoordination wird automatisiert und 500+ Patientenanfragen pro Tag werden effizient bearbeitet."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert das Multi-Standort-Management?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Jeder Standort hat eigenen Kalender, Sprechzeiten und Team, aber Sie haben zentrale Übersicht. Patienten wählen den Standort, Termine werden automatisch zugeordnet. Einheitliche Standards über alle Standorte. 75% weniger Koordinationsaufwand."
      }
    },
    {
      "@type": "Question",
      "name": "Bewältigt MediDesk® große Patientenvolumen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist für 500-1000+ Patientenanfragen täglich ausgelegt. Priorisierung nach Dringlichkeit, automatische Team-Zuweisung, Warteschlangen-Management und Echtzeit-Auslastungsmonitoring sind inklusive."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® interdisziplinäre Koordination?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten können fachübergreifend koordiniert werden. Wenn ein Patient Kardiologie und Diabetologie braucht, werden beide Termine intelligent geplant. Interne Überweisungen funktionieren nahtlos."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es Team-Management mit Rollenrechten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, verschiedene Benutzerrollen (Admin, Arzt, MFA, Empfang) mit unterschiedlichen Berechtigungen. Jeder sieht nur, was für seine Rolle relevant ist. Audit-Logs dokumentieren alle Zugriffe."
      }
    },
    {
      "@type": "Question",
      "name": "Können mehrere PVS-Systeme angebunden werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, bei MVZ mit verschiedenen PVS-Systemen pro Standort können alle angebunden werden. MediDesk® fungiert als zentrale Koordinationsplattform. HL7 und FHIR werden unterstützt."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für Kliniken?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® erfüllt alle Anforderungen für Kliniken und MVZ: EU-Hosting, Ende-zu-Ende-Verschlüsselung, KV-Zertifizierung, Audit-Logs und Zwei-Faktor-Authentifizierung. Ein AVV ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für ein MVZ?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise sind volumenabhängig und beginnen bei 119 EUR pro Monat für kleine Einheiten. Für größere MVZ und Kliniken gibt es individuelle Enterprise-Angebote. Kontaktieren Sie uns für ein Angebot."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einem MVZ eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Ersteinrichtung dauert 48 Stunden. Für komplexe MVZ mit Multi-Standort und PVS-Anbindung planen wir 2-4 Wochen für die vollständige Integration mit Schulung."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es zentrale Auswertungen und Berichte?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, das Dashboard zeigt standortübergreifende Statistiken: Terminvolumen, Auslastung pro Arzt und Standort, Wartezeiten, häufigste Anfragen. Exportfunktion für Controlling und QM verfügbar."
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
  "serviceType": "Digitale Online-Rezeption für MVZ & Kliniken",
  "name": "MediDesk® für MVZ und Kliniken",
  "description": "Skalierbare digitale Lösung für Medizinische Versorgungszentren und Kliniken mit Multi-Standort-Management, interdisziplinärer Koordination und zentraler Steuerung.",
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
    "audienceType": "MVZ, Medizinische Versorgungszentren, Kliniken, Krankenhäuser, Praxisverbünde, Polikliniken"
  }
}
</script>
</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section - MVZ & Kliniken-spezifisch -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">MVZ & Kliniken</span></h1>
                        <p class="subheading">
                            Die skalierbare Lösung für Medizinische Versorgungszentren, Kliniken und große Praxisverbünde: Multi-Standort-Management, interdisziplinäre Koordination, zentrale Steuerung – bewältigen Sie 500+ Patientenanfragen täglich
                        </p>

                        <ul class="features-list">
                            <li><span>Multi-Standort-Management</span> – alle Standorte zentral verwalten</li>
                            <li><span>Interdisziplinäre Koordination</span> – Innere, Kardio, Labor etc. vernetzt</li>
                            <li><span>Skalierbar für große Volumen</span> – 500-1000+ Anfragen/Tag problemlos</li>
                            <li><span>Team-Management & Rollenrechte</span> – 20+ Mitarbeiter organisiert</li>
                            <li><span>Bis zu 80% weniger Telefonanrufe</span> – Entlastung für Ihre Zentrale</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Live-Demo für MVZ</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für MVZ & Kliniken">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section - MVZ & Kliniken-spezifische Herausforderungen -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in <span>MVZ & Kliniken</span></span>
                <h2>Diese <span class="highlight-text-red">Probleme</span> kennen Sie aus Ihrem MVZ- und Klinik-Alltag</h2>
                <p class="subline">
                    Große medizinische Einrichtungen haben besondere Herausforderungen: Mehrere Standorte, verschiedene Fachrichtungen, hohes Patientenvolumen, komplexe Team-Strukturen. Die Koordination wird schnell zum Engpass.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-building"></i>
                    </div>
                    <h3>Multi-Standort-Koordination ist chaotisch</h3>
                    <p>5 Standorte, jeder mit eigenem Kalender, eigenen Sprechzeiten – Patienten rufen beim falschen Standort an, Termine werden doppelt vergeben, Übersicht fehlt.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Telefonzentrale ist überlastet</h3>
                    <p>300-500 Anrufe täglich, alle laufen über eine Zentrale – lange Wartezeiten, genervte Patienten, gestresstes Team. "Ihre Anfrage ist uns wichtig..."</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                    <h3>Interdisziplinäre Zusammenarbeit stockt</h3>
                    <p>Patient braucht Kardio-Termin + EKG + Labor – muss dreimal anrufen, Termine passen nicht zusammen, Koordination ist mühsam.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Team-Management bei 20+ Mitarbeitern</h3>
                    <p>Wer ist zuständig? Wer sieht welche Anfragen? Vertretungsregelungen? Urlaubsplanung? Bei großen Teams wird es schnell unübersichtlich.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-chart-line"></i>
                    </div>
                    <h3>Keine zentrale Auswertung möglich</h3>
                    <p>Wie viele Termine pro Standort? Welche Fachrichtung ist ausgelastet? Wo sind Engpässe? Daten liegen verstreut, Auswertung ist aufwendig.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-random"></i>
                    </div>
                    <h3>Uneinheitliche Standards zwischen Standorten</h3>
                    <p>Jeder Standort macht es anders – verschiedene Formulare, verschiedene Abläufe, verschiedene Kommunikation. Patienten sind verwirrt.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>MVZ und Kliniken brauchen skalierbare, zentral steuerbare Lösungen</h4>
                <p>
                    Ab 3+ Standorten oder 10+ Ärzten wird manuelle Koordination ineffizient. MediDesk® bietet die nötige Struktur und Übersicht für große medizinische Einrichtungen.
                </p>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Answer Section - MVZ & Kliniken-spezifische Lösung -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    So funktioniert <span>digitale MVZ- & Klinik-Koordination</span>
                </span>
                <h2>MediDesk® für <span class="highlight-text-green">MVZ & Kliniken</span></h2>
                <p class="subline">
                    Zentrale Verwaltung, dezentrale Nutzung – alle Standorte und Fachrichtungen in einem System
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-map-marked-alt"></i>
                    </div>
                    <p class="answer-card-step">Patient wählt Standort & Fachrichtung</p>
                    <h3>Intelligente Standort-Auswahl</h3>
                    <p>Patient sieht alle Standorte, wählt den passenden (z.B. "MVZ Berlin-Mitte"), dann Fachrichtung (Innere, Kardio, Labor etc.) – Termin wird automatisch zugeordnet</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-network-wired"></i>
                    </div>
                    <p class="answer-card-step">Zentrale Koordination & Zuweisung</p>
                    <h3>Anfragen intelligent verteilen</h3>
                    <p>Alle Anfragen laufen zentral ein, werden automatisch oder manuell dem richtigen Team zugewiesen. Prioritäten werden gesetzt (Notfall → dringend → Routine)</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-chart-pie"></i>
                    </div>
                    <p class="answer-card-step">Zentrale Auswertung & Steuerung</p>
                    <h3>Übersicht über alle Standorte</h3>
                    <p>Dashboard zeigt: Terminvolumen pro Standort, Auslastung pro Fachrichtung, Wartezeiten, Patientenzufriedenheit – datenbasierte Steuerung möglich</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Konkrete Zeitersparnis in MVZ & Kliniken</h4>
                <p><strong>Telefonzentrale:</strong> Von 300-500 Anrufen auf 80-150 reduziert = 4-8 Stunden täglich gespart<br>
                <strong>Standort-Koordination:</strong> 75% weniger Aufwand durch zentrale Verwaltung<br>
                <strong>Interdisziplinäre Termine:</strong> Von 15-20 Min Koordination auf 3-5 Min</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt 30 Tage kostenlos testen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Use Cases Section - MVZ & Kliniken-spezifische Anwendungsfälle -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle</span>
            <h2>Diese <span class="highlight-text-bg2">Funktionen</span> brauchen MVZ & Kliniken</h2>
            <p class="section-4-subline">Speziell für große medizinische Einrichtungen entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <rect x="20" y="24" width="8" height="8" fill="#1976D2"/>
                        <rect x="36" y="24" width="8" height="8" fill="#1976D2"/>
                        <rect x="20" y="36" width="8" height="8" fill="#1976D2"/>
                        <rect x="36" y="36" width="8" height="8" fill="#1976D2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Multi-Standort-Management</h3>
                <p class="section-4-description">
                    <strong>Alle Standorte zentral verwalten:</strong> MVZ mit 3, 5 oder 10 Standorten – jeder Standort hat eigenen Kalender, eigene Sprechzeiten, eigenes Team, aber zentrale Übersicht. Patient wählt bei Buchung: "MVZ Berlin-Mitte", "MVZ Berlin-Spandau", "MVZ Berlin-Köpenick". Termine werden automatisch dem richtigen Standort zugeordnet. Einheitliche Formulare und Abläufe über alle Standorte. Zentrale Auswertungen: Terminvolumen, Auslastung, Wartezeiten pro Standort.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 75% weniger Koordinationsaufwand<br>
                    ✓ Keine Doppelbuchungen mehr<br>
                    ✓ Einheitliche Standards überall
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <circle cx="25" cy="25" r="5" fill="#7B1FA2"/>
                        <circle cx="39" cy="25" r="5" fill="#7B1FA2"/>
                        <circle cx="25" cy="39" r="5" fill="#7B1FA2"/>
                        <circle cx="39" cy="39" r="5" fill="#7B1FA2"/>
                        <path d="M25 30v4M39 30v4M30 39h4" stroke="#7B1FA2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Interdisziplinäre Terminkoordination</h3>
                <p class="section-4-description">
                    <strong>Mehrere Fachrichtungen vernetzen:</strong> Patient braucht Kardiologen + EKG + Labor + Belastungs-EKG – alles koordiniert in einer Anfrage. System schlägt passende Termine vor (z.B. "Kardio 9:00, EKG 9:30, Labor 10:00"). Fachrichtungen können Patienten intern weiterleiten: "Bitte noch Labor-Termin buchen". Behandlungspfade hinterlegen (z.B. "Bei Diabetes: erst Innere, dann Diabetologe, dann Ernährungsberatung"). Automatische Dokumenten-Weitergabe zwischen Fachbereichen.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Koordinationszeit von 15-20 Min → 3-5 Min<br>
                    ✓ Weniger Patientenanrufe<br>
                    ✓ Bessere interdisziplinäre Zusammenarbeit
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <rect x="24" y="24" width="16" height="3" fill="#F57C00"/>
                        <rect x="24" y="30" width="16" height="3" fill="#F57C00"/>
                        <rect x="24" y="36" width="12" height="3" fill="#F57C00"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Team-Management & Rollenrechte</h3>
                <p class="section-4-description">
                    <strong>20+ Mitarbeiter organisieren:</strong> Verschiedene Rollen (Admin, Koordinator, MFA, Arzt, Labor) mit unterschiedlichen Rechten. MFA Standort A sieht nur Anfragen von Standort A, Zentrale sieht alle Standorte. Automatische Zuweisung nach Team oder Fachrichtung. Vertretungsregelungen hinterlegen (bei Urlaub übernimmt Kollege XY). Aufgaben delegieren: "MFA bitte Überweisungen ausstellen". Lesebestätigungen: Wer hat welche Anfrage gesehen?
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Klare Zuständigkeiten<br>
                    ✓ Weniger "Wer macht das?"-Fragen<br>
                    ✓ Vertretungen geregelt
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <path d="M20 32l8-8v16zM44 32l-8-8v16z" fill="#388E3C"/>
                        <rect x="28" y="28" width="8" height="8" fill="#388E3C"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Skalierbar für große Patientenvolumen</h3>
                <p class="section-4-description">
                    <strong>500-1000+ Anfragen/Tag bewältigen:</strong> System bleibt schnell und übersichtlich auch bei sehr hohem Volumen. Priorisierung nach Dringlichkeit (Notfall-Marker rot, dringend gelb, Routine grün). Warteschlangen-Management für Stoßzeiten (8-10 Uhr morgens). Automatische Lastverteilung zwischen Standorten ("Standort A voll → Standort B vorschlagen"). Auslastungs-Monitoring in Echtzeit. MVZ mit 3000+ Patienten/Woche nutzen MediDesk erfolgreich.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Keine Performance-Probleme<br>
                    ✓ Übersichtlich trotz hohem Volumen<br>
                    ✓ Intelligente Priorisierung
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <rect x="22" y="26" width="20" height="2" fill="#C2185B"/>
                        <rect x="22" y="32" width="20" height="2" fill="#C2185B"/>
                        <rect x="22" y="38" width="14" height="2" fill="#C2185B"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Zentrale Auswertungen & KPIs</h3>
                <p class="section-4-description">
                    <strong>Datenbasierte Steuerung:</strong> Dashboard zeigt wichtige Kennzahlen: Terminvolumen pro Standort/Fachrichtung, durchschnittliche Wartezeit auf Termine, Patientenzufriedenheit (Bewertungen), Auslastung der Ärzte, Anfrage-Typen (Termine, Rezepte, Befunde), No-Show-Rate. Vergleiche zwischen Standorten ("Warum hat Standort B 20% weniger No-Shows?"). Export für weitere Analysen. Frühwarnsystem bei Überlastung ("Standort C hat 200+ offene Anfragen").
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Transparenz über alle Standorte<br>
                    ✓ Engpässe frühzeitig erkennen<br>
                    ✓ Datenbasierte Entscheidungen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF9C4"/>
                        <path d="M32 20v12M32 32l8 4M32 32l-8 4" stroke="#F9A825" stroke-width="2"/>
                        <circle cx="32" cy="32" r="10" stroke="#F9A825" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Einheitliche Standards über alle Standorte</h3>
                <p class="section-4-description">
                    <strong>Zentral definieren, überall umsetzen:</strong> Formulare, Abläufe, Kommunikation werden zentral festgelegt und gelten für alle Standorte. "Vorsorge-Recall nach 12 Monaten" gilt überall einheitlich. Neue Fachrichtung hinzufügen → automatisch an allen Standorten verfügbar. Corporate Identity wahren: Logo, Farben, Tonalität einheitlich. Schulungsunterlagen zentral hinterlegen. Änderungen werden an allen Standorten gleichzeitig wirksam. Patienten erleben überall die gleiche Qualität.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Einheitliche Patientenerfahrung<br>
                    ✓ Weniger Verwirrung<br>
                    ✓ Einfachere Schulung neuer Mitarbeiter
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>"Ab 3+ Standorten oder 500+ Patientenanfragen täglich wird manuelle Koordination zum Engpass. MediDesk® schafft die nötige Struktur und Übersicht."</p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Wie könnte MediDesk® in unserem MVZ/Klinik aussehen?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Benefits Section - MVZ & Kliniken-spezifische Vorteile -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für MVZ & Kliniken</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrem MVZ oder Ihrer Klinik</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Effizienz, Koordination und Patientenzufriedenheit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-building" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Multi-Standort-Verwaltung wird einfach und übersichtlich</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> Jeder Standort arbeitet isoliert. Keine Übersicht, wer wie ausgelastet ist. Patienten rufen beim falschen Standort an, werden weitergeleitet. Doppelbuchungen kommen vor. Keine einheitlichen Standards.<br>
                        <strong>Nachher mit MediDesk®:</strong> Alle Standorte zentral in einem System. Sie sehen Auslastung aller Standorte auf einen Blick. Patienten wählen selbst den passenden Standort online. Keine Weiterleitungen mehr. Einheitliche Formulare und Abläufe überall.<br>
                        <span style="color: #1976D2; font-weight: 700;">Ergebnis: 75% weniger Koordinationsaufwand zwischen Standorten</span>, keine Doppelbuchungen, zufriedenere Patienten.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Telefonzentrale wird massiv entlastet</h3>
                    <p class="section-5-feature-description">
                        <strong>Das Problem:</strong> MVZ und Kliniken haben oft 300-500 Anrufe täglich, alle über eine Zentrale. Lange Wartezeiten (5-15 Minuten), genervte Patienten, überlastetes Team. "Ihre Anfrage ist uns wichtig, bitte bleiben Sie in der Leitung..."<br>
                        <strong>MediDesk®-Lösung:</strong> 70-80% der Anfragen laufen online: Termine, Befunde, Rezepte, Überweisungen. Anrufe reduzieren sich auf 80-150 täglich (nur noch Notfälle und komplexe Fälle).<br>
                        <strong>Gewinn:</strong> <span style="color: #7B1FA2; font-weight: 700;">4-8 Stunden täglich gespart</span> = mehr als eine Vollzeit-Stelle. Kürzere Wartezeiten, zufriedenere Patienten, entspannteres Team.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-stethoscope" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Interdisziplinäre Zusammenarbeit funktioniert reibungslos</h3>
                    <p class="section-5-feature-description">
                        Patient braucht Kardiologen + EKG + Labor + Belastungs-EKG – <strong>vorher musste dreimal angerufen werden</strong>, Termine passten oft nicht zusammen, Patient musste mehrfach kommen.<br>
                        <strong>Mit MediDesk®:</strong> Patient stellt eine Anfrage "Kardio-Check mit Labor und EKG". System schlägt koordinierte Termine vor: "Kardio 9:00, EKG 9:30, Labor 10:00 – alles an einem Vormittag". Fachbereiche können sich gegenseitig Patienten zuweisen.<br>
                        <span style="color: #F57C00; font-weight: 700;">Koordinationszeit von 15-20 Min auf 3-5 Min reduziert</span>. Patienten sind zufriedener (nur einmal kommen). Bessere Behandlungsqualität durch koordinierte Diagnostik.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-users-gear" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Team-Management bei 20+ Mitarbeitern wird klar strukturiert</h3>
                    <p class="section-5-feature-description">
                        <strong>Die Herausforderung:</strong> Große Teams ohne klare Zuständigkeiten. "Wer bearbeitet diese Anfrage?" – "Ich dachte, das macht X?" Vertretungen im Urlaub sind unklar. Keine Transparenz, wer was macht.<br>
                        <strong>MediDesk®-Lösung:</strong> Rollenbasierte Zugriffsrechte (Admin, Koordinator, MFA, Arzt). Anfragen werden automatisch dem richtigen Team zugewiesen. Vertretungsregelungen hinterlegt (bei Urlaub übernimmt Y). Aufgaben können delegiert werden. Lesebestätigungen zeigen, wer was gesehen hat.<br>
                        <span style="color: #388E3C; font-weight: 700;">Ergebnis: Klare Zuständigkeiten, weniger "Wer macht das?"-Fragen</span>, reibungslose Vertretungen, höhere Produktivität.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-chart-line" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Datenbasierte Steuerung durch zentrale Auswertungen</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> Keine Übersicht über Kennzahlen. Welcher Standort ist wie ausgelastet? Welche Fachrichtung hat lange Wartezeiten? Wo sind Engpässe? Daten liegen verstreut in verschiedenen Systemen.<br>
                        <strong>Mit MediDesk®:</strong> Dashboard zeigt wichtige KPIs: Terminvolumen pro Standort, Wartezeiten, Auslastung, No-Show-Rate, Patientenzufriedenheit. Vergleiche zwischen Standorten möglich. Frühwarnsystem bei Überlastung.<br>
                        <strong>Vorteile:</strong> <span style="color: #C2185B; font-weight: 700;">Engpässe frühzeitig erkennen</span>, Ressourcen optimal verteilen, datenbasierte Entscheidungen (z.B. "Standort B braucht mehr Personal"), bessere Planung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-shield-halved" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Einheitliche Standards sorgen für konstante Qualität</h3>
                    <p class="section-5-feature-description">
                        <strong>Das Problem:</strong> Jeder Standort macht es anders. Verschiedene Formulare, verschiedene Abläufe, verschiedene Kommunikation. Patienten sind verwirrt ("Am anderen Standort ging das aber anders"). Schulung neuer Mitarbeiter ist aufwendig (jeder Standort hat eigene Regeln).<br>
                        <strong>MediDesk®-Lösung:</strong> Formulare, Abläufe und Kommunikation werden zentral definiert und gelten überall. Neue Fachrichtung hinzufügen → an allen Standorten verfügbar. Corporate Identity einheitlich. Schulungsunterlagen zentral hinterlegt.<br>
                        <span style="color: #F9A825; font-weight: 700;">Ergebnis: Einheitliche Patientenerfahrung</span>, weniger Verwirrung, einfachere Schulung, professionelles Auftreten.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>"MVZ und Kliniken mit MediDesk® sparen durchschnittlich 5-10 Stunden täglich bei Koordination und Telefonverwaltung – bei gleichzeitig besserer Patientenzufriedenheit."</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Jetzt persönliche Beratung für MVZ/Kliniken</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Success Stories Section -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So nutzen <span class="highlight-text-bg">MVZ & Kliniken</span> MediDesk®</h2>
            <p class="section-7-subline">Reale Anwendungsfälle aus großen medizinischen Einrichtungen</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">MVZ mit 5 Standorten & 12 Fachärzten (Innere, Kardio, Gastro, Nephro)</h3>
                            <p class="section-7-step-description">
                                <strong>Ausgangslage:</strong> Telefonzentrale mit 450+ Anrufen täglich, lange Wartezeiten (10-15 Min), viele Beschwerden. Standorte arbeiten isoliert, keine Übersicht über Auslastung. Interdisziplinäre Termine schwer zu koordinieren (Patient muss mehrfach anrufen).<br>
                                <strong>Ergebnis nach 4 Monaten:</strong> <strong>Anrufe reduziert auf 120-150 täglich</strong> (73% Reduktion). Telefonwartezeiten von 10-15 Min auf 2-3 Min. 76% der Termine werden online gebucht. Interdisziplinäre Koordination läuft automatisch (Kardio + EKG + Labor an einem Tag). Patientenzufriedenheit: 3,8 → 4,6 Sterne. Team-Entlastung: ca. 6-8 Stunden täglich. Zentrale Auswertungen zeigen: Standort C ist überlastet → Personal wird umverteilt.
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
                            <h3 class="section-7-step-title">Klinikambulanz mit 8 Fachrichtungen & 600+ Patienten/Tag</h3>
                            <p class="section-7-step-description">
                                <strong>Besonderheit:</strong> Sehr hohes Patientenvolumen (600-800 Anfragen täglich), 8 verschiedene Fachrichtungen (Innere, Kardio, Neuro, Orthopädie, Chirurgie, Dermatologie, HNO, Urologie), komplexe Notfall-Triage nötig.<br>
                                <strong>MediDesk-Lösung:</strong> Intelligente Priorisierung (Notfall rot → sofort, dringend gelb → innerhalb 24h, Routine grün → nächster freier Termin). Automatische Lastverteilung zwischen Fachrichtungen. Warteschlangen-Management für Stoßzeiten (8-10 Uhr morgens).<br>
                                <strong>Ergebnis:</strong> System bewältigt problemlos 600-800 Anfragen/Tag ohne Performance-Probleme. <strong>Notfälle werden 90% schneller identifiziert</strong> (rote Markierung sofort sichtbar). Interdisziplinäre Fälle (z.B. Polytrauma: Chirurgie + Orthopädie + Radiologie) werden koordiniert behandelt. Team kann sich auf medizinische Arbeit konzentrieren statt Telefonie.
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
                            <h3 class="section-7-step-title">Überörtliche Berufsausübungsgemeinschaft (3 Standorte, 8 Ärzte, Allgemeinmedizin)</h3>
                            <p class="section-7-step-description">
                                <strong>Herausforderung:</strong> 3 Standorte (Berlin, Potsdam, Brandenburg), jeder mit eigenem Kalender. Patienten oft verwirrt ("Bei welchem Standort war ich letztes Mal?"). Keine einheitlichen Standards zwischen Standorten. Vertretungen im Urlaub chaotisch.<br>
                                <strong>MediDesk-Lösung:</strong> Zentrale Verwaltung aller 3 Standorte. Patient wählt bevorzugten Standort, sieht aber auch freie Termine an anderen Standorten ("In Berlin erst in 2 Wochen, aber in Potsdam morgen um 10 Uhr"). Einheitliche Formulare und Abläufe. Vertretungsregelungen hinterlegt.<br>
                                <strong>Ergebnis:</strong> <strong>75% weniger Koordinationsaufwand</strong> zwischen Standorten. Patienten finden schneller Termine (standortübergreifende Suche). Einheitliche Qualität an allen Standorten. Vertretungen laufen reibungslos. Höhere Auslastung (freie Kapazitäten werden optimal genutzt).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kontakt" class="btn btn-primary">Könnte das auch in unserem MVZ/Klinik funktionieren?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- FAQ Section - MVZ & Kliniken-spezifisch -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von MVZ & Kliniken</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert Multi-Standort-Management mit MediDesk®?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® verwaltet alle Standorte zentral in einem System. <strong>Jeder Standort hat:</strong> (1) Eigenen Kalender mit eigenen Sprechzeiten, (2) Eigenes Team mit Zugriffsrechten, (3) Eigene Fachrichtungen/Ärzte. <strong>Aber Sie haben:</strong> Zentrale Übersicht über alle Anfragen und Termine, einheitliche Formulare und Abläufe, zentrale Auswertungen (Terminvolumen, Auslastung pro Standort). <strong>Patientenansicht:</strong> Bei Online-Buchung wählt Patient Standort aus (z.B. "MVZ Berlin-Mitte" vs. "MVZ Berlin-Spandau"), dann Fachrichtung. Termine werden automatisch richtig zugeordnet. <strong>Standortübergreifende Suche möglich:</strong> "In Mitte erst in 2 Wochen frei, aber in Spandau morgen um 10 Uhr". <span style="color: #1976D2; font-weight: 700;">Ergebnis: 75% weniger Koordinationsaufwand</span>, keine Doppelbuchungen, optimale Kapazitätsauslastung.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Eignet sich MediDesk® für große Patientenvolumen (500+ Anfragen/Tag)?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. MediDesk® ist skalierbar und bewältigt problemlos 500-1000+ Patientenanfragen täglich. <strong>Technisch:</strong> System bleibt schnell auch bei großem Volumen (keine Performance-Probleme). Dashboard bleibt übersichtlich durch intelligente Filter und Sortierung. <strong>Organisatorisch:</strong> (1) Priorisierung nach Dringlichkeit (Notfall rot → dringend gelb → Routine grün), (2) Automatische oder manuelle Team-Zuweisung, (3) Warteschlangen-Management für Stoßzeiten (8-10 Uhr morgens), (4) Auslastungs-Monitoring in Echtzeit ("Standort A hat 200 offene Anfragen → Warnung"), (5) Automatische Lastverteilung ("Standort voll → anderen Standort vorschlagen"). <strong>Praxis-Beispiel:</strong> Klinikambulanz mit 600-800 Anfragen/Tag nutzt MediDesk erfolgreich. <span style="color: #388E3C; font-weight: 700;">Ergebnis: Auch bei sehr hohem Volumen bleibt alles übersichtlich und strukturiert.</span>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert interdisziplinäre Terminkoordination?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patient braucht mehrere Fachrichtungen an einem Tag (z.B. Kardiologe + EKG + Labor + Belastungs-EKG). <strong>Ohne MediDesk®:</strong> Patient muss dreimal anrufen, Termine passen oft nicht zusammen, Patient muss mehrfach kommen – sehr unbequem.<br>
                        <strong>Mit MediDesk®:</strong> (1) <strong>Patientensicht:</strong> Patient stellt eine Anfrage "Kardio-Check mit Labor und EKG". System schlägt koordinierte Termine vor: "Kardio 9:00, EKG 9:30, Labor 10:00 – alles an einem Vormittag". (2) <strong>Interne Weiterleitung:</strong> Kardiologe sieht Patient und sagt "Bitte noch Labor-Termin buchen" → Weiterleitung mit einem Klick. (3) <strong>Behandlungspfade:</strong> Häufige Kombinationen können als Behandlungspfad hinterlegt werden (z.B. "Bei Diabetes: erst Innere, dann Diabetologe, dann Ernährungsberatung"). (4) <strong>Dokumenten-Weitergabe:</strong> Labor-Ergebnisse können automatisch an Kardiologen weitergeleitet werden. <span style="color: #F57C00; font-weight: 700;">Koordinationszeit von 15-20 Min auf 3-5 Min reduziert</span>. Patienten sind zufriedener (alles an einem Tag).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden Rollenrechte und Zugriffsrechte verwaltet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Bei 20+ Mitarbeitern braucht es klare Zugriffsrechte. <strong>MediDesk® bietet verschiedene Rollen:</strong><br>
                        • <strong>Admin:</strong> Volle Rechte, sieht alles, kann alles ändern (Geschäftsführung, Praxisleitung)<br>
                        • <strong>Koordinator:</strong> Sieht alle Standorte, kann Anfragen zuweisen und koordinieren (Zentrale)<br>
                        • <strong>Standort-Manager:</strong> Sieht nur eigenen Standort, kann dort alles verwalten (Standortleitung)<br>
                        • <strong>MFA:</strong> Sieht nur zugewiesene Anfragen, kann Termine vergeben und bearbeiten (Medizinische Fachangestellte)<br>
                        • <strong>Arzt:</strong> Sieht Anfragen seiner Fachrichtung, kann Rückmeldungen geben (Ärzte)<br>
                        • <strong>Labor/Diagnostik:</strong> Sieht nur Labor-/Diagnostik-Anfragen (Laborpersonal)<br>
                        <strong>Vertretungsregelungen:</strong> Bei Urlaub/Krankheit kann festgelegt werden "MFA A wird vertreten durch MFA B – alle Anfragen gehen temporär an B". <span style="color: #7B1FA2; font-weight: 700;">Ergebnis: Klare Zuständigkeiten, keine "Wer macht das?"-Fragen</span>, reibungslose Vertretungen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Welche Auswertungen und KPIs bietet MediDesk® für MVZ/Kliniken?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Große Einrichtungen brauchen datenbasierte Steuerung. <strong>MediDesk® Dashboard zeigt:</strong><br>
                        • <strong>Terminvolumen:</strong> Wie viele Termine pro Standort, pro Fachrichtung, pro Tag/Woche/Monat?<br>
                        • <strong>Wartezeiten:</strong> Durchschnittliche Wartezeit auf Termine (pro Fachrichtung)<br>
                        • <strong>Auslastung:</strong> Wie ausgelastet sind Ärzte/Standorte? (in %)<br>
                        • <strong>Anfrage-Typen:</strong> Wie viele Termine, Rezepte, Befunde, Überweisungen?<br>
                        • <strong>No-Show-Rate:</strong> Wie viele Patienten erscheinen nicht zum Termin? (pro Standort vergleichbar)<br>
                        • <strong>Patientenzufriedenheit:</strong> Bewertungen und Feedback<br>
                        • <strong>Response-Zeit:</strong> Wie schnell werden Anfragen bearbeitet?<br>
                        <strong>Vergleiche zwischen Standorten:</strong> "Warum hat Standort B 20% weniger No-Shows als Standort A?"<br>
                        <strong>Frühwarnsystem:</strong> "Standort C hat 200+ offene Anfragen – bitte prüfen!"<br>
                        <strong>Export:</strong> Alle Daten exportierbar für weitere Analysen (Excel, CSV). <span style="color: #C2185B; font-weight: 700;">Ergebnis: Transparenz, Engpässe frühzeitig erkennen, datenbasierte Entscheidungen.</span>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können verschiedene Fachrichtungen unterschiedliche Formulare haben?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. Jede Fachrichtung kann eigene, spezialisierte Formulare haben. <strong>Beispiel MVZ mit Innere, Kardio und Orthopädie:</strong><br>
                        • <strong>Innere Medizin:</strong> Allgemeine Termine, Check-ups, chronische Erkrankungen, Vorsorge<br>
                        • <strong>Kardiologie:</strong> EKG-Termine, Belastungs-EKG, Echokardiographie, Schrittmacher-Kontrollen, Herzinsuffizienz-Checks<br>
                        • <strong>Orthopädie:</strong> MRT-Koordination, Post-OP-Nachsorge, Physiotherapie-Verordnungen, Röntgen-Termine<br>
                        Patient wählt bei Buchung zuerst Fachrichtung → sieht dann die passenden Formulare. <strong>Zentral definiert, lokal angepasst:</strong> Grundstruktur kann zentral festgelegt werden ("Alle Fachrichtungen bieten 'Termin buchen' und 'Rezeptverlängerung'"), aber jede Fachrichtung kann zusätzliche, spezialisierte Formulare haben. <span style="color: #F9A825; font-weight: 700;">Ergebnis: Flexibilität bei gleichzeitig einheitlichen Standards.</span>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert MediDesk® auch für Klinikambulanzen mit Notfall-Triage?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, sehr gut. Klinikambulanzen haben besondere Anforderungen: hohes Volumen, Notfall-Triage, viele Fachrichtungen. <strong>MediDesk® unterstützt das:</strong><br>
                        (1) <strong>Intelligente Priorisierung:</strong> Notfall (rot) → sofort bearbeiten, dringend (gelb) → innerhalb 24h, Routine (grün) → nächster freier Termin. Bei Buchung kann Patient Dringlichkeit angeben ("Starke Schmerzen seit gestern" → gelb markiert).<br>
                        (2) <strong>Triage-Unterstützung:</strong> Formulare erfassen wichtige Triage-Informationen (Schmerzen 1-10, Symptom-Dauer, Vorerkrankungen, Medikamente, Allergien). Arzt kann schnell einschätzen: Notfall oder nicht?<br>
                        (3) <strong>Schnelle Notfall-Kommunikation:</strong> Bei Notfall kann sofort Rückruf erfolgen oder Patient wird gebeten "Bitte kommen Sie sofort in die Notaufnahme".<br>
                        (4) <strong>Dokumentation:</strong> Alle Triage-Entscheidungen werden dokumentiert (rechtssicher).<br>
                        <strong>Praxis-Beispiel:</strong> Klinikambulanz mit 600-800 Anfragen/Tag – <span style="color: #388E3C; font-weight: 700;">Notfälle werden 90% schneller identifiziert</span> durch rote Markierung.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell ist MediDesk® für unser MVZ/Klinik einsatzbereit?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Bei MVZ/Kliniken etwas länger als bei Einzelpraxen – aber immer noch schnell:</strong><br>
                        <strong>Woche 1 (2-3 Termine à 90 Min):</strong> Analyse-Gespräch – wir verstehen Ihre Struktur: Wie viele Standorte? Welche Fachrichtungen? Wie viele Mitarbeiter? Welche Prozesse? Wir definieren gemeinsam: Formulare pro Fachrichtung, Rollenrechte, Standort-Struktur, Prioritäten.<br>
                        <strong>Woche 2 (90-120 Min):</strong> System-Einrichtung – wir richten alles ein: Standorte anlegen, Fachrichtungen konfigurieren, Formulare anpassen, Rollenrechte einrichten, Kalender-Integration, Website-Einbindung (15 Min).<br>
                        <strong>Woche 3 (120 Min Schulung):</strong> Team-Schulung in 2-3 Gruppen (Zentrale, Standort-Teams, Ärzte). Jede Gruppe lernt ihre Funktionen. Testbetrieb startet.<br>
                        <strong>Woche 4:</strong> Live-Gang mit Begleitung. Wir unterstützen täglich per E-Mail/Telefon. Feintuning nach ersten Erfahrungen.<br>
                        <strong>Ab Woche 5:</strong> Regulärer Betrieb mit Standard-Support.<br>
                        <strong>Typische Timeline: 3-4 Wochen</strong> (bei komplexen Strukturen 4-6 Wochen).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für unser MVZ/Klinik?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Preise für MVZ & Kliniken (größere Einheiten):</strong><br>
                        • 5-10 Ärzte / 2-3 Standorte: ab 398,00€/Monat<br>
                        • 11-20 Ärzte / 4-6 Standorte: ab 598,00€/Monat<br>
                        • 21+ Ärzte / 7+ Standorte: individuelles Angebot<br>
                        • Klinikambulanzen: individuelles Angebot (ab ca. 798€/Monat)<br>
                        (alle Preise zzgl. MwSt.)<br><br>
                        <strong>Inklusive:</strong> Analyse & Konzeption, individuelle Einrichtung, alle Standorte und Fachrichtungen, Team-Schulungen (mehrere Gruppen), alle Formulare (spezialisiert pro Fachrichtung), Rollenrechte-System, Multi-Standort-Verwaltung, zentrale Auswertungen & KPIs, Updates & Support, DSGVO-Paket mit AVV, unbegrenzte Anfragen, unbegrenzte Nutzer.<br><br>
                        <strong>Optionale Zusatzleistungen:</strong><br>
                        • PVS-Integration (z.B. Medistar, Turbomed, x.concept): 799€ Setup + 99€/Monat<br>
                        • Erweiterte Auswertungen & Business Intelligence: 149€/Monat<br>
                        • Prioritäts-Support (2h Response-Zeit): 199€/Monat<br><br>
                        <strong>ROI-Rechnung:</strong> Wenn Sie täglich 5-10 Stunden durch MediDesk® sparen, entspricht das 100-200 Stunden/Monat = <span style="color: #388E3C; font-weight: 700;">mehr als 1-2 Vollzeit-MFA</span>. Plus: Höhere Patientenzufriedenheit = weniger Abwanderung = höhere Einnahmen.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für ein effizienteres MVZ oder eine modernere Klinikambulanz?</h2>
            </div>

            <p class="cta-subline">
                Lassen Sie uns gemeinsam analysieren, wie MediDesk® Ihre spezifische Struktur optimal abbilden kann – mit persönlicher Beratung und maßgeschneidertem Konzept
            </p>

            <div class="final-cta-buttons">
                <a href="#kostenlos-testen" class="btn-primary">
                    <span>Kostenlose Analyse & Demo für MVZ/Kliniken</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#kostenlos-testen" class="btn-secondary">
                    <i class="fa-solid fa-phone"></i>
                    <span>Persönliches Beratungsgespräch</span>
                </a>
            </div>

            <div class="trust-badges">
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Skalierbar für 500+ Anfragen/Tag</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Multi-Standort-Management</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Individuelle Einrichtung & Schulung</span>
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