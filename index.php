<?php
require_once "Lingkaran.php";
require_once "PersegiPanjang.php";
require_once "Segitiga.php";

$lingkaran = new Lingkaran(21);
$persegiPanjang = new PersegiPanjang(10, 5);
$segitiga = new Segitiga(10, 15);

$arrayJudul = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];
$arrayBangunDatar = [$lingkaran, $persegiPanjang, $segitiga];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Rumus Keliling dan Luas Bangun Datar</h1>
    <table>
        <thead>
            <tr>
                <?php foreach ($arrayJudul as $judul) : ?>
                    <td><?= $judul; ?></td>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arrayBangunDatar as $no => $bangunDatar) : ?>
                <tr>
                    <td><?= $no + 1; ?></td>
                    <td><?= $bangunDatar->namaBidang(); ?></td>
                    <td><?= $bangunDatar->kelilingBidang(); ?></td>
                    <td><?= $bangunDatar->luasBidang(); ?></td>
                    <td><?= $bangunDatar->kelilingBidang(); ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</body>

</html>