<?php
// SEO Configuration for Physio & Reha
$page_title = "Online-Terminverwaltung für Physiotherapie & Reha-Praxen - MediDesk® | Digitale Rezeptverwaltung";
$page_description = "Die spezialisierte Online-Terminverwaltung für Physiotherapie-Praxen und Reha-Einrichtungen. Heilmittelverordnung digital verwalten, automatische Terminserien. 80% weniger Telefon-Stress. DSGVO-konform.";
$page_keywords = "Physiotherapie Online-Terminverwaltung, Reha Terminkoordination digital, Heilmittelverordnung online, MediDesk Physiotherapie, Physiotherapiepraxis Software";
$page_canonical = "https://medideskr.cloud/fachrichtungen/physio_reha/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for Physiotherapie & Reha -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Terminverwaltung für Physiotherapie & Reha",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Digitale Terminverwaltung speziell für Physiotherapie-Praxen und Reha-Einrichtungen. Rezept-Upload, automatische Terminserien, Heilmittelverordnung verwalten.",
  "url": "https://medideskr.cloud/fachrichtungen/physio_reha/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Rezept-Upload per Smartphone",
    "Automatische Terminserien",
    "Heilmittelverordnung verwalten",
    "Hausbesuch-Koordination",
    "Gerätetraining-Buchung",
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

