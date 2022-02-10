<?php 

// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / Epoch Time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();
// echo date("l, time"());

// ?>

<?php 
    function salam($waktu, $nama) {
        return "Selamat $waktu, $nama!";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Muhammad Luqmaan"); ?></h1>
</body>
</html>