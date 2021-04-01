<?php
$lang = array();

// singulars and plurals

$lang['BOOK_SINGULAR'] = 'Buch';
$lang['BOOK_PLURAL'] = 'Bücher';

$lang['EBOOK_SINGULAR'] = 'E-Book';
$lang['EBOOK_PLURAL'] = 'E-Books';

$lang['ITEM_SINGULAR'] = 'Eintrag';
$lang['ITEM_PLURAL'] = 'Einträge';

$lang['VERB_SINGULAR'] = 'ist';
$lang['VERB_PLURAL'] = 'sind';

$lang['GENRE_SINGULAR'] = 'Genre';
$lang['GENRE_PLURAL'] = 'Genres';

$lang['AUTHOR_SINGULAR'] = 'Autor*in';
$lang['AUTHOR_PLURAL'] = 'Autor*innen';

$lang['PUBLISHER_SINGULAR'] = 'Verlag';
$lang['PUBLISHER_PLURAL'] = 'Verlage';

// login

$lang['LOGIN_ERROR'] = '<p>Fehler: Ungültige Zugangsdaten.</p>';
$lang['LOGIN_WELCOME'] = 'Willkommen!';
$lang['LOGIN_NOTICE'] = 'Bitte einloggen.';
$lang['LOGIN_USER'] = 'Login-Name';
$lang['LOGIN_PASSWORD'] = 'Passwort';
$lang['LOGIN_BUTTON'] = 'Einloggen';

// menu

$lang['MENU_BROWSE'] = 'Gesamtliste';
$lang['MENU_ADD'] = 'Hinzufügen';
$lang['MENU_IMPORT'] = 'Import';
$lang['MENU_AUTHORS'] = 'Autor*innen';
$lang['MENU_PUBLISHERS'] = 'Verlage';
$lang['MENU_GENRES'] = 'Genres';
$lang['MENU_LENT'] = 'Verliehen';
$lang['MENU_EBOOKS'] = 'E-Books';
$lang['MENU_LOGOUT'] = 'Ausloggen';

// searchform

$lang['SEARCHFORM_SUBMIT'] = 'Sammlung durchsuchen';

// add new item

$lang['ADD_TITLE'] = 'Neuer Eintrag in die Sammlung';
$lang['ADDED_SUCCESS'] = 'Eintrag erfolgreich angelegt ';
$lang['ADDED_SUCCESS_REDIRECT'] = 'Schau dir den Eintrag an';
$lang['ADD_AUTHOR_LABEL'] = 'Autor*in<span>(nen) &ndash; mit Semikolon getrennt (;)</span>';
$lang['ADD_TITLE_LABEL'] = 'Titel';
$lang['ADD_O_TITLE_LABEL'] = 'Originaltitel';
$lang['ADD_ISBN_LABEL'] = 'ISBN';
$lang['ADD_PUBLISHER_LABEL'] = 'Verlag';
$lang['ADD_YEAR_LABEL'] = 'Erschienen';
$lang['ADD_LANGUAGE_LABEL'] = 'Sprache'; 
$lang['ADD_GENRE_LABEL'] = 'Genre<span>(s) &ndash; kommagetrennt (,)</span>';
$lang['ADD_COVER_LABEL'] = 'Titelbild (URL)';
$lang['ADD_DESCRIPTION_LABEL'] = 'Beschreibung/Inhalt';
$lang['ADD_VOLUME_LABEL'] = 'Band/Nummer<span> &ndash; nur Zahlen</span>';
$lang['ADD_SERIES_LABEL'] = 'Reihe';
$lang['ADD_LOCATION_LABEL'] = 'Aufbewahrungsort'; 
$lang['ADD_IFLENT_LABEL'] = 'Das Buch ist verliehen';
$lang['ADD_LENTTO_LABEL'] = 'Verliehen an';
$lang['ADD_LENTAT_LABEL'] = 'Verleihdatum';
$lang['ADD_ADDBUTTON'] = 'Hinzufügen';
$lang['ADD_CANCELBUTTON'] = 'abbrechen';
$lang['ADD_IFEBOOK_LABEL'] = 'Das Buch ist ein E-Book';
$lang['ADD_EBOOK_LABEL'] = 'E-Book-Datei hochladen <span>(optional)</span>';

// authors' list

$lang['AUTHORS_TITLE'] = 'Autor*innen-Liste';

// delete an item

