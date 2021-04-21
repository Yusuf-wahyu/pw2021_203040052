
<!-- 
yusuf wahyu syahroni
203040052
shift jumat jam 10.00 - 11.00-->


<?php
    require 'php/function.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TOKO SEMBAKO</title>
</head>
<body>
		<?php foreach ($mahasiswa as $mhs) : ?>
                <p class="Nama_barang">
                    <a href="php/detail.php?id=<?= $mhs['id'] ?>">
                        <?= $mhs["Nama_barang"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
</html>