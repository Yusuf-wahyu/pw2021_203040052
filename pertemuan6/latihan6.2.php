<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
 pertemuan 6 tanggal 12 maret 2021
 mempelajari array associative-->



<?php

// // $mahasiswa = [
// ["Mochammad raffi ramadhan", "203040051", "Teknik Informatika", "raffiramadhan285@gmail.com"],
// ["Yusuf wahyu syahroni", "203040052", "Teknik Informatika", "yusufwahyusyahroni@gmail.com"]
// ];

// Array Associative
$mahasiswa = [
    [
        "nama" => "mochamad raffi ramadhan",
        "NRP" => "203040051",
        "Jurusan" => "Teknik Informatika",
        "Email" => "raffiramadhan285@gmail.com"
    ],
    [
        "nama" => "yusuf wahyu syahroni",
        "NRP" => "203040052",
        "Jurusan" => "Teknik Informatika",
        "Email" => "yusufwahyusyahroni@gmail.com"
    ]
    ];

    echo $mahasiswa[1]["Email"];
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
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["NRP"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>