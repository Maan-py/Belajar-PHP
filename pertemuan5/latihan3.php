<?php 

$mahasiswa = [["Muhammad Luqmaan", "08124004", "Teknik Informatika", "mluqmaan22@gmail.com"], ["Muhammad Maulana", "08517224", "Teknik Informatika", "maulana22@gmail.com"]];

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
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>

    <ul>
        <li> Nama : <?= $mhs[0]; ?> </li>
        <li> NPM : <?= $mhs[1]; ?> </li>
        <li> Jurusan : <?= $mhs[2]; ?> </li>
        <li> E-mail : <?= $mhs[3]; ?> </li>
    </ul>

    <?php endforeach; ?>

</body>
</html>