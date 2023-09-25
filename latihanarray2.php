<?php

$a1 = ['kode' => '0011', 'buah' => 'Apel', 'harga' => 25000, 'jumlah' => 5];
$a2 = ['kode' => '0012', 'buah' => 'Mangga', 'harga' => 26000, 'jumlah' => 6];
$a3 = ['kode' => '0013', 'buah' => 'Pisang', 'harga' => 27000, 'jumlah' => 7];
$a4 = ['kode' => '0014', 'buah' => 'Jambu', 'harga' => 35000, 'jumlah' => 8];
$a5 = ['kode' => '0015', 'buah' => 'Durian', 'harga' => 45000, 'jumlah' => 8];
$a6 = ['kode' => '0016', 'buah' => 'Salak', 'harga' => 55000, 'jumlah' => 9];
$a7 = ['kode' => '0017', 'buah' => 'Nanas', 'harga' => 65000, 'jumlah' => 10];

$ar_buah = [$a1, $a2, $a3, $a4, $a5, $a6, $a7];

$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah', 'Harga Kotor', 'Diskon', 'Harga Bayar'];
$jumlahTransaksi = count($ar_buah);
$jumlahHarga = array_column($ar_buah, 'harga');
$hargaTotal = array_sum($jumlahHarga);
$hargaTertinggi = max($jumlahHarga);
$hargaTerendah = min($jumlahHarga);
$hargaRataRata = $hargaTotal / $jumlahTransaksi;

$keterangan = [
    'Harga Total' => number_format($hargaTotal, 0, ',', '.'),
    'Harga Tertinggi' => number_format($hargaTertinggi, 0, ',', '.'),
    'Harga Terendah' => number_format($hargaTerendah, 0, ',', '.'),
    'Rata - Rata Harga' => number_format($hargaRataRata, 0, ',', '.'),

]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Array Looping</title>
</head>

<body>
    <h3 align="center">Daftar Buah-Buahan</h3>
    <table width="100%" cellpadding="10" cellspacing="2" border="1">
        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) : ?>
                    <td><?= $judul; ?></td>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ar_buah as $i => $buah) : ?>
                <?php
                $bruto = $buah['harga'] * $buah['jumlah'];
                $diskon = $buah['buah'] == 'Jambu' && $buah['jumlah'] >= 4 ? 0.2 : 0.1;
                $hargaDiskon = $diskon * $bruto;
                $hargaBayar = $bruto - $hargaDiskon;
                ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $buah['kode']; ?></td>
                    <td><?= $buah['buah']; ?></td>
                    <td><?= $buah['harga']; ?></td>
                    <td><?= $buah['jumlah']; ?></td>
                    <td>Rp.<?= number_format($bruto, 0, ',', '.'); ?></td>
                    <td><?= $hargaDiskon; ?></td>
                    <td>Rp.<?= number_format($hargaBayar, 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <?php foreach ($keterangan as $ket => $hasil) : ?>
                <tr bgcolor="aqua">
                    <td colspan="2"><b><?= $ket; ?></b></td>
                    <td colspan="6" align="center">Rp.<?= $hasil; ?></td>
                </tr>
            <?php endforeach; ?>
        </tfoot>
    </table>
</body>

</html>