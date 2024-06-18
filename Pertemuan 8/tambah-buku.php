<?php

include_once ("./connect.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $isbn = $_POST['isbn'];
    $unit = $_POST['unit'];
    $penerbit = $_POST['penerbit'];

    $query = mysqli_query($db, "INSERT INTO buku VALUES(
        NULL, '$nama', '$isbn', '$unit', '$penerbit'
    )");

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
    <h1>Form tambah data buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
        <br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn">
        <br>
        <label for="unit">Unit</label>
        <input type="number" id="unit" name="unit">
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit">
  
        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="buku.php">Kembali ke halaman buku</a>

</body>

</html>