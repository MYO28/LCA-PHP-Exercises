<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "techvibe";
$port = 3307;

$conn = new mysqli($host, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>