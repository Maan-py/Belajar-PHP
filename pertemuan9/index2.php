<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel spesifikasi / query data spesifikasi
$result = mysqli_query($conn, "SELECT * FROM spesifikasi");

// Ambil data (fetch) spesifikasi dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan array numerik dan array associative 
// mysqli_fetch_object() //  

// while ( $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Spesfikasi</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Processor</th>
            <th>RAM</th>
            <th>VGA</th>
            <th>Monitor</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> | 
                <a href="">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="60"></td>
            <td><?= $row["processor"]; ?></td>
            <td><?= $row["ram"]; ?></td>
            <td><?= $row["vga"]; ?></td>
            <td><?= $row["monitor"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?> 

    </table>

</body>
</html>