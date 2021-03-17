
<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
 pertemuan 5 tanggal 5 maret 2021
 mempelajari aray-->


<?php
$mahasiswa = [
["Muhammad raffi ramadhan", "203040051", "Teknik Informatika", "rafiramadhan285@gmail.com"],
["Yusuf wahyu syahroni", "203040052", "Teknik Informatika", "yusufwahyusyahroni@gmail.com"],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>