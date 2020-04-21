<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Catalog</title>
<meta name="description" content="Personal book catalog">
<meta name="keywords" content="book, catalog">
<link rel="stylesheet" href="../assets/css/index.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
</head>
<body>
	<section id="setup">
<?php
// include the Kirby Toolkit
include('../toolkit/bootstrap.php');

// passing setup.php form data to configure.php
$server = $_POST['server'];
$database = $_POST['database'];
$user = $_POST['user'];
$password = $_POST['password'];
$appuser = $_POST['appuser'];
$apppassword = password::hash($_POST['apppassword']);
$language = $_POST['language'];

// create database for Catalog
$mysqli = new mysqli($server, $user, $password);
if (!$mysqli->select_db($database)) {
    $mysqli->query('CREATE DATABASE IF NOT EXISTS ' . $database . ' DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci');
    $mysqli->select_db($database);
}

// connect to database
$db = new Database(array(
    'type' => 'mysql',
    'host' => $server,
    'database' => $database,
    'user' => $user,
    'password' => $password
));

// create books table
$sql_book = $db->createTable('books', $columns = array(
		'id' => array('type' => 'id',),
		'title' => array('type' => 'varchar',),
		'isbn' => array('type' => 'varchar',),
		'publisher' => array('type' => 'varchar',),
		'year' => array('type' => 'varchar',),
		'description' => array('type' => 'text',),
		'imgpath' => array('type' => 'varchar',),
		'islent' => array('type' => 'varchar',),
		'lentto' => array('type' => 'varchar',),
		'lentat' => array('type' => 'varchar',),
		'a_str' => array('type' => 'varchar',),
		'g_str' => array('type' => 'varchar',),
		'location' => array('type' => 'varchar',),
		'doctype' => array('type' => 'varchar',),
		'bookfile' => array('type' => 'varchar',),
		'owner' => array('type' => 'int',),
	));

// select books table
$collection = $db->table('books');

// create sample data in books table

if ($language == 'en-US') {

	if ($datacreate_book = $collection->insert(array(
				'id' => '1',
	            'title' => 'This is a Sample Book',
	            'isbn' => '9789635581696',
	            'publisher' => 'Sample Publishing Inc.',
	            'year' => '2011',
	            'description' => 'My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?',
	            'imgpath' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg',
	            'islent' => 'on',
	            'lentto' => 'Some Dude',
	            'lentat' => '12/31/2016',
	            'a_str' => 'Sample Doe, John;Sample Doe, Jane',
	            'g_str' => 'scifi,fantasy',
	            'owner' => '1',
	        ))) {
				// echo "<p>One book record created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ".$datacreate_book;
	}

} else if ($language == 'hu-HU') {

	if ($datacreate_book = $collection->insert(array(
			'id' => '1',
            'title' => 'Ez egy mintak&ouml;nyv',
            'isbn' => '9789635581696',
            'publisher' => 'Minta k&ouml;nyvkiad&oacute;',
            'year' => '2011',
            'description' => 'L&oacute;rum ipse mint l&eacute;l&odblac; zsebe cselti, els&odblac;sorban egy omszer&udblac; d&ouml;nde. Ez&aacute;ltal a m&aacute;s fenty&udblac;kben ter&aacute;nok is zatm&aacute;zj&aacute;k a setle csattas&aacute;gokat. Duzzadt sihegyel&eacute;sen ez oda b&aacute;nos, hogy a bord lent&eacute;sek k&ouml;nnyen fogatozhatnak a csozatr&oacute;l, ami a r&aacute;cika rad&eacute;r&aacute;nak pistam&aacute;t hajhatja. A sz&aacute;d&aacute;kb&oacute;l v&eacute;tl&odblac;s &ouml;zven hez&eacute;s pocsom&aacute;val a csattas&aacute;gok r&uuml;lemei kerelik dorojtnak, mint &ouml;k&eacute;neik&eacute;. Az ez&aacute;ltal meltor v&aacute;ncb&oacute;l egyre t&ouml;bbet horn&aacute;lnak neg&eacute;gbe, zugs&aacute;gba, a figyel&odblac; lakton&aacute;nak sp&aacute;s&aacute;ba stb., ami tov&aacute;bb pisz&iacute;jazja a csep&eacute;ses hajdog&aacute;juk gemm&aacute;j&aacute;t. &Iacute;gy m&eacute;g t&ouml;bb sz&eacute;dez&eacute;st tudnak reperednie szav&aacute;ikt&oacute;l, a pr&aacute;for&aacute;ny teh&aacute;t kedik. A tatlamlan erezs&eacute;gb&odblac;l k&ouml;ny&ouml;s s&uuml;g&eacute;sb&odblac;l pedig egyre kevesebbet cengomnak &aacute;t a hajk&oacute;coknak, hiszen egyre kev&eacute;sb&eacute; z&ouml;ty&ouml;g&odblac; a r&aacute;cika. A setle part magyalinok teh&aacute;t gy&uuml;m&ouml;s pad&aacute;sban egyszerre lehetnek k&eacute;szt&odblac;i &eacute;s kermez&odblac; golyomokban is k&eacute;r&odblac;k.',
            'imgpath' => 'https://upload.wikimedia.org/wikipedia/en/3/3b/Pulp_Fiction_%281994%29_poster.jpg',
            'islent' => 'on',
            'lentto' => 'Haver S&aacute;ndor',
            'lentat' => '12/31/2016',
            'a_str' => 'Minta S&aacute;ndor;Minta Ferenc',
            'g_str' => 'scifi,atomfizika',
            'owner' => '1',
        ))) {
			// echo "<p>One book record created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ".$datacreate_book;
	}

}

