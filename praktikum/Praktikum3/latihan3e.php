<?php 
$buku = [
    [
        "nama" => "Beras Kristal Pulen",
        "gambar" => "beras.jpg",
        "kualitas" => "GRADE A",
        "keterangan" => "Harga berikut merupakan harga Perkilo",
        "harga" => 17000,
        
    ],
    [
        "nama" => "Cabai Kering",
        "gambar" => "cabai.jpg",
        "kualitas" => "GRADE B+",
        "keterangan" => "Harga berikut merupakan Harga per 1 ons",
        "harga" => 10000,
        
    ],
    [
        "nama" => "Garam cap kapal",
        "gambar" => "garam.jpg",
        "kualitas" => "GRADE C",
        "keterangan" => "Harga berikut merupakan Harga per satu bungkus",
        "harga" => 1500,
       
    ],
    [
        "nama" => "Minyak Goreng Bimoli",
        "gambar" => "minyak.jpg",
        "kualitas" => "GRADE B+",
        "keterangan" => "Harga berikut merupakan Harga perbotol satu Liter",
        "harga" => 49000,
        
    ],
    [
        "nama" => "Gula Merah",
        "gambar" => "gula merah.jpg",
        "kualitas" => "GRADE B+",
        "keterangan" => "Harga berikut merupakan Harga per satu kilo",
        "harga" => 19000,
        
    ],
    [
        "nama" => "Gula Pasir",
        "gambar" => "gula.jpg",
        "kualitas" => "GRADE A",
        "keterangan" => "Harga berikut merupakan Harga per satu kilo",
        "harga" => 13500,
        
    ],
    [
        "nama" => "Mentega Blueband",
        "gambar" => "mentega.jpg",
        "kualitas" => "GRADE B+",
        "keterangan" => "Harga berikut merupakan Harga per satu bungkus (400gram)",
        "harga" => 10000,
        
    ],
    [
        "nama" => "Mie Indomie Jumbo",
        "gambar" => "mie.jpg",
        "kualitas" => "pokoknya Mie ini Mie ter enak sedunia",
        "keterangan"=> "Harga berikut merupakan Harga per satu dus",
        "harga" => 130000,
        
    ],
    [
        "nama" => "Telur Ayam Negri Renkoles",
        "gambar" => "telur.jpg",
        "kualitas" => "GRADE A+",
        "keterangan"=> "Harga berikut merupakan Harga per satu kilo",
        "harga" => 36000,
       
    ],
    [
        "nama" => "Terigu Segitiga Biru",
        "gambar" => "terigu.jpg",
        "kualitas" => "GRADE A",
        "keterangan" => "Harga berikut merupakan Harga per Satu kilo",
        "harga" => 15000,
        
    ],
]
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
        <?php foreach($buku as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td><?= $b["nama"]; ?></td>
            <td>
                <img src="img/<?= $b["gambar"]; ?>">
            </td>
            <td><?= $b["kualitas"]; ?></td>
            <td><?= $b["keterangan"]; ?></td>
            <td><?= $b["harga"]; ?></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>