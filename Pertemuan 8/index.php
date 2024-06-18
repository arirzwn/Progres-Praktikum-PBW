<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>

<body>
    <h1>Aplikasi perpustakaan</h1>
    <a href="buku.php">Lihat Daftar Buku</a>
    <br>
    <a href="staff.php">Lihat Daftar staff</a>

    <form action="logout_process.php">
        <button type="submit">Logout</button>
    </form>

</body>
</html>