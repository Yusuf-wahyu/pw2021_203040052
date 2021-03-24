
<!-- 
yusuf wahyu syahroni
203040052
shift jumat jam 10.00 - 11.00-->


<?php

require 'php/function.php';
$mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>TOKO SEMBAKO</title>
    </head>
    <body>
        <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kualitas</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
            </tr>
        </thead>
    <tbody>
        <?php $i = 1 ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i ?></td>
            
            <td><?= $mhs["Nama_barang"]; ?></td>
            <td> <img src="assets/img/<?= $mhs["img"]; ?>"></td>
            <td><?= $mhs["kualitas"]; ?></td>
            <td><?= $mhs["keterangan"]; ?></td>
            <td><?= $mhs["harga"]; ?></td>
            
        </tr>
        <?php $i++  ?>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>