<?php

/* 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan 3 -19 februari 2021
pengerjaan tanggal 25 februari 2021
mempelajari struktur kendali PHP

*/

?>

<?php
// pengulangan
// for
// while
// do white
// foreach, adalah pengulangan khusus array




// penggunaan for
for($i = 0; $i < 5; $i++){
    echo "Hello world <br>";

}


// penggunaan while
while($i < 5) {
    echo "Hello world! <br>";
$i++;
}


// pengulangan do-while
$i = 0;
do{
    echo "hello world! <br>";
$i++;
} while( $i < 5);

?>


<!-- cara pertama -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
    
        <?php
            for( $i = 1; $i <= 3; $i++ ){
                echo "<tr>";
                for($j = 1; $j <= 5; $j++) {
                    echo "<td> $i,$j</td>";
                } 
                echo "</tr>";
            }
        ?>
    
    </table>

</body>




<!-- cara kedua -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>

    <style>
    .warna-baris{
        background-color:silver;
    }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
    
        <?php for ( $i = 1; $i <= 5; $i++)  { ?>
            <?php if ($i % 2 == 0 ) : ?>

            <tr class="warna-baris">
            <?php else : ?>
            <?php end if ?>
                <?php  for ($j = 1; $j = <= 5; $j++)  {  ?>

                    <td> <?php  echo "$i, $j ";  ?></td>

                <?php  }  ?>
            
            </tr>


        <?php  }  ?>
    
    </table>

</body>

</html>