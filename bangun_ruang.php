<?php

//1. Volume Tabung
$phi = 22 / 7; //phi
$r = 6; //jari-jari lingkaran alas tabung
$t = 7; // tinggi tabung
$v = $phi * pow($r, 2) * $t; //rumus volume tabung
echo "Volume tabung : $v cm^3 ";
echo "<br>";

//2. Volume Balok
$p = 5; //panjang balok
$l = 4; // lebar balok
$t = 3; //tinggi 
$v = $p * $l * $t; //rumus volume balok
echo "Volume balok : $v cm^3 ";
echo "<br>";

//3. Volume Bola
$phi = 22 / 7; //phi
$r = 6; //jari-jari
$v = (4 / 3) * $phi * pow($r, 3);
echo "Volume bola : $v cm^3 ";
?>