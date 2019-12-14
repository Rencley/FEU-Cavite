<?php

// Connection variables 
$host = "sql12.freesqldatabase.com"; // MySQL host name eg. localhost
$user = "sql12315650"; // MySQL user. eg. root ( if your on localserver)
$password = "9MblzzbpSN"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "sql12315650"; // MySQL Database name

// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database 
mysqli_select_db($db, $database);

?>
