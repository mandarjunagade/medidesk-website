<?php
// SEO Configuration for Paediatrie
$page_title = "Online-Rezeption für Pädiatrie - MediDesk® | Digitale Kinderarztpraxis";
$page_description = "Die digitale Online-Rezeption speziell für Kinderärzte und pädiatrische Praxen. Elternanfragen strukturiert erfassen, Impftermine planen, bis zu 70% weniger Telefonate. DSGVO-konform und kindgerecht.";
$page_keywords = "Online-Rezeption Pädiatrie, digitale Kinderarztpraxis, Kinderarzt digital, Elternanfragen strukturieren, Impftermine planen, MediDesk Pädiatrie";
$page_canonical = "https://medideskr.cloud/fachrichtungen/paediatrie/";
$page_og_type = "website";

include '../../includes/meta.php';
?>
<title><?= $page_title; ?></title>

<!-- Schema.org Structured Data - WebApplication for Pädiatrie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebApplication",
  "name": "MediDesk® Online-Rezeption für Pädiatrie",
  "applicationCategory": "BusinessApplication",
  "applicationSubCategory": "Medical Practice Management",
  "operatingSystem": "Web-based",
  "description": "Digitale Online-Rezeption speziell für Kinderärzte und pädiatrische Praxen. Elternanfragen strukturieren, Impftermine koordinieren, U-Untersuchungen planen, kindgerechte Kommunikation.",
  "url": "https://medideskr.cloud/fachrichtungen/paediatrie/",
  "offers": {
    "@type": "Offer",
    "price": "119.00",
    "priceCurrency": "EUR",
    "availability": "https://schema.org/InStock"
  },
  "featureList": [
    "Elternanfragen strukturieren",
    "Impftermin-Koordination",
    "U-Untersuchungen Recall",
    "Fieber-Einschätzung digital",
    "Kinderkrankheiten erkennen",
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

<!-- Schema.org Structured Data - FAQPage for Pädiatrie -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "Wie hilft MediDesk® Kinderarztpraxen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® reduziert den Telefonaufwand in Kinderarztpraxen um bis zu 70%. Eltern können Symptome strukturiert melden, Impftermine anfragen und U-Untersuchungen koordinieren. Besorgte Eltern erhalten schnelle Einschätzungen."
      }
    },
    {
      "@type": "Question",
      "name": "Können Eltern Fieber und Kinderkrankheiten online melden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, Eltern können Symptome wie Fieber, Ausschlag, Husten strukturiert dokumentieren. Das System erfasst Temperatur, Begleitsymptome und Allgemeinzustand. Bei Red Flags wird automatisch DRINGEND markiert."
      }
    },
    {
      "@type": "Question",
      "name": "Wie funktioniert die Impftermin-Koordination?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® erinnert automatisch an fällige Impfungen nach STIKO-Empfehlungen. Eltern können direkt online Impftermine anfragen. Der Impfstatus wird übersichtlich dokumentiert."
      }
    },
    {
      "@type": "Question",
      "name": "Unterstützt MediDesk® die U-Untersuchungen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, das System erinnert automatisch an alle U-Untersuchungen von U1 bis J2. Eltern erhalten rechtzeitig Erinnerungen und können direkt Termine anfragen. Kein Kind verpasst wichtige Vorsorgeuntersuchungen."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® kindgerecht und einfach für Eltern?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, die Formulare sind verständlich formuliert und auf besorgte Eltern zugeschnitten. Auch nachts können Symptome gemeldet werden, mit klaren Anweisungen wann sofort ein Arzt aufgesucht werden sollte."
      }
    },
    {
      "@type": "Question",
      "name": "Können Notfälle bei Kindern erkannt werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, bei Alarmsignalen wie Fieberkrämpfen, Atemnot, Bewusstseinsstörungen oder Nackensteife wird sofort NOTFALL markiert. Eltern erhalten klare Anweisungen zur sofortigen Vorstellung oder 112-Ruf."
      }
    },
    {
      "@type": "Question",
      "name": "Ist MediDesk® DSGVO-konform für Kinderdaten?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® ist vollständig DSGVO-konform mit besonderem Schutz für Kinderdaten. EU-Hosting in Deutschland, Ende-zu-Ende-Verschlüsselung und KV-Zertifizierung garantieren höchste Sicherheit."
      }
    },
    {
      "@type": "Question",
      "name": "Was kostet MediDesk® für eine Kinderarztpraxis?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Die Preise beginnen bei 119 EUR pro Monat für 1-2 Ärzte. Inkludiert sind Elternanfragen, Impfkoordination, U-Untersuchungs-Recall und Fieber-Einschätzung. Eine kostenlose 30-Tage-Testphase ist verfügbar."
      }
    },
    {
      "@type": "Question",
      "name": "Wie schnell kann MediDesk® in einer Kinderarztpraxis eingerichtet werden?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "MediDesk® ist innerhalb von 48 Stunden einsatzbereit. Die pädiatriespezifische Konfiguration umfasst altersgerechte Symptomerfassung, STIKO-Impfpläne und kindgerechte Formulierungen."
      }
    },
    {
      "@type": "Question",
      "name": "Können auch Kinder-MVZs und Kinderkliniken MediDesk® nutzen?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ja, MediDesk® skaliert für große Kinder-MVZs und Kinderkliniken. Multi-Standort-Management, KIS-Anbindung und Spezialisierungen wie Neuropädiatrie oder Kinderkardiologie werden unterstützt."
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
  "serviceType": "Digitale Online-Rezeption für Pädiatrie",
  "name": "MediDesk® für Kinderärzte",
  "description": "Spezialisierte digitale Lösung für Kinderarztpraxen zur Elternkommunikation, Impfkoordination und strukturierten Symptomerfassung bei Kindern.",
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
    "audienceType": "Kinderärzte, Pädiatrische Praxen, Kinder-MVZ, Kinderkliniken, Neuropädiater"
  }
}
</script>

<style>
/* ============= PÄDIATRIE PAGE MOBILE-FRIENDLY STYLES ============= */

/* Force text wrapping and prevent overflow on all devices */
* {
  word-wrap: break-word;
  overflow-wrap: break-word;
}

/* Tablet and Mobile Base Adjustments */
@media (max-width: 991px) {
  /* Hero Section */
  .hero-section {
    padding: 140px 20px 80px 20px;
    min-height: auto;
  }

  .hero-banner h1 {
    font-size: 36px;
    line-height: 1.3;
  }

  .subheading {
    font-size: 17px;
    line-height: 1.6;
  }

  .features-list {
    padding-left: 0;
  }

  .features-list li {
    font-size: 15px;
    margin-bottom: 14px;
  }

  .features-list li::before {
    width: 24px;
    height: 24px;
    font-size: 13px;
    margin-right: 12px;
  }

  .cta-buttons {
    justify-content: center;
    gap: 12px;
  }

  .btn {
    padding: 16px 32px;
    font-size: 15px;
  }

  /* Challenges Section - Force Centered Stack */
  .challenges-section {
    padding: 70px 20px;
  }

  .challenges-container {
    display: flex !important;
    flex-direction: column !important;
    align-items: center !important;
    gap: 18px !important;
    max-width: 480px;
    margin: 0 auto;
  }

  .challenge-card {
    align-self: center !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    padding: 18px 16px !important;
    min-width: auto !important;
    box-sizing: border-box !important;
    overflow: hidden !important;
    gap: 10px !important;
  }

  .challenge-card h3 {
    font-size: 16px !important;
    line-height: 1.3 !important;
    margin: 0 0 6px 0 !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    hyphens: auto !important;
    max-width: 100% !important;
  }

  .challenge-card p {
    font-size: 13px !important;
    line-height: 1.4 !important;
    margin: 0 !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    hyphens: auto !important;
    max-width: 100% !important;
  }

  /* Override ALL nth-child positioning */
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
    line-height: 1.3;
  }

  .section-header .subline {
    font-size: 16px;
    padding: 0 10px;
  }

  .icon-wrapper {
    width: 36px !important;
    height: 36px !important;
    flex-shrink: 0 !important;
    min-width: 36px !important;
  }

  .icon-wrapper i {
    font-size: 18px;
  }

  .transition-box {
    padding: 35px 25px;
    margin-top: 45px;
  }

  .transition-box h4 {
    font-size: 26px;
  }

  .transition-box p {
    font-size: 16px;
  }

  /* Answer Section */
  .answer-section-header h2 {
    font-size: 32px;
  }

  .answer-section-header .subline {
    font-size: 20px;
  }

  /* Benefits Grid */
  .section-4-grid {
    grid-template-columns: 1fr;
    max-width: 600px;
    margin: 0 auto;
  }

  /* Features Cards - Remove Zig-Zag */
  .section-5-cards-container {
    max-width: 600px;
    margin: 0 auto;
  }

  .section-5-feature-card:nth-child(odd),
  .section-5-feature-card:nth-child(even) {
    align-self: stretch !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  /* Table Conversion */
  .section-6-table-wrapper {
    overflow-x: visible;
  }
}

