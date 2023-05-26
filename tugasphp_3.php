<?php
for ($i = 0; $i <= 8; $i++) { //code untuk loop pertama yang dimulai dari 0 dan berjalan sampai angka 8. variabel $i digunakan untuk menghitung nilai loop pertama
    for ($j = 0; $j <= $i; $j++) { // code untuk loop kedua yang dimulai dari 0 dan berjalan sampai variabel $i. variabel $j digunakan untuk menghitung nilai loop kedua
        echo $j; // code untuk menampilkan setiap iterasi dari loop kedua, maka nilai variabel $j akan ditampilkan
    }
    echo "<br>"; // code ini digunakan setelah loop kedua selesai dijalankan, untuk membuat baris baru
}
