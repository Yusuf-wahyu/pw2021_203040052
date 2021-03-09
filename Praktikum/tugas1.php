<!-- yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 1 tanggal 26 februari 2021
tugas 1  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tugas 1</title>
    <style>
        .kotak {
            display: inline-block;
            width: 25px;
            height: 25px;
            border: 1px solid black;
        }

        .biru {
            background-color: lightblue;
        }

        .merah {
            background-color: salmon;
        }
    </style>
</head>
<body>
    <?php for ( $e = 1; $e <= 6; $e++ ) :
          for ( $f = 1; $f <= 6; $f++ ) :

        if ( $e %2==!0 ) :
            if ( $f %2==!0 ) : ?>
                <div class="kotak biru"></div>
        <?php else: ?>
                <div class="kotak merah"></div>
        <?php endif; ?>

        <?php else:
            if ( $f %2==!0 ) : ?>
                <div class="kotak merah"></div>
            <?php else: ?>
                <div class="kotak biru"></div>
            <?php endif; ?>
        <?php endif; ?>

        <?php endfor; ?>
        <br>
    <?php endfor; ?>
</body>
</html>