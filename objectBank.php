<?php
require "Bank.php";

$n1 = new Bank('001', 'Andi', 600000);
$n2 = new Bank('002', 'Ari', 700000);
$n3 = new Bank('003', 'Ani', 800000);
$n4 = new Bank('004', 'Ali', 900000);
$n5 = new Bank('005', 'Aji', 1000000);

echo "<h3 align='center'>" . Bank::BANK . "</h3>";
$n1->cetak();
echo "<br>";
$n2->cetak();
echo "<br>";
$n3->cetak();
echo "<br>";
$n4->cetak();
echo "<br>";
$n5->cetak();
