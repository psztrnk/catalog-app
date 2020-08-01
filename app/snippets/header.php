<?php
session_start();

if (! file_exists('./config/config.php')) {
    include_once ('./config/setup.php');
    exit();
}
include_once ('logged-in.php');
if (logged_in() == false) {
    redirect_to("login.php");
} else {
    $path = $_SERVER['REQUEST_URI'];
    // including Kirby Toolkit
    require_once ('./toolkit/bootstrap.php');
    // including Database Connection
    require_once ('./config/connect.php');
    if (file_exists('./config/configure.php')) {
        unlink('./config/configure.php');
        include_once ('update-status.php');
    }
    if (isset($lang)) {
        include_once ('./languages/' . $lang . '.php');
    } else {
        include_once ('./languages/en-US.php');
    }
    // check whether version is latest
    if (! file_exists('./config/version') || file_get_contents('./config/version') != '1.1') {
      include_once ('./app/update.php');
    }

    $lent_num = $catalog_db->where(array('islent' => 'on'))->count();
    $ebook_num = $catalog_db->where(array('doctype' => 'ebook'))->count();

    ?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="ISO-8859-2">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>Catalog</title>
<meta name="description" content="Personal book catalog">
<meta name="keywords" content="book, catalog">

<link href="./assets/icons/favicon.png" rel="shortcut icon"
	type="image/png" />
<link href="./assets/icons/apple-touch-icon.png" rel="apple-touch-icon" />
<link href="./assets/icons/apple-touch-icon-152x152.png" rel="apple-touch-icon" sizes="152x152" />
<link href="./assets/icons/apple-touch-icon-167x167.png" rel="apple-touch-icon" sizes="167x167" />
<link href="./assets/icons/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
<link href="./assets/icons/icon-hires.png" rel="icon" sizes="192x192" />
<link href="./assets/icons/icon-normal.png" rel="icon" sizes="128x128" />

<link rel="stylesheet" href="assets/css/index.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

</head>

<body>
	<main class="main" role="main"> <header id="app-header">
		<h1>
			C<span>atalog</span>
		</h1>
		<div id="logo"></div>
		<section id="menu">
			<ul>
				<li
					class="menu browse <?php if(strpos($path, 'add') == FALSE && strpos($path, 'import') == FALSE && (strpos($path, 'insert') == FALSE && strpos($path, 'find') == FALSE) && strpos($path, 'authors') == FALSE && strpos($path, 'publishers') == FALSE && strpos($path, 'genres') == FALSE && strpos($path, 'lent') == FALSE && strpos($path, 'delete') == FALSE && strpos($path, 'edit') == FALSE && strpos($path, 'help') == FALSE) { echo 'active'; } ?>"><a
					href="./index"><i class="fa fa-book" aria-hidden="true"></i><span><?php echo $lang['MENU_BROWSE']; ?></span></a></li>
				<li
					class="menu add <?php if(strpos($path, 'add') !== FALSE || strpos($path, 'insert') !== FALSE) { echo 'active'; } ?>"><a
					href="./add"><i class="fa fa-plus" aria-hidden="true"></i><span><?php echo $lang['MENU_ADD']; ?></span></a></li>
				<?php if (isset($molyapi)) { ?><li
					class="menu import <?php if(strpos($path, 'import') !== FALSE || strpos($path, 'find') !== FALSE) { echo 'active'; } ?>"><a
					href="./find"><i class="fa fa-cloud-download" aria-hidden="true"></i><span><?php echo $lang['MENU_IMPORT']; ?></span></a></li><?php } ?>
				<li
					class="menu authors <?php if(strpos($path, 'authors') !== FALSE) { echo 'active'; } ?>"><a
					href="./authors"><i class="fa fa-users" aria-hidden="true"></i><span><?php echo $lang['MENU_AUTHORS']; ?></span></a></li>
				<li
					class="menu publishers <?php if(strpos($path, 'publishers') !== FALSE) { echo 'active'; } ?>"><a
					href="./publishers"><i class="fa fa-building" aria-hidden="true"></i><span><?php echo $lang['MENU_PUBLISHERS']; ?></span></a></li>
				<li
					class="menu genres <?php if(strpos($path, 'genres') !== FALSE) { echo 'active'; } ?>"><a
					href="./genres"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $lang['MENU_GENRES']; ?></span></a></li>
				<?php if($lent_num != 0) { ?><li
					class="menu lent <?php if(strpos($path, 'lent') !== FALSE) { echo 'active'; } ?>"><a
					href="./display?lent=on"><i class="fa fa-handshake-o"
						aria-hidden="true"></i><span><?php echo $lang['MENU_LENT']; ?></span></a></li><?php } ?>
				<?php if($ebook_num != 0) { ?><li class="menu ebooks <?php if(strpos($path, 'ebook') !== FALSE) { echo 'active'; } ?>"><a href="./display?doctype=ebook"><i class="fa fa-plug"
						aria-hidden="true"></i> <span><?php echo $lang['MENU_EBOOKS']; ?></span></a></li><?php } ?>
			</ul>
			<div class="clear"></div>
		</section>
	</header>

	<section id="content-area">
		<div id="global-search">
			<form action="search" id="searchform" method="post">
				<input class="searchform" type="text" name="term" required />
				<button class="searchbutton" type="submit"
					value="<?php echo $lang['SEARCHFORM_SUBMIT']; ?>">
				<i class="fa fa-search" aria-hidden="true"></i>
				</button>
			</form>
		</div>
<?php } ?>
