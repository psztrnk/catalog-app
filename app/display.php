<?php include_once('snippets/header.php') ?>

<?php
$collection = $db->table('books');

$url = $_SERVER['REQUEST_URI'];
$id = parse_url($url, PHP_URL_QUERY);
if (strpos($id, 'id=') !== FALSE) {
    $bookid = str_replace('id=', '', $id);
    
    $item = $collection->find($bookid);
    ?>

<h2>
	<a class="item-action delete" href="delete?<?php echo $id; ?>"><i
		class="fa fa-trash" aria-hidden="true"></i></a> <a
		class="item-action edit" href="edit?<?php echo $id; ?>"><i
		class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
		<?php if ($item->doctype() == 'ebook'  && $item->bookfile() != NULL) { ?>
			<a class="item-action download" href="ebooks/<?php echo $item->bookfile() ?>"><i class="fa fa-download" aria-hidden="true"></i></a>

					<?php }
						if ($item->doctype() == 'ebook') { 
							echo $lang['DISPLAY_EBOOK_TITLE_PREFIX'];
						}
						echo $item->title();
					?>
				</h2>

<div id="item-list">
					<?php if($item->imgpath() != '') { ?>
					<div class="cover">
		<img src="<?php echo $item->imgpath(); ?>" />
	</div>
					<?php } ?>
						<?php
    $authors = $db->table('authors')
        ->select('authors.author', 'authors.book_id')
        ->where('authors.book_id = ' . $bookid)
        ->order('author', 'ASC')
        ->all();
    if ($authors->count() != 0) {
        echo '<label class="view-item-label"><i class="fa fa-user"
		aria-hidden="true"></i> ' . $lang['DISPLAY_AUTHOR_LABEL'] . '</label>
	<p class="view-item-info">';
        foreach ($authors as $author) {
            echo '<a href="display?author=' . urlencode($author->author()) . '">' . $author->author() . '</a><br />';
        }
        
        echo '</p>';
    }
    ?>
					<?php if($item->isbn() != '') { ?>
					<label class="view-item-label"><i class="fa fa-barcode"
		aria-hidden="true"></i> <?php echo $lang['DISPLAY_ISBN_LABEL']; ?></label>
	<p class="view-item-info"><?php echo '<a href="display?id='.$item->id().'">'.$item->isbn().'</a>' ?></p>
					<?php } ?>
					<?php if($item->publisher() != '') { ?>
					<label class="view-item-label"><i class="fa fa-building"
		aria-hidden="true"></i> <?php echo $lang['DISPLAY_PUBLISHER_LABEL']; ?></label>
	<p class="view-item-info"><?php echo '<a href="display?publisher='.urlencode($item->publisher()).'">'.$item->publisher().'</a>' ?></p>
					<?php } ?>
					<?php if($item->year() != '') { ?>
					<label class="view-item-label"><i class="fa fa-calendar"
		aria-hidden="true"></i> <?php echo $lang['DISPLAY_YEAR_LABEL']; ?></label>
	<p class="view-item-info"><?php echo '<a href="display?year='.urlencode($item->year()).'">'.$item->year().'</a>' ?></p>
					<?php } ?>
					
						<?php
    $genres = $db->table('genres')
        ->select('genres.genre', 'genres.book_id')
        ->where('genres.book_id = ' . $bookid)
        ->order('genre', 'ASC')
        ->all();
    if ($genres->count() != 0) {
        echo '<label class="view-item-label"><i class="fa fa-tags"
		aria-hidden="true"></i> ' . $lang['DISPLAY_GENRE_LABEL'] . '</label><p class="view-item-info">';
        foreach ($genres as $genre) {
            echo '<a href="display?genre=' . urlencode($genre->genre()) . '">' . $genre->genre() . '</a><br />';
        }
        echo '</p>';
    }
    ?>
					<?php if($item->description() != '') { ?>
					<label class="view-item-label"><i class="fa fa-align-left"
		aria-hidden="true"></i> <?php echo $lang['DISPLAY_DESCRIPTION_LABEL']; ?></label>
	<div class="view-item-info">
		<p><?php echo str_replace(array("\r\n", "\n", "\r"), '</p><p>', $item->description() ); ?></p>
	</div>
					<?php } ?>
					<?php if($item->location() != '') { ?>
					<label class="view-item-label"><i class="fa fa-compass"
		aria-hidden="true"></i> <?php echo $lang['DISPLAY_LOCATION_LABEL']; ?></label>
	<p class="view-item-info"><?php echo $item->location() ?></p>
					<?php } ?>
					<?php if($item->islent() == 'on') { ?>
					<p class="helper">
		<i class="fa fa-handshake-o" aria-hidden="true"></i> <?php echo $lang['DISPLAY_LENT_NOTE']; ?><?php if ($item->lentto() != '') { echo $lang['DISPLAY_LENTTO_REF'].$item->lentto(); } ?><?php if ($item->lentat() != '') { echo $lang['DISPLAY_LENTAT_REF'].$item->lentat(); } ?>.</p>
					<?php } ?>
				</div>

<?php
} else if (strpos($id, 'author=') !== FALSE) {
    
    include_once ('display-author.php');
} else if (strpos($id, 'publisher=') !== FALSE) {
    
    include_once ('display-publisher.php');
} else if (strpos($id, 'year=') !== FALSE) {
    
    include_once ('display-year.php');
} else if (strpos($id, 'genre=') !== FALSE) {
    
    include_once ('display-genre.php');
} else if (strpos($id, 'lent=on') !== FALSE) {
    
    include_once ('display-lent.php');
} else if (strpos($id, 'doctype=ebook') !== FALSE) {
    
    include_once ('display-ebooks.php');
}
?>


<?php include_once('snippets/footer.php') ?>