// reconnect
$authorsdb = new Database(array(
    'type' => 'mysql',
    'host' => $server,
    'database' => $database,
    'user' => $user,
    'password' => $password
));

// create authors table
$sql_author = $authorsdb->createTable('authors', $columns_author = array(
		'id' => array('type' => 'id',),
		'book_id' => array('type' => 'int',),
		'author' => array('type' => 'varchar',),
	));

// select authors table
$select_authors = $authorsdb->table('authors');

// create sample data in authors table

if ($language == 'en-US') {

	if ($datacreate_author = $select_authors->insert(array(
				'book_id' => '1',
	            'author' => 'Sample Doe, John',
	        )) &&
		$datacreate_secondauthor = $select_authors->insert(array(
	            'book_id' => '1',
	            'author' => 'Sample Doe, Jane',
	        ))) {
				// echo "<p>Author records created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ".$datacreate_author;
	}

} else if ($language == 'hu-HU') {

	if ($datacreate_author = $select_authors->insert(array(
				'book_id' => '1',
	            'author' => 'Minta S&aacute;ndor',
	        )) &&
		$datacreate_secondauthor = $select_authors->insert(array(
	            'book_id' => '1',
	            'author' => 'Minta Ferenc',
	        ))) {
				// echo "<p>Author records created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ".$datacreate_author;
	}

}

// reconnect
$genresdb = new Database(array(
    'type' => 'mysql',
    'host' => $server,
    'database' => $database,
    'user' => $user,
    'password' => $password
));

// create genres table
$sql_genre = $genresdb->createTable('genres', $columns = array(
		'id' => array('type' => 'id',),
		'book_id' => array('type' => 'int',),
		'genre' => array('type' => 'varchar',),
	));

// select genres table
$select_genres = $genresdb->table('genres');

// create sample data in genres table

if ($language == 'en-US') {

	if ($datacreate_genre = $select_genres->insert(array(
				'book_id' => '1',
	            'genre' => 'scifi',
	        )) &&
		$datacreate_secondgenre = $select_genres->insert(array(
		        'book_id' => '1',
	            'genre' => 'fantasy',
	        ))) {
				// echo "<p>Genre records created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ". $datacreate_genre;
	}

} else if ($language == 'hu-HU') {

	if ($datacreate_genre = $select_genres->insert(array(
				'book_id' => '1',
	            'genre' => 'scifi',
	        )) &&
		$datacreate_secondgenre = $select_genres->insert(array(
		        'book_id' => '1',
	            'genre' => 'atomfizika',
	        ))) {
				// echo "<p>Genre records created successfully.</p>";
	} else {
				 echo "ERROR: Catalog was unable to execute ". $datacreate_genre;
	}

}

// reconnect
$usersdb = new Database(array(
    'type' => 'mysql',
    'host' => $server,
    'database' => $database,
    'user' => $user,
    'password' => $password
));

// create users table
$sql_users = $usersdb->createTable('users', $columns = array(
		'id' => array('type' => 'id',),
		'user' => array('type' => 'varchar',),
		'password' => array('type' => 'varchar',),
		'status' => array('type' => 'int',),
	));

// select userss table
$select_users = $usersdb->table('users');

// create user record in users table
if ($datacreate_user = $select_users->insert(array(
			'user' => $appuser,
            'password' => $apppassword,
        ))) {
			// echo "<p>User record created successfully.</p>";
} else {
			 echo "ERROR: Catalog was unable to execute ". $datacreate_user;
}

// write connection details to config/config.php
$my_file = 'config.php';
$handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
$data = '<?php
	$hostname = "' . $server . '";
	$username = "' . $user . '";
	$password = "' . $password . '";
	$database = "' . $database . '";
	$lang = "' . $language . '";
?>';
fwrite($handle, $data);

// create .htaccess for config folder
$my_htaccess = '.htaccess';
$htacc_handle = fopen($my_htaccess, 'w') or die('Cannot open file:  ' . $my_htaccess);
$htdata = '<Files>
  Deny from all
</Files>';
fwrite($htacc_handle, $htdata);

// create .htaccess for root folder
$my_htaccess_2 = '../.htaccess';
$htacc_handle_2 = fopen($my_htaccess_2, 'w') or die('Cannot open file:  ' . $my_htaccess_2);
$htdata_2 = 'RewriteEngine On
RewriteCond %{ENV:REDIRECT_STATUS} ^$
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ $1.php [L]
RewriteRule ^app/(.*) index.php [L]';
fwrite($htacc_handle_2, $htdata_2);

// delete config/setup.php as it is no longer needed
if (file_exists('setup.php')) {
    unlink('setup.php');
}

// chmod config/config.php to 0600
chmod("config.php", 0600);

// print success message
if ($language == 'en-US') {
echo '<h1>Cool.</h1><p>Everything seems to be OK. Now you can start using Catalog. Have fun.</p><p><a href="../index.php" class="finish-setup">Go to the application</a></p>';
} else if ($language == 'hu-HU') {
echo '<h1>Remek.</h1><p>Úgy tűnik, minden rendben. Már el is kezdheted a gyűjteményed felvitelét.</p><p><a href="../index.php" class="finish-setup">Irány a Catalog!</a></p>';
}

?>
</section>
<?php include('../app/snippets/footer-setup.php') ?>
