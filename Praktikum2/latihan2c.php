<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 2 tanggal 5 maret 2021
shift jumat jam 10.00 - 11.00-->


<?php  
 function banyakBola($tumpukan) {
        for ($i =1 ; $i <= $tumpukan; $i++) {
            for ($m = 1; $m <= $i; $m++) {
              echo "<div class='bola'>" . $i . "</div>";
            }
            
          echo "<br>";
        } 
    }
?>
    
    <!doctype html>

    <html lang="eng">
    <head>
      <meta charset="utf-8">
      <title>latihan-2-C_203040052</title>
      <style>
        .bola{
            width: 40px;
            height: 40px;
            display: table-cell;
            text-align: center;
            vertical-align: middle;
            border:1px solid black;
            border-radius: 50%; 
            background: salmon;
        }
      </style>
    </head>
    
    <body>
    <div class="line">
      <?php echo banyakBola(5); ?>
      </div>
    </body>
    </html>