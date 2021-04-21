<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BARANG</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="body" bgcolor="salmon">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $mahasiswa["img"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <td><?= $mhs["Nama_barang"]; ?></td>
        <td><?= $mhs["kualitas"]; ?></td>
        <td><?= $mhs["keterangan"]; ?></td>
        <td><?= $mhs["harga"]; ?></td>
    </div>

        <button class="tombol-kembali" style="text-decoration: none;"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>