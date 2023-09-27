<?php
$str = "Belajar PHP di Kampus Merdeka";
echo $str;


// Huruf berubah menjadi kapital
$str = strtoupper($str);
echo "<br>$str";

// Huruf berubah menjadi kecil
$str = strtolower($str);
echo "<br>$str";

// Mengurutkan dari a-z
$ar_buah = ["pepaya", "Mangga", "Pisang", "Jambu", "Apel"];
sort($ar_buah);
foreach ($ar_buah as $buah) {
    echo "<br>$buah";
}

echo "<br>";

// Mengurutkan dari z-a (Terbalik/reverse)
arsort($ar_buah);
foreach ($ar_buah as $buah) {
    echo "<br>$buah";
}
