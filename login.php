<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">


<h2>Login</h2>

<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Login</button>
    <div class="link">
    <a href="register.php">Create new account</a>
    </div>

</form>

<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$u' AND password='$p'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $u;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>
</div>
</body>
</html>
