<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 2 tanggal 5 maret 2021
shift jumat jam 10.00 - 11.00-->

<?php

$jawabanIsset = "Isset adalah =  Fungsi isset digunakan untuk memeriksa apakah suatu variabel sudah diatur atau belum.Fungsi isset akan menghasilkan nilai true jika sebuah variabel telah didefenisikan, dan false jika variabel tersebut belum dibuat <br><br>";
$jawabanEmpty = "Empty adalah = berfungsi sebagai penanda suatu kondisi,Seperti misalnya lupa mengisikan data atau ada yang terlewatkan. Dengan perintah empty ini, akan dicek apakah datanya sudah terisi atau malah kosong. Dengan kondisi seperti itu, kita bisa meminimalisir kesalahan klien. Sehingga apabila memang datanya kosong, maka akan dimunculkan peringatan";


    $GLOBALS["isset"] = $jawabanIsset;
    $GLOBALS["empty"] = $jawabanEmpty;


    function latihan($style)
    {
        echo "<div class = $style>
        <h1>" . $GLOBALS['isset'] . "</h1>
        <h1>" . $GLOBALS['empty'] . "</h1>
        </div>";
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <title>Latihan-2-B_203040052</title>
        <style>
            .center {
                border: 1px solid black;
                padding-left: 10px;
                font-size: 10px;  
            }
        </style>
    </head>
    
    <body>
        <?php
        echo latihan("center");
        ?>
    </body>
    
    </html>

