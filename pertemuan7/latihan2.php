<?php

// SUPERGLOBALS
// Variable global milik php
// merupakan array associative

// echo $_SERVER[ "SERVER_NAME"];

//$_GET

$computer = [

             [

              "processor" => "AMD", 
              "ram" => "8GB",
              "vga" => "NVIDIA",
              "monitor" => "BenQ",
              "gambar" => "amd.jpeg"

             ],

             [

              "processor" => "Intel", 
              "ram" => "16GB",
              "vga" => "Radeon",
              "monitor" => "Samsung",
              "gambar" => "intel.jpg"

             ]

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Spesifikasi Komputer</h1>

    <ul>
    <?php foreach( $computer as $pc ) : ?>
        <a href="latihan3.php?processor=<?= $pc["processor"]; ?>&ram=<?= $pc["ram"]; ?>&vga=<?= $pc["vga"]; ?>&monitor=<?= $pc["monitor"]; ?>&gambar=<?= $pc["gambar"]; ?> "><li><?= $pc["processor"]; ?></li></a>
    <?php endforeach; ?>
    </ul>

</body>
</html>