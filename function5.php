<?php

$ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "TE" => "Teknik Elektro"];
$ar_skill = ["HTML" => 10, "CSS" => 10, "Javascript" => 20, "RWD" => 20, "PHP" => 30, "Laravel" => 40, "Mysql" => 40];
$ar_domisili = ["Jakarta", "Bandung", "Surabaya", "Malang", "Bali", "Lainya"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function 5 PHP</title>
    <style>
        /* Mengatur gaya pada fieldset */
        fieldset {
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            margin: 20px;
        }

        /* Mengatur gaya pada legend */
        legend {
            font-size: 20px;
            font-weight: bold;
        }

        /* Mengatur gaya pada table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        /* Mengatur gaya pada th dan td dalam table */
        th,
        td {
            padding: 8px;
            text-align: left;
        }

        /* Mengatur gaya pada input text */
        input[type="text"] {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Mengatur gaya pada input radio */
        input[type="radio"] {
            margin-right: 5px;
        }

        /* Mengatur gaya pada select */
        select {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Mengatur gaya pada checkbox */
        input[type="checkbox"] {
            margin-right: 5px;
        }

        /* Mengatur gaya pada tombol submit */
        button[name="proses"] {
            background-color: darkblue;
            color: #ccc;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: ease-in-out 0.3s;
        }

        /* Mengatur gaya pada tombol submit saat hover */
        button[name="proses"]:hover {
            background-color: lightblue;
            color: darkblue;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Form Registrasi IT Club</legend>
        <table for="">
            <thead>
                <tr>
                    <th>Form Registrasi</th>
                </tr>
            </thead>
            <tbody>
                <form method="POST">
                    <tr>
                        <td>NIM :</td>
                        <td><input type="text" name="nim" size="30"></td>
                    </tr>
                    <tr>
                        <td>Nama :</td>
                        <td><input type="text" name="nama" size="30"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin :</td>
                        <td>
                            <input type="radio" name="jk" value="laki-laki" size="30">Laki-laki
                            <input type="radio" name="jk" value="perempuan" size="30">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Program Studi :</td>
                        <td>
                            <select name="prodi" id="">
                                <?php foreach ($ar_prodi as $prodi) : ?>
                                    <option><?= $prodi; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Skill Programming :</td>
                        <td>
                            <?php foreach ($ar_skill as $skill => $i) : ?>
                                <input type="checkbox" name="skill[]" value="<?= $skill; ?>"><?= $skill; ?>
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Domisili :</td>
                        <td>
                            <select name="domisili" id="">
                                <?php foreach ($ar_domisili as $domisili) : ?>
                                    <option value="<?= $domisili; ?>"><?= $domisili; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><button name="proses" type="submit">Submit</button></th>
                    </tr>
                </form>
            </tbody>
        </table>
    </fieldset>
</body>

</html>

<?php

if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];

    echo "NIM : $nim <br>";
    echo "Nama : $nama <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Program Studi : $prodi <br>";

    $total = 0;
    foreach ($skill as $skor) {
        $total += $ar_skill[$skor];
    }

    function skill_skor($total)
    {
        if ($total >= 100 && $total <= 170) {
            return "Sangat Baik";
        } elseif ($total >= 60 && $total <= 100) {
            return "Baik";
        } elseif ($total >= 40 && $total <= 60) {
            return "Cukup";
        } elseif ($total >= 0 && $total <= 40) {
            return "Kurang";
        } else {
            return "Tidak Memadai";
        }
    }

    echo "Skill : ";
    foreach ($skill as $skor) {
        echo " $skor,";
    }

    echo "<br>";
    echo "<br>Total Skor : $total";
    echo "<br>Kategori Skor : " . skill_skor($total);
}
?>