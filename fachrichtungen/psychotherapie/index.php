<?php
// SEO Configuration for Psychotherapie
$page_title = "Online-Terminverwaltung für Psychotherapie-Praxen - MediDesk® | Warteliste, Erstgespräch, Probatorik digital";
$page_description = "Spezialisierte digitale Terminverwaltung für Psychotherapeuten. Wartelistenmanagement, Erstgespräch-Buchung, probatorische Sitzungen koordinieren. 75% weniger Telefon-Stress. DSGVO-konform.";
$page_keywords = "Psychotherapie Online-Terminverwaltung, Warteliste Psychotherapie digital, Erstgespräch Psychotherapie online, MediDesk Psychotherapie, Psychotherapeut Terminmanagement";
$page_canonical = "https://medideskr.cloud/fachrichtungen/psychotherapie/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for Psychotherapie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Terminverwaltung für Psychotherapie",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Digitale Terminverwaltung speziell für Psychotherapeuten. Wartelistenmanagement, Erstgespräch-Buchung, probatorische Sitzungen koordinieren, Kassenplätze verwalten.",
  "url": "https://medideskr.cloud/fachrichtungen/psychotherapie/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Digitales Wartelistenmanagement",
    "Erstgespräch-Buchung online",
    "Probatorische Sitzungen koordinieren",
    "Kassenplatz-Verwaltung",
    "Krisenintervention-Priorisierung",
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

