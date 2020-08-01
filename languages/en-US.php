<?php
$lang = array();

// singulars and plurals

$lang['BOOK_SINGULAR'] = 'book';
$lang['BOOK_PLURAL'] = 'books';

$lang['EBOOK_SINGULAR'] = 'ebook';
$lang['EBOOK_PLURAL'] = 'ebooks';

$lang['ITEM_SINGULAR'] = 'item';
$lang['ITEM_PLURAL'] = 'items';

$lang['VERB_SINGULAR'] = 'is';
$lang['VERB_PLURAL'] = 'are';

$lang['GENRE_SINGULAR'] = 'genre';
$lang['GENRE_PLURAL'] = 'genres';

$lang['AUTHOR_SINGULAR'] = 'author';
$lang['AUTHOR_PLURAL'] = 'authors';

$lang['PUBLISHER_SINGULAR'] = 'publisher';
$lang['PUBLISHER_PLURAL'] = 'publishers';

// login

$lang['LOGIN_ERROR'] = '<p>Error: Invalid username/password combination.</p>';
$lang['LOGIN_WELCOME'] = 'Welcome.';
$lang['LOGIN_NOTICE'] = 'Please log in to start using Catalog.';
$lang['LOGIN_USER'] = 'Username';
$lang['LOGIN_PASSWORD'] = 'Password';
$lang['LOGIN_BUTTON'] = 'Log In';

// menu

$lang['MENU_BROWSE'] = 'Browse';
$lang['MENU_ADD'] = 'Add';
$lang['MENU_IMPORT'] = 'Import';
$lang['MENU_AUTHORS'] = 'Authors';
$lang['MENU_PUBLISHERS'] = 'Publishers';
$lang['MENU_GENRES'] = 'Genres';
$lang['MENU_LENT'] = 'Lent books';
$lang['MENU_EBOOKS'] = 'Ebooks';
$lang['MENU_LOGOUT'] = 'Logout';

// searchform

$lang['SEARCHFORM_SUBMIT'] = 'Search collection';

// add new item

$lang['ADD_TITLE'] = 'Add an item to the collection';
$lang['ADDED_SUCCESS'] = 'Item successfully added to the collection. ';
$lang['ADDED_SUCCESS_REDIRECT'] = 'You can now view the item';
$lang['ADD_AUTHOR_LABEL'] = 'Author<span>(s) &ndash; separated by semicolon (;)</span>';
$lang['ADD_TITLE_LABEL'] = 'Title';
$lang['ADD_O_TITLE_LABEL'] = 'Original Title <span> &ndash; leave empty if the same as Title</span>';
$lang['ADD_ISBN_LABEL'] = 'ISBN';
$lang['ADD_PUBLISHER_LABEL'] = 'Publisher';
$lang['ADD_YEAR_LABEL'] = 'Year Published';
$lang['ADD_LANGUAGE_LABEL'] = 'Language';
$lang['ADD_GENRE_LABEL'] = 'Genre<span>(s) &ndash; separated by comma (,)</span>';
$lang['ADD_COVER_LABEL'] = 'Cover Image URL';
$lang['ADD_DESCRIPTION_LABEL'] = 'Description';
$lang['ADD_VOLUME_LABEL'] = 'Volume<span> &ndash; numbers only</span>';
$lang['ADD_SERIES_LABEL'] = 'This book belongs to the following Series';
$lang['ADD_LOCATION_LABEL'] = 'Location <span> Room, shelf, row etc.</span>';
$lang['ADD_IFLENT_LABEL'] = 'This book is lent';
$lang['ADD_LENTTO_LABEL'] = 'Lent to';
$lang['ADD_LENTAT_LABEL'] = 'Lent at';
$lang['ADD_ADDBUTTON'] = 'Add New Item';
$lang['ADD_CANCELBUTTON'] = 'Cancel';
$lang['ADD_IFEBOOK_LABEL'] = 'This is an Ebook';
$lang['ADD_EBOOK_LABEL'] = 'Upload Ebook file <span>(optional)</span>';

// authors' list

$lang['AUTHORS_TITLE'] = 'List of authors';

// delete an item

