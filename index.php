<?php
// Homepage SEO Configuration
$page_title = "Die digitale Online-Rezeption für Praxen, Kliniken & Therapiepraxen | MediDesk®";
$page_description = "MediDesk® - Die digitale Online-Rezeption für Arztpraxen, Kliniken & Therapiepraxen. Reduzieren Sie Telefonanrufe um bis zu 70%, strukturierte Patientenanfragen online. DSGVO-konform, in 48h einsatzbereit.";
$page_keywords = "Online-Rezeption, digitale Patientenkommunikation, Arztpraxis Software, Terminbuchung online, AU-Anfrage digital, Rezeptanfrage online, DSGVO konform, Praxissoftware, MediDesk, Patientenanfragen online, Telefonentlastung Arztpraxis";
$page_canonical = "https://medideskr.cloud/";
$page_og_type = "website";

include 'includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - Organization -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "MediDesk®",
  "alternateName": "Unicorn Medical Services K. Narten e.K.",
  "url": "https://medideskr.cloud/",
  "logo": "https://medideskr.cloud/assets/img/logo.png",
  "description": "Die digitale Online-Rezeption für Arztpraxen, Kliniken & Therapiepraxen. Strukturierte Patientenanfragen statt Telefonchaos.",
  "email": "info@medideskr.cloud",
  "telephone": "+49-172-4056551",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Hambergsfeld 8",
    "addressLocality": "Westergellersen",
    "postalCode": "21394",
    "addressCountry": "DE"
  },
  "areaServed": {
    "@type": "Country",
    "name": "Germany"
  },
  "sameAs": []
}
</script>

<!-- Schema.org Structured Data - WebApplication -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk®",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "priceValidUntil": "2026-12-31",
    "availability": "https://schema.org/InStock"
  },
  "description": "Digitale Online-Rezeption für Arztpraxen, Kliniken und Therapiepraxen. Ermöglicht strukturierte Patientenanfragen online.",
  "featureList": [
    "Digitale Terminbuchung",
    "AU-Anfragen online",
    "Rezeptanfragen digital",
    "Befundanfragen strukturiert",
    "DSGVO-konform",
    "EU-Hosting",
    "Deutsch und Englisch",
    "48h Einrichtungszeit"
  ],
  "screenshot": "https://medideskr.cloud/assets/img/hero-mobile.png",
  "softwareVersion": "1.0",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "ratingCount": "50",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>

<!-- Schema.org Structured Data - FAQPage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Ist MediDesk® ein Callcenter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nein. MediDesk® ist kein Telefonservice. Patient:innen stellen online strukturierte Anfragen; Ihr Team bearbeitet sie in Ruhe."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell sind wir mit MediDesk® startklar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In der Regel innerhalb von 48 Stunden – ohne IT-Aufwand."
      }
    },
    {
      "@type": "Question",
      "name": "Funktioniert MediDesk® auf jeder Website?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja. Ein kurzer Code-Snippet reicht. WordPress, HTML/CSS, PHP, Wix, oder eigene Seite – alles möglich."
      }
    },
    {
      "@type": "Question",
      "name": "Gibt es MediDesk® auf Deutsch und Englisch?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, der Chat und die Formulare sind DE/EN verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist DSGVO-konform mit EU-Hosting, verschlüsselter Übertragung und AVV auf Wunsch."
      }
    },
    {
      "@type": "Question",
      "name": "Können wir unsere eigenen Praxisabläufe in MediDesk® abbilden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja. Formulare und Regeln werden an Ihre individuellen Praxisabläufe angepasst."
      }
    }
  ]
}
</script>

<!-- Schema.org Structured Data - WebSite with SearchAction -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "MediDesk®",
  "url": "https://medideskr.cloud/",
  "description": "Die digitale Online-Rezeption für Praxen, Kliniken & Therapiepraxen",
  "publisher": {
    "@type": "Organization",
    "name": "MediDesk®"
  },
  "inLanguage": ["de", "en"]
}
</script>

<!-- Schema.org Structured Data - LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "MediDesk® - Unicorn Medical Services",
  "image": "https://medideskr.cloud/assets/img/logo.png",
  "telephone": "+49-172-4056551",
  "email": "info@medideskr.cloud",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Hambergsfeld 8",
    "addressLocality": "Westergellersen",
    "postalCode": "21394",
    "addressCountry": "DE"
  },
  "priceRange": "€€",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
    "opens": "09:00",
    "closes": "18:00"
  }
}
</script>

</head>

