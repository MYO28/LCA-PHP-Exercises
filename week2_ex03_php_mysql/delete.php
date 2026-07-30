<?php
require_once 'db_connect.php';

$id = $_POST['id'] ?? $_GET['id'] ?? null;

if ($id) {
    $stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

header("Location: index.php?status=deleted");
exit();
?>