<?php

include_once ("./connect.php");

$id = $_GET['id'];

$get_staff = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");

$staff = mysqli_fetch_assoc($get_staff);


if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telepon='$telepon', email='$email' WHERE id=$id");

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit staff</title>
</head>

<body>
    <h1>Form edit staff</h1>

    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" value="<?php echo $staff['nama']?>">
        <br>
        <label for="telepon">Telepon</label>
        <input type="number" id="telepon" name="telepon" value=<?php echo $staff['telepon'] ?>>
        <br>
        <label for="telepon">Email</label>
        <input type="text" id="email" name="email" value=<?php echo $staff['email'] ?>>


        <br>
        <br>

        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="staff.php">Kembali ke halaman staff</a>

</body>

</html>