<?php 
//  pertemuan 2 - PHP Dasar
//  Sintaks PHP

// Standar output
// echo, print
    echo "Muhammad Luqmaan";    
    print "Muhammad Luqmaan";

// print_r
    print_r("Muhammad Luqmaan");

// var_dump
    var_dump("Muhammad Luqmaan");

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
    

// 2. HTML di dalam PHP

// Variabel dan tipe data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
    $nama = "Muhammad Luqmaan";

    echo "Halo, nama saya $nama";

// penggabung string / concatenation / concat
// .
    $nama_depan = "Muhammad";
    $nama_belakang = "Luqmaan";
    echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, /=, *=, .=
    $x =1;
    $x += 5;

    echo $x;

    $nama = "Muhammad";
    $nama .= " ";
    $nama .= "Luqmaan";

    echo $nama;

// Perbandingan
//<, >, <=, >=, ==, !=
    var_dump(1 == "1");


// Identitas
// ===, !==
    var_dump(1 === "1");

// Logika
// &&, ||, !
    $x = 10;
    var_dump($x < 20 && $x % 2 == 0);

?>