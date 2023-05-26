<?php

//1. Persegi
$sisi = 5; //panjang sisi persegi
$luas = $sisi * $sisi; //rumus luas persegi

echo "Luas Persegi: $luas ";
echo "<br>";


//2. Lingkaran
$jari_jari = 5; //jari-jari lingkaran
$luas = pi() * pow($jari_jari, 2); //rumus luas lingkaran

echo "Luas Lingkaran: $luas ";
echo "<br>";

//3. Jajar Genjang
$alas = 6; //alas jajar genjang
$tinggi = 7; //tinggi jajar genjang
$luas = $alas * $tinggi; //rumus luas jajar genjang

echo "Luas Jajar Genjang: $luas";
echo "<br>";

//4. Persegi Panjang
$panjang = 6; //panjang persegi panjang
$lebar = 5; //lebar persegi panjang
$luas = $panjang * $lebar; //rumus luas persegi panjang

echo "Luas Persegi Panjang: $luas";
echo "<br>";

//5.Segitiga
$alas = 6; //alas segitiga
$tinggi = 7; //tinggi segitiga
$luas = 0.5 * $alas * $tinggi; //rumus luas segitiga

echo "Luas Segitiga: $luas. ";
?>