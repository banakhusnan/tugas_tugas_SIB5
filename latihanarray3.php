<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 Array</title>
</head>

<body>
    <?php
    $m1 = ['nim' => '0111111', 'nama' => 'Andi Setyo', 'nilai' => 95];
    $m2 = ['nim' => '0111112', 'nama' => 'Rafael', 'nilai' => 80];
    $m3 = ['nim' => '0111113', 'nama' => 'Ali Hakim', 'nilai' => 78];
    $m4 = ['nim' => '0111114', 'nama' => 'Ari', 'nilai' => 76];
    $m5 = ['nim' => '0111115', 'nama' => 'Ani', 'nilai' => 86];
    $m6 = ['nim' => '0111116', 'nama' => 'Aji', 'nilai' => 50];
    $m7 = ['nim' => '0111117', 'nama' => 'Budi Santoso', 'nilai' => 20];
    $m8 = ['nim' => '0111118', 'nama' => 'Candra', 'nilai' => 30];
    $m9 = ['nim' => '0111119', 'nama' => 'Dewi', 'nilai' => 70];
    $m10 = ['nim' => '01111110', 'nama' => 'Elisa', 'nilai' => 65];

    $ar_judul = ['No', 'NIM', 'Nama Mahasiswa', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

    $kolomNilai = array_column($mahasiswa, 'nilai');
    $jumlahMahasiswa = count($mahasiswa);
    $totalNilai = array_sum($kolomNilai);

    $nilaiMax = max($kolomNilai);
    $nilaiMin = min($kolomNilai);
    $nilaiAvg = $totalNilai / $jumlahMahasiswa;

    $results = [
        'Nilai Tertinggi' => $nilaiMax,
        'Nilai Terendah' => $nilaiMin,
        'Nilai Rata-Rata' => $nilaiAvg,
        'Jumlah Mahasiswa' => $jumlahMahasiswa,
        'Jumlah Nilai Mahasiswa' => $totalNilai,
    ]
    ?>
    <h3 align="center">Daftar Nilai Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
                <?php foreach ($ar_judul as $judul) : ?>
                    <th><?= $judul; ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $i => $mhs) : ?>
                <?php
                if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade = 'A';
                else if ($mhs['nilai'] >= 65 && $mhs['nilai'] <= 84) $grade = "B";
                else if ($mhs['nilai'] >= 55 && $mhs['nilai'] <= 64) $grade = "C";
                else if ($mhs['nilai'] >= 35 && $mhs['nilai'] <= 54) $grade = "D";
                else if ($mhs['nilai'] >= 0 && $mhs['nilai'] <= 34) $grade = "E";
                else $grade = ' ';

                switch ($grade) {
                    case "A":
                        $predikat = "Sempurna";
                        break;
                    case "B":
                        $predikat = "Baik";
                        break;
                    case "C":
                        $predikat = "Cukup";
                        break;
                    case "D":
                        $predikat = "Kurang";
                        break;
                    case "E":
                        $predikat = "Buruk";
                        break;

                    default:
                        $predikat = " ";
                        break;
                }
                ?>
                <tr>
                    <td><?= $i + 1; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nilai']; ?></td>
                    <td><?= $mhs['nilai'] >= 60 ? 'Lulus' : 'Tidak Lulus' ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $predikat; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <?php foreach ($results as $judul => $result) : ?>
                <tr bgcolor="yellow">
                    <td colspan="2"><b><?= $judul; ?></b></td>
                    <td colspan="5" align="center"><?= $result; ?></td>
                </tr>
            <?php endforeach; ?>
        </tfoot>
    </table>
</body>

</html>