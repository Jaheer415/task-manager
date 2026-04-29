<?php
include __DIR__ . '/includes/a.php';
include __DIR__ . '/includes/db.php';

$id = $_GET['id'];
$r = $conn->query("SELECT * FROM t WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$t = $_POST['t'];

$st = $conn->prepare("UPDATE t SET title=? WHERE id=?");
$st->bind_param("si", $t, $id);
$st->execute();

header("Location: dashboard.php");
exit();
}
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
<h2>Edit Task</h2>

<input name="t" value="<?php echo $r['title']; ?>" required>
<button>Update Task</button>

</form>

</div>
</div>

</body>
</html>