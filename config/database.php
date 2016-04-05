<?php

$database = "example";
$username = "root";
$password = "";
$hostname = "localhost"; 

error_reporting(0);
$connection = mysql_connect($hostname, $username, $password) or die("Unable to connect to MySQL");
$db = mysql_select_db($database, $connection) or die("Could not select database");