$lang['DELETE_TITLE'] = 'Delete item';
$lang['DELETE_SUCCESS'] = 'Item deleted. ';
$lang['DELETE_REDIRECT'] = 'Go back to the collection';
$lang['DELETE_WARNING'] = '<strong>Warning!</strong> You are about to <strong>delete</strong> the following item from the database:';
$lang['DELETE_AUTHOR_REF'] = ' by ';
$lang['DELETE_CONFIRM'] = 'This action cannot be undone. Are you sure you want to delete this item?';
$lang['DELETE_DELETEBUTTON'] = 'Delete this item';
$lang['DELETE_CANCELBUTTON'] = 'Cancel deletion';

// display items

$lang['DISPLAY_AUTHOR_LABEL'] = 'Author';
$lang['DISPLAY_ISBN_LABEL'] = 'ISBN Number';
$lang['DISPLAY_PUBLISHER_LABEL'] = 'Publisher';
$lang['DISPLAY_YEAR_LABEL'] = 'Year Published';
$lang['DISPLAY_LANGUAGE_LABEL'] = 'Language';
$lang['DISPLAY_O_TITLE_LABEL'] = 'Original Title';
$lang['DISPLAY_GENRE_LABEL'] = 'Genre';
$lang['DISPLAY_DESCRIPTION_LABEL'] = 'Description';
$lang['DISPLAY_SERIES_LABEL'] = 'This book is part of a Series';
$lang['DISPLAY_LOCATION_LABEL'] = 'Location';
$lang['DISPLAY_LENT_NOTE'] = 'You\'ve lent this book';
$lang['DISPLAY_LENTTO_REF'] = ' to ';
$lang['DISPLAY_LENTAT_REF'] = ' on ';
$lang['DISPLAY_EBOOK_TITLE_PREFIX'] = 'Ebook: ';

// display author

$lang['DISPLAY_AUTHOR_TITLE'] = 'Books by ';
$lang['DISPLAY_AUTHOR_TITLE_SUFFIX'] = '';
$lang['DISPLAY_AUTHOR_OWN'] = 'You own ';
$lang['DISPLAY_AUTHOR_AUTHORSHIP'] = ' written by ';

// display genre

$lang['DISPLAY_GENRE_TITLE'] = ' books';
$lang['DISPLAY_GENRE_OWN'] = 'You have ';
$lang['DISPLAY_GENRE_SUFFIX'] = ' in your collection.';

// display lent books

$lang['DISPLAY_LENT_TITLE'] = 'Lent books';
$lang['DISPLAY_LENT_PREFIX'] = 'You\'ve lent ';
$lang['DISPLAY_LENT_SUFFIX'] = '.';

// display publisher

$lang['DISPLAY_PUBLISHER_TITLE'] = 'Books published by ';
$lang['DISPLAY_PUBLISHER_TITLE_SUFFIX'] = '';
$lang['DISPLAY_PUBLISHER_OWN'] = 'You own ';
$lang['DISPLAY_PUBLISHER_PUBLISHEDBY'] = ' published by ';
$lang['DISPLAY_PUBLISHER_SUFFIX'] = '.';

// display year

$lang['DISPLAY_YEAR_TITLE'] = 'Books published in ';
$lang['DISPLAY_YEAR_TITLE_SUFFIX'] = '';
$lang['DISPLAY_YEAR_OWN'] = 'You own ';
$lang['DISPLAY_YEAR_PUBLISHEDIN'] = ' published in ';
$lang['DISPLAY_YEAR_SUFFIX'] = '.';

// display original title

$lang['DISPLAY_O_TITLE_TITLE'] = 'Books with Original Title: ';
$lang['DISPLAY_O_TITLE_TITLE_SUFFIX'] = '';
$lang['DISPLAY_O_TITLE_OWN'] = 'You own ';
$lang['DISPLAY_O_TITLE_PUBLISHEDIN'] = ' where the original title is "';
$lang['DISPLAY_O_TITLE_SUFFIX'] = '".';

// display Language

$lang['DISPLAY_LANGUAGE_TITLE'] = 'Books in ';
$lang['DISPLAY_LANGUAGE_TITLE_SUFFIX'] = ' language';
$lang['DISPLAY_LANGUAGE_OWN'] = 'You own ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' written in ';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = ' language.';

// display series

$lang['DISPLAY_SERIES_TITLE'] = 'Books in the series: ';
$lang['DISPLAY_SERIES_TITLE_SUFFIX'] = '';
$lang['DISPLAY_LANGUAGE_OWN'] = 'You own ';
$lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] = ' from the "';
$lang['DISPLAY_LANGUAGE_SUFFIX'] = '" series.';

