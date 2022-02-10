<?php 

// $mahasiswa = [
//     ["Muhammad Luqmaan", "0851512673", "mluqmaan22", "Teknik Informatika"],
//     ["Muhammad Luqmaan", "0851512673", "mluqmaan22", "Teknik Informatika"]
// ];

// Array associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri


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
              "vga" => "AMD",
              "monitor" => "Samsung",
              "gambar" => "intel.jpg"

             ]

];

// echo $mahasiswa[0]["nama"];

// echo "<br>";

// echo $mahasiswa[1]["nama"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Spesifikasi PC</h1>

    <?php foreach( $computer as $pc ) : ?>
    <ul>

        <li><img src="img/<?= $pc["gambar"]; ?>"></li>
        <li> Processor: <?= $pc["processor"]; ?> </li>
        <li> RAM: <?= $pc["ram"]; ?> </li>
        <li> VGA: <?= $pc["vga"]; ?> </li>
        <li> Monitor: <?= $pc["monitor"]; ?> </li>

    </ul>
    <?php endforeach; ?>
</body>
</html>