$lang['DELETE_TITLE'] = 'Eintrag löschen';
$lang['DELETE_SUCCESS'] = 'Eintrag gelöscht. ';
$lang['DELETE_REDIRECT'] = 'Zurück zu Sammlung';
$lang['DELETE_WARNING'] = '<strong>Achtung!</strong> Du <strong>löschst</strong> gerade folgenden Eintrag aus der Datenbank:';
$lang['DELETE_AUTHOR_REF'] = ' von ';
$lang['DELETE_CONFIRM'] = 'Das kann nicht rückgängig gemacht werden. Bist du sicher?';
$lang['DELETE_DELETEBUTTON'] = 'Eintrag wirklich löschen';
$lang['DELETE_CANCELBUTTON'] = 'abbrechen';

// display items

$lang['DISPLAY_AUTHOR_LABEL'] = 'Autor*in';
$lang['DISPLAY_ISBN_LABEL'] = 'ISBN';
$lang['DISPLAY_PUBLISHER_LABEL'] = 'Verlag';
$lang['DISPLAY_YEAR_LABEL'] = 'Erscheinungsjahr';
$lang['DISPLAY_LANGUAGE_LABEL'] = 'Sprache'; 
$lang['DISPLAY_O_TITLE_LABEL'] = 'Originaltitel'; 
$lang['DISPLAY_GENRE_LABEL'] = 'Genre';
$lang['DISPLAY_DESCRIPTION_LABEL'] = 'Beschreibung/Inhalt';
$lang['DISPLAY_SERIES_LABEL'] = 'Dieses Buch ist Teil einer Serie/Reihe';
$lang['DISPLAY_LOCATION_LABEL'] = 'Aufbewahrungsort'; 
$lang['DISPLAY_LENT_NOTE'] = 'Du hast dieses Buch verliehen';
$lang['DISPLAY_LENTTO_REF'] = ' an ';
$lang['DISPLAY_LENTAT_REF'] = ' am ';
$lang['DISPLAY_EBOOK_TITLE_PREFIX'] = 'E-Book: ';

// display author

$lang['DISPLAY_AUTHOR_TITLE'] = 'Bücher von ';
$lang['DISPLAY_AUTHOR_TITLE_SUFFIX'] = '';
$lang['DISPLAY_AUTHOR_OWN'] = 'Du hast ';
$lang['DISPLAY_AUTHOR_AUTHORSHIP'] = ' von ';

// display genre

$lang['DISPLAY_GENRE_TITLE'] = ' ';
$lang['DISPLAY_GENRE_OWN'] = 'In deiner Sammlung gibt es ';
$lang['DISPLAY_GENRE_SUFFIX'] = '.';

// display lent books

$lang['DISPLAY_LENT_TITLE'] = 'Verliehene Bücher';
$lang['DISPLAY_LENT_PREFIX'] = 'Du hast verliehen ';
$lang['DISPLAY_LENT_SUFFIX'] = '.';

// display publisher

$lang['DISPLAY_PUBLISHER_TITLE'] = 'Bücher vom Verlag ';
$lang['DISPLAY_PUBLISHER_TITLE_SUFFIX'] = '';
$lang['DISPLAY_PUBLISHER_OWN'] = 'In deiner Sammlung gibt es ';
$lang['DISPLAY_PUBLISHER_PUBLISHEDBY'] = ', verlegt von ';
$lang['DISPLAY_PUBLISHER_SUFFIX'] = '.';

// display year

$lang['DISPLAY_YEAR_TITLE'] = 'Bücher aus dem Jahr ';
$lang['DISPLAY_YEAR_TITLE_SUFFIX'] = '';
$lang['DISPLAY_YEAR_OWN'] = 'Du hast ';
$lang['DISPLAY_YEAR_PUBLISHEDIN'] = ' aus dem Jahr ';
$lang['DISPLAY_YEAR_SUFFIX'] = '.';

// display original title

$lang['DISPLAY_O_TITLE_TITLE'] = 'Bücher mit dem Originaltitel '; 
$lang['DISPLAY_O_TITLE_TITLE_SUFFIX'] = '';
$lang['DISPLAY_O_TITLE_OWN'] = 'Du hast ';
$lang['DISPLAY_O_TITLE_PUBLISHEDIN'] = ' mit dem Originaltitel"'; // 
$lang['DISPLAY_O_TITLE_SUFFIX'] = '".';

// display Language

