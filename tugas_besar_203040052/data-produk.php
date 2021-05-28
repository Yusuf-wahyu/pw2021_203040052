<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data kategori</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
   <!-- header -->
   <header>
       <div class="container">
            <h1><a href="dashboard.php">PASOL</a></h1>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="logout.php">logout</a></li>
                </ul>
       </div>
   </header>

   <!-- content -->

   <div class="section">
        <div class="container">
            <h3>Data Produk</h3>
            <div class="box">
                <p><a href="tambah-produk.php">Tambah data</a></p>
                <table border="1" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th width="60px">No</th>
                            <th>Kategori</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th width="140px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $produk = mysqli_query($conn, "SELECT *FROM tb_product ORDER BY product_id DESC");
                            if(mysqli_num_rows($produk) > 0){
                            while($row = mysqli_fetch_array($produk)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['category_name'] ?></td>
                            <td><?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['product_price'] ?></td>
                            <td><?php echo $row['product_description'] ?></td>
                            <td><img src="produk/<?php echo $row['product_image']?>"></td>
                            <td><td><?php echo $row['product_status'] ?></td></td>
                            <td>
                                <a href="edit-produk.php?idp=<?php echo $row ['product_id']?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['product_id']?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php }}else{?>
                           <tr>
                               <td colspan="8"> Tidak ada data</td>
                           </tr>

                            <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
   </div>
<!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2021 - PASOL.</small>
        </div>
    </footer>

</body>
</html>