<!-- Schema.org Structured Data - FAQPage for Physiotherapie & Reha -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® Physiotherapie-Praxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® reduziert den Telefonaufwand in Physiotherapie-Praxen um bis zu 80%. Patienten laden ihr Rezept per Smartphone hoch, Terminserien werden automatisch berechnet und die Auslastung optimiert."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert der Rezept-Upload?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Patienten fotografieren ihr Physiotherapie-Rezept per Smartphone oder laden es als PDF hoch. Das System erfasst automatisch: Leistung, Anzahl, Frequenz, Diagnose und ob ein dringlicher Behandlungsbeginn nötig ist."
      }
    },
    {
      "@type": "Question",
      "name": "Können Terminserien automatisch berechnet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, bei einem Rezept für 10x Krankengymnastik, 2x pro Woche, berechnet das System automatisch 10 Termine über 5 Wochen. Bei Verschiebung wird die Serie automatisch angepasst. 90% weniger Koordinationsaufwand."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® die 28-Tage-Frist für Rezepte?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, das System warnt automatisch, wenn ein Rezept kurz vor dem Ablauf steht. So werden keine Rezepte mehr ungültig. Die 14-Tage-Frist für dringlichen Behandlungsbeginn wird ebenfalls markiert."
      }
    },
    {
      "@type": "Question",
      "name": "Können Hausbesuche koordiniert werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Hausbesuch-Termine werden separat gekennzeichnet. Das System berechnet Routen und gruppiert Hausbesuche in geografischer Nähe. So werden Fahrzeiten minimiert und mehr Patienten versorgt."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® für Gerätetraining und Reha geeignet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Gerätetraining-Slots können online gebucht werden. Das System verwaltet Geräte-Kapazitäten und verhindert Überbuchungen. Ideal für medizinische Trainingstherapie (MTT) und Reha-Einrichtungen."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für Physiotherapie-Daten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist vollständig DSGVO-konform mit EU-Hosting in Deutschland, Ende-zu-Ende-Verschlüsselung und sicherer Rezept-Übertragung. Alle Gesundheitsdaten sind maximal geschützt."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für eine Physiotherapie-Praxis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise beginnen bei 119 EUR pro Monat. Inkludiert sind Rezept-Upload, automatische Terminserien und Hausbesuch-Koordination. Eine kostenlose 30-Tage-Testphase ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einer Physiotherapie-Praxis eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist innerhalb von 48 Stunden einsatzbereit. Die physiotherapiespezifische Konfiguration umfasst Rezept-Workflows, Terminserien-Berechnung und Behandlungsarten-Katalog."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® für größere Physiotherapie-Zentren geeignet?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® skaliert für große Physiotherapie-Zentren und Reha-Kliniken. Multi-Standort-Management, Therapeuten-Zuweisung und Geräte-Verwaltung werden unterstützt."
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
  "serviceType": "Digitale Terminverwaltung für Physiotherapie & Reha",
  "name": "MediDesk® für Physiotherapeuten",
  "description": "Spezialisierte digitale Lösung für Physiotherapie-Praxen und Reha-Einrichtungen mit Rezept-Upload, automatischen Terminserien und Hausbesuch-Koordination.",
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
    "audienceType": "Physiotherapeuten, Physiotherapie-Praxen, Reha-Einrichtungen, Therapiezentren, Ergotherapeuten"
  }
}
</script>
</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section - Physiotherapie & Reha-spezifisch -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Terminverwaltung für <span class="highlight-text-bg">Physiotherapie & Reha-Praxen</span></h1>
                        <p class="subheading">
                            Die spezialisierte digitale Lösung für Physiotherapeuten, Reha-Einrichtungen und Therapiezentren: Heilmittelverordnung online verwalten, Rezept-Upload für Patienten, automatische Terminserien berechnen (6x, 10x, 20x Behandlungen) – 80% weniger Telefon-Stress, optimale Auslastung
                        </p>

                        <ul class="features-list">
                            <li><span>Rezept-Upload & digitale Heilmittelverordnung</span> – Patienten laden Rezept online hoch</li>
                            <li><span>Automatische Terminserien</span> – 6x, 10x, 20x Behandlungen intelligent berechnet</li>
                            <li><span>28-Tage-Frist automatisch überwacht</span> – keine abgelaufenen Rezepte mehr</li>
                            <li><span>Hausbesuch-Koordination & Routenplanung</span> – optimale Fahrtstrecken</li>
                            <li><span>Bis zu 80% weniger Telefonanrufe</span> – Ihr Team fokussiert sich auf Therapie</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Live-Demo für Physiotherapeuten</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Terminverwaltung für Physiotherapie & Reha">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section - Physiotherapie & Reha-spezifische Herausforderungen -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in <span>Physiotherapie & Reha-Praxen</span></span>
                <h2>Diese <span class="highlight-text-red">Probleme</span> kennen Sie aus Ihrem Physiotherapie-Alltag</h2>
                <p class="subline">
                    Physiotherapie-Praxen und Reha-Einrichtungen haben besondere Herausforderungen: Heilmittelverordnungen mit 28-Tage-Frist, komplexe Terminserien (6x, 10x, 20x Behandlungen), verschiedene Therapieformen, Hausbesuche koordinieren, hohe Telefonfrequenz. Die manuelle Verwaltung wird schnell zum Engpass.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Telefonflut durch Terminvereinbarungen & Rezepteinlösungen</h3>
                    <p>60-100 Anrufe täglich: "Ich habe ein Rezept für Krankengymnastik, wann kann ich kommen?" – jedes Rezept muss telefonisch besprochen werden, alle Details abgefragt, Terminserie koordiniert.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-calendar-xmark"></i>
                    </div>
                    <h3>Terminserien-Koordination ist zeitaufwendig</h3>
                    <p>Patient hat Rezept für 10x KG, 2x pro Woche – am Telefon 10 Termine finden, die zusammenpassen, Patient mitschreibt (falsch), Termine später wieder verschieben – 15-20 Min Aufwand pro Serie.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-clock"></i>
                    </div>
                    <h3>28-Tage-Frist bei Heilmittelverordnungen wird oft überschritten</h3>
                    <p>Rezept muss innerhalb 28 Tage nach Ausstellung eingelöst werden – Patient kommt zu spät, Rezept ist abgelaufen, muss neu ausgestellt werden, Ärger für alle.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-house-medical"></i>
                    </div>
                    <h3>Hausbesuch-Koordination ist komplex</h3>
                    <p>15-30% der Behandlungen sind Hausbesuche – Routen planen, Fahrzeiten berücksichtigen, Patient ist nicht da, Therapeut fährt umsonst – viel Aufwand, wenig Effizienz.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-user-clock"></i>
                    </div>
                    <h3>No-Show-Rate ist hoch bei langen Serien</h3>
                    <p>Patient bucht 10 Termine, erscheint aber nur zu 6-7 – keine Absage, leere Zeitfenster, Umsatzverlust, andere Patienten hätten den Termin haben können.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-dumbbell"></i>
                    </div>
                    <h3>Verschiedene Therapieformen & Therapeuten-Qualifikationen</h3>
                    <p>KG 20 Min, MT 30 Min, Lymphdrainage 60 Min, Gerätetraining 30 Min – jede Therapie hat andere Zeitfenster, nicht jeder Therapeut darf alles behandeln (MT-Zertifikat), Räume müssen passen.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Physiotherapie-Praxen brauchen spezialisierte digitale Lösungen</h4>
                <p>
                    Heilmittelverordnungen haben besondere Anforderungen (28-Tage-Frist, Terminserien, Frequenz-Empfehlungen). MediDesk® deckt alle physiotherapie-spezifischen Besonderheiten ab.
                </p>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Answer Section - Physiotherapie & Reha-spezifische Lösung -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    So funktioniert <span>digitale Physiotherapie-Terminverwaltung</span>
                </span>
                <h2>MediDesk® für <span class="highlight-text-green">Physiotherapie & Reha</span></h2>
                <p class="subline">
                    Rezept-Upload, automatische Terminserien-Berechnung und intelligente Behandlungsplan-Koordination
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-file-medical"></i>
                    </div>
                    <p class="answer-card-step">Patient lädt Heilmittelverordnung hoch</p>
                    <h3>Rezept-Upload per Smartphone oder PDF</h3>
                    <p>Patient fotografiert Rezept (KG, MT, KMT, Lymphdrainage etc.) und lädt es online hoch. System erfasst: Therapieform, Anzahl Behandlungen, Frequenz, Diagnose, dringlicher Beginn, Hausbesuch</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-calendar-days"></i>
                    </div>
                    <p class="answer-card-step">Automatische Terminserien-Berechnung</p>
                    <h3>10x Behandlungen intelligent verteilt</h3>
                    <p>System berechnet automatisch passende Terminserie (z.B. 10x KG, 2x pro Woche, montags und donnerstags, über 5 Wochen). Patient bestätigt oder passt an</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-doctor"></i>
                    </div>
                    <p class="answer-card-step">Therapeut behandelt strukturiert</p>
                    <h3>Alle Infos auf einen Blick</h3>
                    <p>Dashboard zeigt alle Patienten mit Rezept-Details, Behandlungsfortschritt (5 von 10 absolviert), nächste Termine. Dokumentation direkt möglich</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Konkrete Zeitersparnis in Physiotherapie-Praxen</h4>
                <p><strong>Terminvereinbarungen:</strong> Von 15-20 Min pro Terminserie auf 2-3 Min reduziert = 85% Zeitersparnis<br>
                <strong>Rezept-Einlösung:</strong> Digital statt 5-8 Min Telefon pro Rezept = 70% schneller<br>
                <strong>28-Tage-Überwachung:</strong> Automatisch statt manuell prüfen = keine abgelaufenen Rezepte mehr</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt 30 Tage kostenlos testen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Use Cases Section - Physiotherapie & Reha-spezifische Anwendungsfälle -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle Physiotherapie</span>
            <h2>Diese <span class="highlight-text-bg2">physiotherapie-spezifischen Anfragen</span> können Ihre Patienten online stellen</h2>
            <p class="section-4-subline">Speziell für die Bedürfnisse von Physiotherapie-Praxen und Reha-Einrichtungen entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <rect x="24" y="24" width="16" height="20" rx="2" fill="#1976D2"/>
                        <rect x="28" y="28" width="8" height="2" fill="#FFF"/>
                        <rect x="28" y="32" width="8" height="2" fill="#FFF"/>
                        <rect x="28" y="36" width="6" height="2" fill="#FFF"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Krankengymnastik (KG) - Rezept einlösen & Terminserien buchen</h3>
                <p class="section-4-description">
                    <strong>Häufigste Heilmittelverordnung:</strong> Patient hat Rezept für Krankengymnastik (KG), z.B. 10x Behandlungen, 2x pro Woche. <strong>Online-Prozess:</strong> (1) Patient lädt Rezept-Foto hoch (per Smartphone), (2) Gibt an: Bevorzugte Wochentage, bevorzugte Uhrzeiten, Hausbesuch nötig?, (3) System prüft 28-Tage-Frist (noch gültig?), berechnet automatisch 10 Termine über 5 Wochen, (4) Patient sieht Vorschlag (z.B. "Montag 10:00 und Donnerstag 15:00, Start nächste Woche"), kann bestätigen oder einzelne Termine anpassen. <strong>Behandlungsformen erfasst:</strong> KG-ZNS (neurologisch), KG-Atemtherapie, KG-Gelenk, allgemeine KG. Therapeuten-Zuweisung automatisch (verfügbar + qualifiziert).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 85% weniger Koordinationsaufwand für Terminserien<br>
                    ✓ Keine abgelaufenen Rezepte (28-Tage-Warnung)<br>
                    ✓ Automatische Therapeuten-Zuweisung nach Qualifikation
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <path d="M28 28h8M32 24v8M24 36h16M24 40h12" stroke="#7B1FA2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Manuelle Therapie (MT) - Spezialisierte Behandlung mit Zertifikat</h3>
                <p class="section-4-description">
                    <strong>Spezielle Anforderungen:</strong> Manuelle Therapie darf nur von zertifizierten Therapeuten durchgeführt werden (MT-Fortbildung). Behandlungsdauer meist 30 Min (länger als KG). <strong>MediDesk®-Lösung:</strong> (1) Patient lädt MT-Rezept hoch (z.B. 6x Manuelle Therapie bei Kiefergelenk-Beschwerden), (2) System filtert automatisch nur MT-zertifizierte Therapeuten, (3) Terminvorschläge berücksichtigen 30-Min-Zeitfenster, (4) Kombination mit anderen Leistungen möglich (z.B. "MT + Wärmetherapie" = 40 Min gesamt). <strong>Häufige Diagnosen automatisch erkannt:</strong> HWS-Syndrom, LWS-Syndrom, ISG-Blockierung, Kiefergelenk (CMD). Behandlungsfortschritt wird dokumentiert (z.B. "3 von 6 Behandlungen absolviert, Schmerzen von 8/10 auf 4/10 reduziert").
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Nur zertifizierte Therapeuten werden vorgeschlagen<br>
                    ✓ Korrekte Zeitfenster (30 Min statt 20 Min)<br>
                    ✓ Kombination mit Wärme/Kälte automatisch möglich
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <circle cx="32" cy="28" r="4" fill="#388E3C"/>
                        <path d="M26 34c0-3 2.7-5 6-5s6 2 6 5" stroke="#388E3C" stroke-width="2"/>
                        <path d="M32 34v8M28 38h8" stroke="#388E3C" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Klassische Massagetherapie (KMT) & Lymphdrainage (MLD)</h3>
                <p class="section-4-description">
                    <strong>Besonderheiten KMT:</strong> Oft kombiniert mit Wärme- oder Kältetherapie. Behandlungsdauer 20-30 Min. Häufig bei Rückenbeschwerden, Verspannungen, nach Operationen. <strong>Lymphdrainage (MLD):</strong> Längere Behandlungsdauer (45-60 Min je nach Körperregion: Bein 45 Min, Arm+Bein 60 Min). Spezielle Qualifikation nötig (MLD-Zertifikat). Patient liegt, braucht Ruhe danach. <strong>Online-Buchung:</strong> Patient wählt "Klassische Massage" oder "Lymphdrainage", gibt Körperregion an (Rücken, Beine, Arme), lädt Rezept hoch (z.B. 10x KMT oder 6x MLD), System berechnet passende Termine mit korrekter Dauer. Bei KMT wird automatisch gefragt: "Wärme vorher gewünscht?" (+ 10 Min). Bei MLD: "Nach Tumor-OP?" (wichtig für Dokumentation).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Korrekte Zeitfenster (KMT 20-30 Min, MLD 45-60 Min)<br>
                    ✓ Kombination mit Wärme/Kälte automatisch<br>
                    ✓ MLD nur von zertifizierten Therapeuten
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <rect x="26" y="28" width="4" height="12" fill="#F57C00"/>
                        <rect x="34" y="28" width="4" height="12" fill="#F57C00"/>
                        <circle cx="28" cy="24" r="2" fill="#F57C00"/>
                        <circle cx="36" cy="24" r="2" fill="#F57C00"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Gerätetraining / KGG (Krankengymnastik am Gerät)</h3>
                <p class="section-4-description">
                    <strong>Besondere Herausforderung:</strong> Gerätetraining (KGG) findet im Geräteraum statt – begrenzte Kapazität (z.B. 6 Geräte = max. 6 Patienten gleichzeitig). Patienten trainieren teilweise in Gruppen. Einweisung beim ersten Termin nötig (30 Min statt 20 Min). <strong>MediDesk®-Lösung:</strong> (1) Patient bucht KGG-Terminserie (z.B. 10x KGG, 2x pro Woche), (2) System prüft Geräteraum-Kapazität (nicht überbuchen), (3) Beim ersten Termin wird automatisch 30 Min geblockt (Einweisung + Training), ab 2. Termin nur noch 20 Min, (4) Trainingsplan kann digital hinterlegt werden ("Patient XY: Rückenstrecker 3x15, Beinpresse 3x12, Core-Training"). Patient kann Trainingsfortschritt einsehen. Geräteauslastung wird visualisiert ("Dienstag 10:00: 5 von 6 Plätzen belegt").
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Geräteraum-Kapazität wird berücksichtigt<br>
                    ✓ Erster Termin automatisch länger (Einweisung)<br>
                    ✓ Digitaler Trainingsplan für Patienten
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M28 24h8l2 8h-12z" fill="#C2185B"/>
                        <rect x="26" y="32" width="12" height="8" fill="#C2185B"/>
                        <rect x="24" y="40" width="16" height="2" fill="#C2185B"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Hausbesuch-Koordination & Routenplanung</h3>
                <p class="section-4-description">
                    <strong>Die Herausforderung:</strong> 15-30% der physiotherapeutischen Behandlungen sind Hausbesuche (bei bettlägerigen Patienten, nach Operationen, bei schwerer Gehbehinderung). Koordination ist komplex: Fahrzeiten berücksichtigen, effiziente Routen planen, Patient muss zu Hause sein. <strong>MediDesk®-Lösung:</strong> (1) Patient gibt bei Buchung an "Hausbesuch nötig" + vollständige Adresse, (2) System plant Hausbesuche in geografisch sinnvoller Reihenfolge (z.B. "Montag vormittag alle Hausbesuche in Berlin-Mitte, nachmittags Berlin-Spandau"), (3) Therapeuten sehen Routenplan mit geschätzten Fahrzeiten, (4) Google Maps Integration für Navigation, (5) Patient erhält Erinnerung "Therapeut kommt morgen zwischen 10:00-10:30 Uhr – bitte zu Hause sein". Hausbesuch-Aufschlag wird automatisch dokumentiert (für Abrechnung).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Geografische Routenoptimierung automatisch<br>
                    ✓ Fahrzeiten werden berücksichtigt<br>
                    ✓ Weniger "Patient nicht zu Hause"-Fälle
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF9C4"/>
                        <path d="M24 28h16M24 32h16M24 36h12" stroke="#F9A825" stroke-width="2"/>
                        <rect x="22" y="24" width="20" height="18" rx="2" stroke="#F9A825" stroke-width="2" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Reha nach Operation (Post-OP-Reha) - Strukturierte Nachsorge</h3>
                <p class="section-4-description">
                    <strong>Besondere Anforderungen:</strong> Nach Operationen (z.B. Knie-TEP, Hüft-TEP, Schulter-OP, Kreuzband-OP) ist strukturierte Nachsorge essentiell. Behandlungsplan ist genau definiert: Phase 1 (Woche 1-2): Mobilisierung, Lymphdrainage, passive Bewegung. Phase 2 (Woche 3-6): Aktive Bewegung, Muskelaufbau. Phase 3 (Woche 7-12): Funktionstraining, Stabilisation. <strong>MediDesk®-Lösung:</strong> (1) Patient gibt OP-Datum und OP-Art an, (2) System schlägt phasengerechten Behandlungsplan vor (z.B. "Woche 1-2: 2x Lymphdrainage + 2x KG, Woche 3-6: 3x KG + 1x MT"), (3) Behandlungsfortschritt wird getrackt ("Phase 1 abgeschlossen, Patient kann Knie 90° beugen"), (4) Automatische Erinnerungen an Verlaufskontrollen bei Arzt. Rezepte werden automatisch nacheinander eingelöst (erst Lymphdrainage-Rezept, dann KG-Rezept, dann KGG-Rezept).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Phasengerechte Behandlungspläne hinterlegt<br>
                    ✓ Fortschritt wird dokumentiert<br>
                    ✓ Bessere Therapie-Erfolge durch Struktur
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>"In Physiotherapie-Praxen sind 75% aller Anfragen Terminvereinbarungen für Heilmittelverordnungen – genau diese profitieren massiv von digitaler Automation mit Rezept-Upload und automatischer Terminserien-Berechnung."</p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Wie sieht das konkret für meine Physiotherapie-Praxis aus?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Benefits Section - Physiotherapie & Reha-spezifische Vorteile -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für Physiotherapie-Praxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer Physiotherapie-Praxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Effizienz, Auslastung und Therapie-Erfolg
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-file-upload" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Rezept-Upload revolutioniert Heilmittelverordnungs-Verwaltung</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> Patient ruft an, sagt "Ich habe ein Rezept für Krankengymnastik". Empfang fragt ab: Wie viele Behandlungen? Welche Diagnose? Bis wann gültig? Hausbesuch? Patient weiß oft Details nicht, muss zurückrufen. 5-8 Minuten Telefon pro Rezept.<br>
                        <strong>Mit MediDesk®:</strong> Patient fotografiert Rezept mit Smartphone, lädt online hoch. System liest automatisch: KG, 10x, 2x pro Woche, Diagnose M54.5 (LWS-Syndrom), ausgestellt am 15.03., gültig bis 12.04., dringlicher Behandlungsbeginn (14 Tage). Ihre Praxis sieht alle Details sofort, ohne nachfragen. <strong>28-Tage-Frist wird automatisch überwacht:</strong> System warnt, wenn Rezept bald abläuft ("Noch 5 Tage, bitte Patient kontaktieren").<br>
                        <span style="color: #1976D2; font-weight: 700;">Ergebnis: 70% schnellere Rezept-Einlösung</span>, keine abgelaufenen Rezepte mehr, weniger telefonische Rückfragen, rechtssichere Dokumentation.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-calendar-days" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Automatische Terminserien sparen 85% Koordinationszeit</h3>
                    <p class="section-5-feature-description">
                        <strong>Das Problem:</strong> Patient hat Rezept für 10x KG, 2x pro Woche. Am Telefon: "Wann können Sie? Montag 10 Uhr? Passt. Donnerstag 15 Uhr? Nein, da nicht. Freitag 14 Uhr? Geht. Nächste Woche Montag 10 Uhr wieder? Moment, ich schau... Ja, passt." – 15-20 Minuten pro Terminserie, Patient schreibt mit (oft falsch).<br>
                        <strong>Mit MediDesk®:</strong> Patient wählt bevorzugte Wochentage (Mo, Do) und Uhrzeiten (vormittags). System berechnet automatisch: 10 Termine über 5 Wochen, immer montags 10:00 und donnerstags 15:00. Patient sieht kompletten Plan, bestätigt mit einem Klick. Bei Verschiebung eines Termins wird Serie automatisch neu berechnet. <strong>Frequenz-Empfehlung vom Rezept wird eingehalten</strong> (1-3x pro Woche je nach Diagnose).<br>
                        <span style="color: #7B1FA2; font-weight: 700;">Von 15-20 Min auf 2-3 Min Koordinationszeit = 85% Zeitersparnis</span>. Patienten erscheinen regelmäßiger (weil sie alle Termine kennen), bessere Therapie-Erfolge.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-house-medical" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Hausbesuch-Routenplanung optimiert Fahrtwege & Zeit</h3>
                    <p class="section-5-feature-description">
                        15-30% aller physiotherapeutischen Behandlungen sind Hausbesuche. <strong>Ohne Planung:</strong> Therapeut fährt kreuz und quer durch die Stadt (Berlin-Mitte → Berlin-Spandau → Berlin-Mitte → Berlin-Köpenick), verschwendet 2-3 Stunden täglich mit Fahren, könnte in der Zeit 4-6 zusätzliche Patienten behandeln. Patient ist manchmal nicht da (vergessen, nicht informiert).<br>
                        <strong>Mit MediDesk®:</strong> System plant Hausbesuche geografisch sinnvoll: "Montag vormittag: alle Hausbesuche in Berlin-Mitte (4 Patienten nacheinander), nachmittags Berlin-Spandau (3 Patienten)". Therapeuten sehen Routenplan mit Adressen, geschätzten Fahrzeiten, Google Maps Integration. Patienten erhalten Erinnerung: "Therapeut kommt morgen zwischen 10:00-10:30 Uhr – bitte zu Hause sein".<br>
                        <span style="color: #F57C00; font-weight: 700;">Fahrzeit reduziert um 40-50%</span>, 4-6 zusätzliche Behandlungen pro Woche möglich, weniger "Patient nicht zu Hause"-Fälle (90% Reduktion).
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-bell-slash" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">No-Show-Rate sinkt um 60% durch automatische Erinnerungen</h3>
                    <p class="section-5-feature-description">
                        <strong>Das Problem bei Terminserien:</strong> Patient bucht 10 Termine, erscheint aber nur zu 6-7. Gründe: Vergessen (lange Serie, viele Termine), keine Absage, Termin passt doch nicht. Folge: Leere Zeitfenster, Umsatzverlust (andere Patienten hätten Termin haben können), Therapie-Erfolg leidet (unregelmäßige Behandlung).<br>
                        <strong>MediDesk®-Lösung:</strong> (1) Automatische Erinnerungen 24h vor jedem Termin (E-Mail, SMS, WhatsApp optional), (2) Patient kann Termin direkt absagen oder verschieben (ohne Anruf), (3) Freigewordene Termine werden automatisch anderen Patienten angeboten ("Kurzfristig frei: Morgen 10 Uhr"), (4) Bei wiederholten No-Shows: Warnung an Praxis ("Patient XY hat 3 von 10 Terminen verpasst"). <strong>No-Show-Tracking:</strong> Sie sehen genau, welche Patienten unzuverlässig sind.<br>
                        <span style="color: #388E3C; font-weight: 700;">No-Show-Rate von 20-30% auf 8-12% reduziert</span> = 60% Verbesserung. Höhere Auslastung, bessere Therapie-Erfolge, mehr Umsatz.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-dumbbell" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Verschiedene Therapieformen werden intelligent verwaltet</h3>
                    <p class="section-5-feature-description">
                        Physiotherapie-Praxen bieten viele verschiedene Leistungen: KG (20 Min), MT (30 Min), KMT (20-30 Min), Lymphdrainage (45-60 Min), Elektrotherapie (15 Min), Gerätetraining (20-30 Min). <strong>Problem ohne System:</strong> Alle Zeitfenster manuell blocken, Therapeuten-Qualifikationen im Kopf behalten (wer darf MT? wer darf MLD?), Raumbelegung manuell prüfen (Geräteraum voll?).<br>
                        <strong>Mit MediDesk®:</strong> (1) Jede Therapieform hat hinterlegte Zeitfenster (MT automatisch 30 Min, nicht 20 Min), (2) Therapeuten-Qualifikationen sind erfasst (nur MT-zertifizierte Therapeuten werden für MT-Termine vorgeschlagen), (3) Raumbelegung wird automatisch geprüft (Gerätetraining nur buchen, wenn Geräteraum frei), (4) Kombinationen sind möglich (z.B. "KG + Wärmetherapie" = automatisch 30 Min geblockt statt 20 Min). <strong>Behandlungsfortschritt wird getrackt:</strong> "Patient hat 6 von 10 KG absolviert, Schmerzen von 8/10 auf 4/10 verbessert".<br>
                        <span style="color: #C2185B; font-weight: 700;">Optimale Ressourcen-Auslastung</span>, keine Doppelbuchungen, korrekte Abrechnung, bessere Therapie-Planung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Bis zu 80% weniger Telefonanrufe = mehr Zeit für Therapie</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> 60-100 Anrufe täglich in typischer Physiotherapie-Praxis (je 5-8 Minuten) = 5-13 Stunden reines Telefonieren für Terminvereinbarungen und Rezept-Einlösungen. Empfang ist ständig am Telefon, kann Patient vor Ort kaum Zeit geben. Therapeuten werden beim Behandeln gestört ("Telefon für dich").<br>
                        <strong>Nachher mit MediDesk®:</strong> 75-80% der Anfragen laufen online (Rezept-Upload, Terminserie-Buchung, Terminverschiebung, Absagen). Nur noch 12-20 Anrufe täglich (nur komplexe Fälle, Rückfragen, Notfälle). Telefon klingelt viel weniger.<br>
                        <strong>Gewinn:</strong> <span style="color: #F9A825; font-weight: 700;">4-10 Stunden täglich für Therapie-Vorbereitung, Dokumentation, Patient:innen-Betreuung.</span> Empfang kann sich auf Patienten vor Ort konzentrieren. Therapeuten werden nicht mehr beim Behandeln gestört. Stressreduktion für gesamtes Team. Höhere Patientenzufriedenheit (kein Besetztzeichen mehr, keine Wartezeit am Telefon).
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>"Physiotherapie-Praxen mit MediDesk® sparen durchschnittlich 4-10 Stunden täglich bei Terminkoordination und Telefonie – bei gleichzeitig höherer Auslastung und besseren Therapie-Erfolgen durch strukturierte Behandlungsserien."</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Jetzt persönliche Beratung für Physiotherapie-Praxen</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Success Stories Section -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So nutzen <span class="highlight-text-bg">Physiotherapie-Praxen</span> MediDesk®</h2>
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
                            <h3 class="section-7-step-title">Physiotherapie-Praxis mit 4 Therapeuten & 180 Patienten/Woche</h3>
                            <p class="section-7-step-description">
                                <strong>Ausgangslage:</strong> Täglich 70-90 Anrufe, hauptsächlich Terminvereinbarungen für neue Rezepte. Empfang ist ständig am Telefon, kann Patienten vor Ort kaum Zeit geben. Terminserien-Koordination dauert 15-20 Min pro Patient (10 Termine finden). 28-Tage-Frist wird oft überschritten (10-15 abgelaufene Rezepte/Monat = Patienten ärgern sich, müssen zum Arzt zurück). No-Show-Rate bei 25% (jeder 4. Termin wird nicht wahrgenommen).<br>
                                <strong>Ergebnis nach 3 Monaten mit MediDesk®:</strong> <strong>Anrufe reduziert auf 15-20 täglich</strong> (78% Reduktion). 82% der Rezepte werden online hochgeladen. Terminserien-Koordination von 15-20 Min auf 2-3 Min reduziert = <span style="color: #1976D2; font-weight: 700;">85% Zeitersparnis</span>. <strong>Keine abgelaufenen Rezepte mehr</strong> (automatische 28-Tage-Überwachung). No-Show-Rate von 25% auf 9% gesunken (64% Verbesserung durch Erinnerungen). Auslastung gestiegen von 78% auf 92%. Patientenzufriedenheit: 4,1 → 4,8 Sterne. Team-Stress deutlich reduziert, mehr Zeit für Therapie.
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
                            <i class="fa-solid fa-house-medical"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Physiotherapie-Praxis mit Hausbesuch-Schwerpunkt (40% Hausbesuche)</h3>
                            <p class="section-7-step-description">
                                <strong>Besonderheit:</strong> 40% aller Behandlungen sind Hausbesuche (viele ältere Patienten, Post-OP-Patienten). Hausbesuch-Koordination ist chaotisch: Therapeuten fahren kreuz und quer durch die Stadt, verschwenden täglich 2-3 Stunden mit Fahren. Patienten sind manchmal nicht zu Hause (15% "Nicht-angetroffen-Fälle"), Therapeut fährt umsonst. Keine effiziente Routenplanung.<br>
                                <strong>MediDesk-Lösung:</strong> Hausbesuche werden geografisch gebündelt: Montag vormittag alle Hausbesuche in einem Stadtteil, nachmittags nächster Stadtteil. Routenplanung mit Google Maps Integration zeigt optimale Reihenfolge. Patienten erhalten genaue Zeitfenster-Ankündigung: "Therapeut kommt morgen zwischen 10:00-10:30 Uhr".<br>
                                <strong>Ergebnis:</strong> <strong>Fahrzeit reduziert von 2-3 Stunden auf 1-1,5 Stunden täglich</strong> = 50% Zeitersparnis. <span style="color: #F57C00; font-weight: 700;">6-8 zusätzliche Behandlungen pro Woche möglich</span> (vorher Fahrzeit, jetzt produktiv genutzt). "Nicht-angetroffen"-Fälle von 15% auf 2% gesunken (87% Verbesserung). Therapeuten sind weniger gestresst (weniger Verkehr, planbarere Routen). Monatlicher Mehrumsatz: ca. 2.400-3.200€ (mehr Behandlungen bei gleicher Arbeitszeit).
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
                            <h3 class="section-7-step-title">Reha-Zentrum mit Gerätetraining-Schwerpunkt & Post-OP-Reha</h3>
                            <p class="section-7-step-description">
                                <strong>Herausforderung:</strong> Reha nach Knie-/Hüft-Operationen – strukturierte Post-OP-Nachsorge über 12 Wochen nötig (Phase 1: Lymphdrainage + Mobilisierung, Phase 2: Muskelaufbau, Phase 3: Funktionstraining). Gerätetraining im Geräteraum (begrenzte Kapazität: 8 Geräte). Ohne System: Phasen werden nicht eingehalten, Behandlungen laufen unstrukturiert, Geräteraum wird überbucht.<br>
                                <strong>MediDesk-Lösung:</strong> Phasengerechte Behandlungspläne hinterlegt für verschiedene OP-Typen (Knie-TEP, Hüft-TEP, Schulter-OP). Patient gibt OP-Datum ein, System schlägt automatisch passenden 12-Wochen-Plan vor. Geräteraum-Kapazität wird berücksichtigt (nicht überbuchen). Behandlungsfortschritt wird getrackt ("Phase 1 abgeschlossen, Knie 90° Beugung erreicht").<br>
                                <strong>Ergebnis:</strong> <strong>Strukturierte Post-OP-Reha führt zu 35% besseren Therapie-Erfolgen</strong> (gemessen an Bewegungsumfang, Schmerzreduktion, Patientenzufriedenheit). Geräteraum-Überbuchungen von 20 Fällen/Monat auf 0 reduziert. Patienten verstehen Behandlungsplan besser ("jetzt Phase 2: Muskelaufbau"). Höhere Weiterempfehlungsrate: 78% → 91%. Reputation in Orthopädie-Kliniken verbessert → mehr Überweisungen.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kontakt" class="btn btn-primary">Könnte das auch in meiner Physiotherapie-Praxis funktionieren?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- FAQ Section - Physiotherapie & Reha-spezifisch -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Physiotherapeuten</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert Rezept-Upload und digitale Heilmittelverordnung in der Physiotherapie?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patienten können ihr Physiotherapie-Rezept (Heilmittelverordnung) direkt online hochladen – per Smartphone fotografieren oder als PDF. <strong>Das System erfasst automatisch:</strong> (1) Verordnete Leistung (KG, MT, KMT, Lymphdrainage, etc.), (2) Anzahl Behandlungen (6x, 10x, 20x), (3) Frequenz-Empfehlung (1-3x pro Woche), (4) Diagnose (ICD-Code), (5) Dringlicher Behandlungsbeginn innerhalb 14 Tage?, (6) Hausbesuch ja/nein. Ihre Praxis sieht das Rezept sofort im Dashboard, kann Gültigkeit prüfen (innerhalb 28 Tage nach Ausstellung?), und passende Termine vorschlagen. <strong>28-Tage-Frist wird automatisch überwacht:</strong> System warnt, wenn Rezept bald abläuft ("Rezept von Patient Müller läuft in 5 Tagen ab"). Terminserien werden automatisch berechnet basierend auf Behandlungsanzahl und Frequenz. <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">85% weniger telefonische Terminvereinbarungen</span>, keine abgelaufenen Rezepte mehr (0 statt 10-15/Monat), rechtssichere Dokumentation, optimale Auslastung.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Terminserien für Physiotherapie automatisch berechnet werden (6x, 10x, 20x)?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut – das ist eine Kern-Funktion von MediDesk® für Physiotherapie. <strong>So funktioniert's:</strong> Patient hat Rezept für 10x Krankengymnastik, Frequenz 2x pro Woche. Patient gibt bei Online-Buchung bevorzugte Wochentage (z.B. Montag, Donnerstag) und Uhrzeiten (z.B. vormittags) an. System berechnet automatisch: 10 Termine über 5 Wochen, immer montags 10:00 Uhr und donnerstags 15:00 Uhr. Patient sieht kompletten Plan ("Termin 1: Mo 20.03. 10:00, Termin 2: Do 23.03. 15:00, Termin 3: Mo 27.03. 10:00..."), kann bestätigen oder einzelne Termine anpassen. <strong>Bei Verschiebung eines Termins:</strong> Serie wird automatisch neu berechnet (z.B. Patient kann Termin 3 nicht, verschiebt auf Dienstag 28.03. → alle Folgetermine werden angepasst). <strong>Funktioniert für alle gängigen Serien:</strong> 6x, 10x, 20x Behandlungen. Auch komplexe Serien möglich (z.B. "erst 6x KG, dann 6x MT" = zwei Serien nacheinander). Frequenz-Empfehlung vom Rezept wird berücksichtigt (bei dringendem Behandlungsbeginn: 3x/Woche, sonst 2x/Woche). <strong>Ergebnis:</strong> <span style="color: #7B1FA2; font-weight: 700;">90% weniger Koordinationsaufwand</span>, Patienten erscheinen regelmäßiger (+40% Compliance), bessere Therapie-Erfolge durch strukturierte Behandlung.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden verschiedene Therapieformen (KG, MT, MLD, KGG) verwaltet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        MediDesk® unterstützt alle gängigen Therapieformen mit korrekten Zeitfenstern und Therapeuten-Zuordnung: <strong>Krankengymnastik (KG):</strong> 20 Min, alle Therapeuten. <strong>Manuelle Therapie (MT):</strong> 30 Min, nur MT-zertifizierte Therapeuten. <strong>Klassische Massagetherapie (KMT):</strong> 20-30 Min, oft kombiniert mit Wärme (+10 Min). <strong>Lymphdrainage (MLD):</strong> 45-60 Min je nach Körperregion, nur MLD-zertifizierte Therapeuten. <strong>Elektrotherapie:</strong> 15 Min, kann parallel zu anderen Behandlungen laufen. <strong>Gerätetraining (KGG):</strong> 20-30 Min, nur im Geräteraum (Kapazität wird berücksichtigt). <strong>Hausbesuche:</strong> + 20-30 Min Fahrtzeit automatisch. <strong>Bei Buchung:</strong> Patient wählt Therapieform aus, System schlägt nur passende Termine vor (korrekte Dauer, verfügbare + qualifizierte Therapeuten, richtiger Raum). <strong>Kombinationen möglich:</strong> "KG + Wärme" = automatisch 30 Min geblockt. "MT + Elektrotherapie" = 35 Min. <strong>Therapeuten-Qualifikation:</strong> Im System hinterlegt, wer welche Behandlungen durchführen darf (MT-Zertifikat, MLD-Zertifikat, Bobath, PNF, etc.). <span style="color: #388E3C; font-weight: 700;">Ergebnis: Keine Fehlbuchungen, optimale Ressourcen-Nutzung, korrekte Abrechnung.</span>
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert Hausbesuch-Koordination und Routenplanung automatisch?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, MediDesk® optimiert Hausbesuch-Routen automatisch. <strong>So funktioniert's:</strong> (1) Patient gibt bei Buchung "Hausbesuch nötig" + vollständige Adresse ein, (2) System plant Hausbesuche geografisch sinnvoll: Montag vormittag alle Hausbesuche in Berlin-Mitte (4-6 Patienten nacheinander), nachmittags Berlin-Spandau (3-4 Patienten), (3) Therapeuten sehen Routenplan mit Adressen, geschätzten Fahrzeiten, Reihenfolge, (4) Google Maps Integration: Adresse antippen → Navigation startet, (5) Patienten erhalten genaue Ankündigung: "Therapeut kommt morgen zwischen 10:00-10:30 Uhr – bitte zu Hause sein". <strong>Fahrzeiten werden automatisch berücksichtigt:</strong> Zwischen Hausbesuch A und B sind 15 Min Fahrt → System blockt 15 Min Fahrtzeit. <strong>Optimierung nach Postleitzahl:</strong> System gruppiert Hausbesuche nach PLZ-Gebieten (10115, 10117, 10119 = Berlin-Mitte an einem Tag). <strong>Hausbesuch-Aufschlag:</strong> Wird automatisch dokumentiert für korrekte Abrechnung (höherer Satz bei Hausbesuch). <strong>Ergebnis:</strong> <span style="color: #F57C00; font-weight: 700;">Fahrzeit reduziert um 40-50%</span>, 4-6 zusätzliche Behandlungen/Woche möglich, "Nicht-angetroffen"-Fälle von 15% auf 2% gesenkt, Therapeuten weniger gestresst.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie wird die 28-Tage-Frist bei Heilmittelverordnungen überwacht?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Heilmittelverordnungen müssen <strong>innerhalb 28 Tage nach Ausstellungsdatum</strong> eingelöst werden (erste Behandlung), sonst verfallen sie. MediDesk® überwacht das automatisch: (1) Bei Rezept-Upload wird Ausstellungsdatum erfasst, (2) System berechnet automatisch Ablaufdatum (Ausstellungsdatum + 28 Tage), (3) <strong>Warnsystem:</strong> Wenn Rezept bald abläuft, erscheint Warnung im Dashboard: "Noch 5 Tage bis Ablauf – Patient kontaktieren!", (4) Automatische Erinnerungen an Patient möglich: "Ihr Rezept läuft in 7 Tagen ab – bitte Termin buchen", (5) Bei dringendem Behandlungsbeginn (14-Tage-Frist auf Rezept): rote Markierung "Innerhalb 14 Tage nach Ausstellung beginnen!". <strong>Statistik-Dashboard:</strong> Sie sehen, wie viele Rezepte rechtzeitig eingelöst wurden vs. abgelaufen. <strong>Früher ohne System:</strong> 10-15 abgelaufene Rezepte/Monat → Patienten ärgern sich, müssen zurück zum Arzt, neue Verordnung holen. <strong>Mit MediDesk®:</strong> <span style="color: #388E3C; font-weight: 700;">0 abgelaufene Rezepte</span>, alle werden rechtzeitig eingelöst, bessere Patientenzufriedenheit, keine Umsatzverluste.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Patienten bei Terminserien einzelne Termine verschieben?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, sehr einfach sogar. Patient hat Terminserie gebucht (z.B. 10 Termine), kann aber Termin 5 nicht wahrnehmen (Urlaub, anderer Termin). <strong>Ohne MediDesk®:</strong> Patient ruft an, Empfang muss neuen Termin finden, alle Folgetermine müssen möglicherweise verschoben werden (damit Rhythmus passt) – 10-15 Min Aufwand. <strong>Mit MediDesk®:</strong> (1) Patient loggt sich ein, sieht seine Terminserie, (2) Klickt auf Termin 5 "Verschieben", (3) Wählt neuen Termin aus verfügbaren Alternativen, (4) System berechnet automatisch, ob Folgetermine verschoben werden sollen (Rhythmus beibehalten: ja/nein?), (5) Patient bestätigt – fertig, ohne Anruf. <strong>Oder per Telefon:</strong> Patient ruft an, Empfang verschiebt Termin im System, Serie passt sich automatisch an. <strong>Absage-Funktion:</strong> Patient kann Termin auch absagen (bis 24h vorher), Termin wird automatisch anderen Patienten angeboten ("Kurzfristig frei: Morgen 10 Uhr"). <strong>Ergebnis:</strong> <span style="color: #C2185B; font-weight: 700;">70% weniger Anrufe für Terminverschiebungen</span>, flexiblere Patienten, höhere Zufriedenheit, weniger No-Shows (weil Verschieben einfach ist statt einfach nicht zu erscheinen).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Eignet sich MediDesk® für Post-OP-Reha mit strukturierten Behandlungsplänen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, perfekt dafür. Post-OP-Reha (nach Knie-/Hüft-OP, Schulter-OP, Kreuzband-OP) erfordert strukturierte, phasengerechte Behandlung über mehrere Wochen/Monate. <strong>MediDesk® ermöglicht:</strong> (1) <strong>Behandlungspläne hinterlegen:</strong> Z.B. Knie-TEP-Reha: Phase 1 (Woche 1-2): 2x Lymphdrainage + 2x KG (Mobilisierung), Phase 2 (Woche 3-6): 3x KG + 1x MT (Muskelaufbau), Phase 3 (Woche 7-12): 2x KGG (Funktionstraining). (2) <strong>Patient gibt OP-Datum ein:</strong> System berechnet automatisch, in welcher Phase Patient sich befindet, schlägt passende Behandlungen vor. (3) <strong>Behandlungsfortschritt tracken:</strong> Nach jeder Behandlung: Bewegungsumfang dokumentieren (Knie kann 60° gebeugt werden → nächste Woche 80° → Ziel 120°), Schmerzen auf Skala 1-10, erreichte Meilensteine ("Patient kann wieder Treppen steigen"). (4) <strong>Automatische Rezept-Abfolge:</strong> Erst Lymphdrainage-Rezept einlösen (Phase 1), dann KG-Rezept (Phase 2), dann KGG-Rezept (Phase 3). (5) <strong>Erinnerungen an Kontrolltermine:</strong> "In 2 Wochen Kontrolltermin bei Orthopäden". <strong>Ergebnis:</strong> <span style="color: #F9A825; font-weight: 700;">35% bessere Therapie-Erfolge</span>, strukturiertere Behandlung, Patienten verstehen Behandlungsplan besser, höhere Compliance.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden No-Shows reduziert bei langen Terminserien?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        No-Shows (Patient erscheint nicht zum Termin ohne Absage) sind ein großes Problem bei Terminserien: Patient bucht 10 Termine, erscheint nur zu 6-7. <strong>Typische No-Show-Rate ohne System: 20-30%.</strong> Gründe: Vergessen (viele Termine), Termin passt doch nicht, Patient denkt "kann ich auch nächste Woche nachholen". <strong>MediDesk® reduziert No-Shows durch:</strong> (1) <strong>Automatische Erinnerungen 24h vorher:</strong> Per E-Mail, SMS, optional WhatsApp ("Morgen um 10:00 Uhr Physiotherapie-Termin bei Praxis Müller"). (2) <strong>Einfache Absage-/Verschiebe-Funktion:</strong> In Erinnerungs-E-Mail ist Link "Termin verschieben" oder "Termin absagen" – Patient kann mit 2 Klicks reagieren, muss nicht anrufen (Hemmschwelle geringer). (3) <strong>Termin-Übersicht für Patienten:</strong> Patient sieht im Online-Portal alle seine kommenden Termine (nicht nur den nächsten), kann planen. (4) <strong>No-Show-Tracking:</strong> System zeigt, welche Patienten häufig No-Shows haben ("Patient XY: 3 von 10 Terminen verpasst") → Sie können gezielt ansprechen oder Kaution verlangen. (5) <strong>Freigewordene Termine automatisch anbieten:</strong> Wenn Patient absagt, wird Termin sofort anderen Patienten angeboten ("Kurzfristig frei: Morgen 10 Uhr"). <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">No-Show-Rate von 20-30% auf 8-12% reduziert</span> = 60% Verbesserung. Höhere Auslastung, weniger Umsatzverluste, weniger Frust beim Team.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert Gerätetraining-Verwaltung mit begrenzter Kapazität?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. Gerätetraining (KGG = Krankengymnastik am Gerät) hat besondere Anforderungen: <strong>Begrenzte Kapazität</strong> (z.B. 6 Geräte = max. 6 Patienten gleichzeitig). Ohne System: Geräteraum wird oft überbucht (7-8 Patienten gleichzeitig → nicht genug Geräte, Patienten warten, sind genervt). <strong>MediDesk®-Lösung:</strong> (1) Geräteraum-Kapazität wird im System hinterlegt (z.B. "Max. 6 Patienten gleichzeitig"), (2) Bei Buchung prüft System automatisch: "Montag 10:00 Uhr KGG – 5 von 6 Plätzen belegt → Buchung möglich" oder "6 von 6 Plätzen belegt → Bitte anderen Termin wählen", (3) <strong>Beim ersten KGG-Termin:</strong> Automatisch 30 Min statt 20 Min geblockt (Einweisung + Trainingsplan erstellen), ab 2. Termin nur noch 20 Min, (4) <strong>Digitaler Trainingsplan:</strong> Therapeut hinterlegt Übungen ("Rückenstrecker 3x15, Beinpresse 3x12, Core-Training"), Patient kann im Portal einsehen, Fortschritt wird dokumentiert ("Gewicht gesteigert von 20kg auf 30kg"), (5) <strong>Visualisierung Geräteraum-Auslastung:</strong> Dashboard zeigt "Dienstag 15:00: 5 von 6 Plätzen belegt, Donnerstag 10:00: 2 von 6 Plätzen belegt" → Sie sehen sofort, wo noch Kapazität ist. <strong>Ergebnis:</strong> <span style="color: #388E3C; font-weight: 700;">Keine Geräteraum-Überbuchungen mehr</span>, optimale Auslastung, bessere Patienten-Erfahrung, strukturierteres Gerätetraining.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell ist MediDesk® für meine Physiotherapie-Praxis einsatzbereit?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>In der Regel 48 Stunden (2 Tage).</strong><br>
                        <strong>Tag 1 (60-90 Min Erstgespräch per Video-Call):</strong> Wir verstehen Ihre Praxis: Wie viele Therapeuten? Welche Therapieformen bieten Sie an (KG, MT, MLD, KGG...)? Hausbesuche ja/nein? Gerätetraining ja/nein? Durchschnittliche Patienten-Anzahl? Wir definieren gemeinsam: Welche Formulare brauchen Sie (Rezept-Upload, Termin buchen, Hausbesuch anfordern), Therapeuten-Qualifikationen (wer hat MT-Zertifikat, wer MLD-Zertifikat), Zeitfenster pro Therapieform (KG 20 Min, MT 30 Min, etc.), Geräteraum-Kapazität (falls vorhanden).<br>
                        <strong>Tag 2 (60 Min Einrichtung + Schulung):</strong> Wir richten alles ein: Therapeuten anlegen mit Qualifikationen, Therapieformen konfigurieren, Zeitfenster einstellen, Rezept-Upload-Formular anpassen, Website-Integration (15 Min – ein Code-Snippet, fertig). Team-Schulung (30-45 Min): Ihre Mitarbeiter lernen Dashboard, Rezept-Prüfung, Terminserien-Verwaltung, Hausbesuch-Planung.<br>
                        <strong>Ab Tag 3:</strong> Sie sind live. Erste Patienten laden Rezepte hoch und buchen Terminserien online. Wir begleiten Sie die ersten 2 Wochen (Support per E-Mail/Telefon bei Fragen).<br>
                        <strong>Keine IT-Kenntnisse nötig.</strong> Wir machen die Einrichtung für Sie. Sie müssen nur Ihre Praxis-Besonderheiten mit uns besprechen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für meine Physiotherapie-Praxis?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Transparente Preise nach Praxisgröße:</strong><br>
                        • 1-2 Therapeuten: 119,00€/Monat<br>
                        • 3-4 Therapeuten: 179,00€/Monat<br>
                        • 5-6 Therapeuten: 298,00€/Monat<br>
                        • 7+ Therapeuten / Reha-Zentren: individuelles Angebot<br>
                        (alle Preise zzgl. MwSt.)<br><br>
                        <strong>Inklusive:</strong> Einrichtung & Schulung, alle physiotherapie-spezifischen Formulare (Rezept-Upload, Terminserien, Hausbesuch, Gerätetraining), automatische 28-Tage-Überwachung, Routenplanung für Hausbesuche, Therapeuten-Qualifikationsverwaltung, No-Show-Erinnerungen, Updates & Support, DSGVO-Paket mit AVV, unbegrenzte Anfragen, 30 Tage Geld-zurück-Garantie.<br><br>
                        <strong>ROI-Rechnung für Physiotherapie-Praxen:</strong><br>
                        Wenn Ihr Team täglich 4-10 Stunden durch MediDesk® einspart (weniger Telefonie, weniger Terminkoordination, optimierte Hausbesuch-Routen), entspricht das <strong>80-200 Stunden pro Monat</strong>. Das ist mehr als die Kosten einer Teilzeit-Kraft.<br>
                        <strong>Plus:</strong> (1) Höhere Auslastung durch weniger No-Shows (+10-15% mehr Behandlungen), (2) Mehr Hausbesuche möglich durch optimierte Routen (+6-8 Behandlungen/Woche), (3) Keine abgelaufenen Rezepte mehr (0 statt 10-15/Monat = keine Umsatzverluste).<br>
                        <strong>Typischer Mehrumsatz:</strong> <span style="color: #388E3C; font-weight: 700;">1.500-3.500€/Monat</span> durch höhere Auslastung und mehr Behandlungen → ROI nach 1-2 Monaten erreicht.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Kann ich MediDesk® 30 Tage kostenlos testen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. <strong>30 Tage kostenlos testen – ohne Risiko, ohne Vertragsbindung.</strong> So funktioniert's: (1) Sie melden sich für kostenlosen Test an, (2) Wir richten MediDesk® für Ihre Praxis ein (60-90 Min Erstgespräch + Einrichtung), (3) Sie nutzen MediDesk® 30 Tage vollumfänglich (alle Features, alle Funktionen), (4) Ihre Patienten laden echte Rezepte hoch, buchen echte Termine, (5) Nach 30 Tagen entscheiden Sie: Weitermachen oder nicht. <strong>Kein Risiko:</strong> Wenn Sie nicht zufrieden sind, endet der Test automatisch nach 30 Tagen. Keine Kündigung nötig, kein verstecktes Kleingedrucktes. <strong>30-Tage-Geld-zurück-Garantie:</strong> Selbst wenn Sie nach dem Test weitermachen und später merken "passt doch nicht" – innerhalb von 30 Tagen nach Zahlungsbeginn bekommen Sie Ihr Geld zurück. <strong>Typische Erfahrung:</strong> 87% der Physiotherapie-Praxen, die MediDesk® 30 Tage testen, entscheiden sich für weiteren Einsatz, weil die Zeitersparnis & Entlastung so deutlich spürbar ist.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere, effizientere Physiotherapie-Praxis?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase mit Rezept-Upload, automatischen Terminserien und Hausbesuch-Routenplanung – ohne Risiko, ohne Vertragsbindung
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Live-Demo für Physiotherapeuten</span>
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
                    <span>85% weniger Terminkoordination</span>
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