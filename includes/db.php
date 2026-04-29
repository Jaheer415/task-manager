<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $conn = new mysqli("localhost","root","","app");
} else {
    $conn = new mysqli(
        "your_host",
        "your_user",
        "your_password",
        "your_db"
    );
}

if ($conn->connect_error) {
    die("DB Error");
}
?>