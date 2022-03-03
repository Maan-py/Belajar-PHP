<?php 

session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// pagination
// kongigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count( query("SELECT * FROM spesifikasi") );
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$spesifikasi = query("SELECT * FROM spesifikasi LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $spesifikasi = cari($_POST["keyword"]);
}

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

    <a href="logout.php">Log out</a>
    
    <h1>Daftar Spesfikasi</h1>

    <a href="tambah.php">Tambah data spesifikasi</a>

    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <br>

    <!-- navigasi -->

    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo</a>
    <?php endif; ?>


    <?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif;?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo</a>
    <?php endif; ?>


    <br>

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
        <?php foreach( $spesifikasi as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="" width="60"></td>
            <td><?= $row["processor"]; ?></td>
            <td><?= $row["ram"]; ?></td>
            <td><?= $row["vga"]; ?></td>
            <td><?= $row["monitor"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?> 

    </table>

</body>
</html>