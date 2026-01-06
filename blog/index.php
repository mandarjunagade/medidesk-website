<?php
$page_title = "Blog: Digitalisierung in der Arztpraxis | MediDesk®";
$page_description = "Fachwissen zur Digitalisierung in Arztpraxen: Online-Rezeption, Telefonentlastung, DSGVO-konforme Patientenkommunikation und mehr.";
$page_keywords = "Arztpraxis Blog, Online-Rezeption, digitale Patientenkommunikation, Praxisdigitalisierung";
$page_canonical = "https://medideskr.cloud/blog/";
$page_og_type = "website";

include '../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "name": "MediDesk® Blog",
  "description": "Fachwissen zur Digitalisierung in Arztpraxen",
  "url": "https://medideskr.cloud/blog/",
  "publisher": {
    "@type": "Organization",
    "name": "MediDesk®",
    "logo": {"@type": "ImageObject", "url": "https://medideskr.cloud/assets/img/logo.png"}
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://medideskr.cloud/"},
    {"@type": "ListItem", "position": 2, "name": "Blog"}
  ]
}
</script>

</head>

<body>

<?php include '../includes/header.php'; ?>

<!-- Breadcrumb -->
<section style="background: #f8f9fa; padding: 15px 0;">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 14px;">
                <li class="breadcrumb-item"><a href="<?= $root; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Page Header -->
<section class="hero-section" style="padding: 60px 0 40px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1>Blog: <span class="highlight-text-bg">Digitalisierung in der Arztpraxis</span></h1>
                <p class="lead text-muted mt-3">Fachwissen zu Online-Rezeption, Telefonentlastung und digitaler Patientenkommunikation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Blog Articles -->
<section style="padding: 40px 0 80px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Featured Article -->
                <article class="card border-0 shadow-lg mb-5" style="border-radius: 16px; overflow: hidden;">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <!-- IMAGE PLACEHOLDER: Featured article hero image -->
                            <img src="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/images/online-rezeption-arztpraxis-hero.jpg"
                                 alt="Online-Rezeption für Arztpraxen - Der komplette Leitfaden"
                                 class="img-fluid h-100"
                                 style="object-fit: cover; min-height: 250px;"
                                 loading="eager">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body p-4 p-lg-5">
                                <span class="badge bg-success mb-2">Leitfaden</span>
                                <h2 class="h4 mb-3">
                                    <a href="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/" style="color: inherit; text-decoration: none;">
                                        Online-Rezeption für Arztpraxen: Der komplette Leitfaden 2026
                                    </a>
                                </h2>
                                <p class="text-muted">Definition, Anbieter-Vergleich (Doctolib, 321 MED, MediDesk, CGM), Kosten, DSGVO-Anforderungen und Implementierung – alles was Sie wissen müssen.</p>
                                <div class="d-flex align-items-center gap-3 text-muted" style="font-size: 14px;">
                                    <span><i class="fa-regular fa-calendar me-1"></i> Januar 2026</span>
                                    <span><i class="fa-regular fa-clock me-1"></i> 18 Min.</span>
                                </div>
                                <a href="<?= $root; ?>blog/online-rezeption-arztpraxis-leitfaden/" class="btn btn-outline-success mt-3">Jetzt lesen</a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Info Box -->
                <div class="alert alert-info mb-5" style="border-radius: 12px;">
                    <h3 class="h6 mb-2"><i class="fa-solid fa-lightbulb me-2"></i> Weitere Artikel in Planung</h3>
                    <p class="mb-0">Wir arbeiten an weiteren Fachartikeln zu Themen wie Telefonstress, MFA-Entlastung, DSGVO-konforme Kommunikation und KI in der Arztpraxis. Besuchen Sie uns bald wieder!</p>
                </div>

                <!-- Topics Overview -->
                <h3 class="h5 mb-4">Themen im Überblick</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px;">
                            <div class="card-body">
                                <i class="fa-solid fa-desktop mb-3" style="font-size: 24px; color: #1976D2;"></i>
                                <h4 class="h6">Online-Rezeption</h4>
                                <p class="small text-muted mb-0">Digitale Patientenanfragen, Anbieter-Vergleich, Implementierung</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px;">
                            <div class="card-body">
                                <i class="fa-solid fa-phone-slash mb-3" style="font-size: 24px; color: #D32F2F;"></i>
                                <h4 class="h6">Telefonentlastung</h4>
                                <p class="small text-muted mb-0">Strategien gegen Telefonstress, MFA-Entlastung, Burnout-Prävention</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm" style="border-radius: 12px;">
                            <div class="card-body">
                                <i class="fa-solid fa-shield-halved mb-3" style="font-size: 24px; color: #2E7D32;"></i>
                                <h4 class="h6">DSGVO & Datenschutz</h4>
                                <p class="small text-muted mb-0">Rechtssichere Kommunikation, EU-Hosting, AVV-Anforderungen</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