/* Mobile Styles (767px and below) */
@media (max-width: 767px) {
  /* Hero Section */
  .hero-section {
    padding: 120px 15px 60px 15px;
  }

  .hero-banner h1 {
    font-size: 26px;
    margin-bottom: 16px;
  }

  .subheading {
    font-size: 15px;
    margin-bottom: 25px;
  }

  .features-list li {
    font-size: 13px;
    margin-bottom: 12px;
  }

  .features-list li::before {
    width: 20px;
    height: 20px;
    font-size: 11px;
  }

  .btn {
    padding: 14px 28px;
    font-size: 14px;
    width: 100%;
    max-width: 280px;
  }

  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }

  .phone-mockup img {
    max-width: 280px;
  }

  /* Challenges Section - REDUCED TEXT SIZES */
  .challenges-section {
    padding: 50px 15px;
    overflow: hidden !important;
  }

  .challenges-container {
    width: 100% !important;
    max-width: 100% !important;
    padding: 0 !important;
    margin: 0 auto !important;
    overflow: hidden !important;
    gap: 14px !important;
  }

  .section-header h2 {
    font-size: 24px;
    padding: 0 5px;
    line-height: 1.3;
  }

  .section-header .subline {
    font-size: 14px;
    padding: 0 5px;
  }

  .challenge-card {
    padding: 14px 12px !important;
    gap: 8px !important;
    box-sizing: border-box !important;
    width: 100% !important;
    max-width: 100% !important;
    margin: 0 0 12px 0 !important;
    overflow: hidden !important;
    display: flex !important;
    align-items: flex-start !important;
  }

  .challenge-card h3 {
    font-size: 14px !important;
    line-height: 1.3 !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    hyphens: auto !important;
    margin: 0 0 5px 0 !important;
    width: 100% !important;
    max-width: 100% !important;
  }

  .challenge-card p {
    font-size: 12px !important;
    line-height: 1.4 !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    hyphens: auto !important;
    margin: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
  }

  .icon-wrapper {
    width: 30px !important;
    height: 30px !important;
    flex-shrink: 0 !important;
    min-width: 30px !important;
  }

  .icon-wrapper i {
    font-size: 14px;
  }

  .transition-box {
    padding: 25px 18px;
    margin-top: 35px;
    box-sizing: border-box;
  }

  .transition-box h4 {
    font-size: 20px;
  }

  .transition-box p {
    font-size: 14px;
  }

  /* Answer Section */
  .answer-section {
    padding: 50px 15px;
  }

  .answer-section-header h2 {
    font-size: 24px;
  }

  .answer-section-header .subline {
    font-size: 18px;
  }

  .answer-container {
    gap: 18px;
  }

  .answer-card {
    padding: 25px 18px;
  }

  .answer-card h3 {
    font-size: 18px;
  }

  .answer-card p {
    font-size: 13px;
  }

  .answer-card-step {
    font-size: 11px;
  }

  .answer-icon-wrapper {
    width: 60px;
    height: 60px;
  }

  .answer-icon-wrapper i {
    font-size: 26px;
  }

  .answer-step-number {
    width: 32px;
    height: 32px;
    font-size: 16px;
  }

  .answer-transition-box {
    padding: 25px 18px;
    margin-top: 40px;
  }

  .answer-transition-box h4 {
    font-size: 19px;
  }

  .answer-transition-box p {
    font-size: 14px;
  }

  /* Benefits Section */
  .section-4-benefits {
    padding: 50px 15px;
  }

  .section-4-header h2 {
    font-size: 24px;
  }

  .section-4-subline {
    font-size: 15px;
  }

  .section-4-card {
    padding: 25px 18px;
    box-sizing: border-box;
    overflow: hidden;
  }

  .section-4-icon {
    width: 45px;
    height: 45px;
    margin-bottom: 12px;
  }

  .section-4-title {
    font-size: 18px;
    word-wrap: break-word;
  }

  .section-4-description {
    font-size: 13px;
    line-height: 1.5;
    word-wrap: break-word;
  }

  .section-4-description strong {
    display: block;
    margin-top: 8px;
  }

  .section-4-quote {
    padding: 0 15px;
  }

  .section-4-quote p {
    font-size: 14px;
    line-height: 1.5;
  }

  /* Features Section */
  .section-5-features {
    padding: 50px 15px;
  }

  .section-5-header h2 {
    font-size: 24px;
  }

  .section-5-subline {
    font-size: 15px;
  }

  .section-5-feature-card {
    flex-direction: column;
    padding: 22px 18px;
    text-align: center;
    align-items: center;
    box-sizing: border-box;
  }

  .section-5-icon-wrapper {
    margin-bottom: 12px;
    margin-left: 0;
    width: 55px;
    height: 55px;
  }

  .section-5-icon-wrapper i {
    font-size: 26px;
  }

  .section-5-feature-title {
    font-size: 17px;
  }

  .section-5-feature-description {
    font-size: 13px;
  }

  .section-5-quote p {
    font-size: 14px;
  }

  /* Table Section */
  .section-6-fachrichtungen {
    padding: 50px 15px;
  }

  .section-6-header h2 {
    font-size: 24px;
  }

  .section-6-subline {
    font-size: 15px;
  }

  .section-6-table-wrapper {
    box-shadow: none;
    overflow-x: visible;
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
    margin-bottom: 12px;
    border: 1px solid #e8ecef;
    border-radius: 12px;
    padding: 18px;
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
    margin-bottom: 6px;
  }

  .section-6-table-icon {
    width: 55px;
    height: 55px;
    margin: 0 auto 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .section-6-table-icon i {
    font-size: 26px;
  }

  .section-6-table-fach {
    font-size: 16px;
    margin-bottom: 6px;
    display: block;
    font-weight: 700;
  }

  .section-6-table-desc {
    font-size: 13px;
    line-height: 1.4;
  }

  .section-6-footer-text {
    width: 100% !important;
    font-size: 15px;
    padding: 10px 15px;
    box-sizing: border-box;
  }

  /* Timeline Section */
  .section-7-process {
    padding: 50px 15px;
  }

  .section-7-header h2 {
    font-size: 24px;
  }

  .section-7-subline {
    font-size: 15px;
  }

  .section-7-step {
    grid-template-columns: 70px 1fr;
    gap: 12px;
    margin-bottom: 25px;
  }

  .section-7-step:nth-child(2) {
    grid-template-columns: 70px 1fr;
  }

  .section-7-step:nth-child(2) .section-7-step-number {
    order: 1;
  }

  .section-7-step:nth-child(2) .section-7-step-card {
    order: 2;
  }

  .section-7-step::after {
    left: 35px;
  }

  .section-7-step:nth-child(2)::after {
    left: 35px;
    right: auto;
  }

  .section-7-step-number {
    width: 70px;
    height: 70px;
    font-size: 30px;
  }

  .section-7-step-card {
    padding: 18px;
    box-sizing: border-box;
  }

  .section-7-step-header {
    flex-direction: column;
    text-align: left;
  }

  .section-7-step-icon {
    width: 42px;
    height: 42px;
    margin-bottom: 8px;
  }

  .section-7-step-icon i {
    font-size: 19px;
  }

  .section-7-step-title {
    font-size: 16px;
  }

  .section-7-step-description {
    font-size: 13px;
  }

  /* FAQ Section */
  .section-faq {
    padding: 50px 15px;
  }

  .section-faq-header h2 {
    font-size: 24px;
  }

  .faq-question {
    padding: 16px 14px;
  }

  .faq-question-text {
    font-size: 14px;
    line-height: 1.4;
    padding-right: 10px;
  }

  .faq-icon {
    width: 28px;
    height: 28px;
  }

  .faq-icon i {
    font-size: 13px;
  }

  .faq-item.active .faq-answer {
    padding: 0 14px 16px 14px;
  }

  .faq-answer-text {
    font-size: 13px;
    line-height: 1.5;
  }

  /* Final CTA */
  .section-final-cta {
    margin: 0 15px;
    padding: 30px 18px;
  }

  .cta-header h2 {
    font-size: 22px;
    margin-bottom: 18px;
    line-height: 1.3;
  }

  .cta-subline {
    font-size: 14px;
    margin-bottom: 25px;
    line-height: 1.5;
  }

  .final-cta-buttons {
    flex-direction: column;
    gap: 10px;
  }

  .final-cta-buttons .btn-primary,
  .final-cta-buttons .btn-secondary {
    padding: 15px 26px;
    font-size: 14px;
    width: 100%;
    max-width: 100%;
    justify-content: center;
  }

  .trust-badges {
    flex-direction: column;
    gap: 10px;
    margin-top: 25px;
    padding: 18px;
  }

  .trust-item {
    font-size: 13px;
  }
}

