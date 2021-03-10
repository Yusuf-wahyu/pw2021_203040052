<!-- 
yusuf wahyu syahroni
203040052
https://github.com/Yusuf-wahyu/pw2021_203040052
pertemuan praktikum ke 2 tanggal 5 maret 2021
shift jumat jam 10.00 - 11.00-->

<?php

function gantiStyle($tulisan, $style1, $style2){
    echo "
        <div style='$style1'> 
            <p  style='$style2'> $tulisan </p>
        </div>
    ";
}


echo gantiStyle( 
    "Selamat Datang di Praktikum PW", 
    "border: 1px solid; box-shadow: 0px 1px 10px 2px;", 
    "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
);

?>