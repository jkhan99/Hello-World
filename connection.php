<?php
	$servername = "localhost";
		$username = "jkhan43";
		$password = "Khanny2016";
		$dbname = "jkhan43";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
?>
