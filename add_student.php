<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
include "db.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Add Student</h2>

<form method="post">
    Name:
    <input type="text" name="name" required>

    Roll No:
    <input type="text" name="roll" required>

    Course:
    <input type="text" name="course" required>

    <button type="submit" name="add">Add Student</button>
</form>

<div class="link">
    <a href="dashboard.php">Back to Dashboard</a>
</div>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $course = $_POST['course'];

    $query = "INSERT INTO students (name, roll_no, course)
              VALUES ('$name', '$roll', '$course')";

    mysqli_query($conn, $query);
    echo "<p style='text-align:center;color:green;'>Student Added!</p>";
}
?>

</div>
</body>
</html>