<body>

    <!-- Header Include -->
	<?php include 'includes/header.php'; ?>
    
	<!-- Header Include -->     

    <!-- Hero Section -->
    <section class="hero-section">
      <!-- Decorative circles -->
      <div class="decoration-circle decoration-1"></div>
      <div class="decoration-circle decoration-2"></div>

      <div class="container z-3"> 
          <div class="row">
            <div class="col-12">
                <div class="hero-banner text-center">
                  <h1>
                      Die digitale <span class="highlight-text-bg">Online-Rezeption</span> für Praxen, Kliniken & Therapiepraxen
                  </h1>
                  <p class="subheading">
                      Patient:innen stellen Anfragen direkt online – statt per Telefon. 
                      Termine, AU, Befunde & Rezepte kommen strukturiert und ruhig bei Ihrem Team an.
                  </p>
              </div>
            </div>
          </div>  
          
          <div class="row">
            <!-- Left Content -->
            <div class="col-md-7">
              <div class="hero-content">
                  <ul class="features-list">
                      <li><span>Passt sich Ihrem Ablauf an – </span> keine Umstellung notwendig</li>
                      <li><span>In 48 Stunden einsatzbereit – </span> ohne IT-Aufwand</li>
                      <li><span>Einfach in jede Website einbindbar </span> (WordPress, PHP, Wix, usw.)</li>
                      <li><span>mehrere Standort möglich </span></li>
                      <li><span>Verfügbar in Deutsch & Englisch </span> (anderen Sprachen auf Anfragen)</li>
                  </ul>

                  <div class="cta-buttons">
                      <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                      <a href="#demo" class="btn btn-secondary">kurze Demo ansehen</a>
                  </div>
              </div>
            </div>
            <!-- Right Image -->
            <div class="col-md-5">
              <div class="hero-image">
                  <div class="phone-mockup">
                    <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Digital Rezeption App - Online-Rezeption für Arztpraxen" loading="lazy" width="400" height="800">
                  </div>
              </div>
            </div>
          </div>        
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Challenges Section -->
    <section class="challenges-section">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 40px;">
                <div class="col-md-7">
                    <div class="section-header" style="text-align: left;">
                        <span class="seo-anchor">Typische <span>Herausforderungen</span> im Praxisalltag</span>
                        <h2>Warum es in vielen <span class="highlight-text-red">Praxen hektisch</span> wird – <br>und nicht sein müsste.</h2>
                        <p class="subline">
                            Täglich kommen viele Patient:innenanfragen rein – aber ungeordnet und oft gleichzeitig.
                            Das führt zu Unterbrechungen, Stress und fehlender Ruhe am Empfang.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div style="position: relative; display: inline-block; padding: 18px;">
                        <span style="position: absolute; top: 0; right: 0; width: 75%; height: 75%; background: linear-gradient(135deg, #FFE5E5 0%, #FFCDD2 100%); border-radius: 30px 8px 30px 8px; z-index: 0;"></span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60%; height: 60%; background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%); border-radius: 8px 30px 8px 30px; z-index: 0; opacity: 0.7;"></span>
                        <img src="<?= $root; ?>assets/img/img-3.jpg" alt="" loading="lazy" style="position: relative; z-index: 1; max-width: 320px; width: 100%; height: auto; border-radius: 24px; box-shadow: 0 18px 48px rgba(0,0,0,0.18); border: 6px solid #fff;">
                    </div>
                </div>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Ständiges Telefonklingeln</h3>
                    <p>Patient:innen möchten Termine vereinbaren,AU anfordern
                        oder Befunde abholen – oft alle zur gleichen Zeit.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Unklare Rückruflisten</h3>
                    <p>Zettel, Post-its, SMS, E-Mails – und die Frage:
                        „Wer ruft wen nochmal zurück?“</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Anmeldung unter Dauerstress</h3>
                    <p>Wenig Zeit für Patient:innen vor Ort. Das Team fühlt
                        sich gehetzt und unter Druck.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Sprachbarrieren</h3>
                    <p>klare Vorgaben welche Angaben notwendig sind.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Es geht auch entspannter.</h4>
                <p>
                    Wenn Anfragen strukturiert online eingehen, wird der Empfang ruhiger und bleibt menschlich.
                </p>
            </div>
        </div>
    </section>
    <!-- Challenges Section End -->

    <!-- Wave -->
    <section class="wave"></section>
    <!-- Wave End -->

    <!-- Answer Section -->
    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    Alle Patient:innenanfragen laufen <span>klar strukturiert</span> ein – ganz ohne Telefonchaos.
                </span>
                <h2>So funktioniert <span class="highlight-text-green">MediDesk ®</span> im<br>Praxisalltag</h2>
                <p class="subline">
                    Drei einfache Schritte
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-mouse-pointer"></i>
                    </div>
                    <p class="answer-card-step">Patient wählt im Chat</p>
                    <h3>Termin, AU, Befund, Rezept oder Frage auswählen</h3>
                    <p>Direkt auf Ihrer Website – in Deutsch oder Englisch.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-inbox"></i>
                    </div>
                    <p class="answer-card-step">Anfrage kommt vollständig an</p>
                    <h3>Ohne Zettel & ohne Unterbrechungen</h3>
                    <p>Ihr Team erhält alle Angaben verständlich sortiert.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-clock"></i>
                    </div>
                    <p class="answer-card-step">Team reagiert in Ruhe</p>
                    <h3>Antworten direkt aus dem System</h3>
                    <p>Weniger Stress, mehr Zeit für Patient:innen vor Ort.</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>In einer kurzen Demo zeigen wir Ihnen</h4>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">wie ruhig es werden kann</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Answer Section End -->

    <!-- Wave -->
    <section class="wave2"></section>
    <!-- Wave End -->

    <!-- Benefits -->
    <section class="section-4-benefits">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 40px;">
                <div class="col-md-5 text-center">
                    <div style="position: relative; display: inline-block; padding: 18px;">
                        <span style="position: absolute; top: 0; left: 0; width: 75%; height: 75%; background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); border-radius: 30px 8px 30px 8px; z-index: 0;"></span>
                        <span style="position: absolute; bottom: 0; right: 0; width: 60%; height: 60%; background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%); border-radius: 8px 30px 8px 30px; z-index: 0; opacity: 0.7;"></span>
                        <img src="<?= $root; ?>assets/img/img-1.jpg" alt="" loading="lazy" style="position: relative; z-index: 1; max-width: 320px; width: 100%; height: auto; border-radius: 24px; box-shadow: 0 18px 48px rgba(0,0,0,0.18); border: 6px solid #fff;">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-4-header" style="text-align: left;">
                        <span class="seo-anchor">Ergebnisse & Vorteile</span>
                        <h2>Was sich mit <span class="highlight-text-bg2">MediDesk ®</span> in Ihrer <br>Praxis verändert</h2>
                        <p class="section-4-subline">Mehr Ruhe. Mehr Struktur. Mehr Zeit für die Menschen vor Ihnen.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Benefits Grid -->
        <div class="section-4-grid">
            <!-- Benefit 1 -->
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <path d="M32 18C32 18 28 22 28 28C28 31.314 29.686 34 32 34C34.314 34 36 31.314 36 28C36 22 32 18 32 18Z" fill="#4CAF50"/>
                        <path d="M26 30C26 30 23 33 23 37C23 39.209 24.343 41 26 41C27.657 41 29 39.209 29 37C29 33 26 30 26 30Z" fill="#66BB6A"/>
                        <path d="M38 30C38 30 35 33 35 37C35 39.209 36.343 41 38 41C39.657 41 41 39.209 41 37C41 33 38 30 38 30Z" fill="#66BB6A"/>
                        <path d="M32 34L32 46" stroke="#4CAF50" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Ruhiger Empfang</h3>
                <p class="section-4-description">
                    Weniger Telefonklingeln bedeutet weniger Unterbrechungen – Ihr Team arbeitet konzentrierter und entspannter.
                </p>
            </div>

            <!-- Benefit 2 -->
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M18 24C18 22.343 19.343 21 21 21H26L29 24H43C44.657 24 46 25.343 46 27V41C46 42.657 44.657 44 43 44H21C19.343 44 18 42.657 18 41V24Z" fill="#FFB74D"/>
                        <path d="M18 27H46V41C46 42.657 44.657 44 43 44H21C19.343 44 18 42.657 18 41V27Z" fill="#FFA726"/>
                        <rect x="23" y="31" width="18" height="2" rx="1" fill="#FFF"/>
                        <rect x="23" y="36" width="12" height="2" rx="1" fill="#FFF"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Klare Abläufe</h3>
                <p class="section-4-description">
                    Alle Anfragen kommen vollständig nach Priorität und sauber sortiert.
                </p>
            </div>

            <!-- Benefit 3 -->
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF9C4"/>
                        <circle cx="32" cy="32" r="18" fill="#FFD54F"/>
                        <circle cx="26" cy="28" r="2.5" fill="#F57C00"/>
                        <circle cx="38" cy="28" r="2.5" fill="#F57C00"/>
                        <path d="M24 36C24 36 26 40 32 40C38 40 40 36 40 36" stroke="#F57C00" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Mehr Zeit für Patient:innen vor Ort</h3>
                <p class="section-4-description">
                    Die Menschen, die gerade in der Praxis stehen, erhalten die volle Aufmerksamkeit – ohne Hektik im Hintergrund.
                </p>
            </div>

            <!-- Benefit 4 -->
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFE0B2"/>
                        <path d="M20 32C20 32 22 30 24 30C26 30 27 31 27 31L32 36L37 31C37 31 38 30 40 30C42 30 44 32 44 32" stroke="#FF9800" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M27 31L27 38C27 39.105 26.105 40 25 40H23C21.895 40 21 39.105 21 38V34" stroke="#FF9800" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M37 31L37 38C37 39.105 37.895 40 39 40H41C42.105 40 43 39.105 43 38V34" stroke="#FF9800" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="32" cy="36" r="3" fill="#FFB74D"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Zufriedenes Team</h3>
                <p class="section-4-description">
                    Entlastung statt Überlastung. Das Arbeitsklima verbessert sich spürbar – bei MFA, Ärzt:innen und Therapiepersonal.
                </p>
            </div>
        </div>

        <!-- Testimonial Quote -->
        <div class="section-4-quote">
            <p>„Wir sehen jeden Tag, wie viel entspannter eine Praxis arbeiten kann, wenn weniger unterbrochen wird."</p>
        </div>

        <!-- CTA -->
        <div class="section-4-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Jetzt unverbindlich ausprobieren</a>
        </div>
    </section>
    <!-- Benefits End -->

    <!-- Wave -->
    <section class="wave"></section>
    <!-- Wave End -->

    <!-- Features -->
    <section class="section-5-features">
        <!-- Section Header -->
        <div class="section-5-header">
            <span class="seo-anchor">Funktionen von MediDesk ®</span>
            <h2>Die <span class="highlight-text-bg">wichtigsten Funktionen</span> – einfach<br>& alltagstauglich</h2>
            <p class="section-5-subline">
                MediDesk ® passt sich Ihrer Praxis an, nicht umgekehrt. Alles bleibt so, wie Sie arbeiten – nur ruhiger und besser organisiert.
            </p>
        </div>

        <!-- Feature Cards -->
        <div class="section-5-cards-container">
            <!-- Feature 1 -->
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-comments" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Praxis-Chat auf Ihrer Website</h3>
                    <p class="section-5-feature-description">
                        Patient:innen wählen selbst, was sie brauchen – ohne anzurufen. Termin, AU, Befund, Rezept oder Frage.
                    </p>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-file-lines" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Intelligente Formulare</h3>
                    <p class="section-5-feature-description">
                        Alle Angaben kommen vollständig an. Sie müssen nicht nachfragen. Das spart Zeit & Nerven.
                    </p>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-globe" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Deutsch & Englisch</h3>
                    <p class="section-5-feature-description">
                        Für Praxen in Städten, Kliniken & Therapiepraxen mit internationalem Umfeld. Einfach per Sprache umschaltbar.
                    </p>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-shield-halved" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">DSGVO-konform & EU-Hosting</h3>
                    <p class="section-5-feature-description">
                        Sichere Übertragung, sicherer Datenschutz. Keine Weiterleitung ins Ausland. Keine versteckten Dienste.
                    </p>
                </div>
            </div>

            <!-- Feature 5 -->
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-bolt" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">In 48 Stunden einsatzbereit</h3>
                    <p class="section-5-feature-description">
                        Keine IT-Installation. Keine Umstellung. Wir richten alles mit Ihnen zusammen ein. Sofort startklar.
                    </p>
                </div>
            </div>
        </div>

        <!-- Quote -->
        <div class="section-5-quote">
            <p>„So digital wie nötig – so menschlich wie möglich."</p>
        </div>

        <!-- CTA -->
        <div class="section-5-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Jetzt kostenlos testen</a>
        </div>
    </section>
    <!-- Features End -->

    <!-- Wave -->
    <section class="wave2"></section>
    <!-- Wave End -->

    <!-- Fachrichtungen -->
    <section class="section-6-fachrichtungen">
        <!-- Section Header -->
        <div class="section-6-header">
            <h2>Für welche Fachrichtungen eignet <br>
                <span class="highlight-text-bg2">sich MediDesk ®?</span>
            </h2>
            <p class="section-6-subline">
                MediDesk ® wird in ganz unterschiedlichen medizinischen Einrichtungen eingesetzt – überall dort, wo Patient:innenanfragen ruhig, strukturiert und sicher bearbeitet werden sollen.
            </p>
        </div>

        <!-- Table -->
        <div class="section-6-table-wrapper">
            <table class="section-6-table">
                <tbody>
                    <tr onclick="window.location.href='fachrichtungen/allgemeinmedizin/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);"><i class="fa-solid fa-stethoscope" style="color: #1976D2;"></i></span></td>
                        <td><span class="section-6-table-fach">Allgemeinmedizin</span></td>
                        <td><span class="section-6-table-desc">Routineanfragen wie Termine, AU & Rezeptverlängerungen laufen klar strukturiert ein.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/innere-medizin/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-lungs" style="color: #C2185B;"></i></span></td>
                        <td><span class="section-6-table-fach">Innere Medizin</span></td>
                        <td><span class="section-6-table-desc">Befund- & Nachsorgeanfragen ohne Rückruf-Chaos.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/radiologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-x-ray" style="color: #7B1FA2;"></i></span></td>
                        <td><span class="section-6-table-fach">Radiologie</span></td>
                        <td><span class="section-6-table-desc">Termin- & Befundanfragen ruhig & nachvollziehbar koordinieren.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/onkologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8EAF6 0%, #C5CAE9 100%);"><i class="fa-solid fa-dna" style="color: #3F51B5;"></i></span></td>
                        <td><span class="section-6-table-fach">Onkologie</span></td>
                        <td><span class="section-6-table-desc">Sensible Kommunikation strukturiert & einfühlsam organisieren.</span></td>
                    </tr>
                    <tr onclick="window.location.href='fachrichtungen/kardiologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);"><i class="fa-solid fa-heart-pulse" style="color: #D32F2F;"></i></span></td>
                        <td><span class="section-6-table-fach">Kardiologie</span></td>
                        <td><span class="section-6-table-desc">Patientenanfragen werden gebündelt, ohne das Team zu unterbrechen.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/neurologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);"><i class="fa-solid fa-brain" style="color: #00796B;"></i></span></td>
                        <td><span class="section-6-table-fach">Neurologie</span></td>
                        <td><span class="section-6-table-desc">Terminabsprachen & Befundbereitstellungen ohne ständige Telefonunterbrechungen.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/paediatrie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);"><i class="fa-solid fa-baby" style="color: #F9A825;"></i></span></td>
                        <td><span class="section-6-table-fach">Pädiatrie</span></td>
                        <td><span class="section-6-table-desc">Elternanfragen eindeutig sortiert & schnell beantwortbar.</span></td>
                    </tr>
                      <tr onclick="window.location.href='fachrichtungen/orthopaedie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FBE9E7 0%, #FFCCBC 100%);"><i class="fa-solid fa-bone" style="color: #D84315;"></i></span></td>
                        <td><span class="section-6-table-fach">Orthopädie</span></td>
                        <td><span class="section-6-table-desc">Terminwünsche & Befundabrufe laufen sauber dokumentiert ein.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/zahnmedizin/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E0F7FA 0%, #B2EBF2 100%);"><i class="fa-solid fa-tooth" style="color: #0097A7;"></i></span></td>
                        <td><span class="section-6-table-fach">Zahnmedizin</span></td>
                        <td><span class="section-6-table-desc">Weniger Telefonstress, mehr Ruhe am Empfang.</span></td>
                    </tr>
                    <tr onclick="window.location.href='fachrichtungen/dermatologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);"><i class="fa-solid fa-hand-sparkles" style="color: #F57C00;"></i></span></td>
                        <td><span class="section-6-table-fach">Dermatologie</span></td>
                        <td><span class="section-6-table-desc">Fotobefunde & Rückfragen klar gegliedert & nachvollziehbar.</span></td>
                    </tr>
                   <tr onclick="window.location.href='fachrichtungen/gynaekologie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-venus" style="color: #E91E63;"></i></span></td>
                        <td><span class="section-6-table-fach">Gynäkologie</span></td>
                        <td><span class="section-6-table-desc">Terminserien, Vorsorge & Befundabgaben ohne ständiges Nachtelefonieren.</span></td>
                    </tr>
                    <tr onclick="window.location.href='fachrichtungen/mvz_kliniken/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);"><i class="fa-solid fa-hospital" style="color: #388E3C;"></i></span></td>
                        <td><span class="section-6-table-fach">MVZ & Kliniken</span></td>
                        <td><span class="section-6-table-desc">Für Teams & mehrere Standorte skalierbar.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/physio_reha/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E1F5FE 0%, #B3E5FC 100%);"><i class="fa-solid fa-hands-holding" style="color: #0288D1;"></i></span></td>
                        <td><span class="section-6-table-fach">Physio & Reha</span></td>
                        <td><span class="section-6-table-desc">Mehr Zeit für Behandlung, weniger Zeit am Telefon.</span></td>
                    </tr>
                     <tr onclick="window.location.href='fachrichtungen/psychotherapie/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-head-side-virus" style="color: #8E24AA;"></i></span></td>
                        <td><span class="section-6-table-fach">Psychotherapie</span></td>
                        <td><span class="section-6-table-desc">Ruhe & Klarheit in der Termin- & Anfragekoordination.</span></td>
                    </tr>
                    <tr onclick="window.location.href='fachrichtungen/chirurgische_opzentren/';" style="cursor:pointer;">
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);"><i class="fa-solid fa-user-doctor" style="color: #5D4037;"></i></span></td>
                        <td><span class="section-6-table-fach">Chirurgische & OP-Zentren</span></td>
                        <td><span class="section-6-table-desc">Vor- & Nachsorgeanfragen kommen strukturiert & nachvollziehbar an.</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="section-6-footer">
            <p class="section-6-footer-text">
                Ob Einzelpraxis, Schwerpunktpraxis oder Klinik – MediDesk ® passt sich Ihren Abläufen an.
            </p>
            
            <!-- CTA -->
            <div class="section-6-cta-container">
                <a href="#" class="btn btn-primary">Wie könnte MediDesk ® bei Ihrer Fachrichtung aussehen?</a>
            </div>
        </div>
    </section>
    <!-- Fachrichtungen End -->

    <!-- Wave -->
    <section class="wave"></section>
    <!-- Wave End -->

    <!-- Section 7 -->
    <section class="section-7-process">
        <!-- Section Header -->
        <div class="section-7-header">
            <h2>So sind Sie in <span class="highlight-text-bg">48 Stunden</span> einsatzbereit</h2>
            <p class="section-7-subline">Ohne IT-Aufwand. Wir begleiten Sie Schritt für Schritt.</p>
        </div>

        <!-- Timeline -->
        <div class="section-7-timeline">
            <!-- Step 1 -->
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Kurz kennenlernen</h3>
                            <p class="section-7-step-description">
                                Wir verstehen Ihre Abläufe und schalten passende Formulare (Termin, AU, Befund, Rezept, …) frei – DE/EN inklusive.
                            </p>
                        </div>
                        
                    </div>                 
                </div>
            </div>

            <!-- Step 2 -->
            <div class="section-7-step">
                <div class="section-7-step-number">2</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Einbindung auf Ihrer Website (5 Min.)</h3>
                            <p class="section-7-step-description">
                                Ein kleiner Code-Snippet – fertig. Funktioniert mit WordPress, PHP, Wix oder Ihrer eigenen Seite.
                            </p>
                        </div>    
                    </div>                 
                </div>
            </div>

            <!-- Step 3 -->
            <div class="section-7-step">
                <div class="section-7-step-number">3</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Loslegen & ruhig arbeiten</h3>
                            <p class="section-7-step-description">
                                Anfragen kommen strukturiert ins Team. Sie antworten in Ruhe – ohne Telefonstress.
                            </p>
                        </div>                         
                    </div>                 
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="section-7-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
        </div>
    </section>
    <!-- Section 7 End -->

    <!-- Wave -->
    <section class="wave2"></section>
    <!-- Wave End -->

    <!-- Section 8 -->
    <section class="section-8-anfragen">
        <!-- Section Header -->
        <div class="section-8-header">
            <h2>Welche Anfragen <span class="highlight-text-bg2">können Patient:</span> innen online stellen?</h2>
            <p class="section-8-subline">
                Klare, geführte Formulare – damit nichts fehlt und Ihr Team nicht nachfragen muss.
            </p>
        </div>

        <!-- Grid of Items -->
        <div class="section-8-grid">
            <!-- Item 1 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>
                <div class="section-8-text">
                    Termin buchen / verschieben / absagen
                </div>
            </div>

            <!-- Item 2 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-file-medical"></i>
                </div>
                <div class="section-8-text">
                    Arbeitsunfähigkeitsbescheinigung (AU) anfordern
                </div>
            </div>

            <!-- Item 3 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-file-lines"></i>
                </div>
                <div class="section-8-text">
                    Befund / Arztbrief anfordern
                </div>
            </div>

            <!-- Item 4 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-prescription"></i>
                </div>
                <div class="section-8-text">
                    Rezept anfragen
                </div>
            </div>

            <!-- Item 5 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-notes-medical"></i>
                </div>
                <div class="section-8-text">
                    Überweisung / Verordnung anfragen
                </div>
            </div>

            <!-- Item 6 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-syringe"></i>
                </div>
                <div class="section-8-text">
                    Impfberatung / Reisemedizin anfragen
                </div>
            </div>

            <!-- Item 7 -->
            <!-- <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                </div>
                <div class="section-8-text">
                    Übermittlung von Dokumenten/Fotos (z. B. dermatologische Befunde)
                </div>
            </div> -->

            <!-- Item 8 -->
            <div class="section-8-item">
                <div class="section-8-icon">
                    <i class="fa-solid fa-circle-question"></i>
                </div>
                <div class="section-8-text">
                    Allgemeine Fragen stellen (klar strukturiert – kein Freitext-Chaos)
                </div>
            </div>
        </div>

        <!-- Notice -->
        <div class="section-8-notice">
            <p>
                <i class="fa-solid fa-globe" style="font-size: 20px;"></i>
                <span>Alle Formulare in <span class="section-8-language-badge">🇩🇪 Deutsch & 🇬🇧 Englisch</span> verfügbar.</span>
            </p>
        </div>
    </section>
    <!-- Section 8 End -->

    <!-- ============= Section 9 - Datenschutz ============= -->
    <section class="section-9-datenschutz">
        <div class="container">
            <!-- Section Header -->
            <div class="section-9-header">
                <h2><span class="highlight-text-bg">Datenschutz,</span> wie er sein sollte – sicher & transparent</h2>
            </div>

            <!-- Grid of Security Items -->
            <div class="section-9-grid">
                <!-- Item 1 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="section-9-text">
                        DSGVO-konform, Verarbeitung nach europäischen Standards
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <div class="section-9-text">
                        Hosting in der EU – keine Weitergabe in Drittländer
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <div class="section-9-text">
                        Transportverschlüsselung (TLS) & Rollenrechte für Ihr Team
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-clipboard-check"></i>
                    </div>
                    <div class="section-9-text">
                        Protokollierte Vorgänge – nachvollziehbar & revisionssicher
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-phone-slash"></i>
                    </div>
                    <div class="section-9-text">
                        Keine Telefonweiterleitung, kein Callcenter – reine Online-Anfragen
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="section-9-item">
                    <div class="section-9-icon">
                        <i class="fa-solid fa-file-contract"></i>
                    </div>
                    <div class="section-9-text">
                        Auftragsverarbeitungsvertrag (AVV)
                    </div>
                </div>
            </div>

            <!-- Trust Quote -->
            <div class="section-9-trust-quote">
                <p>
                    <i class="fa-solid fa-heart" style="font-size: 22px;"></i>
                    <span>„So digital wie nötig – so menschlich und sicher wie möglich."</span>
                </p>
            </div>
        </div>
    </section>
    <!-- ============= Section 9 - Datenschutz End ============= -->

    <!-- ============= Section 10 - Integrationen ============= -->
    <section class="section-10-integration">
        <!-- Section Header -->
        <div class="section-10-header">
            <h2><span class="highlight-text-bg2">Einfache Einbindung</span>
            – egal, wie Ihre Website gebaut ist</h2>
            <p class="section-10-subline">
                Der MediDesk ® -Chat ist ein kleiner Code-Snippet – in Minuten integriert.
            </p>
        </div>

        <!-- Content -->
        <div class="section-10-content">
            <!-- Category 1: WordPress -->
            <div class="section-10-category">
                <div class="section-10-category-title">
                    <div class="section-10-category-icon">
                        <i class="fa-brands fa-wordpress"></i>
                    </div>
                    <span>WordPress</span>
                </div>
                <div class="section-10-items">
                    <div class="section-10-tag">Elementor</div>
                    <div class="section-10-tag">Divi</div>
                    <div class="section-10-tag">Gutenberg</div>
                </div>
            </div>

            <!-- Category 2: Eigene Websites -->
            <div class="section-10-category">
                <div class="section-10-category-title">
                    <div class="section-10-category-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <span>Eigene Websites</span>
                </div>
                <div class="section-10-items">
                    <div class="section-10-tag">HTML</div>
                    <div class="section-10-tag">React</div>
                    <div class="section-10-tag">Next.js</div>
                    <div class="section-10-tag">Webflow</div>
                    <div class="section-10-tag">Typo3</div>
                </div>
            </div>

            <!-- Category 3: Mehrsprachige Seiten -->
            <div class="section-10-category">
                <div class="section-10-category-title">
                    <div class="section-10-category-icon">
                        <i class="fa-solid fa-language"></i>
                    </div>
                    <span>Mehrsprachige Seiten</span>
                </div>
                <div class="section-10-items">
                    <div class="section-10-tag">🇩🇪 Deutsch</div>
                    <div class="section-10-tag">🇬🇧 Englisch</div>
                </div>
            </div>
        </div>

        <!-- Help Note -->
        <div class="section-10-help-note">
            <p>
                <i class="fa-solid fa-hands-helping" style="font-size: 20px;"></i>
                <span>Keine IT-Ressourcen nötig. Wir helfen beim Einbau.</span>
            </p>
        </div>
    </section>
    <!-- ============= Section 10 - Integrationen End ============= -->

    <!-- ============= PRICING SECTION ============= -->
    <section class="pricing-section">
    <div class="container">
        <div class="pricing-header">
        <h2>Preisübersicht MediDesk</h2>
        <p class="pricing-subline">Transparente Preise für jede Praxisgröße</p>
        </div>

        <!-- Arztpraxen Pricing -->
        <div class="pricing-category">
        <h3 class="pricing-category-title">
            <i class="fas fa-user-md"></i>
            Preise für Arztpraxen
        </h3>
        
        <div class="pricing-grid">
            <!-- Card 1 -->
            <div class="pricing-card">
            <div class="pricing-card-header">
                <div class="pricing-icon">
                <i class="fas fa-users"></i>
                </div>
                <h4 class="pricing-title">1-2 Ärzte</h4>
            </div>
            <div class="pricing-card-body">
                <div class="pricing-amount">
                <span class="price-number">119,00</span>
                <span class="price-currency">€*</span>
                </div>
                <p class="pricing-period">pro Monat</p>
            </div>
            <div class="pricing-card-footer">
                <a href="#contact" class="pricing-btn">Jetzt starten</a>
            </div>
            </div>

            <!-- Card 2 -->
            <div class="pricing-card pricing-card-popular">
            <div class="popular-badge">
                <i class="fas fa-star"></i>
                Beliebt
            </div>
            <div class="pricing-card-header">
                <div class="pricing-icon">
                <i class="fas fa-users"></i>
                </div>
                <h4 class="pricing-title">3-4 Ärzte</h4>
            </div>
            <div class="pricing-card-body">
                <div class="pricing-amount">
                <span class="price-number">179,00</span>
                <span class="price-currency">€*</span>
                </div>
                <p class="pricing-period">pro Monat</p>
            </div>
            <div class="pricing-card-footer">
                <a href="#contact" class="pricing-btn">Jetzt starten</a>
            </div>
            </div>

            <!-- Card 3 -->
            <div class="pricing-card">
            <div class="pricing-card-header">
                <div class="pricing-icon">
                <i class="fas fa-users"></i>
                </div>
                <h4 class="pricing-title">5-6 Ärzte</h4>
            </div>
            <div class="pricing-card-body">
                <div class="pricing-amount">
                <span class="price-number">298,00</span>
                <span class="price-currency">€*</span>
                </div>
                <p class="pricing-period">pro Monat</p>
            </div>
            <div class="pricing-card-footer">
                <a href="#contact" class="pricing-btn">Jetzt starten</a>
            </div>
            </div>

            <!-- Card 4 -->
            <div class="pricing-card">
            <div class="pricing-card-header">
                <div class="pricing-icon">
                <i class="fas fa-user-plus"></i>
                </div>
                <h4 class="pricing-title">&gt;6 Ärzte</h4>
            </div>
            <div class="pricing-card-body">
                <div class="pricing-amount">
                <span class="price-number">59,00</span>
                <span class="price-currency">€*</span>
                </div>
                <p class="pricing-period">je weiteren Arzt</p>
            </div>
            <div class="pricing-card-footer">
                <a href="#contact" class="pricing-btn">Jetzt starten</a>
            </div>
            </div>
        </div>
        </div>

        <!-- Additional Info Box -->
        <div class="pricing-info-box">
        <div class="info-item">
            <i class="fas fa-map-marker-alt"></i>
            <p><strong>Zusätzlicher Standort:</strong> zzgl. 89,00€* pro Standort</p>
        </div>
        <div class="info-item">
            <i class="fas fa-hospital"></i>
            <p><strong>Klinik & MVZ:</strong> Preise auf Anfrage</p>
        </div>
        </div>

        <!-- Physiotherapie Section -->
        <div class="pricing-category pricing-physio">
        <h3 class="pricing-category-title">
            <i class="fas fa-hands"></i>
            Preise für Physiotherapie Praxen
        </h3>
        
        <div class="pricing-special-card">
            <div class="special-card-content">
            <div class="special-icon">
                <i class="fas fa-spa"></i>
            </div>
            <div class="special-info">
                <h4>Unabhängig von der Anzahl der Therapeuten</h4>
                <p>Perfekt für Physiotherapie-Praxen jeder Größe</p>
            </div>
            <div class="special-price">
                <span class="price-number">199,00</span>
                <span class="price-currency">€*</span>
                <span class="price-period">pro Monat</span>
            </div>
            </div>
            <a href="#contact" class="pricing-btn-special">Jetzt starten</a>
        </div>
        </div>

        <!-- Footer Notes -->
        <div class="pricing-footer-notes">
        <div class="note-item">
            <i class="fas fa-tools"></i>
            <p>Sonderwünsche der Praxen werden nach Aufwand abgerechnet.</p>
        </div>
        </div>

        <!-- VAT Notice -->
        <div class="pricing-vat-notice">
        <p><span class="asterisk">*</span> Alle genannten Preise verstehen sich zzgl. der jeweils gültigen Mehrwertsteuer.</p>
        </div>

        <!-- CTA Button -->
        <div class="pricing-cta">
        <a href="#contact" class="btn btn-primary">
            Kostenlose Beratung vereinbaren
            <i class="fas fa-arrow-right"></i>
        </a>
        </div>
    </div>
    </section>
    <!-- ============= PRICING SECTION END ============= -->
    
    <!-- ============= Faq's ============= -->
    <section class="section-faq">
        <!-- Section Header -->
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span></h2>
        </div>

        <!-- FAQ Container -->
        <div class="faq-container">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Ist MediDesk ® ein Callcenter?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Nein. MediDesk ® ist kein Telefonservice. Patient:innen stellen online strukturierte Anfragen; Ihr Team bearbeitet sie in Ruhe.
                    </div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie schnell sind wir startklar?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        In der Regel innerhalb von 48 Stunden – ohne IT-Aufwand.
                    </div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Funktioniert das auf jeder Website?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja. Ein kurzer Code-Snippet reicht. WordPress, HTML/CSS, PHP, Wix, oder eigene Seite – alles möglich.
                    </div>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Gibt es MediDesk ® auf Deutsch und Englisch?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, der Chat und die Formulare sind DE/EN verfügbar.
                    </div>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was ist mit Datenschutz?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        DSGVO-konform, EU-Hosting, verschlüsselte Übertragung, AVV auf Wunsch.
                    </div>
                </div>
            </div>

            <!-- FAQ 6 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können wir unsere eigenen Abläufe abbilden?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja. Formulare und Regeln werden an Ihre Praxisabläufe angepasst.
                    </div>
                </div>
            </div>

            <!-- FAQ 7 -->
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wo finde ich die Preise?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Auf unserer separaten Preise-Seite. Transparent und leicht verständlich.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= Faq's End ============= -->

    <!-- ============= BLOG SECTION FOR HOMEPAGE ============= -->
    <section class="home-blog-section">
        <div class="container">
            <!-- Section Header -->
            <div class="home-blog-header">
                <span class="home-blog-label">Aus unserem Blog</span>
                <h2>Fachwissen zur <span class="highlight-text-bg">Digitalisierung</span> in der Arztpraxis</h2>
                <p class="home-blog-subline">
                    Praxistipps, Leitfäden und aktuelle Themen rund um Online-Rezeption, DSGVO und digitale Patientenkommunikation.
                </p>
            </div>

            <!-- Featured Article -->
            <div class="home-blog-featured">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="home-blog-featured-image">
                            <img src="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/images/online-rezeption-arztpraxis-hero.jpg" 
                                alt="Online-Rezeption für Arztpraxen - Der komplette Leitfaden"
                                loading="lazy">
                            <div class="home-blog-featured-badge">
                                <i class="fa-solid fa-star"></i>
                                Leitfaden
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="home-blog-featured-content">
                            <div class="home-blog-meta">
                                <span class="home-blog-meta-item">
                                    <i class="fa-regular fa-calendar"></i>
                                    Januar 2026
                                </span>
                                <span class="home-blog-meta-item">
                                    <i class="fa-regular fa-clock"></i>
                                    18 Min.
                                </span>
                            </div>
                            <h3 class="home-blog-featured-title">
                                <a href="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/">
                                    Online-Rezeption für Arztpraxen: Der komplette Leitfaden 2026
                                </a>
                            </h3>
                            <p class="home-blog-featured-excerpt">
                                Definition, Anbieter-Vergleich (Doctolib, 321 MED, MediDesk, CGM), Kosten, DSGVO-Anforderungen und Implementierung – alles was Sie wissen müssen.
                            </p>
                            <a href="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/" class="home-blog-read-more">
                                Jetzt lesen
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Articles Grid -->
            <div class="home-blog-grid">
                <!-- Article Card 1 -->
                <div class="home-blog-card">
                    <div class="home-blog-card-icon">
                        <i class="fa-solid fa-phone-slash"></i>
                    </div>
                    <div class="home-blog-card-content">
                        <span class="home-blog-card-category">Telefonentlastung</span>
                        <h4 class="home-blog-card-title">
                            <a href="#">Strategien gegen Telefonstress in der Praxis</a>
                        </h4>
                        <p class="home-blog-card-description">
                            Wie MFA-Teams durch digitale Patientenanfragen entlastet werden können.
                        </p>
                    </div>
                </div>

                <!-- Article Card 2 -->
                <div class="home-blog-card">
                    <div class="home-blog-card-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="home-blog-card-content">
                        <span class="home-blog-card-category">DSGVO & Datenschutz</span>
                        <h4 class="home-blog-card-title">
                            <a href="#">Rechtssichere Patientenkommunikation</a>
                        </h4>
                        <p class="home-blog-card-description">
                            EU-Hosting, AVV-Anforderungen und DSGVO-konforme Umsetzung.
                        </p>
                    </div>
                </div>

                <!-- Article Card 3 -->
                <div class="home-blog-card">
                    <div class="home-blog-card-icon">
                        <i class="fa-solid fa-robot"></i>
                    </div>
                    <div class="home-blog-card-content">
                        <span class="home-blog-card-category">KI in der Praxis</span>
                        <h4 class="home-blog-card-title">
                            <a href="#">KI-Telefonassistenten vs. Online-Rezeption</a>
                        </h4>
                        <p class="home-blog-card-description">
                            Der wichtige Unterschied zwischen Anrufentgegennahme und Anrufprävention.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA to Blog -->
            <div class="home-blog-cta">
                <a href="<?= $root; ?>blog/" class="home-blog-cta-btn">
                    Alle Artikel ansehen
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
    <!-- ============= BLOG SECTION END ============= -->

    <!-- ============= CTA Final ============= -->
    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <!-- Header -->
            <div class="cta-header">
                <h2>Bereit, den Praxisalltag ruhiger zu machen?</h2>
            </div>

            <!-- Subline -->
            <p class="cta-subline">
                Wir zeigen Ihnen in 15 Minuten, wie MediDesk ® bei Ihnen aussehen kann – unverbindlich und ohne technischen Aufwand.
            </p>

            <!-- CTA Buttons -->
            <div class="final-cta-buttons">
                <a href="#" class="btn-primary">
                    <span>Jetzt kostenlose Demo ansehen</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#kostenlos-testen" class="btn-secondary">
                    <i class="fa-solid fa-play-circle"></i>
                    <span>Kostenlos testen</span>
                </a>
            </div>

            <!-- Trust Badges -->
            <!-- <div class="trust-badges">
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Keine Installation</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Keine Vertragsbindung</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Kein Risiko</span>
                </div>
            </div> -->
        </div>
    </section>
    <!-- ============= CTA Final End ============= -->
    <!-- <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="69246ca8ec9402a9fa1db934"></script> -->
    <!-- Footer Include -->
    
    <?php include 'includes/testen-popup.php'; ?>
    <?php include 'includes/footer.php'; ?>