$lang['VOLUME_PREFIX'] = 'Volume ';
$lang['VOLUME_SUFFIX'] = '';
$lang['VOLUME'] = 'Volume';

// display ebooks

$lang['DISPLAY_EBOOK_TITLE'] = 'Ebooks';
$lang['DISPLAY_EBOOK_PREFIX'] = 'You have ';
$lang['DISPLAY_EBOOK_SUFFIX'] = ' in your collection.';

// edit item

$lang['EDIT_TITLE'] = 'Edit item';
$lang['EDIT_SAVEBUTTON'] = 'Save';
$lang['EDIT_EBOOK_CURRENTFILE'] = 'Current Ebook file';
$lang['EDIT_EBOOK_NOCURRENTFILE'] = 'No file.';
$lang['EDIT_EBOOK_ADDNEWFILE'] = 'Add new Ebook file';
$lang['MODIFIED_SUCCESS'] = 'Item successfully modified. ';
$lang['MODIFIED_SUCCESS_REDIRECT'] = 'Go back to the item';
// for form labels, see "add new item" strings

// find on Moly.hu

$lang['FIND_MOLY_TITLE'] = 'Find item on moly.hu';
$lang['FIND_MOLY_API_INSTRUCTIONS'] = '
<p>It looks like you haven\'t set up Moly API yet.</p>
<p>To set up the API, you need to register a Moly API Key:</p>
<ul class="moly_list">
<li>Visit <a href="https://moly.hu">Moly.hu</a> and register or log in.</li>
<li>Go to Infó &rarr; API and provide your Catalog URL to request an API Key.</li>
<li>Edit Catalog\'s <code>config/config.php</code> and under <code>$database = "your database name";</code> but before the <code>?></code> add the following line:<br /><code>$molyapi = "your Moly API Key";</code></li>
<li>Save the file, and you\'re done!</li>
</ul>
<p>Next time you visit this page, you\'ll be able to import book data from Moly.</p>';
$lang['FIND_MOLY_SEARCH_INSTRUCTIONS'] = '<p>You can search for the ISBN (International Standard Book Number) of the book. The ISBN number can typically be found in the colophon or under the barcode of the book.</p>
	<p>The importer will look for the ISBN on moly.hu and if the book is present, will try to import the data.</p>';
$lang['FIND_MOLY_SEARCHBUTTON'] = 'Find item';

// genres' list

$lang['GENRES_TITLE'] = 'List of genres';

// importing an item

$lang['IMPORT_TITLE'] = 'Importing item';
$lang['IMPORT_NOTFOUND'] = ' The item you are looking for cannot be found on Moly.hu. Please add the item manually.';
// see also "FIND_MOLY_API_INSTRUCTIONS"
$lang['IMPORT_WARNING'] = ' Please double-check and edit imported data if necessary before saving.';
// for form labels, see "add new item" strings

// browse entire collection (index.php and page.php)

$lang['INDEX_TITLE'] = 'Browse entire collection';
$lang['INDEX_PAGINATION_PREV'] = 'Previous page';
$lang['INDEX_PAGINATION_NEXT'] = 'Next page';

// publishers' list

$lang['PUBLISHERS_TITLE'] = 'List of publishers';

// lists in general

$lang['LIST_COUNT_GENRE_PREFIX'] = 'Your collection contains books in ';
$lang['LIST_COUNT_AUTHOR_PREFIX'] = 'Your collection contains books written by ';
$lang['LIST_COUNT_PUBLISHER_PREFIX'] = 'Your collection contains books published by ';
$lang['LIST_COUNT_SUFFIX'] = '.';

// search

$lang['SEARCH_TITLE'] = 'Search results for "';
$lang['SEARCH_TITLE_SUFFIX'] = '"';
$lang['SFIELD_TITLE'] = ' in title';
$lang['SFIELD_AUTHOR'] = ' in author';
$lang['SFIELD_PUBLISH'] = ' in publication data';
$lang['SFIELD_ISBN'] = ' in ISBN number';
$lang['SFIELD_GENRE'] = ' in genre';
$lang['SFIELD_LANGUAGE'] = ' as language';
$lang['SFIELD_DESCRIPTION'] = ' in description';
$lang['SFIELD_SERIES'] = ' in series title';
$lang['SFIELD_LOCATION'] = ' in book location';
$lang['SFIELD_LENT'] = ' in lending data';
$lang['SFIELD_ALL'] = ' in all fields';
$lang['SEARCH_REASULTCOUNT_PREFIX'] = 'There ';
$lang['SEARCH_REASULTCOUNT_SINGULAR_SUFFIX'] = ' result for your search.';
$lang['SEARCH_REASULTCOUNT_PLURAL_SUFFIX'] = ' results for your search.';
$lang['SEARCH_NORESULTS'] = 'No results.';

