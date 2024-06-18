<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <form action="POST" action="">
            <input type="number" placeholder="tinggi badan" name="tinggi">
            <br>
            <input type="number" placeholder="berat badan" name="berat">
            <br>
            <input type="submit" value="hitung">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST METHOD"] == "POST"){
        $tinggi=$_POST[tinggi];
        $berat=$_POST[berat];
    }
?>