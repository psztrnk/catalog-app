<?php
$lang = array();

// singulars and plurals

$lang['BOOK_SINGULAR'] = 'könyv';
$lang['BOOK_PLURAL'] = 'könyv';

$lang['EBOOK_SINGULAR'] = 'e-könyv';
$lang['EBOOK_PLURAL'] = 'e-könyv';

$lang['ITEM_SINGULAR'] = '';
$lang['ITEM_PLURAL'] = '';

$lang['VERB_SINGULAR'] = '';
$lang['VERB_PLURAL'] = '';

$lang['GENRE_SINGULAR'] = 'műfaj-címke';
$lang['GENRE_PLURAL'] = 'műfaj-címke';

$lang['AUTHOR_SINGULAR'] = 'szerző';
$lang['AUTHOR_PLURAL'] = 'szerző';

$lang['PUBLISHER_SINGULAR'] = 'kiadó';
$lang['PUBLISHER_PLURAL'] = 'kiadó';

// login

$lang['LOGIN_ERROR'] = '<p>Hiba: nem megfelelő felhasználónév/jelszó.</p>';
$lang['LOGIN_WELCOME'] = 'Szervusz.';
$lang['LOGIN_NOTICE'] = 'Kérlek jelentkezz be a Catalog használatához.';
$lang['LOGIN_USER'] = 'Felhasználónév';
$lang['LOGIN_PASSWORD'] = 'Jelszó';
$lang['LOGIN_BUTTON'] = 'Belépés';

// menu

$lang['MENU_BROWSE'] = 'Könyvek';
$lang['MENU_ADD'] = 'Új';
$lang['MENU_IMPORT'] = 'Import';
$lang['MENU_AUTHORS'] = 'Szerzők';
$lang['MENU_PUBLISHERS'] = 'Kiadók';
$lang['MENU_GENRES'] = 'Műfajok';
$lang['MENU_LENT'] = 'Kölcsönben';
$lang['MENU_EBOOKS'] = 'E-könyvek';
$lang['MENU_LOGOUT'] = 'Kilépés';

// searchform

$lang['SEARCHFORM_SUBMIT'] = 'Keresés a gyűjteményben';

// add new item

$lang['ADD_TITLE'] = 'Új könyv hozzáadása';
$lang['ADDED_SUCCESS'] = 'Könyv sikeresen hozzáadva a gyűjteményhez. ';
$lang['ADDED_SUCCESS_REDIRECT'] = 'Könyv adatlapjának megtekintése';
$lang['ADD_AUTHOR_LABEL'] = 'Szerző<span>(k) &ndash; pontosvesszővel (;) elválasztva</span>';
$lang['ADD_TITLE_LABEL'] = 'Cím';
$lang['ADD_O_TITLE_LABEL'] = 'Eredeti cím <span> &ndash; hagyd üresen, ha azonos a Címmel</span>';
$lang['ADD_ISBN_LABEL'] = 'ISBN';
$lang['ADD_PUBLISHER_LABEL'] = 'Kiadó';
$lang['ADD_YEAR_LABEL'] = 'Kiadás éve';
$lang['ADD_LANGUAGE_LABEL'] = 'Nyelv';
$lang['ADD_GENRE_LABEL'] = 'Műfaj<span>(ok) &ndash; vesszővel (,) elválasztva</span>';
$lang['ADD_COVER_LABEL'] = 'Borítókép URL';
$lang['ADD_DESCRIPTION_LABEL'] = 'Ismertető';
$lang['ADD_SERIES_LABEL'] = 'A könyv az alábbi sorozat része';
$lang['ADD_VOLUME_LABEL'] = 'Kötet száma<span> &ndash; csak számok</span>';
$lang['ADD_LOCATION_LABEL'] = 'Könyv helye <span> Szoba, polc, sor stb.</span>';
$lang['ADD_IFLENT_LABEL'] = 'Ezt a könyvet kölcsönadtam';
$lang['ADD_LENTTO_LABEL'] = 'Neki adtam kölcsön';
$lang['ADD_LENTAT_LABEL'] = 'Ekkor adtam kölcsön';
$lang['ADD_ADDBUTTON'] = 'Könyv hozzáadása';
$lang['ADD_CANCELBUTTON'] = 'Mégsem';
$lang['ADD_IFEBOOK_LABEL'] = 'Ez egy E-könyv';
$lang['ADD_EBOOK_LABEL'] = 'E-könyv feltöltése <span>(nem kötelező)</span>';

