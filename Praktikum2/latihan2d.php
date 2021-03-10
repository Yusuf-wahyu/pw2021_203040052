<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 2 tanggal 5 maret 2021
shift jumat jam 10.00 - 11.00-->

<?php
function hitungDeterminan($a, $b, $c, $d)
{

    //baris code perhitung detertiminan//
     //menampilkan matriks//

    echo "<table style = 'border-left: 2px solid black; border-right: 2px solid black;' cellspacing= '5' cellpadding='5'>
        <tr>
            <td> $a </td>
            <td> $d </td>
        </tr>
        <tr>
            <td> $b </td>
            <td> $c </td>
        </tr>
        </table>";
    $determinan = (($a * $d) - ($b * $c));
    echo "<p style = padding-top: 3px;><b> Determinan dari matriks tersebut adalah $determinan </b></p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>latihan-2-D_203040052</title>
    <style>
        .count {
            border: 1px solid black;
            padding: 15px;
            color: black;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="count">
        <?php
        hitungDeterminan(1, 2, 3, 4)
        ?>
    </div>
</body>


</html>