// collection

$lang['COLLECTION_PREFIX'] = 'There ';
$lang['COLLECTION_MIDDLE'] = ' in your collection. Now showing ';
$lang['COLLECTION_SUFFIX'] = '.';
// Syntax: prefix - verb sin/plu - item sin/plu - middle - item sin/plu - suffix
// e.g. There are 5 items in in your collection. Now showing items 1 - 5.

// result table headers

$lang['TABLE_AUTHOR'] = 'Author';
$lang['TABLE_TITLE'] = 'Title';
$lang['TABLE_PUBLISHER'] = 'Publisher';
$lang['TABLE_YEAR'] = 'Year';
$lang['TABLE_GENRE'] = 'Genre';
$lang['TABLE_LENT'] = 'Lent';

// random link

$lang['RANDOM_TITLE'] = 'Random book';

// help page

$lang['HELP_TITLE'] = 'Help';
$lang['HELP_UPGRADE_TITLE'] = 'Upgrading Catalog';
$lang['HELP_UPGRADE_CONTENT'] = '<p>Upgrading Catalog mostly is a simple and painless process: it usually only requires overwriting files of your Catalog install (<strong>excluding your <code>config/</code> folder</strong> &ndash; in ideal cases we don\'t ever touch those files). When releasing new versions, I try to maintain compatibility with previous versions.</p>
<p>If a new version requires more (e.g. modifying the database structure), I\'ll include an upgrade script which will perform the required modifications for you. Please always read the new versions\' release notes before upgrading.</p>
<p>Other than that, only one rule: always backup your database and <code>config/</code> folder before upgrading &ndash; just in case.</p>';

$lang['HELP_SEARCH_TITLE'] = 'Simple and Smart Search';
$lang['HELP_SEARCH_CONTENT'] = '<p>To perform a simple search, simply put a searh term in the search field. Catalog will search all fields of book data and return the results.</p>
<p>Smart search is when you narrow your search to one field only. This comes handy when you e.g. want to search all books in your office &ndash; by performing a simple search for the term "office", Catalog will also return books on "LibreOffice", books published by "Office Books Ltd." etc.</p>
<p>You can perform a smart search by entering the search term with a field prefix. Available prefixes are:</p>
<ul class="help">
<li><strong><code>title: [term]</code></strong>: by searching for <code>title: office</code>, Catalog will return the book "Getting Started with LibreOffice", but not all the books located in your office or published by "Office Books Ltd.";</li>
<li><strong><code>author: [term]</code></strong>: by searching for <code>author: smith</code>, Catalog will return all the books written by Smith, John, but not the book "The Blacksmiths Handbook";</li>
<li><strong><code>publish: [term]</code></strong>: searches in two fields: the publisher and the year published. By searching for <code>publish: office</code>, Catalog will return all books published by "Office Books Ltd.", but not the books located in your office or titled "Getting Started with LibreOffice". By searchnig for <code>publish: 199</code>, Catalog will return all books published in the 1990\'s, but not the books having "199" in their ISBNs;</li>
<li><strong><code>isbn: [term]</code></strong>: by searching for <code>isbn: 199</code>, Catalog will return all books having "199" in their ISBNs, but not the books published in the 1990\'s;</li>
<li><strong><code>genre: [term]</code></strong>: by searching for <code>genre: office</code>, Catalog will return all books with the genre tag "LibreOffice", but not the books located in your office or published by "Office Books Ltd.";</li>
<li><strong><code>lang: [term]</code></strong>: by searching for <code>lang: english</code>, Catalog will return all books with the language tag "English", but not the book "Johnny English: De nuevo en acción";</li>
<li><strong><code>description: [term]</code></strong>: searching for <code>description: john smith</code> is extremely helpful, if you e.g. remember that the main protagonist of the novel is "John Smith", but you\'d like to ignore all the books written by "John Smith";</li>
<li><strong><code>series: [term]</code></strong>: searching for <code>series: sample</code> will return all books in the "Sample Books" series, but not the book with the title "This is a Sample book" (unless it is part of the series);</li>
<li><strong><code>location: [term]</code></strong>: by searching for <code>location: office</code>, Catalog will return all the books located in your office but not the books about "LibreOffice" or the books published by "Office Books Ltd.";</li>
<li><strong><code>lent: [term]</code></strong>: searches in two fields: the "lent to" and the "lent at". By searching for <code>lent: john smith</code>, Catalog will return all the books you\'ve lent to Johnny, but not the books written by a "John Smith". By searching for <code>lent: 2016</code>, Catalog will return all the books you\'ve lent in 2016 (it is probably time to get back those, by the way).</li>
</ul>';

