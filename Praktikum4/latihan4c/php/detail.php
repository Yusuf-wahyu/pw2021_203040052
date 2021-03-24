<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'function.php';
    $id = $_GET ['id'];
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKO SEMBAKO</title>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="../assets/img/<?= $mhs["img"]; ?>" ; alt="">
        </div>
    <div class = "keterangan">
        <p>NAMA BARANG  :  <?= $mhs["Nama_barang"]; ?></p>
        <p>KUALITAS     :  <?= $mhs["kualitas"]; ?></p>
        <p>KETERANGAN   :  <?= $mhs["keterangan"]; ?></p>
        <p>HARGA        :<?= $mhs["harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>