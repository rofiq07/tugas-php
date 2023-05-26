<?php
for ($i = 10; $i > 0; $i--) { //code untuk loop pertama dengan variabel $i yang diinisialisasi dengan nilai 10. loop akan terus berjalan selama nilai variabel $i lebih besar dari 0. setiap loop berjalan nilai $i akan dikurangi 1.
    for ($a = 0; $a < $i; $a++) { // code untuk loop kedua dengan variabel $a yang diinisialisasi dengan nilai 0. loop akan berjalan selama nilai variabel $a kurang dari variabel $i. setiap loop berjalan, nilai $a akan bertambah 1.  
        echo "*"; //code untuk menampilkan atau mencetak karakter * menggunakan fungsi echo. karena loop kedua berjalan sebanyak $i, maka karakter * aka dicetak sebanyak $i kali. 
    }
    echo "<br>"; // code ini digunakan setelah loop kedua selesai dijalankan, untuk membuat baris baru
}
?>