$lang['DISPLAY_LANGUAGE_TITLE'] = 'Bücher auf ';
$lang['DISPLAY_LANGUAGE_TITLE_SUFFIX'] = ' ';
$lang['DISPLAY_LANGUAGE_OWN'] = 'Du hast ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' auf ';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = '.';

// display series

$lang['DISPLAY_SERIES_TITLE'] = 'Bücher in der Serie/Reihe ';
$lang['DISPLAY_SERIES_TITLE_SUFFIX'] = '';
$lang['DISPLAY_LANGUAGE_OWN'] = 'Du hast ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' aus der Sprache "';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = '".';

$lang['VOLUME_PREFIX'] = 'Band/Nummer ';
$lang['VOLUME_SUFFIX'] = '';
$lang['VOLUME'] = 'Band/Nummer';

// display ebooks

$lang['DISPLAY_EBOOK_TITLE'] = 'E-Books';
$lang['DISPLAY_EBOOK_PREFIX'] = 'Du hast ';
$lang['DISPLAY_EBOOK_SUFFIX'] = ' in deiner Sammlung.';

// edit item

$lang['EDIT_TITLE'] = 'Eintrag bearbeiten';
$lang['EDIT_SAVEBUTTON'] = 'Speichern';
$lang['EDIT_EBOOK_CURRENTFILE'] = 'Aktuelle E-Book-Datei';
$lang['EDIT_EBOOK_NOCURRENTFILE'] = 'Keine Datei.';
$lang['EDIT_EBOOK_ADDNEWFILE'] = 'Neue E-Book-Datei hinzufügen';
$lang['MODIFIED_SUCCESS'] = 'Eintrag erfolgreich geändert. ';
$lang['MODIFIED_SUCCESS_REDIRECT'] = 'Zurück zum Eintrag';
// for form labels, see "add new item" strings

// find on Moly.hu

$lang['FIND_MOLY_TITLE'] = 'Auf moly.hu suchen';
$lang['FIND_MOLY_API_INSTRUCTIONS'] = '
<p>Anscheinend hast du die Moly API noch nicht konfiguriert.</p>
<p>Um die API zu nutzen, musst du einen Moly-API-Key erstellen:</p>
<ul class="moly_list">
<li>Klicke <a href="https://moly.hu">Moly.hu</a>, registriere dich und logge dich ein.</li>
<li>Gehe zu Infó &rarr; API und gib dort deine Katalog-URL ein, um einen API-Key zu erhalten.</li>
<li>Bearbeite die Datei <code>config/config.php</code> und trage unterhalb von <code>$database = "your database name";</code> aber vor <code>?></code> die folgende Zeile ein:<br /><code>$molyapi = "dein Moly-API-Key";</code></li>
<li>Speichern und fertig!</li>
</ul>
<p>Beim nächsten Besuch dieser Seite kannst du Daten von Moly importieren.</p>';
$lang['FIND_MOLY_SEARCH_INSTRUCTIONS'] = '<p>Du kannst nach der ISBN (International Standard Book Number) des Buchs sucuhen. Die ISBN findest du meist im Impressum oder unter dem Barcode des Buchs.</p>
	<p>Das Import-Script sucht nach der ISBN auf moly.hu und wenn das Buch vorhanden ist, versucht er es zu importieren.</p>';
$lang['FIND_MOLY_SEARCHBUTTON'] = 'Suchen';

// genres' list

$lang['GENRES_TITLE'] = 'Liste von Genres';

// importing an item

$lang['IMPORT_TITLE'] = 'Eintrag importieren';
$lang['IMPORT_NOTFOUND'] = ' Das gesuchte Buch konnte auf Moly.hu nicht gefunden werden. Bitte füge es manuell hinzu.';
// see also "FIND_MOLY_API_INSTRUCTIONS"
$lang['IMPORT_WARNING'] = ' Bitte überprüfe deine importierten Daten, und korrigiere sie bei Bedarf, bevor du speicherst.';
// for form labels, see "add new item" strings

// browse entire collection (index.php and page.php)

$lang['INDEX_TITLE'] = 'Alle deine Bücher';
$lang['INDEX_PAGINATION_PREV'] = 'Vorherige Seite';
$lang['INDEX_PAGINATION_NEXT'] = 'Nächste Seite';

// publishers' list

$lang['PUBLISHERS_TITLE'] = 'Verlagsliste';

// lists in general

