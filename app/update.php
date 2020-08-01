<?php

	// connect to database
	$db = new Database(array(
	    'type' => 'mysql',
	    'host' => $hostname,
	    'database' => $database,
	    'user' => $username,
	    'password' => $password
	));
	// insert new columns to books database table
	$update =  $db->execute("ALTER TABLE books ADD o_title VARCHAR( 255 ) after title");
	$update =  $db->execute("ALTER TABLE books ADD language VARCHAR( 255 ) after year");
	$update =  $db->execute("ALTER TABLE books ADD series VARCHAR( 255 ) after location");
	$update =  $db->execute("ALTER TABLE books ADD volume INT after series");

	// create .version file
	$version_file = fopen("./config/.version", "w") or die("Unable to open file!");
	$txt = "1.1";
	fwrite($version_file, $txt);
	fclose($version_file);

?>
