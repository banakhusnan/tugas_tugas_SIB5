<?php

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];
$ar_buah[] = 'naga';

echo "<br>cetak data array menggunakan looping foreach";
foreach ($ar_buah as $id => $buah) {
    echo "<br>key array buah : $id";
}

foreach ($ar_buah as $buah) {
    echo "<br>Data buah : $buah";
}
