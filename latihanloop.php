<?php
for ($x = 0; $x < 10; $x++) {
    echo "<br>Bilangan 1 sampai dengan 10 " . $x + 1;
}

echo "<br>---- Bilangan 10 sampai dengan 1 ----";

for ($y = 10; $y >= 1; $y--) {
    echo "<br>bilangan : $y";
}

echo "<br>---- Perulangan menggunakan while ----";

$j = 1;
while ($j <= 5) {
    echo "<br>Bilangan : $j";
    $j++;
}
