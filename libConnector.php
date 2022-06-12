<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Library";

$conn = new mysqli("localhost", $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: " . $conn -> connect_error);
}

echo "";
?>