<?php
$host = "localhost";
$username = "root";
$password = "1";
$dbname = "crud_native";

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
