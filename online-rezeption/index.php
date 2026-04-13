<?php
// Landing Page SEO Configuration
$page_title = "MediDesk® vs. teure Arztportale – Die smarte Alternative für Facharztpraxen & MVZs";
$page_description = "Warum teure Arztportale zahlen? MediDesk® bietet Terminbuchung, Rezept-Service, KI-Chatbot & Notfall-Triage – bis zu 50% günstiger. Ihre eigene digitale 24/7-Rezeption.";
$page_keywords = "MediDesk Alternative Doctolib, Arztportal Alternative, Online-Rezeption Facharztpraxis, Terminbuchung ohne Portal, MVZ digitale Rezeption, KI Chatbot Arztpraxis, Rezept-Service online";
$page_canonical = "https://medideskr.cloud/online-rezeption/";
$page_og_type = "website";

include '../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "MediDesk® – Die smarte Alternative zu teuren Arztportalen",
  "description": "<?= htmlspecialchars($page_description); ?>",
  "url": "<?= $page_canonical; ?>",
  "publisher": {
    "@type": "Organization",
    "name": "MediDesk®"
  }
}
</script>

</head>

<body>

    <!-- Header Include -->
    <?php include '../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="decoration-circle decoration-1"></div>
      <div class="decoration-circle decoration-2"></div>

      <div class="container z-3">
          <div class="row">
            <div class="col-12">
                <div class="hero-banner text-center">
                  <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill mb-3 d-inline-block" style="font-size: 0.95rem; font-weight: 600;">
                      Für etablierte Facharztpraxen & MVZs
                  </span>
                  <h1>
                      Sie brauchen keine teuren Arztportale. Sie brauchen eine <span class="highlight-text-bg">Rezeption, die 24/7</span> für Sie arbeitet.
                  </h1>
                  <p class="subheading">
                      Facharztpraxen sind voll. Hören Sie auf, hohe monatliche Gebühren für Portale zu zahlen, die Ihnen ungewollte Neupatienten schicken. Nutzen Sie MediDesk® – Ihre maßgeschneiderte Online-Rezeption inkl. Terminbuchung, Rezept-Service und KI-Chatbot. Alles aus einer Hand. Deutlich günstiger.
                  </p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center">
              <div class="cta-buttons" style="justify-content: center;">
                  <a href="#demo-anfragen" class="btn btn-primary">Kostenlose Demo buchen</a>
                  <a href="#vergleich" class="btn btn-secondary">Einsparpotenzial sehen</a>
              </div>
            </div>
          </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Pain Points Section -->
    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Der <span>Reality-Check</span> für Ihre Praxis</span>
                <h2>Warum zahlen Sie für Funktionen, die Sie <span class="highlight-text-red">gar nicht brauchen?</span></h2>
                <p class="subline">
                    Viele Praxen nutzen überteuerte Buchungsportale aus reiner Gewohnheit. Lassen Sie uns ehrlich sein:
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Der Neupatienten-Mythos</h3>
                    <p>Sie sind eine gefragte Facharztpraxis. Ihr Wartezimmer ist voll. Warum zahlen Sie Premium-Preise an ein Portal, dessen Hauptzweck es ist, Ihnen noch mehr fremde Patienten in den Kalender zu spülen?</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Der No-Show-Mythos</h3>
                    <p>Man sagt Ihnen, nur teure Portale verhindern Terminausfälle? Falsch. Clevere, mehrstufige Terminerinnerungen sind längst Standard – ohne Portal-Aufschlag.</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-times"></i>
                    </div>
                    <h3>Insellösungen & MFA-Frust</h3>
                    <p>Ein Tool für Termine, dauernd klingelnde Telefone für Rezepte und ständige Standardfragen am Tresen. Das kostet Ihr Team Nerven und Sie bares Geld.</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Es gibt eine bessere Lösung.</h4>
                <p>
                    Bündeln Sie alles in einem System – auf Ihrer eigenen Website, unter Ihrer Kontrolle.
                </p>
            </div>
        </div>
    </section>
    <!-- Pain Points Section End -->

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Solution Section - MediDesk Vorstellung -->
    <section class="answer-section">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 40px;">
                <div class="col-md-7">
                    <div class="answer-section-header" style="text-align: left;">
                        <span class="answer-seo-anchor">
                            Ihre eigene, digitale <span>24/7-Rezeption</span>
                        </span>
                        <h2>Die smarte Alternative: <span class="highlight-text-green">MediDesk®</span></h2>
                        <p class="subline">
                            Bündeln Sie den kompletten Patientenstrom auf Ihrer eigenen Website. Entlasten Sie Ihr Telefon drastisch und behalten Sie die volle Kontrolle.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 text-center">
                    <div style="position: relative; display: inline-block; padding: 18px;">
                        <span style="position: absolute; top: 0; right: 0; width: 75%; height: 75%; background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); border-radius: 30px 8px 30px 8px; z-index: 0;"></span>
                        <span style="position: absolute; bottom: 0; left: 0; width: 60%; height: 60%; background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%); border-radius: 8px 30px 8px 30px; z-index: 0; opacity: 0.7;"></span>
                        <img src="<?= $root; ?>assets/img/img-2.jpg" alt="" loading="lazy" style="position: relative; z-index: 1; max-width: 320px; width: 100%; height: auto; border-radius: 24px; box-shadow: 0 18px 48px rgba(0,0,0,0.18); border: 6px solid #fff;">
                    </div>
                </div>
            </div>

            <div class="answer-container" style="grid-template-columns: repeat(2, 1fr);">
                <div class="answer-card">
                    <div class="answer-step-number"><i class="fa-solid fa-calendar-check"></i></div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <p class="answer-card-step">Terminkalender</p>
                    <h3>Der smarte Terminkalender</h3>
                    <p>Keine Portal-Abhängigkeit. Patienten buchen direkt über Ihre Website. Inklusive intelligentem Ressourcen-Management und bis zu 3 automatisierten Terminerinnerungen (SMS/E-Mail) zur maximalen Reduzierung von No-Shows.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number"><i class="fa-solid fa-pills"></i></div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-prescription-bottle-medical"></i>
                    </div>
                    <p class="answer-card-step">Rezept-Service</p>
                    <h3>Der 24/7 Rezept-Service</h3>
                    <p>Schluss mit blockierten Telefonleitungen durch Folgerezepte. Patienten bestellen sicher und strukturiert online – Ihr Team arbeitet die Anfragen blockweise und in Ruhe ab.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number"><i class="fa-solid fa-robot"></i></div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-message-bot"></i>
                    </div>
                    <p class="answer-card-step">KI-Chatbot</p>
                    <h3>Der KI-Praxis-Chatbot</h3>
                    <p>Beantwortet die zeitraubenden Standardfragen vollautomatisch: Öffnungszeiten, Nüchtern-Hinweise, Parkplätze und mehr – rund um die Uhr.</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number"><i class="fa-solid fa-truck-medical"></i></div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-first-aid"></i>
                    </div>
                    <p class="answer-card-step">Notfall-Triage</p>
                    <h3>Notfall-Triage & Vorab-Info</h3>
                    <p>Leitet Akutfälle intelligent an die richtigen Stellen weiter und filtert Anliegen, bevor sie bei Ihrem Personal landen.</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>4 digitale MFA-Assistenten in einem System</h4>
                <div class="answer-cta-button">
                    <a href="#demo-anfragen" class="btn btn-primary">Jetzt live erleben</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Solution Section End -->

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Comparison Section -->
    <section class="section-4-benefits" id="vergleich">
        <div class="section-4-header">
            <span class="seo-anchor">Der direkte Vergleich</span>
            <h2>Warum mehr zahlen? <span class="highlight-text-bg2">Der Praxis-Vergleich</span></h2>
            <p class="section-4-subline">MediDesk® vs. teure Arztportale – Funktionen & Kosten im Überblick</p>
        </div>

        <div class="container">
            <div class="table-responsive" style="max-width: 900px; margin: 0 auto;">
                <table class="table" style="border-collapse: separate; border-spacing: 0; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
                    <thead>
                        <tr style="background: linear-gradient(135deg, #1B5E20, #2E7D32);">
                            <th style="padding: 18px 24px; color: #fff; font-weight: 600; font-size: 1rem; border: none;">Funktion / Eigenschaft</th>
                            <th style="padding: 18px 24px; color: #ffcdd2; font-weight: 600; font-size: 1rem; border: none; text-align: center;">Teure Arztportale</th>
                            <th style="padding: 18px 24px; color: #C8E6C9; font-weight: 600; font-size: 1rem; border: none; text-align: center;">MediDesk®</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background: #fff;">
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; font-weight: 500;">Fokus der Software</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #c62828;">Neupatienten & Portal-Wachstum</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #2E7D32; font-weight: 600;">Entlastung IHRES Teams</td>
                        </tr>
                        <tr style="background: #f9fdf9;">
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; font-weight: 500;">Ihre Patienten bleiben...</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #c62828;">...im Netzwerk des Portals</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #2E7D32; font-weight: 600;">...auf Ihrer eigenen Website</td>
                        </tr>
                        <tr style="background: #fff;">
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; font-weight: 500;">Terminerinnerungen (No-Shows)</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center;">Ja</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #2E7D32; font-weight: 600;">Ja (bis zu 3-stufig)</td>
                        </tr>
                        <tr style="background: #f9fdf9;">
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; font-weight: 500;">Digitale Rezept-Anfragen</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #c62828;"><i class="fa fa-times"></i> Meist nicht integriert</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #2E7D32; font-weight: 600;"><i class="fa fa-check"></i> Voll integriert</td>
                        </tr>
                        <tr style="background: #fff;">
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; font-weight: 500;">KI-Chatbot für Praxisfragen</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #c62828;"><i class="fa fa-times"></i> Nein</td>
                            <td style="padding: 16px 24px; border-bottom: 1px solid #f0f0f0; text-align: center; color: #2E7D32; font-weight: 600;"><i class="fa fa-check"></i> Ja, inklusive</td>
                        </tr>
                        <tr style="background: #f9fdf9;">
                            <td style="padding: 16px 24px; font-weight: 500;">Preisstruktur</td>
                            <td style="padding: 16px 24px; text-align: center; color: #c62828; font-weight: 600;">Oft > 130-300 € pro Arzt/Monat</td>
                            <td style="padding: 16px 24px; text-align: center; color: #2E7D32; font-weight: 700; font-size: 1.05rem;">Bis zu 50% günstiger</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="section-4-cta-container" style="margin-top: 40px;">
            <a href="#demo-anfragen" class="btn btn-primary">Jetzt Einsparpotenzial berechnen</a>
        </div>
    </section>
    <!-- Comparison Section End -->

    <!-- Wave -->
    <section class="wave"></section>

    <!-- Social Proof / Testimonial Section -->
    <section class="section-5-features">
        <div class="container">
            <div class="row align-items-center" style="margin-bottom: 40px;">
                <div class="col-md-5 text-center">
                    <div style="position: relative; display: inline-block; padding: 18px;">
                        <span style="position: absolute; top: 0; left: 0; width: 75%; height: 75%; background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%); border-radius: 30px 8px 30px 8px; z-index: 0;"></span>
                        <span style="position: absolute; bottom: 0; right: 0; width: 60%; height: 60%; background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%); border-radius: 8px 30px 8px 30px; z-index: 0; opacity: 0.7;"></span>
                        <img src="<?= $root; ?>assets/img/img-4.jpg" alt="" loading="lazy" style="position: relative; z-index: 1; max-width: 320px; width: 100%; height: auto; border-radius: 24px; box-shadow: 0 18px 48px rgba(0,0,0,0.18); border: 6px solid #fff;">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-5-header" style="text-align: left;">
                        <span class="seo-anchor">Das sagen unsere Kunden</span>
                        <h2>Vertrauen & <span class="highlight-text-bg">Ergebnisse</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section-4-quote" style="max-width: 800px; margin: 0 auto 40px;">
                <p>„Seit wir unsere eigene Online-Rezeption mit MediDesk nutzen, klingelt das Telefon 40% weniger. Wir sparen uns die hohen Portalgebühren und unsere MFAs können endlich wieder in Ruhe am Patienten arbeiten."</p>
                <p style="font-size: 0.95rem; color: #666; margin-top: 12px; font-style: normal;">– Zufriedener Facharzt & MediDesk® Kunde</p>
            </div>

            <!-- Trust Badges -->
            <div class="row g-4 justify-content-center" style="max-width: 1000px; margin: 0 auto;">
                <div class="col-md-4 col-sm-6">
                    <div style="background: #fff; border-radius: 16px; padding: 28px 22px; box-shadow: 0 6px 24px rgba(0,0,0,0.06); text-align: center; height: 100%;">
                        <div style="width: 64px; height: 64px; margin: 0 auto 18px; border-radius: 50%; background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-shield-halved" style="color: #388E3C; font-size: 28px;"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 700; color: #1B3A57; margin-bottom: 10px;">DSGVO-konform</h3>
                        <p style="color: #666; font-size: 0.95rem; margin: 0;">EU-Hosting, verschlüsselte Übertragung, AVV auf Wunsch.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div style="background: #fff; border-radius: 16px; padding: 28px 22px; box-shadow: 0 6px 24px rgba(0,0,0,0.06); text-align: center; height: 100%;">
                        <div style="width: 64px; height: 64px; margin: 0 auto 18px; border-radius: 50%; background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-lock" style="color: #1976D2; font-size: 28px;"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 700; color: #1B3A57; margin-bottom: 10px;">Sichere Daten</h3>
                        <p style="color: #666; font-size: 0.95rem; margin: 0;">Keine Weiterleitung ins Ausland. Keine versteckten Dienste.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div style="background: #fff; border-radius: 16px; padding: 28px 22px; box-shadow: 0 6px 24px rgba(0,0,0,0.06); text-align: center; height: 100%;">
                        <div style="width: 64px; height: 64px; margin: 0 auto 18px; border-radius: 50%; background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%); display: flex; align-items: center; justify-content: center;">
                            <i class="fa-solid fa-bolt" style="color: #F57C00; font-size: 28px;"></i>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 700; color: #1B3A57; margin-bottom: 10px;">48h Einrichtung</h3>
                        <p style="color: #666; font-size: 0.95rem; margin: 0;">Keine IT-Installation. Wir richten alles gemeinsam ein.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Social Proof End -->

    <!-- Wave -->
    <section class="wave2"></section>

    <!-- Final CTA Section -->
    <section class="section-4-benefits" id="demo-anfragen">
        <div class="section-4-header">
            <h2>Bereit, den MFA-Tresen wirklich zu entlasten – <span class="highlight-text-bg2">ohne Portal-Preise</span> zu zahlen?</h2>
            <p class="section-4-subline" style="max-width: 700px; margin: 0 auto;">
                Lassen Sie uns in 15 Minuten gemeinsam auf Ihren aktuellen Prozess schauen. Wir zeigen Ihnen live, wie MediDesk® funktioniert und wie viel Budget Sie im Vergleich zu Ihrer jetzigen Lösung sofort einsparen können.
            </p>
        </div>

        <div class="section-4-cta-container">
            <a href="https://medideskr.cloud/#kostenlos-testen" class="btn btn-primary" style="font-size: 1.1rem; padding: 16px 40px;">Jetzt unverbindliche Kurz-Demo anfragen</a>
        </div>

        <div class="section-4-quote" style="margin-top: 30px;">
            <p>15 Minuten, die Ihnen Hunderte Euro im Monat sparen können.</p>
        </div>
    </section>
    <!-- Final CTA End -->

    <!-- Footer Include -->
    <?php include '../includes/footer.php'; ?>

</body>
</html>
