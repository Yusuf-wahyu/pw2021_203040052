<!-- yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052.git
pertemuan 4 tanggal 26 februari 2021
mengenai function -->



<?php
function salam($waktu,$nama) {
    return "Selamat Datang,$waktu, $nama!";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Latihan Function</title>

</head>
<body>
    <h1><?php= salam("pagi","yusuf"); ?> </h1>
</body>
</html>