// authors' list

$lang['AUTHORS_TITLE'] = 'Szerzők listája';

// delete an item

$lang['DELETE_TITLE'] = 'Könyv törlése';
$lang['DELETE_SUCCESS'] = 'Könyv sikeresen törölve. ';
$lang['DELETE_REDIRECT'] = 'Vissza a gyűjteményhez';
$lang['DELETE_WARNING'] = '<strong>Figyelem!</strong> Éppen <strong>törölni</strong> készülsz az adatbázisból az alábbi könyvet:';
$lang['DELETE_AUTHOR_REF'] = ', szerzője ';
$lang['DELETE_CONFIRM'] = 'Ha megteszed, nincs visszaút. Tényleg törölni szeretnéd a könyvet?';
$lang['DELETE_DELETEBUTTON'] = 'Igen, töröljük';
$lang['DELETE_CANCELBUTTON'] = 'Nem, mégsem';

// display items

$lang['DISPLAY_AUTHOR_LABEL'] = 'Szerző';
$lang['DISPLAY_ISBN_LABEL'] = 'ISBN szám';
$lang['DISPLAY_PUBLISHER_LABEL'] = 'Kiadó';
$lang['DISPLAY_YEAR_LABEL'] = 'Kiadás éve';
$lang['DISPLAY_LANGUAGE_LABEL'] = 'Nyelv';
$lang['DISPLAY_O_TITLE_LABEL'] = 'Eredeti cím';
$lang['DISPLAY_GENRE_LABEL'] = 'Műfaj';
$lang['DISPLAY_DESCRIPTION_LABEL'] = 'Ismertető';
$lang['DISPLAY_SERIES_LABEL'] = 'Ez a könyv egy sorozat része';
$lang['DISPLAY_LOCATION_LABEL'] = 'Könyv helye';
$lang['DISPLAY_LENT_NOTE'] = 'Ezt a könyvet kölcsönadtad';
$lang['DISPLAY_LENTTO_REF'] = ' neki: ';
$lang['DISPLAY_LENTAT_REF'] = ', ekkor: ';
$lang['DISPLAY_EBOOK_TITLE_PREFIX'] = 'E-könyv: ';

// display author

$lang['DISPLAY_AUTHOR_TITLE'] = '';
$lang['DISPLAY_AUTHOR_TITLE_SUFFIX'] = ' könyvei';
$lang['DISPLAY_AUTHOR_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_AUTHOR_AUTHORSHIP'] = ' van, melynek szerzője ';

// display genre

$lang['DISPLAY_GENRE_TITLE'] = ' könyvek';
$lang['DISPLAY_GENRE_OWN'] = 'Összesen ';
$lang['DISPLAY_GENRE_SUFFIX'] = ' van a gyűjteményedben.';

// display lent books

$lang['DISPLAY_LENT_TITLE'] = 'Kölcsönadott könyveid';
$lang['DISPLAY_LENT_PREFIX'] = 'Összesen ';
$lang['DISPLAY_LENT_SUFFIX'] = 'et adtál kölcsön.';

// display publisher

$lang['DISPLAY_PUBLISHER_TITLE'] = 'A(z) ';
$lang['DISPLAY_PUBLISHER_TITLE_SUFFIX'] = ' által kiadott könyveid';
$lang['DISPLAY_PUBLISHER_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_PUBLISHER_PUBLISHEDBY'] = ' van, melyet a(z) ';
$lang['DISPLAY_PUBLISHER_SUFFIX'] = ' adott ki.';

// display year

$lang['DISPLAY_YEAR_TITLE'] = '';
$lang['DISPLAY_YEAR_TITLE_SUFFIX'] = ' évben kiadott könyvek';
$lang['DISPLAY_YEAR_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_YEAR_PUBLISHEDIN'] = ' van, amelyet ';
$lang['DISPLAY_YEAR_SUFFIX'] = ' évben adtak ki.';

// display original title

$lang['DISPLAY_O_TITLE_TITLE'] = 'Könyvek, melyek eredeti címe ';
$lang['DISPLAY_O_TITLE_TITLE_SUFFIX'] = '';
$lang['DISPLAY_O_TITLE_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_O_TITLE_PUBLISHEDIN'] = ' van, amelynek eredeti címe "';
$lang['DISPLAY_O_TITLE_SUFFIX'] = '".';

// display Language

