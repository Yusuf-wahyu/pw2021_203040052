<?php 
/*
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan 2 tanggal 12 februari 2021
mengenai sintaks PHP


pengerjaan ulang tanggal 19 februari dikarenakan komputer saya terkena virus

*/
?>

<?php
// standar output
// echo,print
// print_r
// var_dump

// penulisan sintaks PHP
// 1. PHP didalam HTML
// 2.HTML didalam PHP

// variabel dan tipe data
// variabel
// tidak boleh diawali dengan angka,tapi boleh mengandung angka
$nama = "yusuf wahyu syahroni";
echo 'halo,nama saya $nama';

// operator
// aritmatika
// + - * / %

$x = 10;
$y = 20;
echo $x * $y;

// penggabung string / concatenation / concat
// .
$nama_depan = "yusuf";
$nama_belakang = "wahyu";
echo $nama_depan . " " . $nama_belakang;

// operator assigment
// =, +=, /*=, %=, .=
$x = 1;
$x -= 5;
echo $x;
$nama = "yusuf";
$nama = " ";
$nama = "wahyu";

// operator perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
var_dump(1 == 1);


//operator  identitas 
// ===, !==
var_dump( === "1")

// operator logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
var_dump($x < 20 || $x % 2 == 0);


?>