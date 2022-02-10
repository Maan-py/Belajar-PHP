<?php 

// Array
// variabel yang dapat memiliki banyak nilai
// Elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan antara key dan value
// Key-nya adalah index, yang dimulai dari 0

// Membuat array cara lama
$hari = array("Senin", "Selasa", "Rabu");


// Membuat array cara baru
$bulan = ["Januari", "Februari", "Maret", "April"];
$arr1 = [123, "tulisan", false];

// Menampilkan array
// var_dump() / print_r()

// var_dump($hari);

// echo "<br>";

// print_r($bulan);

// echo "<br>";

// Menampilkan satu elemen pada array
// echo $bulan[1];

// Menambahkan satu elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";

echo "<br>";
var_dump($hari);

?>