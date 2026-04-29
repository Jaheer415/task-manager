<?php
session_start();
include __DIR__ . '/includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/s.css">
</head>
<body>

<div class="wrap">
<div class="card">

<form method="POST">
<h2>Welcome Back</h2>

<input name="e" type="email" placeholder="Email" required>
<input name="p" type="password" placeholder="Password" required>

<button>Login</button>

<p style="text-align:center;">
Don't have an account? <a href="signup.php">Signup</a>
</p>

</form>

</div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$e = $_POST['e'];
$p = $_POST['p'];

$st = $conn->prepare("SELECT * FROM u WHERE e=?");
$st->bind_param("s", $e);
$st->execute();

$r = $st->get_result()->fetch_assoc();

if ($r && password_verify($p, $r['p'])) {
    $_SESSION['u'] = $r['id'];
    header("Location: dashboard.php");
    exit();
} else {
    echo "<p style='text-align:center;color:red;'>Invalid login</p>";
}
}
?>

</body>
</html>