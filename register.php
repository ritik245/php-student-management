<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">


<h2>Register</h2>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="register" >Register</button>
    <div class="link">
    <a href="login.php">Already have an account? Login</a>
</div>

</form>

<?php
include "db.php";

if (isset($_POST['register'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $query = "INSERT INTO users (username, password) VALUES ('$u', '$p')";
    mysqli_query($conn, $query);

    echo "Registered successfully!";
}
?>
</div>
</body>
</html>
