<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "feuc_db"; // MySQL Database name

// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password) or die("Could not connect to database");

// Select MySQL Database 
mysqli_select_db($db, $database);

?>