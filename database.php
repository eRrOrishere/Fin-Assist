<?php
    $servername = "localhost";
	$username = "id6837233_error";
	$password = "error";
	$database = "id6837233_skyhack";

	$conn = mysqli_connect($servername, $username, $password, $database);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>