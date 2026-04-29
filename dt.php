<?php
include __DIR__ . '/includes/db.php';

$id = $_GET['id'];
$conn->query("DELETE FROM t WHERE id=$id");

header("Location: dashboard.php");
exit();
?>