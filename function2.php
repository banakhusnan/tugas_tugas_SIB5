<?php
// Contoh fungsi void atau tidak mengembalikan nilai dan kita buat sendiri

// Deklarasi fungsi
function salam()
{
    echo "<br> Selamat Pagi Teman-teman";
}

function sapa($kawan)
{
    echo "<br> Selamat Pagi $kawan";
}

function kabar($kawan = "Budi")
{
    echo "<br> Hai apa kabar $kawan";
}

// Inisiasi fungsi salam
salam();

// Inisiasi fungsi sapa
$nama = "Deden";
sapa($nama);
sapa("Andi");
kabar();
kabar("Ahmad");

// Fungsi mencetak bilangan prima
function prima($bilangan)
{
    $prima = true;
    for ($i = 2; $i < $bilangan; $i++) {
        if ($bilangan % $i == 0) {
            $prima = false;
            break;
        }
    }
    return $prima;
}

if (prima(12)) {
    echo "<br>Bilangan Prima";
} else {
    echo "<br>Bukan Bilangan Prima";
}
