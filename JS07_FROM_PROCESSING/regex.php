<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text = 'This is s Sample Text.';
if(preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "Tidak ada huruf kecil!";
}
?>