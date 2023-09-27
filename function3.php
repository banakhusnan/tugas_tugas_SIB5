<?php

function tambah($a, $b)
{
    $c = $a + $b;
    return $c;
}

// Inisiasi fungsi
$x = 10;
$y = 20;

echo "Hasil dari 50 + 30 = " . tambah(50, 30);
echo "<br>Hasil dari $x + $y = " . tambah($x, $y);
