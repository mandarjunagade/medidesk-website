# Prompt-Vorlage für KI-Content-Erstellung

Kopieren Sie diese Vorlage in einen neuen Chat mit Claude/ChatGPT/einem anderen KI-Assistenten, um Blog-Artikel zu schreiben.

---

## PROMPT FÜR NEUEN CHAT

```
# Aufgabe: Blog-Artikel für MediDesk schreiben

Ich benötige deine Hilfe beim Schreiben eines SEO-optimierten Blog-Artikels für medideskr.cloud.

## Schritt 1: Lies diese wichtigen Dokumente

Bitte lies zuerst diese drei Dateien vollständig:

1. **SEO-Strategie:** `c:\xampp\htdocs\medidesk\blog\SEO-BLOG-STRATEGY-2026.md`
   - Enthält die gesamte Content-Strategie
   - Zeigt, welche Artikel geschrieben werden müssen
   - Prioritäten und Keyword-Ziele

2. **Schreibanleitung:** `c:\xampp\htdocs\medidesk\blog\AI-CONTENT-WRITING-INSTRUCTIONS.md`
   - Komplette Anleitung, wie Artikel strukturiert werden müssen
   - Deutsche SEO-Optimierung
   - EEAT-Anforderungen
   - Technische Umsetzung

3. **Bestehender Pillar-Content (als Stilreferenz):**
   `c:\xampp\htdocs\medidesk\blog\online-rezeption-arztpraxis-leitfaden\index.php`
   - Zeigt den bestehenden Schreibstil
   - Referenz für Formatierung

## Schritt 2: Prüfe bestehende Inhalte für interne Verlinkung

Durchsuche diese Verzeichnisse:
- `/blog/` - Alle bestehenden Blog-Artikel
- `/fachrichtungen/` - Alle 15 Fachrichtungsseiten
- `/sitemap.xml` - Liste aller veröffentlichten URLs

Suche nach:
- Artikeln, die zum gewünschten Thema passen (für interne Links)
- Keywords, die bereits verwendet werden (für Konsistenz)
- Fachrichtungsseiten, die relevant sind

## Schritt 3: Artikel-Details

**Artikel, den ich schreiben möchte:**
[HIER EINFÜGEN - z.B. "321 MED Alternative 2026: Anbieter im Vergleich"]

**Verzeichnis/Slug:**
[HIER EINFÜGEN - z.B. "321-med-alternative"]

**Hauptkeyword:**
[HIER EINFÜGEN - z.B. "321 med alternative"]

**Ziel-Wortanzahl:**
[HIER EINFÜGEN - z.B. "2000 Wörter" für Standard, "3500+ Wörter" für Pillar]

## Schritt 4: Schreibe den Artikel

Erstelle einen vollständigen Blog-Artikel mit:

### Struktur (PFLICHT):
1. ✅ META-Bereich (PHP-Variablen, Schema-Markup)
2. ✅ Hero-Bereich (H1, Untertitel, Meta-Infos)
3. ✅ Inhaltsverzeichnis (nummeriert, verlinkbar)
4. ✅ Das Wichtigste in Kürze (4-6 Punkte)
5. ✅ Einleitung (Hook, Keyword in ersten 100 Wörtern)
6. ✅ Hauptinhalt (5-8 H2-Abschnitte)
7. ✅ Praxis-Abschnitt (Checkliste oder Schritt-für-Schritt)
8. ✅ Häufige Fragen (5-8 FAQs)
9. ✅ Fazit + CTA (Chat-Widget, nicht Telefon!)
10. ✅ Weiterführende Artikel (3-4 Links)

### Anforderungen (KRITISCH):
- ✅ 100% Deutsch, google.de-optimiert
- ✅ Hauptkeyword in: H1, Meta-Titel, URL, erstem Absatz, "Das Wichtigste in Kürze"
- ✅ Mindestens 3 Zitate von autoritativen deutschen Quellen (BITKOM, PKV Institut, KBV)
- ✅ Link zu Pillar-Content: `/blog/online-rezeption-arztpraxis-leitfaden/`
- ✅ Links zu 1-2 relevanten Fachrichtungsseiten
- ✅ Links zu 2-3 verwandten Blog-Artikeln
- ✅ Keine toten Links
- ✅ CTA führt zu Chat-Widget, NICHT zu Telefonnummer
- ✅ Article-Schema, FAQPage-Schema, BreadcrumbList-Schema

### Ton & Stil:
- ✅ Professionell aber zugänglich
- ✅ Siezen (Sie)
- ✅ Sachlich, nicht werblich
- ✅ Konkrete Zahlen (75%, 119€, 48 Stunden)
- ✅ Kurze Absätze (max. 3-4 Sätze)
- ✅ DSGVO-Konformität betonen

### Was MediDesk IST (wichtig!):
- ✅ Digitale Online-Rezeption
- ✅ REDUZIERT Telefonanrufe um 60-75%
- ✅ Chat-Widget für Patientenanfragen
- ✅ Ab 119€/Monat
- ✅ 48 Stunden Einrichtung

### Was MediDesk NICHT IST:
- ❌ KEIN Telefonservice
- ❌ KEIN Callcenter
- ❌ Nimmt KEINE Anrufe entgegen

## Schritt 5: Ausgabe

Gib mir den kompletten PHP-Code für `/blog/[artikel-slug]/index.php` inklusive:
- PHP-Variablen für SEO
- Alle Schema-Markups
- Vollständiger HTML-Inhalt
- Alle internen Links

## Schritt 6: Checkliste

Nach dem Schreiben, prüfe:
- [ ] Hauptkeyword in H1, Meta-Titel, erstem Absatz, URL?
- [ ] "Das Wichtigste in Kürze" mit 4-6 Punkten?
- [ ] Mindestens 1.500 Wörter?
- [ ] Mindestens 3 Quellen-Zitate?
- [ ] Link zum Pillar-Content?
- [ ] Links zu Fachrichtungsseiten?
- [ ] 2-3 Links zu verwandten Blog-Artikeln?
- [ ] FAQPage-Schema mit 5-8 Fragen?
- [ ] CTA zeigt auf Chat-Widget (nicht Telefon)?
- [ ] Sprache: 100% Deutsch, korrekte Grammatik?

Bist du bereit? Lass uns starten!
```

