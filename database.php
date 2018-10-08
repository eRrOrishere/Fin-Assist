<?php
    $servername = "mysql.hostinger.com";
	$username = "u633760913_error";
	$password = "errorishere";
	$database = "u633760913_finas";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>