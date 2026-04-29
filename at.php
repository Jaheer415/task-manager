<?php
session_start();
include __DIR__ . '/includes/db.php';

$t = $_POST['t'];
$u = $_SESSION['u'];

$st = $conn->prepare("INSERT INTO t (uid,title) VALUES (?,?)");
$st->bind_param("is", $u, $t);
$st->execute();

header("Location: dashboard.php");
exit();
?>