<!-- Schema.org Structured Data - FAQPage for Psychotherapie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® Psychotherapie-Praxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® reduziert den Telefonaufwand in Psychotherapie-Praxen um bis zu 75%. Patienten können sich online auf die Warteliste setzen, Erstgespräche buchen und Therapietermine koordinieren."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert das digitale Wartelistenmanagement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Patienten setzen sich online auf die Warteliste mit Angaben zu Therapiewunsch, Dringlichkeit und Kassenart. Die Liste ist nach Dringlichkeit und Wartezeit sortiert. Bei freiem Platz schlägt das System passende Patienten vor."
      }
    },
    {
      "@type": "Question",
      "name": "Können Erstgespräche und probatorische Sitzungen online gebucht werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Patienten buchen online ihr Erstgespräch und füllen einen Vorgespräch-Fragebogen aus. Probatorische Sitzungen und Therapie-Serien werden automatisch über Wochen bzw. Monate verteilt."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® die Kassenplatz-Verwaltung?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, das System verwaltet Kassenplätze und Privatpatienten getrennt. Der Überblick zeigt, wie viele Kassenplätze frei sind und wann Therapien enden. Die Warteliste wird entsprechend gefiltert."
      }
    },
    {
      "@type": "Question",
      "name": "Wie werden Krisen und dringende Fälle behandelt?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Dringende Fälle und Kriseninterventionen werden rot markiert und erscheinen ganz oben. So können akute Situationen bevorzugt behandelt werden, ohne dass Patienten lange telefonieren müssen."
      }
    },
    {
      "@type": "Question",
      "name": "Ist die Kommunikation diskret und vertraulich?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, besonders in der Psychotherapie ist Diskretion wichtig. Patienten können Anliegen schriftlich mitteilen, ohne am Telefon Details nennen zu müssen. Alle Daten sind Ende-zu-Ende-verschlüsselt."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für sensible psychotherapeutische Daten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist vollständig DSGVO-konform mit höchsten Sicherheitsstandards. EU-Hosting in Deutschland, Ende-zu-Ende-Verschlüsselung, Zwei-Faktor-Authentifizierung und maximale Diskretion."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für eine Psychotherapie-Praxis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise beginnen bei 119 EUR pro Monat. Inkludiert sind Wartelistenmanagement, Erstgespräch-Buchung und Therapie-Serien-Koordination. Eine kostenlose 30-Tage-Testphase ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einer Psychotherapie-Praxis eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist innerhalb von 48 Stunden einsatzbereit. Die psychotherapiespezifische Konfiguration umfasst Wartelisten-Workflows, Therapie-Serien-Berechnung und diskrete Formulare."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® Video-Therapie-Termine?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Video-Therapie-Termine können separat gekennzeichnet und koordiniert werden. Patienten erhalten automatisch den Link zur Video-Sitzung. Präsenz- und Video-Termine werden übersichtlich dargestellt."
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
  "serviceType": "Digitale Terminverwaltung für Psychotherapie",
  "name": "MediDesk® für Psychotherapeuten",
  "description": "Spezialisierte digitale Lösung für Psychotherapie-Praxen mit Wartelistenmanagement, Erstgespräch-Buchung und Therapie-Serien-Koordination.",
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
    "audienceType": "Psychotherapeuten, Psychologische Praxen, Psychiater, Kinder- und Jugendpsychotherapeuten"
  }
}
</script>
</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <!-- Hero Section - Psychotherapie-spezifisch -->
    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Terminverwaltung für <span class="highlight-text-bg">Psychotherapie-Praxen</span></h1>
                        <p class="subheading">
                            Die spezialisierte digitale Lösung für Psychotherapeuten, psychologische Psychotherapeuten und psychotherapeutische Praxen: Wartelistenmanagement, Erstgespräch-Buchung, probatorische Sitzungen koordinieren, Kassenplätze vs. Privatplätze verwalten – 75% weniger Telefon-Stress, maximale Diskretion, DSGVO-konform
                        </p>

                        <ul class="features-list">
                            <li><span>Intelligentes Wartelistenmanagement</span> – 6+ Monate Wartezeit strukturiert organisieren</li>
                            <li><span>Erstgespräch & probatorische Sitzungen</span> – online buchbar mit Vorgespräch-Fragebogen</li>
                            <li><span>Kassenplätze & Privatplätze getrennt verwalten</span> – optimale Auslastung</li>
                            <li><span>Krisenintervention priorisieren</span> – akute Fälle werden rot markiert</li>
                            <li><span>Bis zu 75% weniger Telefonanrufe</span> – Fokus auf therapeutische Arbeit</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Live-Demo für Psychotherapeuten</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Terminverwaltung für Psychotherapie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Challenges Section - Psychotherapie-spezifische Herausforderungen -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in <span>Psychotherapie-Praxen</span></span>
                <h2>Diese <span class="highlight-text-red">Probleme</span> kennen Sie aus Ihrem Psychotherapie-Alltag</h2>
                <p class="subline">
                    Psychotherapie-Praxen haben besondere Herausforderungen: Sehr lange Wartezeiten (6-12 Monate für Kassenplätze), ständige Anfragen "Haben Sie einen freien Platz?", komplexe Ablauf-Koordination (Erstgespräch → Probatorik → Antragsstellung → Therapie), sensible Themen (Diskretion, Datenschutz), Kriseninterventionen. Die manuelle Verwaltung wird schnell überfordernd.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Telefonflut: "Haben Sie einen freien Therapieplatz?"</h3>
                    <p>50-80 Anrufe täglich von hilfesuchenden Menschen – alle fragen dasselbe: "Haben Sie einen freien Platz?" Antwort meist: "Aktuell nicht, Wartezeit 6-9 Monate." Patient ist frustriert, Sie verlieren täglich 3-5 Stunden nur mit diesen Anfragen.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-list-ul"></i>
                    </div>
                    <h3>Wartelistenmanagement ist chaotisch</h3>
                    <p>Warteliste in Excel, auf Zetteln, in verschiedenen Dokumenten – wer wartet seit wann? Wer ist dringend? Wer ist Kassenpatient, wer Privatpatient? Wenn Platz frei wird: Wen kontaktiere ich zuerst? Zettel verloren = Patient vergessen.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-calendar-xmark"></i>
                    </div>
                    <h3>Erstgespräch-Koordination ist zeitaufwendig</h3>
                    <p>Für psychotherapeutische Sprechstunde (50 Min Erstgespräch): Telefon mit Patient (was ist das Problem?), Termin finden, Vorgespräch-Infos abfragen, dann Probatorik koordinieren – 15-20 Min Aufwand pro Erstgespräch-Anfrage.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-user-clock"></i>
                    </div>
                    <h3>Probatorische Sitzungen & Therapie-Serien koordinieren</h3>
                    <p>Nach Erstgespräch: 2-4 probatorische Sitzungen koordinieren (Patient soll testen, ob Chemie stimmt). Dann Antrag bei Krankenkasse. Nach Bewilligung: 25-60 Termine über Monate verteilen (meist 1x pro Woche) – sehr aufwendig am Telefon.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-money-bill-wave"></i>
                    </div>
                    <h3>Kassenplätze vs. Privatplätze verwalten</h3>
                    <p>Sie haben z.B. 30 Kassenplätze (alle belegt, Warteliste mit 60 Personen) und 10 Privatplätze (5 frei). Patient fragt: "Haben Sie einen Platz?" – Sie müssen erklären: Kasse nein (lange Warteliste), Privat ja (aber Patient muss selbst zahlen). Kompliziert am Telefon.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <h3>Krisenintervention muss priorisiert werden</h3>
                    <p>Akute Fälle (Suizidalität, schwere Depression, Trauma nach Gewalt) brauchen schneller einen Platz – aber wie identifizieren? Am Telefon ist Dringlichkeit schwer einzuschätzen. Krisenpatienten rufen 10x an, andere warten geduldig.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-shield-alt"></i>
                    </div>
                    <h3>Diskretion & Datenschutz sind besonders wichtig</h3>
                    <p>Psychotherapie ist sehr sensibles Thema – niemand soll mitbekommen, dass Patient in Therapie ist. Am Telefon: "Können Sie Ihren Namen buchstabieren? Ihre Adresse? Telefonnummer?" – Patient ist gehemmt, hat Angst vor Datenmissbrauch.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Psychotherapie-Praxen brauchen spezialisierte digitale Lösungen</h4>
                <p>
                    Wartelistenmanagement, Erstgespräch-Koordination und probatorische Sitzungen haben besondere Anforderungen (Diskretion, Dringlichkeit, lange Wartezeiten). MediDesk® deckt alle psychotherapie-spezifischen Besonderheiten ab.
                </p>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Answer Section - Psychotherapie-spezifische Lösung -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    So funktioniert <span>digitale Psychotherapie-Terminverwaltung</span>
                </span>
                <h2>MediDesk® für <span class="highlight-text-green">Psychotherapie-Praxen</span></h2>
                <p class="subline">
                    Warteliste, Erstgespräch-Buchung und probatorische Sitzungen digital koordinieren
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-list-check"></i>
                    </div>
                    <p class="answer-card-step">Patient setzt sich online auf Warteliste</p>
                    <h3>Wartelistenmanagement digital</h3>
                    <p>Patient füllt Online-Formular aus: Therapie-Wunsch (VT, TP, AP), Kassenpatient oder Privatpatient, Dringlichkeit, bevorzugte Zeiten. System setzt auf strukturierte Warteliste.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-calendar-check"></i>
                    </div>
                    <p class="answer-card-step">Erstgespräch & Probatorik online buchen</p>
                    <h3>Vom Erstgespräch zur Therapie</h3>
                    <p>Wenn Erstgespräch-Platz frei: Patient kann direkt buchen (psychotherapeutische Sprechstunde, 50 Min). Nach Erstgespräch: Probatorische Sitzungen (2-4 Termine) automatisch berechnet.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-doctor"></i>
                    </div>
                    <p class="answer-card-step">Therapie-Serie koordinieren</p>
                    <h3>Langfristige Terminplanung</h3>
                    <p>Nach Antragsbewilligung: System berechnet 25, 45 oder 60 Termine über Monate, meist 1x pro Woche. Patient bestätigt Serie. Flexible Anpassungen möglich.</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Konkrete Zeitersparnis in Psychotherapie-Praxen</h4>
                <p><strong>Wartelisten-Anfragen:</strong> Von 50-80 Anrufen "Haben Sie einen Platz?" auf 5-10 reduziert = 75% Zeitersparnis<br>
                <strong>Erstgespräch-Koordination:</strong> Von 15-20 Min Telefon auf 3-5 Min reduziert = 70% schneller<br>
                <strong>Probatorik-Planung:</strong> Automatische Terminserien-Berechnung statt manuell = 85% weniger Aufwand</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt 30 Tage kostenlos testen</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Use Cases Section - Psychotherapie-spezifische Anwendungsfälle -->
    <section class="section-4-benefits">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle Psychotherapie</span>
            <h2>Diese <span class="highlight-text-bg2">psychotherapie-spezifischen Prozesse</span> können digital abgebildet werden</h2>
            <p class="section-4-subline">Speziell für die Bedürfnisse von Psychotherapeuten und psychotherapeutischen Praxen entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <rect x="24" y="24" width="16" height="20" rx="2" fill="#1976D2"/>
                        <path d="M28 28h8M28 32h8M28 36h6" stroke="#FFF" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Wartelistenmanagement - 6-12 Monate Wartezeit strukturiert organisieren</h3>
                <p class="section-4-description">
                    <strong>Die Herausforderung:</strong> Psychotherapie-Praxen haben meist lange Wartelisten (durchschnittlich 6-9 Monate für Kassenplätze, teilweise bis 12 Monate). Täglich 50-80 Anrufe von hilfesuchenden Menschen: "Haben Sie einen freien Therapieplatz?" Antwort meist: "Aktuell nicht, bitte auf Warteliste setzen." Am Telefon: Name notieren, Kontaktdaten erfragen, Symptome kurz abfragen (Patient ist gehemmt am Telefon), in Excel-Liste eintragen – 5-8 Min pro Anruf. Bei 60 Anrufen täglich: <strong>5-8 Stunden nur für "Nein, aber Warteliste"-Gespräche</strong>. Warteliste wird unübersichtlich (100+ Personen), wer ist dringend? Wer wartet seit wann? Wer ist Kassenpatient vs. Privatpatient?<br><br>
                    <strong>MediDesk®-Lösung – Online-Warteliste:</strong> (1) <strong>Patient setzt sich selbst auf Warteliste (online, diskret):</strong> Füllt strukturiertes Formular aus: "Therapie-Wunsch: Verhaltenstherapie / Tiefenpsychologie / Analytische Therapie", "Kassenpatient oder Privatpatient?", "Dringlichkeit: Akut (Krise) / Hoch / Normal", "Bevorzugte Wochentage & Uhrzeiten", "Kurzbeschreibung Symptome (optional, anonym möglich)", "Erstgespräch bereits absolviert? Ja/Nein". (2) <strong>System sortiert Warteliste automatisch:</strong> Nach Dringlichkeit (Krise zuerst), Wartezeit (wer wartet seit wann), Kassenplatz vs. Privatplatz getrennt. Dashboard zeigt: "Warteliste Kassenplatz: 87 Personen (davon 12 akut), Warteliste Privatplatz: 23 Personen". (3) <strong>Wenn Therapieplatz frei wird:</strong> System schlägt automatisch passende Patienten vor ("Patient A wartet seit 9 Monaten, akut, Verhaltenstherapie, Kassenpatient → perfekt für freien Kassenplatz"). Mit einem Klick Patient kontaktieren: "Therapieplatz ist frei – noch interessiert?". (4) <strong>Patienten erhalten Updates:</strong> "Sie sind auf Warteliste Position 45, geschätzte Wartezeit: 6-8 Monate" – Transparenz reduziert Frustration & Nachfrage-Anrufe.<br><br>
                    <strong>Krisenintervention:</strong> Akute Fälle (Suizidalität, schwere Depression, Trauma nach Gewalt) werden automatisch rot markiert, können bevorzugt behandelt werden (vor anderen Wartelisten-Patienten). Vorgespräch-Fragebogen hilft Dringlichkeit einzuschätzen.<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">Von 50-80 Wartelisten-Anfragen täglich auf 5-10 reduziert = 75% weniger Anrufe.</span> Strukturierte Warteliste statt Excel-Chaos. Faire Abarbeitung (wer zuerst kommt, malt zuerst – außer Krisenintervention). Patienten sind informiert (wissen, wo sie stehen), weniger frustriert. Ihr Team spart <strong>4-6 Stunden täglich</strong> bei Wartelisten-Telefonie.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 75% weniger Wartelisten-Anfragen am Telefon<br>
                    ✓ Strukturierte Abarbeitung nach Dringlichkeit & Wartezeit<br>
                    ✓ Transparenz für Patienten (Warteposition einsehbar)<br>
                    ✓ Krisenintervention automatisch priorisiert
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <path d="M32 24c-4 0-8 2-8 6s4 6 8 6 8-2 8-6-4-6-8-6z" fill="#7B1FA2"/>
                        <path d="M24 38c0-4 3.6-6 8-6s8 2 8 6v4H24v-4z" fill="#7B1FA2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Psychotherapeutische Sprechstunde (Erstgespräch) - Online buchbar mit Vorgespräch-Fragebogen</h3>
                <p class="section-4-description">
                    <strong>Was ist die psychotherapeutische Sprechstunde?</strong> Seit 2017 verpflichtend: Vor jeder Psychotherapie muss Erstgespräch (psychotherapeutische Sprechstunde, 50 Min) stattfinden. Ziel: Kennenlernen, Indikation prüfen (ist Psychotherapie sinnvoll?), Behandlungsplan besprechen, Patient aufklären (Ablauf, Dauer, Kosten). Danach: Entweder direkt probatorische Sitzungen oder Patient wird weitervermittelt (wenn Therapeut nicht passt oder keine Kapazität).<br><br>
                    <strong>Problem ohne System:</strong> Patient ruft an: "Ich brauche einen Therapieplatz, können wir einen Termin für Erstgespräch machen?" Am Telefon: Symptome abfragen (Patient ist gehemmt, will nicht viel erzählen am Telefon), Vorgeschichte (schon mal in Therapie gewesen?), Was erhofft sich Patient? – 10-15 Min Gespräch. Dann Termin für Erstgespräch finden (50 Min Zeitfenster), in Kalender eintragen. Bei 20-30 Erstgespräch-Anfragen pro Woche: <strong>3-5 Stunden nur für Erstgespräch-Koordination</strong>.<br><br>
                    <strong>MediDesk®-Lösung:</strong> (1) <strong>Online-Buchung für Erstgespräch:</strong> Patient sieht verfügbare Termine für psychotherapeutische Sprechstunde (50 Min Zeitfenster), wählt passenden Termin aus. (2) <strong>Vorgespräch-Fragebogen (optional):</strong> Vor Erstgespräch füllt Patient strukturierten Fragebogen aus (online, diskret): "Welche Symptome haben Sie? (Depression, Angststörung, Trauma, Zwangsstörung, Burnout, etc.)", "Seit wann bestehen Symptome?", "Schon mal in Therapie gewesen?", "Was erhoffen Sie sich von Therapie?", "Medikamente? Ja/Nein", "Suizidgedanken? Ja/Nein (wichtig für Krisenintervention)". (3) <strong>Therapeut sieht Fragebogen vor Erstgespräch:</strong> Kann sich vorbereiten, weiß schon grob, worum es geht. Erstgespräch ist effizienter (keine Basics mehr abfragen, direkt in die Tiefe gehen). (4) <strong>Nach Erstgespräch:</strong> Wenn Therapeut & Patient passen → probatorische Sitzungen können direkt online gebucht werden (siehe nächster Use Case).<br><br>
                    <strong>Für Kassenpatienten wichtig:</strong> Psychotherapeutische Sprechstunde ist Kassenleistung (Patient zahlt nichts). System kann automatisch informieren: "Bringen Sie bitte Ihre Versichertenkarte mit zum Erstgespräch".<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #7B1FA2; font-weight: 700;">Erstgespräch-Koordination von 10-15 Min Telefon auf 2-3 Min reduziert = 70% Zeitersparnis.</span> Vorgespräch-Fragebogen hilft Therapeut, sich vorzubereiten (bessere Erst-Sitzung). Patienten sind dankbar (keine Hemmschwelle am Telefon, können in Ruhe Fragebogen ausfüllen). Krisenintervention wird früh erkannt (Suizidgedanken im Fragebogen → sofort priorisieren).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Online-Buchung für Erstgespräch (50 Min)<br>
                    ✓ Vorgespräch-Fragebogen für bessere Vorbereitung<br>
                    ✓ 70% weniger Koordinationsaufwand<br>
                    ✓ Krisenintervention früh erkennbar
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <rect x="26" y="26" width="12" height="12" rx="2" fill="#388E3C"/>
                        <path d="M29 32l2 2 4-4" stroke="#FFF" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Probatorische Sitzungen - 2-4 Termine automatisch berechnet & koordiniert</h3>
                <p class="section-4-description">
                    <strong>Was sind probatorische Sitzungen?</strong> Nach psychotherapeutischer Sprechstunde (Erstgespräch): Wenn Therapeut & Patient sich für Therapie entscheiden, folgen 2-4 probatorische Sitzungen (à 50 Min). Ziel: Testen, ob Chemie stimmt, ob Patient sich öffnen kann, ob Therapeut helfen kann. Patient kann nach Probatorik entscheiden: "Ich möchte Therapie beginnen" oder "Ich suche weiter". Nach Probatorik: Therapeut stellt Antrag bei Krankenkasse (Kurzzeittherapie 25 Stunden oder Langzeittherapie 45-60 Stunden).<br><br>
                    <strong>Problem ohne System:</strong> Nach Erstgespräch am Telefon oder persönlich: "Wir machen jetzt 2-4 probatorische Sitzungen – wann können Sie?" 2-4 Termine finden, die im Wochenrhythmus passen (meist 1x pro Woche, damit Patient sich eingewöhnen kann). Patient schreibt mit (vergisst Termine oft). Bei Terminverschiebung: alle Folgetermine neu koordinieren. 10-15 Min Aufwand pro Patient.<br><br>
                    <strong>MediDesk®-Lösung:</strong> (1) <strong>Nach Erstgespräch:</strong> Therapeut aktiviert im System "Probatorische Sitzungen für Patient XY" (2-4 Sitzungen). (2) <strong>Automatische Terminserien-Berechnung:</strong> System schlägt vor: "2-4 Termine im Wochenrhythmus, z.B. immer donnerstags 15:00 Uhr über 2-4 Wochen". Patient kann online bestätigen oder einzelne Termine anpassen. (3) <strong>Erinnerungen & Vorbereitung:</strong> Patient erhält vor jeder probatorischen Sitzung Erinnerung ("Morgen 15:00 Uhr Sitzung 2 von 4"). Therapeut sieht Dashboard: "Patient XY: probatorische Sitzung 2 von 4 – nächste Woche Sitzung 3". (4) <strong>Nach Probatorik:</strong> Wenn Patient sich für Therapie entscheidet → System kann direkt Therapie-Serie berechnen (siehe nächster Use Case). Wenn Patient abbricht → Wartelisten-Platz wird automatisch frei für nächsten Patienten.<br><br>
                    <strong>Flexible Anpassungen:</strong> Patient kann nicht zu Termin 3? Verschiebt online auf andere Woche. System passt Termin 4 automatisch an (weiterhin Wochenrhythmus).<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #388E3C; font-weight: 700;">Probatorik-Koordination von 10-15 Min auf 2-3 Min reduziert = 85% Zeitersparnis.</span> Keine vergessenen Termine (Erinnerungen). Patient fühlt sich gut betreut (strukturierte Serie, weiß genau, wie viele Sitzungen noch). Reibungsloser Übergang zu Therapie-Serie nach Antragsbewilligung.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 2-4 probatorische Sitzungen automatisch berechnet<br>
                    ✓ Wochenrhythmus eingehalten (meist 1x/Woche)<br>
                    ✓ Flexible Anpassungen möglich<br>
                    ✓ Nahtloser Übergang zur Therapie-Serie
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M24 28h16M24 32h16M24 36h16M24 40h12" stroke="#F57C00" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Therapie-Serien - 25, 45, 60 Stunden Verhaltenstherapie automatisch über Monate verteilt</h3>
                <p class="section-4-description">
                    <strong>Langzeittherapie koordinieren:</strong> Nach Antragsbewilligung durch Krankenkasse beginnt eigentliche Therapie. <strong>Kurzzeittherapie (KZT):</strong> 25 Stunden (Verhaltenstherapie) oder 25 Stunden (Tiefenpsychologie). <strong>Langzeittherapie (LZT):</strong> 45 oder 60 Stunden (Verhaltenstherapie), 60-80 Stunden (Tiefenpsychologie), 160-240 Stunden (Analytische Therapie). Normalerweise: 1x pro Woche à 50 Min. Bedeutet: <strong>25-240 Termine über 6-60 Monate koordinieren!</strong><br><br>
                    <strong>Problem ohne System:</strong> 60 Termine manuell planen ist nahezu unmöglich. Am Telefon: "Wir machen jetzt 60 Stunden Therapie, immer donnerstags 15:00 Uhr" – Patient sagt zu, aber wie alle Termine erfassen? In Kalender eintragen: 60 Einträge manuell anlegen (Stunden Arbeit). Bei Urlaub/Terminverschiebung: alle Folgetermine verschieben (Horror). Patienten vergessen Termine (keine Übersicht über gesamte Serie).<br><br>
                    <strong>MediDesk®-Lösung – Automatische Therapie-Serien:</strong> (1) <strong>Nach Antragsbewilligung:</strong> Therapeut gibt ein: "Patient XY: 60 Stunden Verhaltenstherapie bewilligt, Start nächste Woche". (2) <strong>System berechnet automatisch:</strong> 60 Termine à 50 Min, über 60 Wochen verteilt (ca. 15 Monate), immer donnerstags 15:00 Uhr. Patient sieht komplette Serie: "Termin 1: Do 20.03. 15:00, Termin 2: Do 27.03. 15:00, ... Termin 60: Do 15.06. (nächstes Jahr) 15:00". (3) <strong>Patient bestätigt mit einem Klick.</strong> Alle Termine sind geblockt. (4) <strong>Flexible Anpassungen:</strong> Patient hat 3 Wochen Urlaub im Sommer? Pause einbauen möglich. Termin 20 muss verschoben werden? System passt alle Folgetermine automatisch an. (5) <strong>Behandlungsfortschritt tracken:</strong> "Patient hat 30 von 60 Stunden absolviert. 30 Stunden verbleibend (ca. 7,5 Monate)". Bei Stunde 25: Automatische Erinnerung an Therapeut "Verlängerungsantrag stellen?" (wenn mehr Stunden benötigt).<br><br>
                    <strong>Verschiedene Therapieformen unterstützt:</strong> Verhaltenstherapie (VT), Tiefenpsychologisch fundierte Psychotherapie (TP), Analytische Psychotherapie (AP), Systemische Therapie (ST). Jede hat andere Stundenkontingente – System kennt Vorgaben.<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #F57C00; font-weight: 700;">Therapie-Serien-Planung von Stunden Aufwand auf 5-10 Min reduziert = 95% Zeitersparnis.</span> Patienten haben Übersicht (sehen alle 60 Termine), erscheinen regelmäßiger. Bei Therapie-Ende: Automatische Erinnerung "Patient XY: Therapie endet in 5 Sitzungen – Abschlussgespräch planen?". Wartelisten-Platz wird automatisch frei für nächsten Patienten.
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ 25-240 Termine automatisch über Monate verteilt<br>
                    ✓ Behandlungsfortschritt wird getrackt<br>
                    ✓ Flexible Pausen & Verschiebungen möglich<br>
                    ✓ Verlängerungsanträge werden automatisch erinnert
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M32 24v16M24 32h16" stroke="#C2185B" stroke-width="3"/>
                        <circle cx="32" cy="32" r="10" stroke="#C2185B" stroke-width="2" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Kassenplätze vs. Privatplätze - Getrennte Verwaltung mit Transparenz</h3>
                <p class="section-4-description">
                    <strong>Die Realität in Psychotherapie-Praxen:</strong> Die meisten Psychotherapeuten haben begrenzte Kassenplätze (z.B. 30 Kassenplätze) und einige Privatplätze (z.B. 10 Privatplätze oder Selbstzahler). <strong>Problem:</strong> Kassenplätze sind meist alle belegt (Warteliste mit 60-100 Personen, Wartezeit 6-12 Monate). Privatplätze sind manchmal frei (Warteliste kürzer, 0-3 Monate Wartezeit). Patient ruft an: "Haben Sie einen Therapieplatz?" – Sie müssen erklären: "Kassenplatz nein (lange Warteliste), Privatplatz ja (aber Sie müssen selbst zahlen, ca. 100€ pro Sitzung)". Patient ist frustriert: "Ich bin gesetzlich versichert, kann mir Privattherapie nicht leisten." Am Telefon schwierig zu kommunizieren.<br><br>
                    <strong>MediDesk®-Lösung – Getrennte Wartelisten:</strong> (1) <strong>Kassenplatz-Kontingent:</strong> Im System hinterlegen: "30 Kassenplätze verfügbar". Dashboard zeigt: "Kassenplätze: 29 von 30 belegt, Warteliste: 87 Personen". (2) <strong>Privatplatz-Kontingent:</strong> "10 Privatplätze verfügbar". Dashboard: "Privatplätze: 6 von 10 belegt, Warteliste: 12 Personen". (3) <strong>Bei Online-Anfrage:</strong> Patient wählt: "Ich bin Kassenpatient (gesetzlich versichert)" oder "Ich bin Privatpatient / Selbstzahler". System zeigt: "Kassenplatz: Wartezeit ca. 8 Monate (87 Personen vor Ihnen)" oder "Privatplatz: Wartezeit ca. 2 Monate (12 Personen vor Ihnen)". Patient kann selbst entscheiden. (4) <strong>Transparente Kommunikation:</strong> Bei Kassenplatz-Anfrage mit langer Wartezeit: "Alternativ bieten wir auch Privattherapie an (Selbstzahler, ca. 100€ pro Sitzung, kürzere Wartezeit). Möchten Sie auch auf Privatplatz-Warteliste?" (5) <strong>Platzwechsel möglich:</strong> Patient ist auf Kassenplatz-Warteliste seit 6 Monaten, immer noch 20 Personen vor ihm. Sie können anbieten: "Privatplatz ist jetzt frei – möchten Sie wechseln? Oder weiter auf Kassenplatz warten?"<br><br>
                    <strong>Kostenvoranschlag für Privatpatienten:</strong> System kann automatisch Kostenvoranschlag generieren: "60 Stunden à 100€ = 6.000€ gesamt (über 15 Monate verteilt, ca. 400€ pro Monat)". Patient weiß, was auf ihn zukommt.<br><br>
                    <strong>Auslastungs-Optimierung:</strong> Dashboard zeigt: "Kassenplätze 97% ausgelastet (sehr gut), Privatplätze 60% ausgelastet (mehr Marketing für Privatplätze?)".<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #C2185B; font-weight: 700;">Transparente Kommunikation reduziert Frustration.</span> Patienten wissen, woran sie sind (Kassenplatz lange Wartezeit, Privatplatz kürzer). Sie können informiert entscheiden. Ihre Praxis: optimale Auslastung (keine ungenutzten Privatplätze), faire Wartelisten-Abarbeitung. <strong>Zusätzlicher Umsatz durch Privatplätze</strong> (wenn sonst leer stehen würden).
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Kassenplätze & Privatplätze getrennt verwaltet<br>
                    ✓ Transparente Wartezeit-Kommunikation<br>
                    ✓ Kostenvoranschlag für Privatpatienten automatisch<br>
                    ✓ Optimale Auslastung beider Kontingente
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFEBEE"/>
                        <path d="M32 24l-3 6h6l-3 6" fill="#D32F2F"/>
                        <circle cx="32" cy="44" r="2" fill="#D32F2F"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Krisenintervention - Akute Fälle werden automatisch priorisiert</h3>
                <p class="section-4-description">
                    <strong>Das Problem:</strong> Nicht alle Patienten auf Warteliste haben gleiche Dringlichkeit. Manche sind akut (Suizidalität, schwere Depression nach Trauma, Panikstörung mit Arbeitsunfähigkeit) – brauchen schnell Hilfe. Andere können warten (leichte depressive Verstimmung, Prävention). <strong>Ohne System:</strong> Alle auf einer Warteliste, erste Anlaufstelle ist Hausarzt oder Psychiater (für Medikamente). Psychotherapeuten wissen oft nicht, wer auf Warteliste akut ist. Am Telefon schwer einzuschätzen (Patient redet nicht offen über Suizidgedanken).<br><br>
                    <strong>MediDesk®-Lösung – Dringlichkeits-Einstufung:</strong> (1) <strong>Bei Wartelisten-Anmeldung:</strong> Patient wählt Dringlichkeit: "Krise (sofort Hilfe nötig)", "Akut (innerhalb 2 Wochen)", "Hoch (innerhalb 4 Wochen)", "Normal (kann warten)". Optional: Vorgespräch-Fragebogen mit Frage: "Haben Sie Suizidgedanken? Ja/Nein/Manchmal". (2) <strong>Automatische Priorisierung:</strong> System sortiert Warteliste: Erst alle "Krise"-Fälle (rot markiert), dann "Akut" (orange), dann "Hoch" (gelb), dann "Normal" (grün). Dashboard zeigt: "12 Krisenfälle auf Warteliste (sofortige Aufmerksamkeit nötig!), 23 akute Fälle, 52 normale Fälle". (3) <strong>Krisenintervention-Slots reservieren:</strong> Sie können im System hinterlegen: "2 Slots pro Woche reserviert für Krisenintervention (akute Fälle)". Wenn Krise-Fall kommt, bekommt er bevorzugt einen dieser Slots (vor normalen Wartelisten-Patienten). (4) <strong>Automatische Benachrichtigung:</strong> Wenn Krise-Fall sich auf Warteliste setzt, erhalten Sie sofort Benachrichtigung: "Neuer Krise-Fall auf Warteliste – Patient meldet Suizidgedanken – bitte zeitnah kontaktieren!"<br><br>
                    <strong>Weitervermittlung bei Überlastung:</strong> Wenn Sie keine Kapazität für Krise-Fall haben: System kann automatisch Kontakte vorschlagen: "Psychiatrische Notaufnahme (bei akuter Suizidalität): 0800-111 0 111 (Telefonseelsorge), nächste Psychiatrie-Klinik XY". Patient bekommt Hilfe, auch wenn Sie keine Kapazität haben.<br><br>
                    <strong>Rechtliche Absicherung:</strong> System dokumentiert: "Patient hat angegeben 'Keine Suizidgedanken' bei Wartelisten-Anmeldung" – wichtig für Haftungsfragen. Wenn Patient später Krise hat, ist dokumentiert, dass bei Anmeldung keine Krise bestand.<br><br>
                    <strong>Ergebnis:</strong> <span style="color: #D32F2F; font-weight: 700;">Akute Fälle werden 90% schneller identifiziert & behandelt.</span> Leben können gerettet werden. Patienten in Krise fühlen sich ernst genommen (nicht "rufen Sie in 3 Monaten nochmal an"). Faire Abwägung: Wer dringend ist, bekommt Vorrang – andere warten (aber das ist ethisch vertretbar, wenn Leben auf dem Spiel steht).
                </p>
                <div style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #D32F2F; font-weight: 600;">
                    ✓ Akute Fälle werden rot markiert & priorisiert<br>
                    ✓ Krisenintervention-Slots reservierbar<br>
                    ✓ Automatische Benachrichtigung bei Krise-Fällen<br>
                    ✓ Weitervermittlung bei Überlastung möglich
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>"In Psychotherapie-Praxen sind 60-70% aller Anfragen Wartelisten-Anfragen ('Haben Sie einen Platz?') – genau diese profitieren massiv von digitalem Wartelistenmanagement mit Transparenz und automatischer Priorisierung."</p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Wie sieht das konkret für meine Psychotherapie-Praxis aus?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Benefits Section - Psychotherapie-spezifische Vorteile -->
    <section class="section-5-features">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für Psychotherapie-Praxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer Psychotherapie-Praxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Effizienz, Patientenzufriedenheit und therapeutischer Arbeit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">75% weniger Wartelisten-Anrufe = 4-6 Stunden täglich gespart</h3>
                    <p class="section-5-feature-description">
                        <strong>Vorher:</strong> 50-80 Anrufe täglich "Haben Sie einen freien Therapieplatz?" – Antwort meist: "Aktuell nicht, Wartezeit 6-9 Monate, ich setze Sie auf Warteliste." Am Telefon: Name, Kontaktdaten, kurz Symptome abfragen (Patient ist gehemmt), in Excel eintragen – 5-8 Min pro Anruf. Bei 60 Anrufen: <strong>5-8 Stunden nur für "Nein, aber Warteliste"-Gespräche.</strong> Frustrierend für beide Seiten (Patient bekommt Absage, Sie verlieren Zeit).<br>
                        <strong>Mit MediDesk®:</strong> Patient setzt sich online auf Warteliste (diskret, in Ruhe zuhause). Füllt strukturiertes Formular aus (5 Min). Sie sehen strukturierte Liste statt 60 Telefonanrufe. <strong>Nur noch 5-10 Wartelisten-Anrufe täglich</strong> (komplexe Fälle, Rückfragen). <span style="color: #1976D2; font-weight: 700;">Von 50-80 auf 5-10 Anrufe = 75-87% Reduktion.</span><br><br>
                        <strong>Zeitersparnis:</strong> 4-6 Stunden täglich (bei 60 Anrufen à 5-8 Min) = <strong>80-120 Stunden pro Monat.</strong> Diese Zeit können Sie nutzen für: Therapie-Vorbereitung, Supervision, Fortbildung, mehr Therapie-Plätze (mehr Umsatz), Selbstfürsorge (Burnout-Prävention).<br><br>
                        <strong>Zusätzlich:</strong> Weniger Stress für Ihr Team (Empfang/Sekretariat wird nicht mit Wartelisten-Anfragen überflutet). Telefon klingelt deutlich weniger → ruhigere Arbeitsatmosphäre. Wichtig für psychotherapeutische Setting (Ruhe & Fokus).
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-list-check" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Strukturiertes Wartelistenmanagement statt Excel-Chaos</h3>
                    <p class="section-5-feature-description">
                        <strong>Problem Excel-Wartelisten:</strong> 100+ Personen in Excel-Tabelle (unübersichtlich). Spalten: Name, Telefon, E-Mail, Symptome (kurz notiert, oft unvollständig), Datum Wartelisten-Eintrag, Kassenpatient/Privatpatient, Dringlichkeit(?). <strong>Herausforderungen:</strong> (1) Wer wartet seit wann? Manuell sortieren nach Datum. (2) Wer ist dringend? Nicht markiert, weil am Telefon schwer einzuschätzen. (3) Wenn Platz frei wird: Wen kontaktiere ich? Ersten auf Liste (aber ist das fair? Vielleicht ist Position 20 akuter). (4) Excel-Datei wird nicht von allen im Team aktualisiert → verschiedene Versionen existieren. (5) Datenschutz-Problem: Excel liegt auf lokalem PC oder in Cloud ohne Verschlüsselung.<br><br>
                        <strong>Mit MediDesk® – Strukturierte Warteliste:</strong> (1) <strong>Automatische Sortierung:</strong> Nach Dringlichkeit (Krise zuerst), Wartezeit (wer wartet seit wann), Kassenplatz vs. Privatplatz. Dashboard zeigt: "Warteliste Kassenplatz: 87 Personen (davon 12 akut), Warteliste Privatplatz: 23 Personen". (2) <strong>Alle Infos vollständig:</strong> Jeder Patient hat strukturiertes Profil: Therapie-Wunsch (VT/TP/AP), Symptome (aus Vorgespräch-Fragebogen), Dringlichkeit (Krise/Akut/Normal), Kassenpatient oder Privatpatient, bevorzugte Zeiten, Kontaktdaten, Datum Wartelisten-Eintrag. (3) <strong>Wenn Platz frei wird:</strong> System schlägt automatisch passenden Patienten vor: "Patient A: wartet seit 9 Monaten, akut, Verhaltenstherapie, Kassenpatient → perfekt für freien Kassenplatz". (4) <strong>Alle im Team haben Zugriff:</strong> Echtzeit-Synchronisation (keine verschiedenen Excel-Versionen). (5) <strong>DSGVO-konform:</strong> Verschlüsselte Speicherung, Zugriffsprotokolle, Datenschutz gewährleistet.<br><br>
                        <span style="color: #7B1FA2; font-weight: 700;">Ergebnis: Faire Abarbeitung, keine vergessenen Patienten, transparente Kriterien (Dringlichkeit + Wartezeit), optimale Auslastung.</span>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-calendar-days" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Erstgespräch, Probatorik & Therapie-Serien automatisch koordiniert</h3>
                    <p class="section-5-feature-description">
                        <strong>Der Ablauf Psychotherapie (ohne System – manuell):</strong><br>
                        **Schritt 1 – Erstgespräch:** Patient ruft an, Sie finden Termin für psychotherapeutische Sprechstunde (50 Min), tragen manuell ein. 10-15 Min Aufwand.<br>
                        **Schritt 2 – Probatorische Sitzungen:** Nach Erstgespräch 2-4 weitere Termine finden (im Wochenrhythmus), wieder manuell eintragen. 10-15 Min Aufwand.<br>
                        **Schritt 3 – Antragsstellung:** Nach Probatorik Antrag bei Krankenkasse stellen (das bleibt manuell, kann nicht digitalisiert werden).<br>
                        **Schritt 4 – Therapie-Serie:** Nach Bewilligung 25-60 Termine über Monate verteilen – <strong>Stunden Arbeit</strong> (60 Einträge manuell in Kalender).<br>
                        <strong>Gesamt: 1-3 Stunden Koordinationsaufwand pro Patient</strong> (vom Erstgespräch bis zur kompletten Therapie-Serie).<br><br>
                        <strong>Mit MediDesk® – Vollautomatische Koordination:</strong><br>
                        **Schritt 1 – Erstgespräch:** Patient bucht online (2 Min). Füllt Vorgespräch-Fragebogen aus (5 Min). <strong>Ihr Aufwand: 0 Min.</strong><br>
                        **Schritt 2 – Probatorische Sitzungen:** Nach Erstgespräch aktivieren Sie im System "Probatorik für Patient XY" → System berechnet 2-4 Termine automatisch. <strong>Ihr Aufwand: 2 Min.</strong><br>
                        **Schritt 3 – Antragsstellung:** Bleibt manuell (kann nicht automatisiert werden).<br>
                        **Schritt 4 – Therapie-Serie:** Nach Bewilligung geben Sie ein "60 Stunden bewilligt" → System berechnet 60 Termine automatisch. <strong>Ihr Aufwand: 5 Min.</strong><br>
                        <strong>Gesamt: 7 Min Koordinationsaufwand pro Patient</strong> (statt 1-3 Stunden) = <span style="color: #388E3C; font-weight: 700;">95% Zeitersparnis.</span><br><br>
                        <strong>Bei 20 neuen Patienten pro Jahr:</strong> Sparen Sie <strong>20-60 Stunden Koordinationsarbeit</strong> (vorher 1-3 Stunden pro Patient, jetzt 7 Min). Diese Zeit können Sie für therapeutische Arbeit nutzen (= höherer Umsatz durch mehr Therapie-Stunden).
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-shield-halved" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Maximale Diskretion & Datenschutz für sensible psychotherapeutische Daten</h3>
                    <p class="section-5-feature-description">
                        <strong>Warum Diskretion in Psychotherapie besonders wichtig ist:</strong> Stigma (Arbeitgeber/Familie soll nicht mitbekommen, dass Patient in Therapie ist). Scham (Patient schämt sich für Depression, Angststörung, Trauma). Rechtliche Folgen (bei manchen Berufen: Beamte, Piloten, Soldaten kann Psychotherapie Karriere beeinflussen). <strong>Am Telefon:</strong> Patient ist gehemmt, will nicht offen sprechen ("Meine Kollegin sitzt neben mir, ich kann jetzt nicht über meine Symptome reden").<br><br>
                        <strong>MediDesk® ermöglicht diskrete Kommunikation:</strong> (1) <strong>Online-Anmeldung anonym möglich:</strong> Patient muss nicht am Telefon Details erzählen. Kann Vorgespräch-Fragebogen in Ruhe zuhause ausfüllen (niemand hört mit). (2) <strong>Verschlüsselte Kommunikation:</strong> Alle Daten werden verschlüsselt übertragen (TLS/SSL). Speicherung in Deutschland, DSGVO-konform. (3) <strong>Keine Telefon-Wartelisten mehr:</strong> Kein Empfang, der mithört "Ja, Herr Müller, Sie warten auf Therapieplatz wegen Depression". Stattdessen: Online-Portal (Patient loggt sich diskret ein). (4) <strong>Datenschutz-Protokolle:</strong> Wer hat wann auf Patientendaten zugegriffen? Wird protokolliert. Bei Datenschutz-Anfrage: Exportierbar. (5) <strong>Anonyme Warteliste möglich:</strong> Patient kann sich ohne Angabe von Name/Adresse auf Warteliste setzen (nur E-Mail oder Telefonnummer für Kontakt). Erst bei Erstgespräch vollständige Daten.<br><br>
                        <strong>Rechtliche Absicherung:</strong> MediDesk® erfüllt alle Anforderungen für Psychotherapie-Praxen: DSGVO-konform, Auftragsverarbeitungsvertrag (AVV) verfügbar, Hosting in Deutschland, keine Weitergabe an Drittländer, Datenlöschung auf Anfrage.<br><br>
                        <span style="color: #F57C00; font-weight: 700;">Ergebnis: Patienten fühlen sich sicher (Diskretion gewährleistet), sind eher bereit, Hilfe zu suchen. Ihre Praxis: Rechtlich abgesichert, keine Datenschutz-Verstöße.</span>
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-hand-holding-heart" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Höhere Patientenzufriedenheit durch Transparenz & Kommunikation</h3>
                    <p class="section-5-feature-description">
                        <strong>Problem ohne digitale Lösung:</strong> Patient auf Warteliste fühlt sich "im Stich gelassen". Weiß nicht: Wo stehe ich auf Warteliste? Wie lange muss ich noch warten? Bin ich vergessen worden? Ruft alle 4 Wochen an ("Gibt es schon einen Platz?") – nervt beide Seiten. Patient verliert Hoffnung ("Ich bekomme nie einen Platz, Psychotherapie ist in Deutschland unmöglich").<br><br>
                        <strong>MediDesk® schafft Transparenz:</strong> (1) <strong>Warteposition einsehbar:</strong> Patient loggt sich ein, sieht "Sie sind auf Warteliste Position 45 (Kassenplatz), geschätzte Wartezeit: 6-8 Monate". Weiß, woran er ist. (2) <strong>Automatische Updates:</strong> Alle 4 Wochen erhält Patient Update: "Ihre Position hat sich verbessert: jetzt Position 38 (vorher 45). Noch ca. 5-7 Monate Wartezeit". Patient fühlt sich informiert, nicht vergessen. (3) <strong>Transparente Kriterien:</strong> Patient versteht, warum andere vorgezogen werden: "Krisenfälle werden priorisiert (lebensbedrohlich), danach nach Wartezeit". Fair & nachvollziehbar. (4) <strong>Erstgespräch-Bestätigung:</strong> Nach Erstgespräch-Buchung erhält Patient Bestätigungsmail mit allen Infos: "Was Sie zum Erstgespräch mitbringen müssen, wie lange es dauert (50 Min), was danach passiert (probatorische Sitzungen)". Patient ist vorbereitet, fühlt sich gut aufgehoben. (5) <strong>Therapie-Übersicht:</strong> Patient sieht alle 60 Termine seiner Therapie-Serie (nicht nur nächsten Termin). Kann langfristig planen (Urlaub, Arbeit).<br><br>
                        <strong>Ergebnis:</strong> <span style="color: #C2185B; font-weight: 700;">Patientenzufriedenheit steigt signifikant (messbar durch Bewertungen: 4,1 → 4,8 Sterne).</span> Weniger Abbrüche (Patient fühlt sich gut betreut, erscheint regelmäßiger). Positive Bewertungen → mehr neue Patienten (Mund-zu-Mund-Propaganda, Google-Bewertungen). Wartelisten-Frust reduziert (Patient weiß, dass er nicht vergessen wurde).
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-heart-pulse" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Mehr Zeit für therapeutische Arbeit statt Administration</h3>
                    <p class="section-5-feature-description">
                        <strong>Das eigentliche Problem:</strong> Psychotherapeuten studieren 5-6 Jahre (Psychologie-Studium + Psychotherapie-Ausbildung), um Menschen therapeutisch zu helfen – nicht um Wartelisten in Excel zu verwalten oder 60 Anrufe "Haben Sie einen Platz?" zu beantworten. <strong>Realität ohne digitale Lösung:</strong> 20-30% der Arbeitszeit geht für Administration drauf (Wartelisten-Telefonie, Terminkoordination, Antragsstellung). Bedeutet: Bei 40h-Woche sind <strong>8-12 Stunden reine Administration</strong> – Zeit, die für Therapie fehlt.<br><br>
                        <strong>Mit MediDesk® – Fokus zurück auf Therapie:</strong> Administration von 8-12h auf 2-4h reduziert = <strong>4-10 Stunden pro Woche gewonnen.</strong> Diese Zeit nutzen für:<br>
                        **Option 1 – Mehr Therapie-Stunden:** 4-10 Stunden = 4-10 zusätzliche Therapie-Sitzungen à 100€ = <span style="color: #F9A825; font-weight: 700;">400-1.000€ Mehrumsatz pro Woche</span> = 1.600-4.000€ pro Monat.<br>
                        **Option 2 – Bessere Therapie-Vorbereitung:** Zeit für Supervision, Fortbildung, Literaturstudium → bessere therapeutische Arbeit → bessere Behandlungserfolge → zufriedenere Patienten.<br>
                        **Option 3 – Selbstfürsorge:** Burnout-Prävention (Psychotherapeuten haben hohe Burnout-Rate). 4-10 Stunden weniger Stress pro Woche = bessere Work-Life-Balance = längere Karriere.<br><br>
                        <strong>Zusätzlich:</strong> Weniger Frust im Arbeitsalltag (keine 60 Absage-Telefonate mehr "Nein, kein Platz frei"). Sie können sich auf das konzentrieren, wofür Sie ausgebildet wurden: <strong>Menschen therapeutisch helfen.</strong> Das ist erfüllender als Terminkoordination.<br><br>
                        <strong>Langfristig:</strong> Zufriedenere Therapeuten = bessere Therapie-Ergebnisse = zufriedenere Patienten = positive Bewertungen = mehr neue Patienten = Wachstum der Praxis.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>"Psychotherapie-Praxen mit MediDesk® sparen durchschnittlich 4-10 Stunden pro Woche bei Administration – Zeit, die direkt in therapeutische Arbeit, Supervision oder Selbstfürsorge fließen kann."</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Jetzt persönliche Beratung für Psychotherapie-Praxen</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Success Stories Section -->
    <section class="section-7-process">
        <div class="section-7-header">
            <h2>So nutzen <span class="highlight-text-bg">Psychotherapie-Praxen</span> MediDesk®</h2>
            <p class="section-7-subline">Reale Anwendungsfälle aus der Praxis</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-user-doctor"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Psychologische Psychotherapeutin (Einzelpraxis) mit Schwerpunkt Verhaltenstherapie</h3>
                            <p class="section-7-step-description">
                                <strong>Ausgangslage:</strong> 30 Kassenplätze (alle belegt), Warteliste mit 95 Personen (Wartezeit 8-10 Monate). Täglich 40-60 Anrufe "Haben Sie einen Platz?" – Antwort immer gleich: "Nein, Warteliste 8-10 Monate". 4-6 Stunden täglich nur für Wartelisten-Telefonie. Warteliste in Excel (unübersichtlich, wer ist dringend?). Therapie-Serien (25-60 Stunden) manuell koordinieren (Stunden Aufwand). Therapeutin fühlt sich "wie Callcenter-Mitarbeiterin statt Therapeutin".<br>
                                <strong>Ergebnis nach 4 Monaten mit MediDesk®:</strong> <strong>Anrufe reduziert von 40-60 auf 5-8 täglich</strong> (87% Reduktion). 89% der Patienten setzen sich online auf Warteliste (statt anzurufen). Strukturierte Warteliste nach Dringlichkeit (12 akute Fälle wurden identifiziert & priorisiert). Therapie-Serien-Koordination von 2-3 Stunden auf 10 Min pro Patient reduziert. <span style="color: #1976D2; font-weight: 700;">Zeitersparnis: 4-6 Stunden täglich = 80-120 Stunden/Monat.</span> Diese Zeit nutzt sie für: 2 zusätzliche Therapie-Plätze (mehr Umsatz), bessere Supervision, Selbstfürsorge (Burnout-Risiko reduziert). Patientenzufriedenheit: 4,0 → 4,9 Sterne (Patienten loben Transparenz der Warteliste). Therapeutin: "Ich fühle mich wieder wie Therapeutin, nicht wie Sekretärin."
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
                            <h3 class="section-7-step-title">Psychotherapeutische Praxis (Gemeinschaftspraxis) mit 3 Therapeuten</h3>
                            <p class="section-7-step-description">
                                <strong>Besonderheit:</strong> 3 Therapeuten (2x Verhaltenstherapie, 1x Tiefenpsychologie), verschiedene Schwerpunkte (Depression, Angststörungen, Trauma). 90 Kassenplätze gesamt, 20 Privatplätze. Warteliste mit 180+ Personen (chaotisch: Excel-Datei wird von allen 3 Therapeuten unterschiedlich geführt). Problem: Wer gehört zu welchem Therapeut? Patient ruft an: "Ich brauche Therapie für Trauma" – Sekretariat muss herausfinden, welcher Therapeut Trauma-Schwerpunkt hat.<br>
                                <strong>MediDesk-Lösung:</strong> (1) Online-Warteliste mit Therapeuten-Zuordnung: Patient wählt bei Anmeldung "Therapie-Wunsch: Verhaltenstherapie / Tiefenpsychologie" und "Thema: Depression / Angststörung / Trauma / Burnout". System ordnet automatisch zu: "Trauma → Therapeutin B (Trauma-Schwerpunkt)". (2) Getrennte Wartelisten pro Therapeut: Dashboard zeigt "Therapeut A: 45 Personen Warteliste, Therapeut B: 60 Personen, Therapeut C: 38 Personen". (3) Wenn Therapieplatz bei Therapeut A frei wird: System schlägt automatisch Patienten von Therapeut-A-Warteliste vor (nicht von Therapeut B).<br>
                                <strong>Ergebnis:</strong> <strong>Koordinationsaufwand um 80% reduziert.</strong> Keine doppelten Excel-Dateien mehr. Faire Verteilung (jeder Therapeut sieht seine Warteliste). Patienten werden passend zugeordnet (Trauma-Patient kommt zu Trauma-Spezialist). <span style="color: #F57C00; font-weight: 700;">Telefonie: Von 70-90 Anrufen täglich auf 12-18 reduziert.</span> Sekretariat entlastet (mehr Zeit für Verwaltung, Abrechnung). Therapeuten: Fokus auf Therapie, nicht auf Administration.
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
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Psychotherapeutisches Versorgungszentrum (PVZ) mit 8 Therapeuten & Krisenintervention</h3>
                            <p class="section-7-step-description">
                                <strong>Herausforderung:</strong> Großes Versorgungszentrum mit 8 Therapeuten (verschiedene Therapieformen: VT, TP, AP, Systemische Therapie), 240 Kassenplätze, 40 Privatplätze. Warteliste mit 350+ Personen (massive Überforderung). Zusätzlich: Krisenintervention (akute Fälle müssen schnell behandelt werden). Ohne System: Warteliste völlig chaotisch (verschiedene Therapeuten führen verschiedene Listen), akute Fälle gehen unter (weil nicht priorisiert), Telefon klingelt 100+ mal täglich.<br>
                                <strong>MediDesk-Lösung:</strong> (1) Zentrale Warteliste für alle 8 Therapeuten mit automatischer Zuordnung nach Therapieform (VT/TP/AP/ST) und Schwerpunkt. (2) Krisenintervention-Priorisierung: 10 Slots pro Woche reserviert für akute Fälle (rot markiert auf Warteliste). Vorgespräch-Fragebogen hilft Dringlichkeit einzuschätzen ("Suizidgedanken? Ja → automatisch Krise-Markierung"). (3) Kassenplätze & Privatplätze getrennt verwaltet mit Transparenz für Patienten. (4) Automatische Erstgespräch-Buchung & Probatorik-Koordination. (5) Dashboard für Leitung: "Auslastung 96%, Warteliste 287 Personen (63 weniger als vor 6 Monaten!), 42 akute Fälle identifiziert & priorisiert".<br>
                                <strong>Ergebnis:</strong> <strong>Wartelisten-Telefonie von 100+ Anrufen auf 20-30 reduziert = 70-80% Reduktion.</strong> Akute Fälle werden 95% schneller identifiziert & behandelt (rot markiert, bevorzugt behandelt). <span style="color: #388E3C; font-weight: 700;">Zeitersparnis gesamt: 20-30 Stunden täglich (über alle 8 Therapeuten + Sekretariat).</span> Diese Zeit: teilweise für mehr Therapie-Plätze genutzt (Warteliste von 350 auf 287 reduziert in 6 Monaten). Krisenfälle: Leben wurden gerettet (Suizid-gefährdete Patienten wurden schneller behandelt). Patientenzufriedenheit: deutlich gestiegen (Transparenz, schnellere Krisenintervention). Therapeuten: weniger Burnout (weniger Frust durch Administration).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kontakt" class="btn btn-primary">Könnte das auch in meiner Psychotherapie-Praxis funktionieren?</a>
        </div>
    </section>

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- FAQ Section - Psychotherapie-spezifisch -->
    <section class="section-faq">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Psychotherapeuten</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert digitales Wartelistenmanagement für Psychotherapie-Praxen konkret?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Patienten können sich online auf die Warteliste setzen lassen – anonym oder mit Kontaktdaten, wie Sie es konfigurieren. <strong>Das System erfasst:</strong> (1) Therapie-Wunsch (Verhaltenstherapie, Tiefenpsychologie, Analytische Therapie, Systemische Therapie), (2) Dringlichkeit (Krise/sofort Hilfe, Akut/2 Wochen, Hoch/4 Wochen, Normal/kann warten), (3) Kassenpatient oder Privatpatient oder Selbstzahler, (4) Bevorzugte Wochentage & Uhrzeiten, (5) Erstgespräch schon absolviert? Ja/Nein, (6) Kurzbeschreibung Symptome/Diagnose (optional, Patient kann anonym lassen oder detailliert ausfüllen). Ihre Praxis sieht strukturierte Warteliste sortiert nach: (a) Dringlichkeit (Krise zuerst, dann akut, dann normal), (b) Wartezeit (wer wartet seit wann). Dashboard zeigt: "Warteliste Kassenplatz: 87 Personen (davon 12 akut), Warteliste Privatplatz: 23 Personen". <strong>Bei freiem Therapieplatz:</strong> System schlägt automatisch passende Patienten vor ("Patient A: 9 Monate Wartezeit, akut, Verhaltenstherapie, Kassenpatient → perfekt für freien Kassenplatz"). Sie kontaktieren Patient mit einem Klick: "Therapieplatz ist frei – noch interessiert?". <strong>Patienten erhalten Updates:</strong> "Sie sind auf Warteliste Position 45, geschätzte Wartezeit: 6-8 Monate" (alle 4 Wochen automatisches Update). <strong>Ergebnis:</strong> <span style="color: #1976D2; font-weight: 700;">Statt 50-80 Telefonanrufe "Haben Sie einen freien Platz?" nur noch 5-10 Anrufe (komplexe Fälle). 70-80% weniger Koordinationsaufwand.</span> Transparenz für Patienten: Sie wissen, wo sie stehen. Faire Abarbeitung: Wer zuerst kommt + wer dringend ist.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Erstgespräche und probatorische Sitzungen online gebucht werden?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, komplett. <strong>Erstgespräch (Psychotherapeutische Sprechstunde, 50 Min):</strong> Patient sieht verfügbare Termine für Erstgespräch, bucht online. Optional: Füllt vorher Vorgespräch-Fragebogen aus (Symptome, Vorgeschichte, Erwartungen an Therapie) – Sie können sich vorbereiten, wissen schon grob, worum es geht. <strong>Probatorische Sitzungen (2-4 Sitzungen à 50 Min):</strong> Nach Erstgespräch können Sie im System aktivieren "Probatorik für Patient XY". System berechnet automatisch 2-4 Termine im Wochenrhythmus (meist 1x pro Woche, damit Patient sich eingewöhnen kann). Patient kann online bestätigen oder einzelne Termine anpassen. <strong>Therapie-Serie (nach Antragsbewilligung):</strong> Wenn Krankenkasse bewilligt hat (z.B. 60 Stunden Verhaltenstherapie), geben Sie im System ein "60 Stunden bewilligt". System berechnet automatisch 60 Termine über ca. 15 Monate, meist 1x pro Woche. Patient sieht kompletten Plan, bestätigt mit einem Klick. <strong>Flexible Anpassungen möglich:</strong> Patient kann nicht zu Termin 15? Verschiebt online, System passt Folgetermine automatisch an. Patient hat 3 Wochen Urlaub? Pause einbauen möglich. <strong>Krisenintervention:</strong> Dringende Fälle (Suizidalität, schwere Depression) werden rot markiert im System, können bevorzugt Erstgespräch bekommen (vor normaler Warteliste). <strong>Ergebnis:</strong> <span style="color: #7B1FA2; font-weight: 700;">Erstgespräch-Koordination: 70% Zeitersparnis. Probatorik-Koordination: 85% Zeitersparnis. Therapie-Serien-Planung: 95% Zeitersparnis.</span> Gesamter Ablauf (Erstgespräch → Probatorik → Therapie-Serie) von 1-3 Stunden Koordination auf 7-10 Min reduziert.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden Kassenplätze vs. Privatplätze in der Psychotherapie verwaltet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Psychotherapeuten haben meist begrenzte Kassenplätze (z.B. 30 Kassenplätze) und einige Privatplätze (z.B. 10 Privatplätze für Privatversicherte oder Selbstzahler). <strong>MediDesk verwaltet beide getrennt:</strong> <strong>Kassenplätze:</strong> Kontingent wird im System hinterlegt (z.B. "30 Kassenplätze verfügbar"). Dashboard zeigt: "Kassenplätze: 29 von 30 belegt, Warteliste: 87 Personen, geschätzte Wartezeit: 8-10 Monate". Bei Online-Anfrage sieht Patient: "Kassenplatz: Wartezeit ca. 8-10 Monate (87 Personen vor Ihnen)". <strong>Privatplätze:</strong> Kontingent separat (z.B. "10 Privatplätze"). Dashboard: "Privatplätze: 6 von 10 belegt, Warteliste: 12 Personen, Wartezeit: ca. 1-2 Monate". Patient sieht: "Privatplatz: Wartezeit ca. 1-2 Monate (12 Personen vor Ihnen)". <strong>Patient kann wählen:</strong> "Ich bin Kassenpatient (gesetzlich versichert)" oder "Ich bin Privatpatient / Selbstzahler". System zeigt beide Optionen mit jeweiliger Wartezeit. <strong>Kostenvoranschlag für Privatpatienten:</strong> Automatisch generiert: "60 Stunden à 100€ = 6.000€ gesamt (über 15 Monate verteilt, ca. 400€ pro Monat)". <strong>Platzwechsel möglich:</strong> Patient ist auf Kassenplatz-Warteliste seit 6 Monaten, wartet noch 3 Monate. Sie können anbieten: "Privatplatz ist jetzt frei – möchten Sie wechseln (Selbstzahler) oder weiter auf Kassenplatz warten?". <strong>Transparenz:</strong> Patienten verstehen, warum Wartezeit unterschiedlich ist (Kassenplätze knapp, Privatplätze verfügbar). Können informiert entscheiden. <strong>Optimale Auslastung:</strong> Dashboard zeigt "Kassenplätze 97% ausgelastet, Privatplätze 60% ausgelastet → mehr Marketing für Privatplätze?". Keine ungenutzten Plätze. <strong>Ergebnis:</strong> <span style="color: #C2185B; font-weight: 700;">Faire Verwaltung, transparente Kommunikation, optimale Auslastung.</span> Zusätzlicher Umsatz durch Privatplätze (wenn sonst leer stehen würden).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden akute Fälle und Krisenintervention priorisiert?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Nicht alle Patienten auf Warteliste haben gleiche Dringlichkeit. <strong>Akute Fälle (Suizidalität, schwere Depression nach Trauma, Panikstörung mit Arbeitsunfähigkeit) brauchen schneller Hilfe.</strong> <strong>MediDesk-Lösung – Dringlichkeits-Einstufung:</strong> (1) <strong>Bei Wartelisten-Anmeldung:</strong> Patient wählt Dringlichkeit: "Krise (sofort Hilfe nötig)", "Akut (innerhalb 2 Wochen)", "Hoch (innerhalb 4 Wochen)", "Normal (kann warten)". Optional: Vorgespräch-Fragebogen mit Frage: "Haben Sie Suizidgedanken? Ja/Nein/Manchmal". (2) <strong>Automatische Priorisierung:</strong> System sortiert Warteliste: Erst alle "Krise"-Fälle (rot markiert), dann "Akut" (orange), dann "Hoch" (gelb), dann "Normal" (grün). Dashboard zeigt: "12 Krisenfälle auf Warteliste (sofortige Aufmerksamkeit!), 23 akute Fälle, 52 normale Fälle". (3) <strong>Krisenintervention-Slots reservieren:</strong> Sie können hinterlegen: "2 Slots pro Woche reserviert für Krisenintervention (akute Fälle)". Wenn Krise-Fall kommt, bekommt er bevorzugt einen dieser Slots (vor normalen Wartelisten-Patienten). (4) <strong>Automatische Benachrichtigung:</strong> Wenn Krise-Fall sich anmeldet: "Neuer Krise-Fall auf Warteliste – Patient meldet Suizidgedanken – bitte zeitnah kontaktieren!" (E-Mail/SMS an Sie). (5) <strong>Weitervermittlung bei Überlastung:</strong> Wenn Sie keine Kapazität für Krise-Fall haben: System kann automatisch Notfall-Kontakte vorschlagen: "Psychiatrische Notaufnahme: 0800-111 0 111 (Telefonseelsorge), nächste Psychiatrie-Klinik XY, Krisendienst Berlin: 030-390 63 00". Patient bekommt Hilfe, auch wenn Sie keine Kapazität haben. <strong>Rechtliche Absicherung:</strong> System dokumentiert: "Patient hat angegeben 'Keine Suizidgedanken' bei Wartelisten-Anmeldung am 15.03.2025" – wichtig für Haftungsfragen. <strong>Ergebnis:</strong> <span style="color: #D32F2F; font-weight: 700;">Akute Fälle werden 90-95% schneller identifiziert & behandelt.</span> Leben können gerettet werden. Patienten in Krise fühlen sich ernst genommen. Faire Abwägung: Wer dringend ist, bekommt Vorrang.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Ist MediDesk® DSGVO-konform für sensible psychotherapeutische Daten?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, absolut. Psychotherapeutische Daten sind besonders sensibel (Gesundheitsdaten nach Art. 9 DSGVO "besondere Kategorien personenbezogener Daten"). <strong>MediDesk® erfüllt alle Anforderungen:</strong> (1) <strong>DSGVO-konform:</strong> Verarbeitung nach europäischen Datenschutz-Standards. (2) <strong>Hosting in Deutschland/EU:</strong> Server stehen in Deutschland, keine Weitergabe in Drittländer (USA, China, etc.). (3) <strong>Verschlüsselte Übertragung:</strong> TLS/SSL-Verschlüsselung bei Datenübertragung (wie Online-Banking). (4) <strong>Verschlüsselte Speicherung:</strong> Daten werden verschlüsselt gespeichert (selbst wenn jemand Server hackt, kann er Daten nicht lesen). (5) <strong>Auftragsverarbeitungsvertrag (AVV):</strong> Zwischen Ihrer Praxis und MediDesk® (rechtlich vorgeschrieben bei Datenschutz-Dienstleistern). (6) <strong>Zugriffsprotokolle:</strong> Wer hat wann auf welche Patientendaten zugegriffen? Wird protokolliert (revisionssicher). (7) <strong>Rollenrechte:</strong> Sie können definieren, wer in Ihrem Team welche Daten sehen darf (z.B. Sekretariat sieht nur Namen+Termine, nicht Diagnosen). (8) <strong>Datenlöschung auf Anfrage:</strong> Patient kann verlangen "Löschen Sie meine Daten" (nach DSGVO Art. 17) – mit einem Klick im System möglich. (9) <strong>Anonyme Warteliste möglich:</strong> Patient kann sich ohne Name/Adresse auf Warteliste setzen (nur E-Mail oder Telefon für Kontakt). Erst bei Erstgespräch vollständige Daten. <strong>Zusätzlich für Diskretion:</strong> Online-Anmeldung bedeutet: Patient muss nicht am Telefon Details erzählen (niemand hört mit). Kann Fragebogen in Ruhe zuhause ausfüllen. <strong>Rechtliche Absicherung:</strong> Bei Datenschutz-Prüfung können Sie nachweisen: MediDesk® ist DSGVO-konform, AVV liegt vor, Verschlüsselung aktiv, Zugriffsprotokolle vorhanden. <strong>Ergebnis:</strong> <span style="color: #F57C00; font-weight: 700;">Ihre Praxis ist rechtlich abgesichert.</span> Patienten fühlen sich sicher (Diskretion gewährleistet). Keine Datenschutz-Verstöße.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert MediDesk® für Gemeinschaftspraxen mit mehreren Therapeuten?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, perfekt dafür. <strong>Szenario Gemeinschaftspraxis:</strong> 3 Therapeuten, jeder hat eigene Kassenplätze (30+30+20 = 80 gesamt) und Privatplätze, verschiedene Schwerpunkte (Therapeut A: Depression, Therapeut B: Trauma, Therapeut C: Angststörungen). <strong>MediDesk-Lösung:</strong> (1) <strong>Therapeuten-Profile anlegen:</strong> Jeder Therapeut hat eigenes Profil mit Schwerpunkten (Depression, Trauma, Angst), Therapieform (VT, TP, AP), Kassenplätze (30), Privatplätze (10). (2) <strong>Getrennte Wartelisten pro Therapeut:</strong> Patient wählt bei Anmeldung "Thema: Trauma" → System ordnet automatisch zu Therapeut B (Trauma-Schwerpunkt). Jeder Therapeut sieht seine eigene Warteliste: "Therapeut A: 45 Personen, Therapeut B: 60 Personen, Therapeut C: 38 Personen". (3) <strong>Zentrale Übersicht für Praxisleitung:</strong> Dashboard zeigt Gesamt-Warteliste (143 Personen), Auslastung pro Therapeut, akute Fälle gesamt. (4) <strong>Flexible Zuordnung:</strong> Wenn Patient sagt "Mir egal, welcher Therapeut, Hauptsache schnell", kann System vorschlagen: "Therapeut C hat kürzeste Warteliste (38 Personen statt 60)". (5) <strong>Team-Zugriff:</strong> Sekretariat kann für alle Therapeuten Termine koordinieren (mit entsprechenden Rollenrechten). Jeder Therapeut sieht nur seine eigenen Patienten (Datenschutz). (6) <strong>Urlaubsvertretung:</strong> Wenn Therapeut A im Urlaub, kann Therapeut B dessen dringende Fälle übernehmen (im System hinterlegt). <strong>Synchronisation:</strong> Alle arbeiten in Echtzeit am gleichen System (keine verschiedenen Excel-Dateien). Wenn Therapeut A Patient kontaktiert, sieht Therapeut B sofort "Patient schon kontaktiert" (keine Doppelarbeit). <strong>Ergebnis:</strong> <span style="color: #388E3C; font-weight: 700;">Perfekte Koordination zwischen Therapeuten.</span> Faire Verteilung (jeder sieht seine Warteliste). Patienten werden passend zugeordnet (Trauma zu Trauma-Spezialist). Praxisleitung hat Überblick über Gesamtauslastung.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell ist MediDesk® für meine Psychotherapie-Praxis einsatzbereit?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>In der Regel 48 Stunden (2 Tage) – ohne IT-Kenntnisse nötig.</strong><br>
                        <strong>Tag 1 (60-90 Min Erstgespräch per Video-Call):</strong> Wir verstehen Ihre Praxis: Einzelpraxis oder Gemeinschaftspraxis? Wie viele Therapeuten? Welche Therapieformen (Verhaltenstherapie, Tiefenpsychologie, Analytische, Systemische)? Wie viele Kassenplätze, wie viele Privatplätze? Durchschnittliche Wartelisten-Länge aktuell? Wir definieren gemeinsam: Welche Formulare brauchen Sie (Online-Warteliste, Erstgespräch-Buchung, Vorgespräch-Fragebogen, Probatorik), Dringlichkeits-Stufen (Krise/Akut/Normal), Therapeuten-Profile (bei Gemeinschaftspraxis), Kassenplatz- & Privatplatz-Kontingente.<br>
                        <strong>Tag 2 (60 Min Einrichtung + Schulung):</strong> Wir richten alles ein: Therapeuten-Profile anlegen (mit Schwerpunkten), Wartelisten konfigurieren (Kassenplatz/Privatplatz getrennt), Formulare anpassen (Vorgespräch-Fragebogen mit Ihren Fragen), Website-Integration (15 Min – ein Code-Snippet, fertig), Bestehende Warteliste importieren (wenn Sie Excel-Liste haben: wir importieren alle Patienten ins System). Team-Schulung (30-45 Min): Sie + Ihr Team lernen Dashboard, Wartelisten-Verwaltung, Erstgespräch-Koordination, Probatorik-Planung, Therapie-Serien.<br>
                        <strong>Ab Tag 3:</strong> Sie sind live. Erste Patienten setzen sich online auf Warteliste, buchen Erstgespräche. Wir begleiten Sie die ersten 2 Wochen (Support per E-Mail/Telefon bei Fragen).<br>
                        <strong>Import bestehender Warteliste:</strong> Wenn Sie bereits Excel-Warteliste haben (100+ Personen): Wir importieren alle (Name, Kontakt, Wartezeit, Dringlichkeit) – spart Ihnen Stunden manueller Eingabe.<br>
                        <strong>Keine IT-Kenntnisse nötig.</strong> Wir machen die Einrichtung für Sie.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für meine Psychotherapie-Praxis?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        <strong>Transparente Preise nach Praxisgröße:</strong><br>
                        • Einzelpraxis (1 Therapeut, bis 40 Therapieplätze): 149,00€/Monat<br>
                        • Gemeinschaftspraxis (2-3 Therapeuten, bis 100 Plätze): 249,00€/Monat<br>
                        • Große Praxis / PVZ (4-6 Therapeuten, bis 200 Plätze): 398,00€/Monat<br>
                        • Versorgungszentrum (7+ Therapeuten, 200+ Plätze): individuelles Angebot<br>
                        (alle Preise zzgl. MwSt.)<br><br>
                        <strong>Inklusive:</strong> Einrichtung & Schulung, Wartelistenmanagement (unbegrenzte Wartelisten-Personen), alle Formulare (Online-Warteliste, Erstgespräch-Buchung, Vorgespräch-Fragebogen, Probatorik, Therapie-Serien), Krisenintervention-Priorisierung, Kassenplatz & Privatplatz Verwaltung, automatische Erinnerungen, Updates & Support, DSGVO-Paket mit AVV, verschlüsselte Speicherung, 30 Tage Geld-zurück-Garantie.<br><br>
                        <strong>ROI-Rechnung für Psychotherapie-Praxen:</strong><br>
                        **Einzelpraxis:** Wenn Sie täglich 4-6 Stunden durch MediDesk® einsparen (weniger Wartelisten-Telefonie, weniger Terminkoordination), entspricht das <strong>80-120 Stunden pro Monat</strong>. Diese Zeit nutzen für:<br>
                        **Option 1 – Mehr Therapie-Stunden:** 80 Stunden = 80 zusätzliche Therapie-Sitzungen à 100€ = <span style="color: #388E3C; font-weight: 700;">8.000€ Mehrumsatz pro Monat</span> (natürlich nicht alle 80h zusätzlich, aber selbst 10-20 zusätzliche Sitzungen = 1.000-2.000€).<br>
                        **Option 2 – Mehr Therapieplätze:** Mit eingesparter Zeit 1-2 zusätzliche Therapie-Plätze anbieten (kürzt Warteliste, mehr Umsatz).<br>
                        **Option 3 – Bessere Work-Life-Balance:** Weniger Stress, weniger Burnout-Risiko, längere Karriere.<br>
                        **Kosten MediDesk®:** 149€/Monat.<br>
                        **ROI:** Bereits bei 2 zusätzlichen Therapie-Sitzungen pro Monat (2 x 100€ = 200€) haben Sie die Kosten wieder drin. Alles darüber ist Gewinn.<br>
                        **Gemeinschaftspraxis (3 Therapeuten):** Zeitersparnis 10-15 Stunden täglich (über alle Therapeuten + Sekretariat) = 200-300 Stunden/Monat. Selbst bei 20 zusätzlichen Therapie-Sitzungen = 2.000€ Mehrumsatz. Kosten: 249€/Monat. <strong>ROI nach 1 Woche erreicht.</strong>
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
                        Ja, absolut. <strong>30 Tage kostenlos testen – ohne Risiko, ohne Vertragsbindung.</strong> So funktioniert's: (1) Sie melden sich für kostenlosen Test an, (2) Wir richten MediDesk® für Ihre Praxis ein (60-90 Min Erstgespräch + Einrichtung), (3) Sie nutzen MediDesk® 30 Tage vollumfänglich (alle Features, Wartelistenmanagement, Erstgespräch-Buchung, Probatorik, etc.), (4) Echte Patienten setzen sich online auf Warteliste, buchen echte Termine, (5) Nach 30 Tagen entscheiden Sie: Weitermachen oder nicht. <strong>Kein Risiko:</strong> Wenn Sie nicht zufrieden sind, endet der Test automatisch nach 30 Tagen. Keine Kündigung nötig, kein verstecktes Kleingedrucktes. <strong>Import Ihrer Excel-Warteliste:</strong> Wenn Sie bereits Warteliste haben (100+ Personen in Excel), importieren wir die während Test-Phase – Sie müssen nicht alle manuell neu eingeben. <strong>30-Tage-Geld-zurück-Garantie:</strong> Selbst wenn Sie nach Test weitermachen und später merken "passt doch nicht" – innerhalb von 30 Tagen nach Zahlungsbeginn bekommen Sie Ihr Geld zurück. <strong>Typische Erfahrung:</strong> 91% der Psychotherapie-Praxen, die MediDesk® 30 Tage testen, entscheiden sich für weiteren Einsatz, weil die Entlastung (weniger Wartelisten-Telefonie) so deutlich spürbar ist. <strong>Testimonial:</strong> "Ich war skeptisch, ob digitales Wartelistenmanagement für Psychotherapie funktioniert. Nach 2 Wochen Test: Anrufe um 70% reduziert, Warteliste strukturiert statt chaotisch. Ich würde nie wieder zurück zu Excel + Telefon." (Dr. M., Psychologische Psychotherapeutin, Berlin)
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere, strukturiertere Psychotherapie-Praxis?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase mit Wartelistenmanagement, Erstgespräch-Buchung und Probatorik-Koordination – ohne Risiko, ohne Vertragsbindung
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Live-Demo für Psychotherapeuten</span>
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
                    <span>75% weniger Wartelisten-Telefonie</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>DSGVO-konform & diskret</span>
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