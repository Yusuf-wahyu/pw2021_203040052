
<!-- 
yusuf wahyu syahroni
203040052
shift jumat jam 10.00 - 11.00-->
<?php
    require 'functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

    if (isset($_GET['id'])) {
        $mahasiswa = id ($_GET['keyword']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6a</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="add">
        <a href="tambah.php"><button class="waves-effect waves-light btn">Tambah Data</button></a>
    </div>
    <br>
    <form class="id" action="" method="GET">
        <input type="text" name="mahasiswa" autofocus placeholder="Cari barang.." autocomplete="off">
        <button type="submit" name="cari" class="waves-effect waves-light btn">Cari!</button>
        <button type="submit" class="waves-effect waves-light btn">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
        </button>
    </form>
    <br>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #00adb5;">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Gambar</th>
            <th scope="col">Kualitas</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Harga</th>
        </tr>
    <?php if (empty($mahasiswa)) : ?>
        <tr>
            <td colspan="7">
                <h1>Barang tidak ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php $i = 1;?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?=$mhs['id'] ?>"><button class="btn btn-secondary">Ubah</button></a>
                    <a href="hapus.php?id=<?=$mhs['id'] ?>" onclick="return confirm('Hapus Data??')"><button class="btn btn-secondary">Hapus</button></a>
                </td>
                <td> <img src="assets/img/<?= $mhs["img"]; ?>"></td>
                <td><?= $mhs["Nama_barang"]; ?></td>
                <td><?= $mhs["kualitas"]; ?></td>
                <td><?= $mhs["keterangan"]; ?></td>
                <td><?= $mhs["harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </table>
    <br>
    <br>
    <button class="btn btn-info"><a href="logout.php" style="text-decoration: none; color: white;">Logout</a></button>
</body>
</html>