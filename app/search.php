<?php include_once('snippets/header.php') ?>

<?php

$term_suffix = $_POST['term'];

$collection = $db->table('books');

if (strpos($term_suffix, 'title:') !== FALSE) {
    $term = trim(str_replace('title:', '', $term_suffix));
    $s_field = $lang['SFIELD_TITLE'];
    $results_books = $db->table('books')
        ->where('title', 'like', '%' . $term . '%')
        ->orWhere('o_title', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'author:') !== FALSE) {
    $term = trim(str_replace('author:', '', $term_suffix));
    $s_field = $lang['SFIELD_AUTHOR'];
    $results_books = $db->table('books')
        ->where('a_str', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'publish:') !== FALSE) {
    $term = trim(str_replace('publish:', '', $term_suffix));
    $s_field = $lang['SFIELD_PUBLISH'];
    $results_books = $db->table('books')
        ->where('publisher', 'like', '%' . $term . '%')
        ->orWhere('year', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'isbn:') !== FALSE) {
    $term = trim(str_replace('isbn:', '', $term_suffix));
    $s_field = $lang['SFIELD_ISBN'];
    $results_books = $db->table('books')
        ->where('isbn', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'genre:') !== FALSE) {
    $term = trim(str_replace('genre:', '', $term_suffix));
    $s_field = $lang['SFIELD_GENRE'];
    $results_books = $db->table('books')
        ->where('g_str', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'lang:') !== FALSE) {
    $term = trim(str_replace('lang:', '', $term_suffix));
    $s_field = $lang['SFIELD_LANGUAGE'];
    $results_books = $db->table('books')
        ->where('language', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'description:') !== FALSE) {
    $term = trim(str_replace('description:', '', $term_suffix));
    $s_field = $lang['SFIELD_DESCRIPTION'];
    $results_books = $db->table('books')
        ->where('description', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'location:') !== FALSE) {
    $term = trim(str_replace('location:', '', $term_suffix));
    $s_field = $lang['SFIELD_LOCATION'];
    $results_books = $db->table('books')
        ->where('location', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'series:') !== FALSE) {
    $term = trim(str_replace('series:', '', $term_suffix));
    $s_field = $lang['SFIELD_SERIES'];
    $results_books = $db->table('books')
        ->where('series', 'like', '%' . $term . '%')
        ->all();
} else if (strpos($term_suffix, 'lent:') !== FALSE) {
    $term = trim(str_replace('lent:', '', $term_suffix));
    $s_field = $lang['SFIELD_LENT'];
    $results_books = $db->table('books')
        ->where('lentto', 'like', '%' . $term . '%')
        ->orWhere('lentat', 'like', '%' . $term . '%')
        ->all();
} else {
    $term = $term_suffix;
    $s_field = $lang['SFIELD_ALL'];
    $results_books = $db->table('books')
        ->where('title', 'like', '%' . $term . '%')
        ->orWhere('o_title', 'like', '%' . $term . '%')
        ->orWhere('description', 'like', '%' . $term . '%')
        ->orWhere('publisher', 'like', '%' . $term . '%')
        ->orWhere('isbn', 'like', '%' . $term . '%')
        ->orWhere('year', 'like', '%' . $term . '%')
        ->orWhere('language', 'like', '%' . $term . '%')
        ->orWhere('a_str', 'like', '%' . $term . '%')
        ->orWhere('g_str', 'like', '%' . $term . '%')
        ->orWhere('location', 'like', '%' . $term . '%')
        ->orWhere('lentto', 'like', '%' . $term . '%')
        ->orWhere('lentat', 'like', '%' . $term . '%')
        ->all();
}

$unique = NULL;

?>

<h2>
	<i class="fa fa-search" aria-hidden="true"></i><?php echo $lang['SEARCH_TITLE'].$term.$lang['SEARCH_TITLE_SUFFIX'].$s_field; ?>
</h2>

<div id="item-list">

<?php
if ($results_books->count() == 1) {
    $wording = $lang['VERB_SINGULAR'];
    $suffix = $lang['SEARCH_REASULTCOUNT_SINGULAR_SUFFIX'];
} else {
    $wording = $lang['VERB_PLURAL'];
    $suffix = $lang['SEARCH_REASULTCOUNT_PLURAL_SUFFIX'];
}
if ($results_books->count() == 0) {
    echo '<p>' . $lang['SEARCH_NORESULTS'] . '</p></div>';
    include_once('snippets/footer.php');
    exit;

} else {
    echo '<p>' . $lang['SEARCH_REASULTCOUNT_PREFIX'] . $wording . ' ' . $results_books->count() . $suffix . '</p>';
}
?>

    <table class="item-list-table">
        <?php include_once ('snippets/table-head.php');?>

        <tbody>

<?php

foreach ($results_books as $book) {

    $book_id = $book->id();

    if ($unique == $book_id) {
        continue;
    } else {

        if ($book->islent() == 'on') {
            $lentstatus = '<a href="display?lent=' . urlencode($book->islent()) . '" title="' . $book->lentto() . ' ' . $book->lentat() . '"><i class="fa fa-check" aria-hidden="true"></i></a>';
        } else {
            $lentstatus = '<i class="fa fa-times" aria-hidden="true"></i>';
        }

        echo '<tr>';
        echo '<td>';
        $authors = $db->table('authors')
            ->select('authors.author', 'authors.book_id')
            ->where('authors.book_id = ' . $book_id)
            ->order('author', 'ASC')
            ->all();
        foreach ($authors as $author) {
            echo '<a href="display?author=' . urlencode($author->author()) . '">' . $author->author() . '</a><br />';
        }
        echo '</td>';
        echo '<td><a href="display?id=' . $book->id() . '">' . $book->title() . '</a></td>';
        echo '<td class="publisher"><a href="display?publisher=' . urlencode($book->publisher()) . '">' . $book->publisher() . '</a></td>';
        echo '<td class="year"><a href="display?year=' . urlencode($book->year()) . '">' . $book->year() . '</a></td>';
        echo '<td class="genre">';

        $genres = $db->table('genres')
            ->select('genres.genre', 'genres.book_id')
            ->where('genres.book_id = ' . $book_id)
            ->order('genre', 'ASC')
            ->all();
        foreach ($genres as $genre) {
            echo '<a href="display?genre=' . urlencode($genre->genre()) . '">' . $genre->genre() . '</a><br />';
        }
        echo '</td>';
        echo '<td class="lent">' . $lentstatus . '</td>';
        echo '</tr>';
    }

    $unique = $book_id;
}

?>

        </tbody>
	</table>
</div>

<?php include_once('snippets/footer.php') ?>
