
<!-- 
yusuf wahyu syahroni
203040052
shift jumat jam 10.00 - 11.00-->


<?php 

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit;
    }

require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal ditambahkan!');
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

</head>
<body>
    <h3>Tambah data Sembako</h3>
    <form class="form" action="" method="post" style="background-color: #97a3a3;">
        <ul>
            <li>
                <label for="Nama_barang">Nama Barang :</label><br>
                <input type="text" name="Nama_barang" id="Nama_barang" required><br><br>
            </li>
            <li>
                <label for="kualitas">Kualitas :</label><br>
                <input type="text" name="kualitas" id="kualitas" required><br><br>
            </li>
            <li>
                <label for="keterangan">Keterangan :</label><br>
                <input type="text" name="keterangan" id="keterangan" required><br><br>
            </li>
            <li>
                <label for="harga">Harga:</label><br>
                <select class="browser-default" name="harga" id="harga" required>
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
                        <input type="file" name="img" id="img" required><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>