$lang['LIST_COUNT_GENRE_PREFIX'] = 'Deine Sammlung hat Einträge der folgenden ';
$lang['LIST_COUNT_AUTHOR_PREFIX'] = 'Deine Sammlung enthält Einträge der folgenden ';
$lang['LIST_COUNT_PUBLISHER_PREFIX'] = 'Deine Sammlung enthält Einträge der folgenden ';
$lang['LIST_COUNT_SUFFIX'] = ':';

// search

$lang['SEARCH_TITLE'] = 'Suchergebnisse für "';
$lang['SEARCH_TITLE_SUFFIX'] = '"';
$lang['SFIELD_TITLE'] = ' in Titel';
$lang['SFIELD_AUTHOR'] = ' in Autor*in';
$lang['SFIELD_PUBLISH'] = ' in Verlagsdaten';
$lang['SFIELD_ISBN'] = ' in ISBN';
$lang['SFIELD_GENRE'] = ' in Genre';
$lang['SFIELD_LANGUAGE'] = ' als Sprache'; // ?
$lang['SFIELD_DESCRIPTION'] = ' in Beschreibung';
$lang['SFIELD_SERIES'] = ' im Serien/Reihentitel';
$lang['SFIELD_LOCATION'] = ' am Aufbewahrungsort';
$lang['SFIELD_LENT'] = ' in Verleihdaten';
$lang['SFIELD_ALL'] = ' in allen Feldern';
$lang['SEARCH_REASULTCOUNT_PREFIX'] = 'Es gibt ';
$lang['SEARCH_REASULTCOUNT_SINGULAR_SUFFIX'] = ' Ergebnis für deine Suche.';
$lang['SEARCH_REASULTCOUNT_PLURAL_SUFFIX'] = ' Ergebnisse für deine Suche.';
$lang['SEARCH_NORESULTS'] = 'Keine Ergebniss.';

// collection

$lang['COLLECTION_PREFIX'] = 'Es ';
$lang['COLLECTION_MIDDLE'] = ' in deiner Sammlung. ';
$lang['COLLECTION_SUFFIX'] = ':';
// Syntax: prefix - verb sin/plu - item sin/plu - middle - item sin/plu - suffix
// e.g. There are 5 items in in your collection. Now showing items 1 - 5.

// result table headers

$lang['TABLE_AUTHOR'] = 'Autor*in';
$lang['TABLE_TITLE'] = 'Titel';
$lang['TABLE_PUBLISHER'] = 'Verlag';
$lang['TABLE_YEAR'] = 'Jahr';
$lang['TABLE_GENRE'] = 'Genre';
$lang['TABLE_LENT'] = 'Verliehen';

// random link

$lang['RANDOM_TITLE'] = 'Zufälliges Buch';

// help page

$lang['HELP_TITLE'] = 'Hilfe';
$lang['HELP_UPGRADE_TITLE'] = 'Catalog aktualisieren (Upgrade)';
$lang['HELP_UPGRADE_CONTENT'] = '<p>Ein Upgrade sollte meistens kurz und schmerzlos sein: Normalerweise überschreibst du die vorhandenen Dateien deiner Installation (<strong>mit Ausnahme des <code>config/</code>-Verzeichnisses</strong> &ndash; im Idealfall fassen wir diese Dateien niemals an). Mit neuen Versionen versuche ich immer, rückwärtskompatibel zu bleiben.</p>
<p>Falls eine neue Version mehr Änderungen verlangt (z.B. Änderungen in der Datenbankstruktur), packe ich ein Upgrade-Script hinzu, das alle notwendigen Änderungen für dich vornimmt. Bitte lies immer die Versionshinweise, bevor du ein Upgrade durchführst.</p>
<p>Ansonsten gibt es nur die eine Regel: vor dem Upgrade <strong>immer</strong> ein Backup der Datenbank und des <code>config/</code>-Verzeichnisses machen – nur für den Fall der Fälle …</p>';

