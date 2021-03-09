
<!-- yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 1 tanggal 26 februari 2021
latihan 1c  -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan 1c</title>
    <style>
        h3 {
            display: inline-block;
            background-color: salmon;
            text-align: center;
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 100%;
            border: 2px solid black;
            margin: 0px 3px 10px 0px;
        }
    </style>
</head>
<body>
    <?php for ( $a = 1; $a <= 3; $a++ ) : ?>
        <?php for ( $b = 1; $b <= $a; $b++ ) : ?>
            <h3><?= $a; ?></h3>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html> 