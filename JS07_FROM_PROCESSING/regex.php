<?php
$pattern = '/[a-z]/'; //cocokkan huruf kecil
$text = 'This is s Sample Text.';
if(preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>";
} else {
    echo "Tidak ada huruf kecil!";
}

echo "<br><br>";
$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
$text = 'There are 123 apples';
if(preg_match($pattern, $text, $matches)) {
    echo "Text : ".$text."<br>";
    echo "Cocokkan : " . $matches[0]. "<br>";
} else {
    echo "Tidak ada yang cocok";
}

echo "<br><br>";
$pattern = '/apple/'; 
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "Sebelum : " . $text. "<br>";
echo "Setelah : " . $new_text; 

echo "<br><br>";
$pattern = '/go*d/'; // cocokan "god", "good", "goood", dsb
$text = 'God is good.';
echo "Teks : " . $text . "<br>"; 
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan : "  .$matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";
$pattern = '/go?d/i'; // coocokkan "god", "good", "goood", dsb
$text = "god is good.";
echo "Teks : " . $text. "<br>"; 
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}

echo "<br><br>";
$pattern = '/go{1,3}d/i'; // coocokkan "god", "good", "goood", dsb
$text = 'god is good.';
echo "Teks : " . $text . "<br>"; 
if(preg_match($pattern, $text, $matches)) {
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}
?>