$lang['HELP_SEARCH_TITLE'] = 'Einfache Suche und Präfix-Suche';
$lang['HELP_SEARCH_CONTENT'] = '<p>Um eine einfache Suche auszuführen, trage einfach den gesuchten Begriff ins Suchfeld ein. Catalog durchsucht alle Felder nach dem gesuchten Begriff und gibt dir eine Ergebnisliste zurück.</p>
<p>Mit der Präfix-Suche kannst du deine Suche auf ein Feld eingrenzen. Das hilft dir dabei, wenn du etwa nach allen Büchern am Aufbewahrungsort „Lokal“ suchen willst: Eine einfache Suche nach „Lokal“ findet auch Bücher mit dem Titel „Lokalbahnen in der Schweiz“, oder vom „Lokalverlag“ etc.</p>
<p>Mit Eingabe eines Präfixes kannst du die Suche eingrenzen. Folgende Präfixe stehen zur Verfügung:</p>
<ul class="help">
<li><strong><code>title: [suchbegriff]</code></strong>: Mit <code>title: Lokal</code>, gibt dir die Catalog-Suche das Ergebnis „Lokalbahnen in der Schweiz“, aber nicht die Bücher am Aufbewahrungsort „Lokal“ oder vom „Lokalverlag“ zurück;</li>
<li><strong><code>author: [suchbegriff]</code></strong>: mit <code>author: Schmidt</code> gibt dir die Suche alle Bücher von Johanna Schmidt oder Robert Schmidt zurück, aber nicht den Titel „Schmidtheim in der Eifel“;</li>
<li><strong><code>publish: [suchbegriff]</code></strong>: Dieses Präfix sucht 2 Felder: Verlag und Erscheinungsjahr. Mit <code>publish: lokal</code> findet die Catalog-Suche alle Bücher vom „Lokalverlag“, aber nicht die Bücher am Aufbewahrungsort „Lokal“ oder mit dem Titel „Lokalbahnen in der Schweiz“. Wenn du <code>publish: 199</code> eingibst, bekommst du als Ergebnis alle Bücher, die in den 1990ern veröffentlicht wurden, aber nicht solche mit "199" in der ISBN;</li>
<li><strong><code>isbn: [suchbegriff]</code></strong>: mit <code>isbn: 199</code> im Suchfeld gibt die Suche alle Einträge zurück, die "199" in ihrer ISBN haben, aber nicht die Bücher mit einem Veröffentlichungsjahr aus den 1990ern;</li>
<li><strong><code>genre: [suchbegriff]</code></strong>: Mit einer Suche nach <code>genre: lokal</code> bekommst du alle Bücher mit dem Schlagwort „lokal“ im Feld „Genre“ zurück, aber nicht den Titel „Lokalbahnen in der Schweiz“ oder vom „Lokalverlag“;</li>
<li><strong><code>lang: [suchbegriff]</code></strong>: eine Suche mit <code>lang: deutsch</code> findet alle Bücher auf Deutsch, nicht jedoch den Eintrag „Gitta Deutsch: An einem Tag im Februar“;</li>
<li><strong><code>description: [suchbegriff]</code></strong>: eine Suche mit <code>description: Johanna Schmidt</code> ist hilfreich, wenn du das Beschreibungsfeld gut pflegst: Vielleicht mit dem Klappentext oder der Handlungs eines Buches oder mit dem Inhaltsverzeichnis, so dass du zum Beispiel auch Autor*innen von Aufsätzen oder Figuren aus einem Roman wiederfindest;</li>
<li><strong><code>series: [suchbegriff]</code></strong>: mit der Suche <code>series: Lokalbahnen</code> findest du die Buchserie „Lokalbahnen in Europa“, nicht jedoch „Lokalbahnen in der Schweiz“ – es sei denn, dieser Titel ist auch Teil der Serie.</li>
<li><strong><code>location: [suchbegriff]</code></strong>: wenn du<code>location: lokal</code> suchst, bringt dir das Ergebnis alle Bücher am Aufbewahrungsort „Lokal“, nicht jedoch die vom „Lokalverlag“ oder den Titel „Lokalbahnen in der Schweiz“;</li>
<li><strong><code>lent: [suchbegriff]</code></strong>: sucht in zwei Feldern: „Verliehen an“ und „Verleihdatum“. Wenn du <code>lent: Paul Schmidt</code> eingibst, bekommst du alle Bücher, die du deinem Kumpel Paul geliehen hast, nicht aber die Bücher von „Paul Schmidt“. Wenn du nach <code>lent: 2019</code> suchst, bekommst du als Ergebnis alle Bücher, die du 2019 verliehen hast (wird übrigens Zeit, die mal zurückzugeben …).</li>
</ul>';

