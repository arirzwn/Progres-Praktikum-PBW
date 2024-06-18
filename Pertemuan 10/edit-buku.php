<?php

include_once ("./connect.php");

$id = $_GET["id"];

$get_buku = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");

$buku = mysqli_fetch_assoc($get_buku);


if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];
    $penerbit = $_POST['penerbit'];

    $query = mysqli_query($db, "UPDATE buku SET nama='$nama', isbn='$isbn', unit='$unit', penerbit='$penerbit' WHERE id=$id");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit buku</title>
</head>

<body>
    <h1>Form edit buku</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $buku['nama'] ?>" type="text" id="nama" name="nama">
        <br>
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" value=<?php echo $buku['isbn'] ?>>
        <br>
        <label for="unit">Unit</label>
        <input type="number" id="unit" name="unit" value=<?php echo $buku['unit'] ?>>
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" id="penerbit" name="penerbit" value=<?php echo $buku['penerbit'] ?>>

        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="buku.php">Kembali ke halaman buku</a>

</body>

</html>