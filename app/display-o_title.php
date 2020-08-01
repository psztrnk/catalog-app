<?php
$o_title = str_replace('o_title=', '', $id);
$o_titleid = urldecode($o_title);

$items = $collection->where(array(
    'o_title' => $o_titleid
))->page(1, 10000);
?>

<h2>
	<i class="fa fa-language" aria-hidden="true"></i><?php echo $lang['DISPLAY_O_TITLE_TITLE'].$o_titleid.$lang['DISPLAY_O_TITLE_TITLE_SUFFIX']; ?></h2>

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
echo ($lang['DISPLAY_O_TITLE_OWN'] . $pagination->items() . ' ' . $wording . $lang['DISPLAY_O_TITLE_PUBLISHEDIN'] . $o_titleid . $lang['DISPLAY_O_TITLE_SUFFIX']);
foreach ($items as $book) {
    include ('app/snippets/results.php');
}
?>

		</tbody>
	</table>
</div>
