<?php
//define constants for connection info
define("MYSQLUSER","ictatjcu_portal");
define("MYSQLPASS","123zxc");
define("HOSTNAME","localhost");
define("MYSQLDB","ictatjcu_portal");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>


