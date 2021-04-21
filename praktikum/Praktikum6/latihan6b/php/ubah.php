<?php 
require 'functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h3>Form Ubah Data Produk</h3>
    <form class="form" action="" method="post">
                <input type="hidden" name="id" value="<?=$mhs['id']; ?>">

                
        <ul>
            <li>
                <label for="nrp">Nama barang :</label><br>
                <input type="text" name="Nama_barang" id="Nama_barang" required value="<?=$mhs['Nama_barang']; ?>"><br><br>
            </li>
            <li>
                <label for="keterangan">Keterangan :</label><br>
                <input type="text" name="keterangan" id="nama" required value="<?=$mhs['keterangan']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="harga" name="harga" id="harga" required value="<?=$mhs['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <select name="harga" id="harga" required value="<?=$mhs['harga']; ?>">
                <option value="" disabled selected>---------- Harga Produk ----------</option>
                    <option value="Beras">Beras</option>
                    <option value="cabai Kering">Cabai kering</option>
                    <option value="Garam Cap Kapal">Garam Cap Kapal</option>
                    <option value="Gula Merah">Gula Merah</option>
                    <option value="Minyak Goreng Bimoli">Minyak Goreng Bimoli</option>
                    <option value="Gula Pasir">Gula Pasir</option>
                    <option value="Mentega Blueband">mentega</option>
                    <option value="Mie indomie Jumbo">mentega</option>
                    <option value="Telur Ayam Negri Renkones">mentega</option>
                    <option value="Terigu Segitiga Biru">Terigu</option>
                </select>
            </li>
            <br>
            <li>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="img" id="img" required value="<?=$mhs['img']; ?>"><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="ubah">Ubah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>