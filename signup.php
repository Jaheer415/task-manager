<?php
// IMPORTANT: no space before this tag

include __DIR__ . '/includes/db.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $_POST['n'];
    $e = $_POST['e'];
    $p = password_hash($_POST['p'], PASSWORD_DEFAULT);

    // Check if email exists
    $check = $conn->prepare("SELECT id FROM u WHERE e=?");
    $check->bind_param("s", $e);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $msg = "<p style='color:red;text-align:center;'>Email already exists</p>";
    } else {
        $st = $conn->prepare("INSERT INTO u (n,e,p) VALUES (?,?,?)");
        $st->bind_param("sss", $n, $e, $p);

        if ($st->execute()) {
            // redirect cleanly
            echo "<script>window.location='login.php';</script>";
            exit();
        } else {
            $msg = "<p style='color:red;text-align:center;'>Something went wrong</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="assets/s.css">
</head>
<body>

<div class="wrap">
<div class="card">

<form method="POST">
<h2>Create Account</h2>

<input name="n" placeholder="Name" required>
<input name="e" type="email" placeholder="Email" required>
<input name="p" type="password" placeholder="Password" required>

<button>Signup</button>

<p style="text-align:center;">
Already have an account? <a href="login.php">Login</a>
</p>

</form>

<?php echo $msg; ?>

</div>
</div>

</body>
</html>