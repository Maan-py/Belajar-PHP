<?php

// cek apakah tidak ada data di $_GET
if( !isset($_GET))

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spesifikasi Komputer</title>
</head>
<body>
    
<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
    <li><?= $_GET["processor"]; ?></li>
    <li><?= $_GET["ram"]; ?></li>
    <li><?= $_GET["vga"]; ?></li>
    <li><?= $_GET["monitor"]; ?></li>
</ul>

<a href="latihan2.php">Kembali ke daftar PC</a>

</body>
</html>