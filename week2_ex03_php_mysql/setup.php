<?php
$host = "localhost";
$username = "root";
$password = "";
$port = 3307;

$conn = new mysqli($host, $username, $password, "", $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$dbSql = "CREATE DATABASE IF NOT EXISTS techvibe";
if ($conn->query($dbSql) === TRUE) {
    $conn->select_db("techvibe");
} else {
    die("Error creating database: " . $conn->error);
}

$tableSql = "CREATE TABLE IF NOT EXISTS employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    department VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($tableSql) === TRUE) {
    header("Location: index.php?status=setup_success");
    exit();
} else {
    die("Error creating table: " . $conn->error);
}
?>