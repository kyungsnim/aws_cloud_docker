<?php

$db_name = "mydb";
$db_server = "mariadb";
$db_user = "myuser";
$db_pass = "mypath12345";

// $db = new PDO("mysql:host={$db_server};dbname={$db_name};charset=utf8", $db_user, $db_pass);
// $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$db) {
	die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>
