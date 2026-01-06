<?php include 'config.php';

// SEO Variables - Override these in individual pages BEFORE including meta.php
// Or set them after including config.php but before including meta.php
if (!isset($page_title)) {
    $page_title = "Die digitale Online-Rezeption für Praxen, Kliniken & Therapiepraxen | " . $brandname;
}
if (!isset($page_description)) {
    $page_description = "MediDesk® - Die digitale Online-Rezeption für Arztpraxen, Kliniken & Therapiepraxen. Reduzieren Sie Telefonanrufe um bis zu 70%. DSGVO-konform, in 48h einsatzbereit. Jetzt kostenlos testen!";
}
if (!isset($page_keywords)) {
    $page_keywords = "Online-Rezeption, digitale Patientenkommunikation, Arztpraxis Software, Terminbuchung online, AU-Anfrage digital, Rezeptanfrage online, DSGVO konform, Praxissoftware, MediDesk";
}
if (!isset($page_canonical)) {
    $page_canonical = $root;
}
if (!isset($page_og_image)) {
    $page_og_image = $root . "assets/img/og-image.png";
}
if (!isset($page_og_type)) {
    $page_og_type = "website";
}
if (!isset($page_lang)) {
    $page_lang = "de";
}
?>

<!doctype html>
<html lang="<?= $page_lang; ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">

  <!-- Primary SEO Meta Tags -->
  <meta name="description" content="<?= htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords); ?>">
  <meta name="author" content="Unicorn Medical Services K. Narten e.K.">
  <meta name="publisher" content="<?= $brandname; ?>">
  <link rel="canonical" href="<?= $page_canonical; ?>">

  <!-- Language & Geo Tags -->
  <meta name="language" content="<?= $page_lang; ?>">
  <meta name="geo.region" content="DE-NI">
  <meta name="geo.placename" content="Westergellersen">
  <meta name="geo.position" content="53.2167;10.1167">
  <meta name="ICBM" content="53.2167, 10.1167">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="<?= $page_og_type; ?>">
  <meta property="og:url" content="<?= $page_canonical; ?>">
  <meta property="og:title" content="<?= htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description); ?>">
  <meta property="og:image" content="<?= $page_og_image; ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?= $brandname; ?> - Digitale Online-Rezeption">
  <meta property="og:site_name" content="<?= $brandname; ?>">
  <meta property="og:locale" content="de_DE">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="<?= $page_canonical; ?>">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?= $page_og_image; ?>">
  <meta name="twitter:image:alt" content="<?= $brandname; ?> - Digitale Online-Rezeption">

  <!-- Additional SEO Meta Tags -->
  <meta name="format-detection" content="telephone=yes">
  <meta name="theme-color" content="#2E7D32">
  <meta name="msapplication-TileColor" content="#2E7D32">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= $root; ?>assets/img/fav.png">
  <link rel="apple-touch-icon" href="<?= $root; ?>assets/img/fav.png">

  <!-- Preconnect for Performance -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="https://widget.medideskr.cloud">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="<?= $root; ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?= $root; ?>assets/fontawesome/css/all.min.css" />
  <link href="<?= $root; ?>assets/css/style.css" rel="stylesheet">

  <!-- Cookie Consent -->
  <script src="https://web.cmp.usercentrics.eu/modules/autoblocker.js"></script>

  <!-- Google Verification -->
  <meta name="google-site-verification" content="7nj_97yLZlME50RjY0vbOuyxH998liYITsbsGVSBVVY" />
  