---

## BEISPIEL-PROMPTS FÜR VERSCHIEDENE ARTIKEL-TYPEN

### Beispiel 1: Competitor-Vergleichs-Artikel

```
Artikel: "321 MED Alternative 2026: Anbieter im Vergleich"
Verzeichnis: 321-med-alternative
Hauptkeyword: 321 med alternative
Wortanzahl: 2500 Wörter
Besonderheit: Vergleiche MediDesk, Doctolib, Docmedico, samedi, Idana fair und ausgewogen
```

### Beispiel 2: Kosten-Artikel

```
Artikel: "Online-Rezeption Kosten: Preisvergleich aller Anbieter"
Verzeichnis: online-rezeption-kosten
Hauptkeyword: online rezeption kosten
Wortanzahl: 2200 Wörter
Besonderheit: Transparente Preise, ROI-Berechnung, versteckte Kosten aufdecken
```

### Beispiel 3: Problem-Lösungs-Artikel

```
Artikel: "Telefonstress in der Arztpraxis: 10 bewährte Lösungen"
Verzeichnis: telefonstress-arztpraxis-loesungen
Hauptkeyword: telefonstress arztpraxis
Wortanzahl: 1800 Wörter
Besonderheit: Empathisch auf MFA-Stress eingehen, konkrete Lösungen mit Zahlen
```

### Beispiel 4: Fachrichtungs-spezifischer Artikel

