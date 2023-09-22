<?php
    // Ini contoh komentar dalam php
    // echo "Hello World"

    // Latihan membuat variabel
    $namaSiswa = "Budi Santoso";
    $umur = 20;
    $beratBadan = 30.5;
    $_pekerjaan = "Mahasiswa";

    $jari2 = 15;
    define('PHI', 3.14);
    $luas = PHI * $jari2 * $jari2;

    echo "<br>Nama Mahasiswa : " . $namaSiswa; 
    echo "<br>Umur : " . $umur; 
    echo "<br>Berat Badan : " . $beratBadan; 
    echo "<br>Pekerjaan : " . $_pekerjaan; 
?>

<hr>
<br>Siswa 1 : <?php echo $namaSiswa ?>
<br>Umur : <?php echo $umur ?>
<br>Luas jari-jari diatas adalah : <?php echo $luas ?>