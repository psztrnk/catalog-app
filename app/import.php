<?php
include_once ('snippets/header.php');
?>

<h2>
	<i class="fa fa-download" aria-hidden="true"></i><?php echo $lang['IMPORT_TITLE']; ?>
</h2>

<div id="item-list">

<?php

if (! isset($molyapi)) {
    echo $lang['FIND_MOLY_API_INSTRUCTIONS'];
} else {

    $isbn = $_POST['isbn'];

    error_reporting(E_ERROR | E_PARSE);

    $bbi = file_get_contents('https://moly.hu/api/book_by_isbn.json?q=' . $isbn . '&key=' . $molyapi);
    if ($bbi) {
        $book_by_isbn = json_decode($bbi);
        $book_id = $book_by_isbn->id;
        $cover = str_replace('normal', 'big', $book_by_isbn->cover);
        $author = $book_by_isbn->author;
        $title = $book_by_isbn->title;
        sleep(1);

        $b = file_get_contents('https://moly.hu/api/book_editions/' . $book_id . '.json?key=' . $molyapi);
        $book = json_decode($b);
        $publisher = $book->editions[0]->publisher;
        $year = $book->editions[0]->year;
        sleep(1);

        $bm = file_get_contents('https://moly.hu/api/book/' . $book_id . '.json?key=' . $molyapi);
        $book_meta = json_decode($bm);
        $description = $book_meta->book->description;
    }
    ?>

<p class="helper">
		<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
<?php

if (! $bbi) {
        echo $lang['IMPORT_NOTFOUND'];
    } else {
        echo $lang['IMPORT_WARNING'];
    }
    ?>
</p>

	<form action="add" method="post" enctype="multipart/form-data">

		<label class="add-new-item"><i class="fa fa-user" aria-hidden="true"></i>
			<?php echo $lang['ADD_AUTHOR_LABEL'] ?></label> <input
			class="add-item-input" type="text" name="author"
			value="<?php echo trim($author); ?>" /> <label class="add-new-item"><i
			class="fa fa-font" aria-hidden="true"></i>
			<?php echo $lang['ADD_TITLE_LABEL'] ?></label> <input
			class="add-item-input" type="text" name="title"
			value="<?php echo trim($title); ?>" required /> <label
			class="add-new-item"><i class="fa fa-barcode" aria-hidden="true"></i>
			<?php echo $lang['ADD_ISBN_LABEL'] ?></label> <input
			class="add-item-input" type="number" name="isbn"
			value="<?php echo $isbn ?>" /> <label class="add-new-item"><i
			class="fa fa-building" aria-hidden="true"></i> <?php echo $lang['ADD_PUBLISHER_LABEL'] ?></label>
		<input class="add-item-input" type="text" name="publisher"
			value="<?php echo trim($publisher); ?>" /> <label
			class="add-new-item"><i class="fa fa-calendar" aria-hidden="true"></i>
			<?php echo $lang['ADD_YEAR_LABEL'] ?></label> <input
			class="add-item-input" type="number" name="year"
			value="<?php echo trim($year); ?>" /> <label class="add-new-item"><i
			value="<?php echo trim($publisher); ?>" /> <label
			class="add-new-item"><i class="fa fa-globe" aria-hidden="true"></i>
			<?php echo $lang['ADD_LANGUAGE_LABEL'] ?></label> <input
			class="add-item-input" type="text" name="language"
			value="" /> <label class="add-new-item"><i
			class="fa fa-filter" aria-hidden="true"></i> <?php echo $lang['ADD_GENRE_LABEL'] ?></label>
		<input class="add-item-input" type="text" name="genre" value="" /> <label
			class="add-new-item"><i class="fa fa-file-image-o" aria-hidden="true"></i><?php echo $lang['ADD_COVER_LABEL'] ?></label>
		<input class="add-item-input" type="text" name="imgpath"
			value="<?php if($cover != '') { echo $cover; } ?>" /> <label
			class="add-new-item"><i class="fa fa-align-left" aria-hidden="true"></i>
			<?php echo $lang['ADD_DESCRIPTION_LABEL'] ?></label>
		<textarea class="add-item-input" type="text" name="description"><?php echo trim($description); ?></textarea>
		<label class="add-new-item"><i class="fa fa-compass"
			aria-hidden="true"></i><?php echo $lang['ADD_LOCATION_LABEL'] ?></label>
		<input class="add-item-input" type="text" name="location" />

        <div class="book-ebook">
            <input type="checkbox" name="isebook" id="ifebook"
                class="showHideCheck_ebook" /><label for="ifebook"></label> <label
                class="add-new-item"><?php echo $lang['ADD_IFEBOOK_LABEL'] ?></label>

            <div class="hiddenInput_ebook">
                <label class="add-new-item"><i class="fa fa-upload"
                    aria-hidden="true"></i> <?php echo $lang['ADD_EBOOK_LABEL'] ?></label>
                <input class="upload" type="file" name="files[]" />
            </div>
        </div>

		<div class="book-lent">
			<input type="checkbox" name="islent" id="iflent"
				class="showHideCheck" /><label for="iflent"></label> <label
				class="add-new-item"><?php echo $lang['ADD_IFLENT_LABEL'] ?></label>

			<div class="hiddenInput">
				<label class="add-new-item"><i class="fa fa-user-circle-o"
					aria-hidden="true"></i> <?php echo $lang['ADD_LENTTO_LABEL'] ?></label>
				<input type="text" class="add-item-input" name="lentto"> <label
					class="add-new-item"><i class="fa fa-calendar-check-o"
					aria-hidden="true"></i> <?php echo $lang['ADD_LENTAT_LABEL'] ?></label>
				<input type="text" class="add-item-input" name="lentat">
			</div>
		</div>

		<input class="add-item-submit" type="submit" name="submit"
			value="<?php echo $lang['ADD_ADDBUTTON'] ?>" />

	</form>
	<div class="clear"></div>

<?php } ?>

                </div>

<?php include_once('snippets/footer.php') ?>