$lang['HELP_TRANSLATE_TITLE'] = 'Catalog übersetzen';
$lang['HELP_TRANSLATE_CONTENT'] = '<p>
Um Catalog zu übersetzen, brauchst du nur den Texteditor deiner Wahl (nein, <i>nicht</i> Microsoft Word oder LibreOffice Writer, sondern Notepad, Notepad++, Gedit etc.):</p>
<ul class="help">
<li>Öffne <code>languages/en-US.php</code> in deinem Texteditor und speichere es sofort als <code>xx-XX.php</code>, wobei <code>xx-XX</code> der Sprachcode für die neue Sprache ist (z.B. <code>pt-BR</code> für brasilianisches Portugiesisch, oder <code>de-CH</code> für Schweizerdeutsch);</li>
<li>In der Sprachdatei wird folgende Syntax verwendet:<br />
<code>$lang[\'REFERENCE\'] = \'irgendein Text\';</code><br />
Für die Übersetzung bearbeite die Teile mit „irgendein Text“. Wenn es HTML-Tags im Text gibt (z.B.<code>&lt;p&gt;</code> und <code>&lt;/p&gt;</code>), lass sie bitte unverändert.</li>
<li>Wenn du fertig mit der Übersetzung bist, lege deine neue Sprachdatei im  <code>languages/</code>-Verzeichnis ab, z.B. <code>languages/pt-BR.php</code>; </li>
<li>Jetzt wechsle in das <code>config/</code>-Verzeichnis und öffne die Datei  <code>config/config.php</code>. In der Zeile mit dem Sprachcode: <br />
<code>$lang = "en-US";</code> ersetze <code>en-US</code> mit dem Code deiner neu erstellten Sprachdatei. Die veränderte Zeile sollte in etwa so aussehen:<br />
<code>$lang = "pt-BR";</code></li>
<li>Abspeichern, fertig – Catalog spricht jetzt deine Sprache!</li>
</ul>
</p><strong>Pro-Tipp:</strong> vergiss nicht, deine Übersetzung als Pull Request <a href="https://github.com/psztrnk/catalog" target="_blank">auf GitHub</a> zu übertragen, so dass ich sie in das Installationspaket von Catalog aufnehmen kann.</p>';

$lang['HELP_CONTRIBUTE_TITLE'] = 'Mitmachen bei Catalog';
$lang['HELP_CONTRIBUTE_CONTENT'] = '<p>Jeder Beitrg ist willkommen! Bitte nutze <a href="https://github.com/psztrnk/catalog" target="_blank">GitHub</a> für deine Fehlermeldungen, Featurewünsche oder deinen Programmcode.</p>';

$lang['HELP_DONATE_TITLE'] = 'Spenden für Catalog';
$lang['HELP_DONATE_CONTENT'] = '<p>Ich freue mich über jede Spende für die Entwicklung von Catalog! Du kannst über Paypal spenden. Viele Entwickler*innen sagen, dass du ihnen mit deiner Spende einen Kaffee oder ein Bier spendierst. Ich gebe alle Spenden für &ndash; Überraschung! &ndash; Bücher aus.</p>
<p>Um zu spenden, klicke den folgenden Button und trage einen Betrag deiner Wahl ein. <strong>Danke im Voraus!</strong></p>';

$lang['HELP_CATALOG_CREDITS'] = '<p>Catalog wurde von Adam Paszternak (psztrnk) entwickelt und als Open Source Software unter den Bedingungen der <a href="https://github.com/psztrnk/catalog/blob/master/LICENSE" target="_blank">MIT License</a> veröffentlicht.</p>';

$lang['HELP_MOLY_TITLE'] = 'Moly-API nutzen';
$lang['HELP_MOLY_API_INSTRUCTIONS'] = '
<p>Um die API zu nutzen, musst du einen Moly-API-Key registrieren:</p>
<ul class="moly_list">
<li>Klicke <a href="https://moly.hu">Moly.hu</a>, registriere dich und logge dich ein.</li>
<li>Gehe zu Infó &rarr; API und gib dort deine Katalog-URL ein, um einen API-Key zu erhalten.</li>
<li>Bearbeite die Datei <code>config/config.php</code> und trage unterhalb von <code>$database = "your database name";</code> aber vor <code>?></code> die folgende Zeile ein:<br /><code>$molyapi = "dein Moly-API-Key";</code></li>
<li>Speichern und fertig!</li>
</ul>
<p>Jetzt kannst du Daten von Moly importieren.</p>';

?>
