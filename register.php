<?php

include "connection.php";

$firstname = '';
$surname = '';
$username = '';
$password = '';
$email = '';
$number = '';

$firstname = $_POST[ 'firstname' ];
$surname = $_POST[ 'surname' ];
$username = $_POST[ 'username' ];
$password = $_POST[ 'password' ];
$email = $_POST[ 'email' ];
$number = $_POST[ 'number' ];

$query = "CREATE TABLE IF NOT EXISTS users (
		id SMALLINT NOT NULL AUTO_INCREMENT,
		firstname VARCHAR(100) NOT NULL,
		surname VARCHAR(100) NOT NULL,
		username VARCHAR(100) NOT NULL,
		password VARCHAR(100) NOT NULL,
		email VARCHAR(100) NOT NULL,
		number INT(100) NOT NULL,
		PRIMARY KEY (id)
		)";


$result = $conn->query( $query );
$query = "INSERT INTO users VALUES(NULL, '$firstname', '$surname', '$username','$password', '$email', '$number')";
$result = $conn->query( $query );

$conn->close();


?>
