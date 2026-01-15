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
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Student List</h2>

<table border="1" width="100%" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Course</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['roll_no']}</td>
            <td>{$row['course']}</td>
            <td>
              <a href='delete_student.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
?>

</table>

<div class="link">
    <a href="dashboard.php">Back to Dashboard</a>
</div>

</div>
</body>
</html>
