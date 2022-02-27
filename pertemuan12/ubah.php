<?php

require "functions.php";

// ambil data di URL
$id = $_GET["id"];

// query data spesifikasi berdasarkan id
$spk = query("SELECT * FROM spesifikasi WHERE id = $id")[0];


// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // // ambil data dari tiap elemen dalam form
    // $processor = $_POST["processor"];
    // $ram = $_POST["ram"];
    // $vga = $_POST["vga"];
    // $monitor = $_POST["monitor"];
    // $gambar = $_POST["gambar"];

    // query insert data
    // $query = "INSERT INTO spesifikasi
    //             VALUES
    //             ('', '$processor', '$ram', '$vga', '$monitor', '$gambar')
    //             ";
    // mysqli_query($conn, $query);

    // cek apakah data berhasil di tambahkan atau tidak
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Diubah!')
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!')
                document.location.href = 'index.php';
            </script>
            ";
    }
    // if( mysqli_affected_rows($conn) > 0 ) {
    //     echo "Data Berhasil Ditambahkan!";
    // } else {
    //     echo "Data Gagal Ditambahkan! <br>";
    //     echo mysqli_error($conn);
    // }

}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data spesifikasi  </title>
</head>
<body>
    <h1>Ubah data spesifikasi</h1>

    <form action="" method="post">

        <input type="hidden" name="id" value="<?= $spk["id"] ?>">
        <ul>
            <li>
                <label for="processor">Processor :</label>
                <input type="text" name="processor" id="processor" required value="<?= $spk["processor"] ?>">
            </li>
            <li>
                <label for="ram">RAM :</label>
                <input type="text" name="ram" id="ram" value="<?= $spk["ram"] ?>">
            </li>
            <li>
                <label for="vga">VGA :</label>
                <input type="text" name="vga" id="vga" value="<?= $spk["vga"] ?>">
            </li>
            <li>
                <label for="monitor">Monitor :</label>
                <input type="text" name="monitor" id="monitor" value="<?= $spk["monitor"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $spk["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>

</body>
</html>