$lang['DISPLAY_LANGUAGE_TITLE'] = '';
$lang['DISPLAY_LANGUAGE_TITLE_SUFFIX'] = ' nyelvű könyvek';
$lang['DISPLAY_LANGUAGE_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' van, amelyet ';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = ' nyelven írtak.';

// display series

$lang['DISPLAY_SERIES_TITLE'] = 'Könyvek ebben a sorozatban: ';
$lang['DISPLAY_SERIES_TITLE_SUFFIX'] = '';
$lang['DISPLAY_LANGUAGE_OWN'] = 'A gyűjteményedben ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' van, amely része a(z) "';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = '" sorozatnak.';

$lang['VOLUME_PREFIX'] = '';
$lang['VOLUME_SUFFIX'] = '. kötet';
$lang['VOLUME'] = 'Kötet';

// display ebooks

$lang['DISPLAY_EBOOK_TITLE'] = 'E-könyvek';
$lang['DISPLAY_EBOOK_PREFIX'] = 'Összesen ';
$lang['DISPLAY_EBOOK_SUFFIX'] = ' van a gyűjteményedben.';

// edit item

$lang['EDIT_TITLE'] = 'Könyv szerkesztése';
$lang['EDIT_SAVEBUTTON'] = 'Mentés';
$lang['EDIT_EBOOK_CURRENTFILE'] = 'Jelenlegi e-könyv fájl';
$lang['EDIT_EBOOK_NOCURRENTFILE'] = 'Nincs fájl.';
$lang['EDIT_EBOOK_ADDNEWFILE'] = 'Új e-könyv fájl feltöltése';
$lang['MODIFIED_SUCCESS'] = 'Köny adatai sikeresen módosítva. ';
$lang['MODIFIED_SUCCESS_REDIRECT'] = 'Tovább a könyv adatlapjához';
// for form labels, see "add new item" strings

// find on Moly.hu

$lang['FIND_MOLY_TITLE'] = 'Könyv keresése a moly.hun';
$lang['FIND_MOLY_API_INSTRUCTIONS'] = '
<p>Úgy tűnik, még nem állítottad be a Moly API-t.</p>
<p>A Moly API-jának használatához szükséged lesz egy API-kulcsra:</p>
<ul class="moly_list">
<li>Látogasd meg a <a href="https://moly.hu">Moly.hu</a> oldalt és regisztrálj vagy jelentkezz be.</li>
<li>Az Infó &rarr; API menüpont alatt add meg a Catalogod elérési útját és kérj egy API-kulcsot.</li>
<li>Nyisd meg szerkesztésre a Catalog <code>config/config.php</code> fájlját és a <code>$database = "az adatbázisod neve";</code> sor alá, de még a <code>?></code> sor fölé szúrd be a következőt:<br /><code>$molyapi = "a Moly API-kulcsod";</code></li>
<li>Mentsd el a fájlt és készen is vagy.</li>
</ul>
<p>Ezután már tudsz könyvadatokat importálni a Molyról.</p>';
$lang['FIND_MOLY_SEARCH_INSTRUCTIONS'] = '<p>Az ISBN (International Standard Book Number) alapján kereshetsz a könyvre. Az ISBN-t általában a könyv kolofonjában, vagy a vonalkód alatt találod.</p>
	<p>Az importáló lekeresi az ISBN-t a Moly.hun, és ha megtalálja, megpróbálja átemelni a könyv adatait.</p>';
$lang['FIND_MOLY_SEARCHBUTTON'] = 'Könyv keresése';

// genres' list

$lang['GENRES_TITLE'] = 'Műfajok listája';

// importing an item

$lang['IMPORT_TITLE'] = 'Könyvadatok importálása';
$lang['IMPORT_NOTFOUND'] = ' Az általad keresett könyv nem található meg a Molyon, kérlek add hozzá a gyűjteményedhez manuálisan.';
// see also "FIND_MOLY_API_INSTRUCTIONS"
$lang['IMPORT_WARNING'] = ' Kérlek ellenőrizd és ha szükséges, szerkeszd az importált adatokat mentés előtt.';
// for form labels, see "add new item" strings

// browse entire collection (index.php and page.php)

$lang['INDEX_TITLE'] = 'Teljes gyűjtemény böngészése';
$lang['INDEX_PAGINATION_PREV'] = 'Előző oldal';
$lang['INDEX_PAGINATION_NEXT'] = 'Következő oldal';

// publishers' list

$lang['PUBLISHERS_TITLE'] = 'Kiadók listája';

// lists in general

$lang['LIST_COUNT_GENRE_PREFIX'] = 'A gyűjteményedben összesen ';
$lang['LIST_COUNT_AUTHOR_PREFIX'] = 'A gyűjteményedben összesen ';
$lang['LIST_COUNT_PUBLISHER_PREFIX'] = 'A gyűjteményedben összesen ';
$lang['LIST_COUNT_SUFFIX'] = ' található.';

// search

$lang['SEARCH_TITLE'] = 'Erre kerestél: "';
$lang['SEARCH_TITLE_SUFFIX'] = '"';
$lang['SFIELD_TITLE'] = ' a címadatokban';
$lang['SFIELD_AUTHOR'] = ' a szerzőségi adatokban';
$lang['SFIELD_PUBLISH'] = ' a kiadási adatokban';
$lang['SFIELD_ISBN'] = ' az ISBN számban';
$lang['SFIELD_GENRE'] = ' a műfaji adatokban';
$lang['SFIELD_LANGUAGE'] = ', mint nyelv';
$lang['SFIELD_DESCRIPTION'] = ' az ismeretetőkben';
$lang['SFIELD_SERIES'] = ' a sorozatok között';
$lang['SFIELD_LOCATION'] = ' a könyv helyeként';
$lang['SFIELD_LENT'] = ' a kölcsönzési adatokban';
$lang['SFIELD_ALL'] = ' minden mezőben';
$lang['SEARCH_REASULTCOUNT_PREFIX'] = 'Összesen ';
$lang['SEARCH_REASULTCOUNT_SINGULAR_SUFFIX'] = ' találat van a keresésre.';
$lang['SEARCH_REASULTCOUNT_PLURAL_SUFFIX'] = ' találat van a keresésre.';
$lang['SEARCH_NORESULTS'] = 'Nincs találat.';

// collection

$lang['COLLECTION_PREFIX'] = 'Összesen ';
$lang['COLLECTION_MIDDLE'] = ' könyv van a gyűjteményedben. Mutatott könyvek: ';
$lang['COLLECTION_SUFFIX'] = '.';
// Syntax: prefix - verb sin/plu - item sin/plu - middle - item sin/plu - suffix
// Eg. There are 5 items in in your collection. Now showing items 1 - 5.

// result table headers

$lang['TABLE_AUTHOR'] = 'Szerző';
$lang['TABLE_TITLE'] = 'Cím';
$lang['TABLE_PUBLISHER'] = 'Kiadó';
$lang['TABLE_YEAR'] = 'Év';
$lang['TABLE_GENRE'] = 'Műfaj';
$lang['TABLE_LENT'] = 'Kölcsön';

// random link

$lang['RANDOM_TITLE'] = 'Könyv véletlenszerűen';

// help page

$lang['HELP_TITLE'] = 'Súgó';
$lang['HELP_UPGRADE_TITLE'] = 'A Catalog frissítése';
$lang['HELP_UPGRADE_CONTENT'] = '<p>A Catalog frissítése legtöbbször egyszerű és fájdalommentes folyamat: általában csak a fájlok felülírása szükséges (<strong>kivéve a <code>config/</code> könyvtár és tartalma</strong> &ndash; normális esetben a frissítések ezeket nem érintik). Az új verziók fejlesztésekor arra törekszem, hogy visszafelé is kompatibilisek legyenek.</p>
<p>Ha egy frissítéshez ennél többre lenne szükség (például az adatbázis szerkezetének módosítására), mellékelni fogok egy szkriptet, ami végrehajtja ezeket a módosításokat helyetted. Kérlek mindig olvasd át az új verzió kiadási megjegyzéseit a frissítés előtt!</p>
<p>A főszabály ez legyen: frissítés előtt mindig készíts biztonsági mentést az adatbázisról és a <code>config/</code> mappáról &ndash; a biztonság kedvéért.</p>';

$lang['HELP_SEARCH_TITLE'] = 'Egyszerű és okos keresés';
$lang['HELP_SEARCH_CONTENT'] = '<p>Egyszerű kereséshez írd be a keresett szót vagy kifejezést a keresőmezőbe. A Catalog ilyenkor a könyvadatok összes mezőjében keres és megjeleníti a találatokat.</p>
<p>Okos keresésnek nevezzük, amikor a keresést a könyvadatok egy mezőjére szűkíted. Ez akkor lehet hasznos, amikor például minden olyan könyvet listázni akarsz, amelyet az irodában tartasz &ndash; az "iroda" kulcsszóra indított egyszerű keresés visszaadná találatként az "Iroda a lakásban" című könyvet és az "Iroda Könyvkiadó" által kiadott műveket is.</p>
<p>Okos keresést a keresőszó elé beírt előtaggal hajthatsz végre. A használható előtagok:</p>
<ul class="help">
<li><strong><code>title: [keresőszó]</code></strong>: a <code>title: iroda</code> kereső-kifejezésre a Catalog megjeleníti az "Iroda a lakásban" című könyvet, de nem listázza az irodádban tartott könyveidet, sem az "Iroda Könyvkiadó" által kiadott műveket;</li>
<li><strong><code>author: [keresőszó]</code></strong>: az <code>author: kovács</code> kereső-kifejezésre a Catalog listázza majd a Kovács vezetéknevű szerzők műveit, de nem jelenik majd meg "A woottoni kovácsmester" című könyv;</li>
<li><strong><code>publish: [keresőszó]</code></strong>: két mezőben keres: a kiadók és a kiadás évei között. A <code>publish: iroda</code> kereső-kifejezésre a Catalog kiadja az "Iroda Könyvkiadó" által kiadott műveket, de nem listázza sem az irodádban tartott könyveidet, sem az "Iroda a lakásban" című művet. A <code>publish: 199</code> kifejezéssel lekeresheted az 1990-es években kiadott könyveidet, de nem keverednek a találatok közé azok a művek, melyeknek az ISBN-jében szerepel a "199";</li>
<li><strong><code>isbn: [keresőszó]</code></strong>: az <code>isbn: 199</code> kifejezésre indított kereséskor a Catalog megjeleníti azokat a műveket, melyeknek az ISBN-jében szerepel a "199", de nem listázza azokat, melyeket az 1990-es években adtak ki;</li>
<li><strong><code>genre: [keresőszó]</code></strong>: a <code>genre: iroda</code> kifejezésre keresve a Catalog azokat a könyveket jeleníti meg, amelynek műfaj-címkéi között szerepel az "iroda" szó, nem listázza viszont sem az irodádban tartott könyveidet, sem pedig az "Iroda Könyvkiadó" által kiadott műveket;</li>
<li><strong><code>lang: [keresőszó]</code></strong>: a <code>lank: angol</code> kifejezésre keresve a Catalog azokat a könyveket jeleníti meg, amelynek nyelvi adataként szerepel az "angol", nem listázza viszont "Az angol beteg" című (magyar nyelvű) könyvet;</li>
<li><strong><code>description: [keresőszó]</code></strong>: a <code>description: kovács alajos</code> kereső-kifejezés akkor lehet nagyon hasznos, ha például arra emlékszel, hogy egy regény főszereplőjének neve "Kovács Alajos", viszont nem akarod megjeleníteni a találatok között azokat a műveket, melyeknek a szerzőjét hívják így;</li>
<li><strong><code>series: [keresőszó]</code></strong>: a <code>series: példa</code> kifejezésre keresve a Catalog megjeleníti a "Példasorozat" köteteit, de a "Példabeszédek könyve" című művet nem (hacsak nem része a Példasorozatnak);</li>
<li><strong><code>location: [keresőszó]</code></strong>: a <code>location: iroda</code> kereső-kifejezésre válaszul a Catalog kilistázza az irodádban tartott könyveid, a listában azonban nem fognak megjelenni az  "Iroda Könyvkiadó" által kiadott művek, vagy az "Iroda a lakásban";</li>
<li><strong><code>lent: [keresőszó]</code></strong>: két mezőben keres: a kölcsönvevő személyek és a kölcsönadás dátumai között. A <code>lent: kovács jános</code> kifejezésre a Catalog listáz minden olyan könyvet, amit Janinak adtál kölcsön, nem jelennek meg azonban a Kovács János nevű szerzők által írott művek. A <code>lent: 2016</code> kifejezésre keresve minden olyan könyv megjelenik, amelyet 2016-ban adtál kölcsön (egyébként ezeket időszerű lenne lassan visszakérni).</li>
</ul>';

$lang['HELP_TRANSLATE_TITLE'] = 'A Catalog fordítása';
$lang['HELP_TRANSLATE_CONTENT'] = '<p>A Catalog fordításához tulajdonképpen összesen egy szövegszerkesztőre van szükséged (nem, a Microsoft Word és a LibreOffice Writer nem jó, kód szerkesztésére is alkalmas programot keress, mint például a Jegyzettömb, a Notepad++, a Gedit, stb.):</p>
<ul class="help">
<li>Nyisd meg a <code>languages/hu-HU.php</code> fájlt az általad preferált szerkesztőben és rögtön mentsd is el másként, <code>xx-XX.php</code> néven, ahol az <code>xx-XX</code> az új fordítás nyelvi kódja (pl. <code>de-CH</code> svájci német esetén);</li>
<li>A fájl az alábbi struktúra alapján épül fel:<br />
<code>$lang[\'HIVATKOZÁS\'] = \'valamilyen szöveg\';</code><br />
Fordításkor a "valamilyen szöveg" részeket kell átírnod a célnyelvre. Amennyiben a szöveg HTML elemeket is tartalmaz (pl. <code>&lt;p&gt;</code> és <code>&lt;/p&gt;</code>), azokat hagyd változatlanul.</li>
<li>A fordítás végeztével így lesz egy új fájlod a <code>languages/</code> mappában, pl. <code>languages/de-CH.php</code>;</li>
<li>Most nyisd meg a <code>config/</code> mappában található <code>config/config.php</code> fájlt szerkesztésre. Ebben találsz egy ehhez hasonló sort:<br />
<code>$lang = "hu-HU";</code><br />
Írd át a <code>hu-HU</code> részt az általad készített fordítás nyelvi kódjára. Az előbbi példánál maradva tehát a módosított sornak így kell kinéznie:<br />
<code>$lang = "de-CH";</code></li>
<li>Mentsd el a fájlt és készen is vagy: a Catalog ezentúl az általad készített fordítás nyelvén szólal meg.</li>
</ul>
</p><strong>Haladóknak:</strong> ne felejts el a fordításról Pull Requestet indítani <a href="https://github.com/psztrnk/catalog" target="_blank">a GitHubon</a>, hogy hozzáadhassam az új nyelvet a Catalog telepítőjéhez is!</p>';

$lang['HELP_CONTRIBUTE_TITLE'] = 'Közreműködés a Catalog fejlesztésében';
$lang['HELP_CONTRIBUTE_CONTENT'] = '<p>A közreműködésért mindig hálás vagyok! A hibajegyeket, kéréseket és a közreműködői kódot <a href="https://github.com/psztrnk/catalog" target="_blank">a GitHubon</a> várom.</p>';

$lang['HELP_DONATE_TITLE'] = 'Adományok a Catalognak';
$lang['HELP_DONATE_CONTENT'] = '<p>Ha meghálálnád a Catalog fejlesztését, a PayPalen keresztül megteheted &ndash; minden adománynak egyformán örülök. Sok fejlesztő mondja, hogy azzal, hogy adományozol, tulajdonképpen veszel neki egy kávét vagy sört. Én minden adományt &ndash; meglepetés! &ndash; könyvre fordítok.</p>
<p>Adományozáshoz kattints az alábbi gombra és a megjelenő oldalon írd be az adományozott összeget. <strong>Előre is köszönöm!</strong></p>';

$lang['HELP_CATALOG_CREDITS'] = '<p>A Catalog nyílt forráskódú szoftver &ndash; szerzője Paszternák Ádám (psztrnk) és az <a href="https://github.com/psztrnk/catalog/blob/master/LICENSE" target="_blank">MIT Licenc</a> feltételei szerint használható.</p>';

$lang['HELP_MOLY_TITLE'] = 'A Moly API beállítása';
$lang['HELP_MOLY_API_INSTRUCTIONS'] = '
<p>A Moly API-jának használatához szükséged lesz egy API-kulcsra:</p>
<ul class="moly_list">
<li>Látogasd meg a <a href="https://moly.hu">Moly.hu</a> oldalt és regisztrálj vagy jelentkezz be.</li>
<li>Az Infó &rarr; API menüpont alatt add meg a Catalogod elérési útját és kérj egy API-kulcsot.</li>
<li>Nyisd meg szerkesztésre a Catalog <code>config/config.php</code> fájlját és a <code>$database = "az adatbázisod neve";</code> sor alá, de még a <code>?></code> sor fölé szúrd be a következőt:<br /><code>$molyapi = "a Moly API-kulcsod";</code></li>
<li>Mentsd el a fájlt és készen is vagy.</li>
</ul>
<p>Ezután már tudsz könyvadatokat importálni a Molyról.</p>';
?>