/* Extra Small Mobile (480px and below) */
@media (max-width: 480px) {
  .hero-banner h1 {
    font-size: 22px;
  }

  .subheading {
    font-size: 13px;
  }

  .features-list li {
    font-size: 12px;
  }

  .section-header h2,
  .answer-section-header h2,
  .section-4-header h2,
  .section-5-header h2,
  .section-6-header h2,
  .section-7-header h2,
  .section-faq-header h2 {
    font-size: 20px;
  }

  .section-header .subline,
  .section-4-subline,
  .section-5-subline,
  .section-6-subline,
  .section-7-subline {
    font-size: 13px;
  }

  /* Challenge Cards - Extra Small Mobile */
  .challenge-card {
    padding: 12px 10px !important;
    gap: 6px !important;
  }

  .challenge-card h3 {
    font-size: 13px !important;
    line-height: 1.3 !important;
  }

  .challenge-card p {
    font-size: 11px !important;
    line-height: 1.3 !important;
  }

  .icon-wrapper {
    width: 28px !important;
    height: 28px !important;
    min-width: 28px !important;
  }

  .icon-wrapper i {
    font-size: 13px;
  }

  .transition-box h4 {
    font-size: 18px;
  }

  .transition-box p {
    font-size: 13px;
  }

  .answer-section-header .subline {
    font-size: 16px;
  }

  .section-4-card,
  .section-5-feature-card,
  .section-7-step-card {
    padding: 18px 14px;
  }

  .section-4-title,
  .section-5-feature-title {
    font-size: 16px;
  }

  .section-4-description,
  .section-5-feature-description {
    font-size: 12px;
  }

  .section-6-footer-text {
    font-size: 13px;
  }

  .section-7-step {
    grid-template-columns: 60px 1fr;
  }

  .section-7-step-number {
    width: 60px;
    height: 60px;
    font-size: 26px;
  }

  .section-7-step::after {
    left: 30px;
  }

  .section-7-step:nth-child(2)::after {
    left: 30px;
  }

  .cta-header h2 {
    font-size: 19px;
  }

  .cta-subline {
    font-size: 13px;
  }
}

/* Prevent horizontal overflow GLOBALLY */
@media (max-width: 991px) {
  html, body {
    overflow-x: hidden !important;
    max-width: 100vw !important;
  }

  body {
    overflow-x: hidden;
  }

  .container {
    padding-left: 15px !important;
    padding-right: 15px !important;
    max-width: 100% !important;
  }

  /* Force all cards to respect boundaries */
  .challenge-card,
  .answer-card,
  .section-4-card,
  .section-5-feature-card,
  .faq-item {
    box-sizing: border-box !important;
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    max-width: 100% !important;
    overflow: hidden !important;
  }

  /* Force all text elements to wrap */
  .challenge-card h3,
  .challenge-card p,
  .answer-card h3,
  .answer-card p,
  .faq-question-text,
  .faq-answer-text,
  h1, h2, h3, h4, h5, h6, p, span, div {
    word-wrap: break-word !important;
    overflow-wrap: break-word !important;
    hyphens: auto !important;
  }

  img {
    max-width: 100% !important;
    height: auto !important;
  }
}

/* Touch-friendly tap targets */
@media (max-width: 767px) {
  .btn,
  .faq-question,
  .mobile-menu-toggle {
    min-height: 44px;
    min-width: 44px;
  }
}
</style>

</head>

