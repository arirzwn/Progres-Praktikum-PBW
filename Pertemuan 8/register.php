<?php
    session_start();
    if (isset($_SESSION['email'])) {
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="./register_process.php">

    <label for="email">Email : </label><br>
    <input type="email" id="email" name="email"><br>

    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>

    <input type="submit" value="register">
</form>
</body>
</html>