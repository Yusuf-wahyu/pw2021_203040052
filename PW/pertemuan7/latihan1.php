<?php 
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040052",
		"nama" => "yusuf wahyu syahroni",
		"email" => "yusufwahyusyahroni@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "yusuf.jpg"
	],
	[
		"nama" => "rafi ramadhan", 
		"nrp" => "203040051",
		"email" => "rafiramadhann@gmail.com",
		"jurusan" => "Tektinik Informatika",
		"gambar" => "rafi.jpg"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>