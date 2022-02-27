<?php

require "functions.php";

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
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan!')
                document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!')
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
    <title>Tambah data spesifikasi  </title>
</head>
<body>
    <h1>Tambah data spesifikasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="processor">Processor :</label>
                <input type="text" name="processor" id="processor" required>
            </li>
            <li>
                <label for="ram">RAM :</label>
                <input type="text" name="ram" id="ram">
            </li>
            <li>
                <label for="vga">VGA :</label>
                <input type="text" name="vga" id="vga">
            </li>
            <li>
                <label for="monitor">Monitor :</label>
                <input type="text" name="monitor" id="monitor">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>

</body>
</html>