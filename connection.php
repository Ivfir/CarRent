<?php

function Connect()
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "carrental";

	//Create Connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	return $conn;
}
?>