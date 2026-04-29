<?php
include __DIR__ . '/includes/a.php';
include __DIR__ . '/includes/db.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/s.css">
</head>
<body>

<div class="nav">
<span>Task Manager</span>
<a href="o.php">Logout</a>
</div>

<div class="wrap">

<div class="card">
<form action="at.php" method="POST">
<input name="t" placeholder="Enter a new task..." required>
<button>Add Task</button>
</form>
</div>

<div class="card">
<h3>Your Tasks</h3>

<?php
$u = $_SESSION['u'];
$res = $conn->query("SELECT * FROM t WHERE uid=$u ORDER BY id DESC");

while ($x = $res->fetch_assoc()) {
echo "<div class='task'>
".$x['title']."
<span>
<a href='edit.php?id=".$x['id']."'>Edit</a>
<a href='dt.php?id=".$x['id']."'>Delete</a>
</span>
</div>";
}
?>

</div>

</div>

</body>
</html>