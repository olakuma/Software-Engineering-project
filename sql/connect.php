<?php

// $path = '../sql/connect.php';
// set_include_path(get_include_path() . PATH_SEPARATOR . $path);

$server = "localhost"; //changed from localhost bc local host doesnt work on mac
$dbusername = "root";
$password = "";
$db = "pos-cps353";
$debug = "false";

//database connector (can be called)
$dbconn = mysqli_connect($server, $dbusername, $password, $db);

if ($dbconn->connect_error) {
    die('Could not connect: ' . $dbconn->connect_error);
}elseif($debug == "true"){
	echo nl2br("\nDEBUG:\n");
	echo nl2br("3 \n 2 \n 1...");
	echo nl2br("\n Connected successfully\n");
}

// echo("database connected");
//You can use the command below to set the default database to another db.
//mysqli_select_db($dbconn, "webiii");

?>