```
Artikel: "Online-Rezeption für Hausarztpraxen: Praxis-Guide"
Verzeichnis: online-rezeption-hausarztpraxis
Hauptkeyword: online rezeption hausarzt
Wortanzahl: 2000 Wörter
Besonderheit: Link zu /fachrichtungen/allgemeinmedizin/, spezifische Hausarzt-Herausforderungen
```

### Beispiel 5: Pillar-Content

```
Artikel: "Telefonentlastung Arztpraxis: Der komplette Guide (PILLAR)"
Verzeichnis: telefonentlastung-arztpraxis-tipps
Hauptkeyword: telefonentlastung arztpraxis
Wortanzahl: 3500+ Wörter
Besonderheit: Umfassender Guide, viele interne Links zu Cluster-Artikeln
```

---

## ZUSÄTZLICHE HINWEISE

### Was der KI-Assistent tun soll:
1. ✅ Alle drei Dokumente gründlich lesen
2. ✅ Bestehende Inhalte durchsuchen (Glob/Grep)
3. ✅ Interne Links identifizieren
4. ✅ Artikel nach deutscher Struktur schreiben
5. ✅ Vollständigen PHP-Code ausgeben

### Was der KI-Assistent NICHT tun soll:
- ❌ Artikel auf Englisch schreiben
- ❌ Von der vorgegebenen Struktur abweichen
- ❌ Links zu nicht-existierenden Artikeln setzen
- ❌ Telefonnummer im CTA verwenden
- ❌ MediDesk als "Telefonservice" bezeichnen

---

## NACH DEM SCHREIBEN

Wenn der Artikel fertig ist, musst du:

1. **Datei speichern:**
   - Erstelle Ordner: `/blog/[artikel-slug]/`
   - Speichere als: `/blog/[artikel-slug]/index.php`

2. **Sitemap aktualisieren:**
   - Füge neue URL zu `/sitemap.xml` hinzu

3. **Blog-Index aktualisieren:**
   - Füge Artikel-Karte zu `/blog/index.php` hinzu

4. **Interne Links hinzufügen:**
   - Gehe zu verwandten Artikeln
   - Füge Links zum neuen Artikel hinzu

5. **llms.txt aktualisieren (optional):**
   - Wenn der Artikel wichtig ist, zu `/llms.txt` hinzufügen

---

## VORLAGE FÜR SCHNELLSTART

Kopiere dies in einen neuen Chat:

```
Ich möchte einen SEO-optimierten Blog-Artikel für medideskr.cloud schreiben.

**SCHRITT 1:** Lies bitte diese drei Dateien:
1. c:\xampp\htdocs\medidesk\blog\SEO-BLOG-STRATEGY-2026.md
2. c:\xampp\htdocs\medidesk\blog\AI-CONTENT-WRITING-INSTRUCTIONS.md
3. c:\xampp\htdocs\medidesk\blog\online-rezeption-arztpraxis-leitfaden\index.php

**SCHRITT 2:** Durchsuche c:\xampp\htdocs\medidesk\blog\ und c:\xampp\htdocs\medidesk\fachrichtungen\ für bestehende Inhalte.

**SCHRITT 3:** Schreibe folgenden Artikel:
- **Titel:** [DEIN ARTIKEL-TITEL]
- **Verzeichnis:** [artikel-slug]
- **Hauptkeyword:** [hauptkeyword]
- **Wortanzahl:** [z.B. 2000 Wörter]

Folge exakt der deutschen Artikel-Struktur aus AI-CONTENT-WRITING-INSTRUCTIONS.md:
1. Hero-Bereich
2. Inhaltsverzeichnis
3. Das Wichtigste in Kürze (4-6 Punkte)
4. Hauptinhalt
5. FAQ
6. Fazit + CTA

Gib mir den vollständigen PHP-Code für /blog/[artikel-slug]/index.php.
```

---

**Erstellt von:** MediDesk Content Team
**Version:** 1.0
**Datum:** Februar 2026