$lang['HELP_TRANSLATE_TITLE'] = 'Translating Catalog';
$lang['HELP_TRANSLATE_CONTENT'] = '<p>Translating Catalog basically requires a text editor of your choice (no, not Microsoft Word or LibreOffice Writer, but Notepad, Notepad++, Gedit etc.):</p>
<ul class="help">
<li>Open <code>languages/en-US.php</code> in your text editor of choice and immediately Save As <code>xx-XX.php</code> to the same location, where <code>xx-XX</code> is the language code of the new language (e.g. <code>pt-BR</code> for Brazilian Portuguese);</li>
<li>In the language file you\'ll find the following syntax:<br />
<code>$lang[\'REFERENCE\'] = \'some text\';</code><br />
When translating, you\'ll need to replace the "some text" parts. If there are HTML tags in the text (e.g. <code>&lt;p&gt;</code> and <code>&lt;/p&gt;</code>), keep those intact.</li>
<li>After finishing translation, you should have a new file in the <code>languages/</code> folder, e.g. <code>languages/pt-BR.php</code>; </li>
<li>Now head over to your <code>config/</code> folder and open <code>config/config.php</code>. You\'ll find a line like this:<br />
<code>$lang = "en-US";</code><br />
Replace the <code>en-US</code> part with the code of the newly created translation. The modified line should be e.g. like:<br />
<code>$lang = "pt-BR";</code></li>
<li>Save the file, and you\'re done: Catalog should now speak your language.</li>
</ul>
</p><strong>Pro tip:</strong> don\'t forget to submit your translation as a Pull Request <a href="https://github.com/psztrnk/catalog" target="_blank">on GitHub</a> so I can add it to the Catalog Setup.</p>';

$lang['HELP_CONTRIBUTE_TITLE'] = 'Contributing to Catalog';
$lang['HELP_CONTRIBUTE_CONTENT'] = '<p>Contributions are always welcome! Please submit your bug reports, feature requests or code contributions <a href="https://github.com/psztrnk/catalog" target="_blank">on GitHub</a>.</p>';

$lang['HELP_DONATE_TITLE'] = 'Donate to Catalog';
$lang['HELP_DONATE_CONTENT'] = '<p>You can donate to Catalog via PayPal &ndash; all donations are appreciated. Many developers say that with donations you buy them a coffee or beer. I spend all donations on &ndash; surprise! &ndash; books.</p>
<p>To donate, click on the below button and enter the amount of your choice. <strong>Thank you in advance!</strong></p>';

$lang['HELP_CATALOG_CREDITS'] = '<p>Catalog is Open Source Software &ndash; it is created by Adam Paszternak (psztrnk) and made available under the terms of the <a href="https://github.com/psztrnk/catalog/blob/master/LICENSE" target="_blank">MIT License</a>.</p>';

$lang['HELP_MOLY_TITLE'] = 'Setting up Moly API';
$lang['HELP_MOLY_API_INSTRUCTIONS'] = '
<p>To set up the API, you need to register a Moly API Key:</p>
<ul class="moly_list">
<li>Visit <a href="https://moly.hu">Moly.hu</a> and register or log in.</li>
<li>Go to Infó &rarr; API and provide your Catalog URL to request an API Key.</li>
<li>Edit Catalog\'s <code>config/config.php</code> and under <code>$database = "your database name";</code> but before the <code>?></code> add the following line:<br /><code>$molyapi = "your Moly API Key";</code></li>
<li>Save the file, and you\'re done!</li>
</ul>
<p>Now you\'re able to import book data from Moly.</p>';

?>
