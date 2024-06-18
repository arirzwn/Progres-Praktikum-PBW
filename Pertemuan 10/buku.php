<?php

include_once ("./connect.php");

$query = mysqli_query($db, "SELECT * FROM buku");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>

<body>
    <h1>Daftar Buku</h1>


    <table border="1">

        <tr>
            <td>Nama</td>
            <td>ISBN</td>
            <td>Unit</td>
            <td>Penerbit</td>
            <td>Action</td>
        </tr>


        <?php foreach ($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td><?php echo $buku["penerbit"] ?></td>
                <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>Edit</a>
                    <a href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>Hapus</a>
                </td>
            </tr>

        <?php } ?>

    </table>

    <br>
    <a href="tambah-buku.php">Tambah buku</a>
    <br>
    <a href="index.php">Kembali ke halaman utama</a>
</body>

</html>