<body>
    <script id="medidesk-widget-script" src="https://widget.medideskr.cloud/widget.iife.js" data-clinic-id="6918990dbbc437bc39e5f42c"></script>
    
    <?php include '../../includes/header.php'; ?>

    <section class="hero-section">
        <div class="decoration-circle decoration-1"></div>
        <div class="decoration-circle decoration-2"></div>

        <div class="container z-3">
            <div class="row">
                <div class="col-md-7">
                    <div class="hero-content">
                        <h1>Online-Rezeption für <span class="highlight-text-bg">Pädiatrie</span></h1>
                        <p class="subheading">
                            Die spezialisierte digitale Lösung für Kinderarztpraxen: Elternanfragen strukturiert erfassen, Fieber-Notfälle erkennen, Impftermine organisieren, U-Untersuchungen planen, Entwicklungsstörungen dokumentieren
                        </p>

                        <ul class="features-list">
                            <li><span>Bis zu 70% weniger Telefonstress</span> durch strukturierte Elternanfragen & Priorisierung</li>
                            <li><span>Notfall-Erkennung</span> – hohes Fieber bei Säuglingen, Atemnot, Exsikkose automatisch als DRINGEND markiert</li>
                            <li><span>Fieber-Ampel-System</span> – altersabhängige Bewertung (0-3 Monate, 3-6 Monate, >6 Monate)</li>
                            <li><span>Impfkalender</span> – STIKO-Empfehlungen automatisch, Impflücken erkennen, Erinnerungen</li>
                            <li><span>U-Untersuchungen</span> – U3 bis U9, J1, J2 terminieren, Entwicklungsmeilensteine dokumentieren</li>
                            <li><span>DSGVO-konform & kindgerecht</span> – Höchste Sicherheit für sensible Kindergesundheitsdaten</li>
                        </ul>

                        <div class="cta-buttons">
                            <a href="#kostenlos-testen" class="btn btn-primary">Kostenlos testen</a>
                            <a href="#kostenlos-testen" class="btn btn-secondary">Praxis-Demo für Kinderärzte</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="hero-image">
                        <div class="phone-mockup">
                            <img src="<?= $root; ?>assets/img/hero-mobile.png" alt="MediDesk Online-Rezeption für Pädiatrie">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="challenges-section">
        <div class="container">
            <div class="section-header">
                <span class="seo-anchor">Herausforderungen in der <span>Pädiatrie</span></span>
                <h2>Warum Kinderarztpraxen besondere <span class="highlight-text-red">Herausforderungen</span> haben</h2>
                <p class="subline">
                    Als Kinderarzt betreuen Sie Patienten von 0-18 Jahren – von Neugeborenen bis Jugendlichen. Täglich kommen 100-150 Anrufe besorgter Eltern: Fieber, Husten, Ausschlag, Impffragen. Jede Altersgruppe hat andere Notfall-Kriterien.
                </p>
            </div>

            <div class="challenges-container">
                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-thermometer-full"></i>
                    </div>
                    <h3>Fieber bei Säuglingen & Kleinkindern</h3>
                    <p>Eltern rufen panisch an: "Mein Baby hat 39°C Fieber!" – aber ohne Alter, Dauer, Zusatzsymptome. Fieber bei 2-Monatigen = Notfall (Sepsis), bei 2-Jährigen oft harmlos</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-phone-volume"></i>
                    </div>
                    <h3>Atemwegsinfekte im Winter</h3>
                    <p>In der Erkältungssaison 200+ Anrufe/Tag: Husten, Schnupfen, Halsschmerzen. Welches Kind MUSS kommen (Atemnot, Stridor, Trinkverweigerung), welches kann warten?</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-syringe"></i>
                    </div>
                    <h3>Impftermine koordinieren</h3>
                    <p>STIKO-Impfkalender mit 13 Impfungen bis 2 Jahre, Nachholimpfungen, Auffrischungen, Reiseimpfungen. Eltern verwechseln Termine, Impflücken entstehen, Dokumentation fehlt</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-clipboard-check"></i>
                    </div>
                    <h3>U-Untersuchungen versäumt</h3>
                    <p>U3-U9, J1, J2 – Eltern vergessen Termine, Entwicklungsstörungen werden spät erkannt. "Wann war die letzte U?" – Infos fehlen, Dokumentation lückenhaft</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-allergies"></i>
                    </div>
                    <h3>Hautausschläge telefonisch beschreiben</h3>
                    <p>"Rote Flecken am ganzen Körper" – Masern, Scharlach, Windpocken, Neurodermitis, Allergie? Ohne Foto schwer zu beurteilen, oft unnötige Einbestellungen</p>
                </div>

                <div class="challenge-card">
                    <div class="icon-wrapper">
                        <i class="fa fa-baby"></i>
                    </div>
                    <h3>Entwicklungsfragen & Sorgen der Eltern</h3>
                    <p>"Mein Kind spricht noch nicht" (18 Monate), "Läuft nicht" (15 Monate), "Schläft schlecht" – normale Entwicklung oder behandlungsbedürftig? Zeitintensive Beratungen am Telefon</p>
                </div>
            </div>

            <div class="transition-box">
                <h4>Kinderarztpraxen brauchen altersgerechte Triage</h4>
                <p>
                    MediDesk® erfasst Alter, Gewicht, Symptome strukturiert, bewertet Fieber altersabhängig und erkennt pädiatrische Notfälle automatisch – sicher, kindgerecht, entlastend.
                </p>
            </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="answer-section">
        <div class="container">
            <div class="answer-section-header">
                <span class="answer-seo-anchor">
                    Die digitale Lösung für <span>Kinderarztpraxen</span>
                </span>
                <h2>So funktioniert MediDesk® <span class="highlight-text-green">für Pädiatrie</span></h2>
                <p class="subline">
                    Speziell entwickelt für die Bedürfnisse von Kinderärzten und pädiatrischen Ambulanzen
                </p>
            </div>

            <div class="answer-container">
                <div class="answer-card">
                    <div class="answer-step-number">1</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-child"></i>
                    </div>
                    <p class="answer-card-step">Eltern melden Symptome</p>
                    <h3>Alter, Gewicht & Symptome strukturiert erfassen</h3>
                    <p>Geburtsdatum (für Alter), Gewicht (für Medikamenten-Dosierung), Fieber (Höhe, Dauer, Fieberkrämpfe?), Atemwegssymptome, Hautausschlag, Bauchschmerzen, Trinkmenge – alles kindgerecht abgefragt</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">2</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-exclamation-triangle"></i>
                    </div>
                    <p class="answer-card-step">Intelligente Notfall-Erkennung</p>
                    <h3>Pädiatrischer Notfall oder Routine?</h3>
                    <p>Red Flags (Fieber >38°C bei <3 Monaten, Atemnot, Exsikkose, Trinkverweigerung, Meningismus) werden automatisch als NOTFALL markiert – sofortige Einbestellung oder Klinik-Einweisung</p>
                </div>

                <div class="answer-card">
                    <div class="answer-step-number">3</div>
                    <div class="answer-icon-wrapper">
                        <i class="fa fa-user-md"></i>
                    </div>
                    <p class="answer-card-step">Strukturierte Betreuung</p>
                    <h3>Zeit für kleine Patienten & ihre Familien</h3>
                    <p>Routineanfragen (leichter Schnupfen, Impftermine) digital, kritische Fälle (hohes Fieber bei Säuglingen, schwere Atemnot) sofort priorisiert und persönlich betreut</p>
                </div>
            </div>

            <div class="answer-transition-box">
                <h4>Ergebnis: 65-70% weniger Telefonate, keine übersehenen pädiatrischen Notfälle mehr</h4>
                <p>Eltern fühlen sich ernst genommen, Ihr Team ist entlastet, Kinder erhalten schnellere & bessere Versorgung</p>
                <div class="answer-cta-button">
                    <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Pädiatrie testen</a>
                </div>
            </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-4-benefits">
        <div class="container">
        <div class="section-4-header">
            <span class="seo-anchor">Anwendungsfälle in der Pädiatrie</span>
            <h2>Diese <span class="highlight-text-bg2">Elternanfragen</span> können online gestellt werden</h2>
            <p class="section-4-subline">Speziell für Fieber-Management, Atemwegsinfekte, Impfungen, U-Untersuchungen und Entwicklungsfragen entwickelt</p>
        </div>

        <div class="section-4-grid">
            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFEBEE"/>
                        <rect x="26" y="18" width="4" height="22" rx="2" fill="#D32F2F"/>
                        <circle cx="28" cy="44" r="4" fill="#D32F2F"/>
                        <path d="M30 30h8M30 26h8M30 34h8" stroke="#D32F2F" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Fieber-Management & Fieber-Ampel</h3>
                <p class="section-4-description">
                    <strong>Altersabhängige Bewertung:</strong> 0-3 Monate Fieber >38°C = NOTFALL (Sepsis-Risiko), 3-6 Monate >39°C = DRINGEND, >6 Monate >40°C = DRINGEND<br>
                    <strong>Fieber-Dauer:</strong> Neu (<24h) vs. länger (>3 Tage) – länger = bakteriell? Antibiotika-Indikation?<br>
                    <strong>Begleitsymptome:</strong> Trinkverweigerung, Lethargie, Exanthem, Meningismus, Atemnot<br>
                    <strong>Fieberkrämpfe:</strong> Erstmaliger Fieberkrampf = NOTFALL, bekannt = Routine-Beratung<br>
                    <strong>Antipyretika-Dosierung:</strong> Paracetamol/Ibuprofen gewichtsadaptiert empfehlen
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Kein übersehenes Fieber bei Säuglingen – 100% Sepsis-Erkennung
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E3F2FD"/>
                        <path d="M32 20c-6 0-10 4-10 10v8c0 2 1 4 3 4h14c2 0 3-2 3-4v-8c0-6-4-10-10-10z" fill="#1976D2"/>
                        <path d="M24 38v4c0 2 2 4 4 4h8c2 0 4-2 4-4v-4" stroke="#1976D2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Atemwegsinfekte & Atemnot-Erkennung</h3>
                <p class="section-4-description">
                    <strong>Obstruktive Bronchitis:</strong> Giemen, Pfeifen, Einziehungen → Inhalation mit Salbutamol, ggf. Einbestellung<br>
                    <strong>Pseudokrupp:</strong> Bellender Husten, inspiratorischer Stridor, nachts → DRINGEND (Adrenalin inhalativ, Kortison)<br>
                    <strong>Pneumonie-Verdacht:</strong> Fieber >38,5°C + Tachypnoe + Einziehungen → Röntgen, Antibiotika-Indikation prüfen<br>
                    <strong>Bronchiolitis (RSV):</strong> Säuglinge <6 Monate, Trinkverweigerung, Tachypnoe → Klinik-Einweisung (O₂-Bedarf?)<br>
                    <strong>Atemnot-Score:</strong> Atemfrequenz, Einziehungen, Zyanose → Schweregrad objektiv beurteilen
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Schwere Atemnot wird NIE übersehen – RSV-Bronchiolitis rechtzeitig erkannt
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#F3E5F5"/>
                        <rect x="24" y="22" width="16" height="20" rx="2" stroke="#7B1FA2" stroke-width="3" fill="none"/>
                        <circle cx="32" cy="32" r="3" fill="#7B1FA2"/>
                        <path d="M28 32h8" stroke="#7B1FA2" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Impfkalender & STIKO-Impfungen</h3>
                <p class="section-4-description">
                    <strong>STIKO-Empfehlungen:</strong> 6-fach-Impfung (2/3/4/11 Monate), MMR (11 Monate), Varizellen, Meningokokken B/C, Pneumokokken<br>
                    <strong>Impflücken-Erkennung:</strong> Fehlende Impfungen automatisch markiert, Nachholimpfungen empfohlen<br>
                    <strong>Auffrischungen:</strong> Tetanus/Diphtherie (5-6 Jahre, 9-17 Jahre), MMR 2. Dosis (15 Monate)<br>
                    <strong>Reiseimpfungen:</strong> Hepatitis A (Mittelmeer), Gelbfieber (Tropen), Tollwut (Asien) – Beratung & Planung<br>
                    <strong>Impfreaktionen:</strong> Fieber nach Impfung (normal <39°C/48h), schwere Reaktionen (Anaphylaxie) = NOTFALL
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Impflücken geschlossen, STIKO-Impfrate von 85% auf 98%
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FFF3E0"/>
                        <path d="M20 28h24M20 34h24M20 40h24" stroke="#F57C00" stroke-width="2"/>
                        <circle cx="32" cy="20" r="4" fill="#F57C00"/>
                        <path d="M28 20l4 4 4-4" stroke="#FFF" stroke-width="2"/>
                    </svg>
                </span>
                <h3 class="section-4-title">U-Untersuchungen & Entwicklungsmeilensteine</h3>
                <p class="section-4-description">
                    <strong>U-Termine:</strong> U3 (4.-6. Woche), U4 (3.-4. Monat), U5 (6.-7. Monat), U6 (10.-12. Monat), U7 (21.-24. Monat), U7a (34.-36. Monat), U8 (46.-48. Monat), U9 (60.-64. Monat), J1 (12-14 Jahre), J2 (16-17 Jahre)<br>
                    <strong>Entwicklungsmeilensteine:</strong> Kopf halten (3 Monate), Drehen (6 Monate), Sitzen (9 Monate), Laufen (12-18 Monate), erste Worte (12 Monate), 2-Wort-Sätze (24 Monate)<br>
                    <strong>Entwicklungsstörungen:</strong> Sprachentwicklungsstörung, motorische Retardierung, Autismus-Spektrum → Frühförderung, SPZ-Überweisung<br>
                    <strong>Perzentilen-Verlauf:</strong> Gewicht, Größe, Kopfumfang – Wachstumsstörungen frühzeitig erkennen<br>
                    <strong>Hüftsonographie:</strong> U3 – Hüftdysplasie-Screening, bei Auffälligkeit: Orthopäde-Überweisung
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ U-Untersuchungen nicht vergessen, Entwicklungsstörungen früher erkannt
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#E8F5E9"/>
                        <circle cx="32" cy="28" r="8" stroke="#388E3C" stroke-width="2" fill="none"/>
                        <path d="M32 36v8M28 44h8" stroke="#388E3C" stroke-width="2"/>
                        <circle cx="28" cy="26" r="2" fill="#388E3C"/>
                        <circle cx="36" cy="26" r="2" fill="#388E3C"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Hautausschläge & Exantheme</h3>
                <p class="section-4-description">
                    <strong>Virale Exantheme:</strong> Masern (Koplik-Flecken, Exanthem hinter Ohren), Röteln (kleinfleckig), Windpocken (Bläschen), Scharlach (Himbeerzunge, sandpapierartig), Drei-Tage-Fieber (Fieber→Exanthem)<br>
                    <strong>Foto-Upload:</strong> Eltern laden Hautausschlag-Foto hoch → Ihr Team beurteilt ohne Praxisbesuch<br>
                    <strong>Neurodermitis:</strong> Ekzeme in Ellenbeugen/Kniekehlen, Juckreiz, Trockenheit → Basispflege, ggf. Kortison<br>
                    <strong>Nahrungsmittel-Allergie:</strong> Urtikaria nach Erdnuss/Milch/Ei → IgE-Test, Allergologie-Überweisung<br>
                    <strong>Meningokokken-Sepsis:</strong> Petechien (nicht wegdrückbar) + Fieber + Meningismus = SOFORTIGER NOTFALL 112
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Meningokokken-Sepsis NIE übersehen, 30% weniger unnötige Vorstellungen
                </div>
            </div>

            <div class="section-4-card">
                <span class="section-4-icon">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="#FCE4EC"/>
                        <path d="M20 30c0-6 4-10 12-10s12 4 12 10" stroke="#C2185B" stroke-width="3" fill="none"/>
                        <circle cx="26" cy="28" r="2" fill="#C2185B"/>
                        <circle cx="38" cy="28" r="2" fill="#C2185B"/>
                        <path d="M26 36c0 3 3 6 6 6s6-3 6-6" stroke="#C2185B" stroke-width="2" fill="none"/>
                    </svg>
                </span>
                <h3 class="section-4-title">Gastroenteritis, Bauchschmerzen & Exsikkose</h3>
                <p class="section-4-description">
                    <strong>Akute Gastroenteritis:</strong> Erbrechen + Durchfall → Trinkmenge dokumentieren, Exsikkose-Zeichen abfragen<br>
                    <strong>Exsikkose-Score:</strong> Eingesunkene Fontanelle, trockene Schleimhäute, stehende Hautfalten, verminderte Urinmenge → Schweregrad 1-3<br>
                    <strong>Orale Rehydratation:</strong> Elektrolytlösung (Oralpädon) – Dosierung gewichtsadaptiert empfehlen<br>
                    <strong>Invagination-Verdacht:</strong> Säugling, kolikartige Bauchschmerzen, Erbrechen, blutig-schleimiger Stuhl = NOTFALL (Sonographie, ggf. OP)<br>
                    <strong>Appendizitis-Verdacht:</strong> Wandernder Schmerz (periumbilikal→rechter Unterbauch), Fieber, Übelkeit → Chirurgie-Vorstellung
                </p>
                <div style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%); padding: 12px; border-radius: 10px; margin-top: 16px; font-size: 14px; color: #2E7D32; font-weight: 600;">
                    ✓ Schwere Exsikkose rechtzeitig erkannt, 40% weniger Klinik-Einweisungen
                </div>
            </div>
        </div>

        <div class="section-4-quote">
            <p>„Als Kinderärztin mit 3 Kolleg:innen betreue ich täglich 80-100 kleine Patient:innen von 0-18 Jahren. Früher klingelte unser Telefon 140-mal täglich – panische Eltern mit Fieber-Anfragen, Husten-Fragen, Impftermin-Wünschen, U-Untersuchungs-Erinnerungen. Mit MediDesk® sind es nur noch 45 Anrufe. Eltern melden Symptome strukturiert online: Bei Fieber-Anfragen fragt das System Alter & Fieber-Höhe ab. Fieber >38°C bei 2 Monate altem Baby wird SOFORT als NOTFALL markiert (Sepsis-Risiko) – wir weisen direkt in Kinderklinik ein. Bei 2-Jährigem mit 39°C & gutem Trinkverhalten: Routine-Beratung (Paracetamol, Wadenwickel, morgen Kontrolle). Atemwegsinfekte werden differenziert: Leichter Schnupfen = telefonische Beratung, Atemnot mit Einziehungen = SOFORT kommen (obstruktive Bronchitis, Salbutamol inhalieren). Impfkalender ist digital: System erinnert automatisch an 6-fach-Impfung (2/3/4/11 Monate), MMR, Varizellen. Impflücken werden erkannt, STIKO-Impfrate stieg von 85% auf 98%. U-Untersuchungen: Eltern erhalten Erinnerung an U5, U6, U7 – keine vergessenen U mehr, Entwicklungsstörungen werden früher erkannt (Sprachentwicklungsverzögerung mit 2 Jahren → Logopädie-Überweisung). Hautausschläge: Eltern laden Foto hoch – wir beurteilen Scharlach, Windpocken, Neurodermitis ohne Praxisbesuch (30% weniger unnötige Vorstellungen). Unser Team ist entlastet, Eltern fühlen sich ernst genommen, Kinder erhalten schnellere & bessere Versorgung."</p>
            <p style="margin-top: 15px; font-size: 16px; font-weight: 600; color: var(--highlighted-color);">
                – Dr. med. Sarah Fischer, Fachärztin für Kinder- und Jugendmedizin, Kinderarztpraxis München
            </p>
        </div>

        <div class="section-4-cta-container">
            <a href="#demo" class="btn btn-primary">Live-Demo für Kinderärzte ansehen</a>
        </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="section-5-features">
        <div class="container">
        <div class="section-5-header">
            <span class="seo-anchor">Vorteile für Kinderarztpraxen</span>
            <h2>Das <span class="highlight-text-bg">verändert</span> sich in Ihrer Kinderarztpraxis</h2>
            <p class="section-5-subline">
                Messbare Verbesserungen bei Notfall-Erkennung, Impfquoten und Elternzufriedenheit
            </p>
        </div>

        <div class="section-5-cards-container">
            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);">
                    <i class="fa-solid fa-thermometer-full" style="color: #D32F2F; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Pädiatrische Notfälle werden nicht übersehen</h3>
                    <p class="section-5-feature-description">
                        Fieber-Ampel erkennt kritische Situationen: Fieber >38°C bei <3 Monaten = NOTFALL (Sepsis-Risiko 5-10%). <strong>100% Sensitivität bei Säuglings-Fieber.</strong> Meningokokken-Sepsis (Petechien + Fieber + Meningismus) = SOFORT 112. Schwere Atemnot (Einziehungen, Zyanose) = DRINGEND. <strong>Keine übersehenen lebensbedrohlichen Situationen</strong> mehr durch telefonische Fehleinschätzung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);">
                    <i class="fa-solid fa-syringe" style="color: #1976D2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">STIKO-Impfrate deutlich gestiegen</h3>
                    <p class="section-5-feature-description">
                        Digitaler Impfkalender: 6-fach-Impfung, MMR, Varizellen automatisch geplant. <strong>Impflücken werden sofort erkannt</strong> (fehlende 2. MMR-Dosis, vergessene Auffrischungen). Erinnerungen an Impftermine. <strong>STIKO-Impfrate von 85% auf 98%</strong> gestiegen. Masern-Mumps-Röteln-Durchimpfung >95% (Herdenimmunität erreicht). Meningokokken-B-Impfung (nicht STIKO) auf Wunsch planbar.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);">
                    <i class="fa-solid fa-phone-slash" style="color: #388E3C; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">65-70% weniger Telefonstress</h3>
                    <p class="section-5-feature-description">
                        Eltern melden Fieber, Husten, Ausschläge strukturiert online. <strong>Vorher:</strong> 130-150 Anrufe/Tag → <strong>Nachher:</strong> 40-50 Anrufe/Tag. <strong>3-4 Stunden täglich gewonnen</strong> für Untersuchungen, U-Untersuchungen, Impfberatungen, Entwicklungsgespräche. In Erkältungssaison (Winter): Anrufe von 200+ auf 70 reduziert – Praxis bleibt handlungsfähig.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);">
                    <i class="fa-solid fa-clipboard-check" style="color: #7B1FA2; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">U-Untersuchungen nicht mehr vergessen</h3>
                    <p class="section-5-feature-description">
                        Automatische Erinnerungen: U3 (4.-6. Woche), U4 (3.-4. Monat) bis U9, J1, J2. <strong>Keine versäumten U mehr</strong> – U-Teilnahmerate von 92% auf 99%. Entwicklungsstörungen werden früher erkannt (Sprachentwicklungsverzögerung, motorische Retardierung) → <strong>Frühförderung 6-12 Monate früher</strong> gestartet. Hüftdysplasie-Screening (U3) bei 100% der Säuglinge durchgeführt.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);">
                    <i class="fa-solid fa-images" style="color: #F57C00; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">30% weniger unnötige Vorstellungen</h3>
                    <p class="section-5-feature-description">
                        Foto-Upload für Hautausschläge: Windpocken, Scharlach, Neurodermitis ohne Praxisbesuch beurteilbar. <strong>Leichte Atemwegsinfekte</strong> (Schnupfen ohne Fieber) → telefonische Beratung statt Vorstellung. <strong>3-Tage-Fieber-Verlauf</strong> (Fieber 3 Tage → Exanthem) wird erklärt → Eltern beruhigt, kein Praxisbesuch nötig. Wartezeit in Praxis sinkt von 45 Min auf 20 Min.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);">
                    <i class="fa-solid fa-heartbeat" style="color: #C2185B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Chronische Erkrankungen besser betreut</h3>
                    <p class="section-5-feature-description">
                        Asthma-Monitoring: Peak-Flow-Werte, Inhalations-Frequenz (Salbutamol-Bedarfstherapie), Exazerbationen dokumentieren. <strong>Asthma-Kontrolle verbessert,</strong> weniger Notfälle. ADHS-Verlauf: Medikamenten-Wirkung (Methylphenidat), Nebenwirkungen, Schulleistung → Dosis-Anpassung. <strong>Diabetes Typ 1:</strong> Blutzucker-Verläufe, HbA1c-Werte digital → bessere Stoffwechsel-Einstellung. Adipositas: Gewichtsverlauf, Ernährungs-/Bewegungsberatung.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);">
                    <i class="fa-solid fa-user-friends" style="color: #00796B; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Jugendlichen-Sprechstunde etabliert</h3>
                    <p class="section-5-feature-description">
                        J1/J2-Untersuchungen: Pubertätsentwicklung, Impfstatus (HPV-Impfung!), psychische Gesundheit (Depression, Essstörungen). <strong>Anonyme Anfragen möglich</strong> – Jugendliche trauen sich eher, sensible Themen anzusprechen (Verhütung, Sexualität, Drogen, psychische Probleme). <strong>J1-Teilnahmerate von 55% auf 85%</strong> gestiegen. HPV-Impfquote (9-14 Jahre) von 45% auf 70%.
                    </p>
                </div>
            </div>

            <div class="section-5-feature-card">
                <div class="section-5-icon-wrapper" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);">
                    <i class="fa-solid fa-smile-beam" style="color: #F9A825; font-size: 32px;"></i>
                </div>
                <div class="section-5-content">
                    <h3 class="section-5-feature-title">Eltern fühlen sich ernst genommen</h3>
                    <p class="section-5-feature-description">
                        Strukturierte Symptom-Erfassung nimmt Sorgen ernst. <strong>Eltern-Feedback:</strong> "Ich musste nicht 10x anrufen, um durchzukommen." "System hat alle wichtigen Fragen gestellt, Kinderarzt hat sich Zeit genommen." <strong>Elternzufriedenheit von 78% auf 94%.</strong> Weniger besorgte Vorstellungen in Notaufnahmen (Eltern wissen: Kinderarzt hat Anfrage gesehen, meldet sich bei Bedarf). Vertrauensverhältnis gestärkt.
                    </p>
                </div>
            </div>
        </div>

        <div class="section-5-quote">
            <p>Eine ruhigere Kinderarztpraxis mit perfekter Fieber-Triage, vollständigen Impfkalendern und keinen vergessenen U-Untersuchungen – in der kein Säuglings-Fieber übersehen wird</p>
        </div>

        <div class="section-5-cta-container">
            <a href="#kontakt" class="btn btn-primary">Persönliche Beratung für Kinderärzte vereinbaren</a>
        </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-6-fachrichtungen">
        <div class="container">
        <div class="section-6-header">
            <h2>MediDesk® für alle <span class="highlight-text-bg2">pädiatrischen Bereiche</span></h2>
            <p class="section-6-subline">
                Von Neonatologie über Kinderkardiologie bis Jugendmedizin – MediDesk® passt sich Ihrem Schwerpunkt an
            </p>
        </div>

        <div class="section-6-table-wrapper">
            <table class="section-6-table">
                <tbody>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFEBEE 0%, #FFCDD2 100%);"><i class="fa-solid fa-baby" style="color: #D32F2F;"></i></span></td>
                        <td><span class="section-6-table-fach">Allgemeine Pädiatrie</span></td>
                        <td><span class="section-6-table-desc">Akute Infekte, Fieber, U-Untersuchungen, Impfungen, Entwicklungsberatung, Ernährungsberatung</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E3F2FD 0%, #BBDEFB 100%);"><i class="fa-solid fa-baby-carriage" style="color: #1976D2;"></i></span></td>
                        <td><span class="section-6-table-fach">Neonatologie & Frühgeborenen-Nachsorge</span></td>
                        <td><span class="section-6-table-desc">U2, U3, Gewichtsverlauf, Trinkmenge, Ikterus-Kontrolle, BPD-Nachsorge, Apnoe-Monitoring</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #F3E5F5 0%, #E1BEE7 100%);"><i class="fa-solid fa-lungs" style="color: #7B1FA2;"></i></span></td>
                        <td><span class="section-6-table-fach">Kinder-Pneumologie</span></td>
                        <td><span class="section-6-table-desc">Asthma bronchiale, obstruktive Bronchitis, Mukoviszidose, Peak-Flow-Monitoring, Inhalationstherapie</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);"><i class="fa-solid fa-allergies" style="color: #F57C00;"></i></span></td>
                        <td><span class="section-6-table-fach">Allergologie</span></td>
                        <td><span class="section-6-table-desc">Nahrungsmittel-Allergien, atopische Dermatitis (Neurodermitis), allergisches Asthma, Heuschnupfen, Hyposensibilisierung</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8F5E9 0%, #C8E6C9 100%);"><i class="fa-solid fa-heart-pulse" style="color: #388E3C;"></i></span></td>
                        <td><span class="section-6-table-fach">Kinderkardiologie</span></td>
                        <td><span class="section-6-table-desc">Angeborene Herzfehler (VSD, ASD, PDA), Herzgeräusch-Abklärung, Kawasaki-Syndrom, Endokarditis-Prophylaxe</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FCE4EC 0%, #F8BBD0 100%);"><i class="fa-solid fa-brain" style="color: #C2185B;"></i></span></td>
                        <td><span class="section-6-table-fach">Neuropädiatrie</span></td>
                        <td><span class="section-6-table-desc">Epilepsie, Fieberkrämpfe, Entwicklungsstörungen, Zerebralparese, Kopfschmerzen, ADHS</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E0F2F1 0%, #B2DFDB 100%);"><i class="fa-solid fa-stomach" style="color: #00796B;"></i></span></td>
                        <td><span class="section-6-table-fach">Gastroenterologie</span></td>
                        <td><span class="section-6-table-desc">Gastroenteritis, chronische Bauchschmerzen, Zöliakie, chronisch-entzündliche Darmerkrankungen (CED), Reflux</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #FFF9C4 0%, #FFF59D 100%);"><i class="fa-solid fa-candy-cane" style="color: #F9A825;"></i></span></td>
                        <td><span class="section-6-table-fach">Endokrinologie & Diabetologie</span></td>
                        <td><span class="section-6-table-desc">Diabetes mellitus Typ 1, Adipositas, Kleinwuchs, Schilddrüsen-Erkrankungen, Pubertätsstörungen</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #EFEBE9 0%, #D7CCC8 100%);"><i class="fa-solid fa-bone" style="color: #5D4037;"></i></span></td>
                        <td><span class="section-6-table-fach">Kinderorthopädie</span></td>
                        <td><span class="section-6-table-desc">Hüftdysplasie, Klumpfuß, Skoliose, Wachstumsstörungen, Gangstörungen, juvenile idiopathische Arthritis (JIA)</span></td>
                    </tr>
                    <tr>
                        <td><span class="section-6-table-icon" style="background: linear-gradient(135deg, #E8EAF6 0%, #C5CAE9 100%);"><i class="fa-solid fa-user-graduate" style="color: #3F51B5;"></i></span></td>
                        <td><span class="section-6-table-fach">Jugendmedizin (Adoleszenten-Medizin)</span></td>
                        <td><span class="section-6-table-desc">J1/J2-Untersuchungen, Pubertät, Menstruationsstörungen, Verhütungsberatung, psychische Gesundheit, Essstörungen</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="section-6-footer">
            <p class="section-6-footer-text">
                Ob Einzelpraxis, Gemeinschaftspraxis, sozialpädiatrisches Zentrum (SPZ) oder Kinderklinik-Ambulanz – MediDesk® skaliert mit Ihren Anforderungen
            </p>
            
            <div class="section-6-cta-container">
                <a href="#demo" class="btn btn-primary">Demo für meinen Schwerpunkt ansehen</a>
            </div>
        </div>
        </div>
    </section>

    <section class="wave"></section>

    <section class="section-7-process">
        <div class="container">
        <div class="section-7-header">
            <h2>So integrieren Sie MediDesk® in <span class="highlight-text-bg">48 Stunden</span></h2>
            <p class="section-7-subline">Speziell für den hektischen Workflow in Kinderarztpraxen entwickelt</p>
        </div>

        <div class="section-7-timeline">
            <div class="section-7-step">
                <div class="section-7-step-number">1</div>
                <div class="section-7-step-card">
                    <div class="section-7-step-header">
                        <div class="section-7-step-icon">
                            <i class="fa-solid fa-baby"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Pädiatrie-spezifische Konfiguration</h3>
                            <p class="section-7-step-description">
                                Wir erfassen Ihre Schwerpunkte (Neonatologie, Allergologie, Pneumologie), Altersgruppen-spezifische Notfall-Kriterien (Säuglinge, Kleinkinder, Schulkinder, Jugendliche), Fieber-Ampel-System, STIKO-Impfkalender, U-Untersuchungs-Zeitplan. Red Flags werden altersabhängig definiert.
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
                            <h3 class="section-7-step-title">Praxis-System-Integration (optional)</h3>
                            <p class="section-7-step-description">
                                Anbindung an Praxis-Software (Medistar, Turbomed, CGM Albis), Impf-Datenbank, U-Heft-Dokumentation, Perzentilen-Kurven (Gewicht/Größe/Kopfumfang). Alternativ: Standalone-Betrieb ohne IT-Aufwand.
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
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                        <div>
                            <h3 class="section-7-step-title">Team-Schulung & Eltern-Information</h3>
                            <p class="section-7-step-description">
                                90-minütige Schulung für MFA: Fieber-Triage, Atemnot-Erkennung, pädiatrische Red Flags. Eltern-Infoblatt für Wartezimmer: "So nutzen Sie unsere Online-Rezeption". Video-Tutorials, 24/7-Pädiatrie-Support im ersten Monat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7-cta-container">
            <a href="#kostenlos-testen" class="btn btn-primary">Jetzt für Pädiatrie starten</a>
        </div>
        </div>
    </section>

    <section class="wave2"></section>

    <section class="section-faq">
        <div class="container">
        <div class="section-faq-header">
            <h2>Häufige <span class="highlight-text-bg">Fragen</span> von Kinderärzten</h2>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie funktioniert die Fieber-Ampel?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Eltern geben Geburtsdatum & Fieber-Höhe ein. System berechnet Alter & bewertet altersabhängig: 0-3 Monate + Fieber >38°C = ROT (NOTFALL – Sepsis-Risiko 5-10%, sofortige Kinderklinik-Einweisung, Blutkultur, CRP, ggf. Antibiotika). 3-6 Monate + Fieber >39°C = ORANGE (DRINGEND – gleicher Tag Vorstellung, Infektfokus suchen). >6 Monate + Fieber >40°C oder >3 Tage = ORANGE (DRINGEND). >6 Monate + Fieber 38-39°C + gutes Trinkverhalten = GRÜN (Routine – Paracetamol 15mg/kg, Wadenwickel, morgen Kontrolle). System fragt zusätzlich Trinkmenge, Lethargie, Exanthem, Meningismus ab. Bei Fieberkrampf (erstmalig): ROT (NOTFALL), bekannt: ORANGE. Sensitivität 100% bei kritischem Säuglings-Fieber.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Eltern Hautausschläge fotografieren?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, Foto-Upload-Funktion: Eltern laden 1-3 Fotos des Hautausschlags hoch (Nahaufnahme, Übersicht). Ihr Team beurteilt: Windpocken (Bläschen in verschiedenen Stadien) → Isolation, Juckreiz-Behandlung, Scharlach (feinfleckig, Himbeerzunge) → Penicillin, Drei-Tage-Fieber (Fieber 3 Tage → dann Exanthem) → Eltern beruhigen, Neurodermitis (Ekzeme Ellenbeugen/Kniekehlen) → Basispflege-Beratung, Nahrungsmittel-Allergie (Urtikaria nach Erdnuss) → IgE-Test, Allergologe. Bei Petechien (nicht wegdrückbar) + Fieber: SOFORT NOTFALL-Warnung (Meningokokken-Sepsis-Verdacht → 112). 30% weniger unnötige Vorstellungen (Windpocken, harmloses Exanthem sicher erkennbar). DSGVO-konform, Fotos verschlüsselt gespeichert, automatisch nach 30 Tagen gelöscht.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie werden Impftermine organisiert?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Digitaler STIKO-Impfkalender: Nach Geburtsdatum wird automatischer Impfplan erstellt: 6-fach-Impfung (2/3/4/11 Monate), Pneumokokken (2/3/11 Monate), Rotavirus (6/10 Wochen oral), MMR + Varizellen (11 Monate, 15 Monate 2. Dosis), Meningokokken B (2/4/12 Monate), Meningokokken C (12 Monate), HPV (9-14 Jahre 2 Dosen). Eltern erhalten Erinnerung 1 Woche vor Impftermin: "6-fach-Impfung 3. Dosis steht an (4. Monat). Bitte Termin vereinbaren." Impflücken werden automatisch erkannt: "2. MMR-Dosis fehlt (sollte mit 15 Monaten erfolgen, Kind ist jetzt 18 Monate)". Nachholimpfungen werden vorgeschlagen. STIKO-Impfrate von 85% auf 98%. Reiseimpfungen (Hepatitis A, Gelbfieber, Tollwut) separat planbar. Impfreaktionen dokumentierbar (Fieber nach Impfung normal <48h).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Werden U-Untersuchungen automatisch erinnert?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, U-Untersuchungs-Erinnerungen: Nach Geburtsdatum automatischer U-Zeitplan: U3 (4.-6. Woche – Hüftsonographie!), U4 (3.-4. Monat), U5 (6.-7. Monat), U6 (10.-12. Monat – Entwicklungsmeilensteine: Sitzen?), U7 (21.-24. Monat – Sprache: 2-Wort-Sätze?), U7a (34.-36. Monat), U8 (46.-48. Monat), U9 (60.-64. Monat – Schulreife?), J1 (12-14 Jahre – Pubertät, Impfstatus, psychische Gesundheit), J2 (16-17 Jahre). Eltern erhalten Erinnerung 2 Wochen vor Termin-Zeitfenster: "U6 steht an (10.-12. Monat), bitte Termin vereinbaren." U-Teilnahmerate von 92% auf 99%. Entwicklungsmeilensteine werden abgefragt: Kopf halten (3 Monate), Drehen (6 Monate), Sitzen (9 Monate), Laufen (12-18 Monate), erste Worte (12 Monate), 2-Wort-Sätze (24 Monate). Bei Entwicklungsverzögerung: Frühförderung/SPZ-Überweisung empfohlen.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Wie wird Atemnot bei Kindern erkannt?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Atemnot-Fragebogen: Atemfrequenz (normal vs. erhöht – altersabhängig: Säugling >60/Min, Kleinkind >40/Min, Schulkind >30/Min = Tachypnoe), Einziehungen (suprasternal, interkostal, substernal)?, Nasenflügeln?, Giemen/Pfeifen?, Zyanose (bläuliche Lippen/Finger)?, Husten (bellend = Pseudokrupp, produktiv = Pneumonie), Trinkverweigerung?. Atemnot-Score berechnet Schweregrad: Leicht (Tachypnoe, kein O₂-Bedarf) = Routine, Mittel (Einziehungen, Giemen, SpO₂ 90-94%) = DRINGEND (gleicher Tag, Inhalation Salbutamol), Schwer (Zyanose, SpO₂ <90%, Nasenflügeln) = NOTFALL (Kinderklinik-Einweisung, O₂-Gabe, ggf. Beatmung). Pseudokrupp (bellender Husten + Stridor nachts): DRINGEND – Adrenalin inhalativ + Kortison. RSV-Bronchiolitis bei Säugling <6 Monate + Trinkverweigerung: NOTFALL – Klinik-Einweisung. Sensitivität 100% bei schwerer Atemnot.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Können Eltern Entwicklungsfragen stellen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, Entwicklungsberatungs-Modul: Eltern wählen "Entwicklungsfrage" → System fragt Alter & Sorge ab (Sprache, Motorik, Sozialverhalten). Meilensteine werden abgeglichen: 18 Monate, spricht nicht = Entwicklungsverzögerung? (normal: erste Worte 12 Monate, 2-Wort-Sätze 24 Monate) → Hör-Test (BERA), Logopädie-Überweisung. 15 Monate, läuft nicht = motorische Retardierung? (normal: freies Laufen 12-18 Monate) → Physiotherapie, Orthopäde-Check. Autismus-Screening: Kein Blickkontakt, keine soziale Interaktion, stereotype Bewegungen → M-CHAT-Test, SPZ-Überweisung. ADHS-Verdacht: Hyperaktivität, Impulsivität, Konzentrationsschwäche (Schulkind) → Verhaltensbeobachtung, ggf. Kinder-Psychiater. Schlafstörungen: Ein-/Durchschlafprobleme → Schlafhygiene-Beratung. Eltern erhalten strukturierte Beratung, Entwicklungsstörungen werden 6-12 Monate früher erkannt → Frühförderung startet rechtzeitig.
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Was kostet MediDesk® für Kinderarztpraxen?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Preise nach Ärzteanzahl: 1-2 Ärzte = 119€/Monat, 3-4 = 179€/Monat, 5-6 = 298€/Monat, >6 = +59€ pro Arzt (alle zzgl. MwSt.). Inklusive: Unbegrenzte Anfragen, Fieber-Ampel, Atemnot-Erkennung, STIKO-Impfkalender, U-Untersuchungs-Erinnerungen, Foto-Upload (Hautausschläge), Entwicklungsberatung, Team-Schulung, Updates, Support. Optional: Praxis-Software-Integration (Medistar, Turbomed) +149€/Monat, Perzentilen-Kurven-Modul +79€/Monat. Keine Einrichtungsgebühr. 30 Tage kostenlos testen, monatlich kündbar. ROI meist nach 4-6 Wochen durch Zeitersparnis (3-4h täglich = 600-800€ Arztzeit/Tag gespart) + weniger unnötige Vorstellungen (30%).
                    </div>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    <div class="faq-question-text">Ist MediDesk® für sozialpädiatrische Zentren (SPZ) geeignet?</div>
                    <div class="faq-icon">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-text">
                        Ja, sehr gut. SPZ betreuen Kinder mit Entwicklungsstörungen, chronischen Erkrankungen, Behinderungen – strukturierte Anfragen-Erfassung ist essenziell. Multi-Disziplinarität: Kinderärzte, Neuropädiater, Psychologen, Physio-/Ergotherapeuten, Logopäden arbeiten im Team → MediDesk® ermöglicht interdisziplinäre Anfragen-Bearbeitung. Entwicklungsdokumentation: GMFCS (Cerebralparese), Autismus-Schweregrad, ADHS-Symptomatik, Epilepsie-Anfalls-Häufigkeit – Verlaufs-Dokumentation über Jahre. Therapie-Planung: Physiotherapie, Ergotherapie, Logopädie-Termine koordinieren. Hilfsmittel-Versorgungen: Rollstuhl, Orthesen, Kommunikationshilfen – Rezepte organisieren. Eltern-Schulungen: Epilepsie-Notfallmedikation (Diazepam rektal), Ernährungssonden-Handling. KIS-Anbindung zu Krankenhaus-Systemen. Perfekt für SPZ, Kinderklinik-Ambulanzen, Frühförderstellen.
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="section-final-cta mt-5">
        <div class="cta-content">
            <div class="cta-header">
                <h2>Bereit für eine ruhigere Kinderarztpraxis mit perfekter Fieber-Triage?</h2>
            </div>

            <p class="cta-subline">
                Starten Sie jetzt Ihre kostenlose 30-Tage-Testphase – speziell konfiguriert für Pädiatrie. Fieber-Ampel, Atemnot-Erkennung, STIKO-Impfkalender, U-Untersuchungs-Erinnerungen. Keine Einrichtungsgebühr, kein Risiko, keine Vertragsbindung.
            </p>

            <div class="final-cta-buttons">
                <a href="#demo" class="btn-primary">
                    <span>Kostenlose Demo für Kinderärzte</span>
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
                    <span>100% Fieber-Erkennung</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>98% STIKO-Impfrate</span>
                </div>
                <div class="trust-item">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>U-Untersuchungen perfekt</span>
                </div>
            </div>
        </div>
    </section>

    <?php include '../../includes/footer.php'; ?>
    <?php include '../../includes/testen-popup.php'; ?>

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