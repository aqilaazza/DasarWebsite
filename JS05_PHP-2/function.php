<?php

function perkenalan($nama, $salam="Assalamualaikum") { //membuat fungsi, memberikan paramerter pada sebuah fungsi
    echo "$salam".", ";
    echo "Perkenalkan, nama saya ".$nama ."<br/>";
    echo "Senang berkenalan dengan anda <br/>";
}

//memanggil fungsi yang telah dibuat
perkenalan("Hamdana", "Halo");

echo "<hr>";

$saya = "Aqila";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>