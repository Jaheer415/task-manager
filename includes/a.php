<?php
session_start();
if (!isset($_SESSION['u'])) {
    header("Location: ../login.php");
    exit();
}
?>