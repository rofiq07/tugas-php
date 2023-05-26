<?php
$nama = "Bintang";
$berat_badan = 48; // satuan kilogram
$tinggi_badan = 1.65; // satuan meter

$bmi = $berat_badan / pow($tinggi_badan, 2); //rumus menghitung BMI

if ($bmi < 18.5) {
  echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk kurus";
} elseif ($bmi >= 18.5 && $bmi <= 24.9) {
  echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk sedang";
} else {
  echo "Halo, $nama. Nilai BMI anda adalah $bmi, anda termasuk gemuk";
}
?>