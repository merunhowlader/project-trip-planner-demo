<?php

	$server = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "tp";

 function getConnection(){

 	$conn = mysqli_connect($GLOBALS['server'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);

 	return $conn;
 }

?>