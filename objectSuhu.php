<?php
require "KonversiSuhu.php";

$celc1 = new KonversiSuhu('Celcius', 25, "Fahrenheit");
$celc2 = new KonversiSuhu('Celcius', 28, "Fahrenheit");

$fahrenheit1 = new KonversiSuhu('Fahrenheit', 21, "Celcius");
$fahrenheit2 = new KonversiSuhu('Fahrenheit', 25, "Celcius");

$rheamur1 = new KonversiSuhu('Celcius', 29, "Rheamur");
$rheamur2 = new KonversiSuhu('Celcius', 27, "Rheamur");

$rheamur3 = new KonversiSuhu('Rheamur', 22, "Celcius");
$rheamur4 = new KonversiSuhu('Rheamur', 24, "Celcius");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 align="center">Konversi Suhu</h1>

    <table>
        <thead>
            <tr>
                <th>Celcius to Fahrenheit</th>
                <th>Fahrenheit to Celcius</th>
                <th>Celcius to Rheamur</th>
                <th>Rheamur to Celcius</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $celc1->mencetak(); ?></td>
                <td><?= $fahrenheit1->mencetak(); ?></td>
                <td><?= $rheamur1->mencetak(); ?></td>
                <td><?= $rheamur3->mencetak(); ?></td>
            </tr>
            <tr>
                <td><?= $celc2->mencetak(); ?></td>
                <td><?= $fahrenheit2->mencetak(); ?></td>
                <td><?= $rheamur2->mencetak(); ?></td>
                <td><?= $rheamur4->mencetak(); ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>