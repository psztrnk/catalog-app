<?php
$language = str_replace('lang=', '', $id);
$languageid = urldecode($language);

$items = $collection->where(array(
    'language' => $languageid
))->page(1, 10000);
?>

<h2>
	<i class="fa fa-globe" aria-hidden="true"></i><?php echo $lang['DISPLAY_LANGUAGE_TITLE'].$languageid.$lang['DISPLAY_LANGUAGE_TITLE_SUFFIX']; ?></h2>

<div id="item-list">

	<table class="item-list-table">
		<?php include ('snippets/table-head.php');?>

		<tbody>

<?php
$pagination = $items->pagination();
if ($pagination->items() == '1') {
    $wording = $lang['BOOK_SINGULAR'];
} else {
    $wording = $lang['BOOK_PLURAL'];
}
echo ($lang['DISPLAY_YEAR_OWN'] . $pagination->items() . ' ' . $wording . $lang['DISPLAY_LANGUAGE_PUBLISHEDIN'] . $languageid . $lang['DISPLAY_LANGUAGE_SUFFIX']);
foreach ($items as $book) {
    include ('app/snippets/results.php');
}
?>

		</tbody>
	</table>
</div>
