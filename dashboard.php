<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Welcome <?php echo $_SESSION['user']; ?></h2>

    <div class="link">
        <a href="add_student.php">➕ Add Student</a>
    </div>

    <div class="link">
        <a href="view_students.php">📋 View Students</a>
    </div>

    <div class="link">
        <a href="logout.php">🚪 Logout</a>
    </div>
</div>

</body>
</html>
