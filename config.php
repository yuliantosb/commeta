<?php
$hostname = "localhost";
$db_username = "root";
$db_password = "";

$link = mysql_connect($hostname, $db_username, $db_password) or die("Cannot connect to the database");
mysql_select_db("commeta") or die("Cannot select the database");


?>