<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $processor = htmlspecialchars($data["processor"]);
    $ram = htmlspecialchars($data["ram"]);
    $vga = htmlspecialchars($data["vga"]);
    $monitor = htmlspecialchars($data["monitor"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "INSERT INTO spesifikasi
                VALUES
                ('', '$processor', '$ram', '$vga', '$monitor', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM spesifikasi WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    
    // ambil data dari tiap elemen dalam form
    $id = $data["id"];
    $processor = htmlspecialchars($data["processor"]);
    $ram = htmlspecialchars($data["ram"]);
    $vga = htmlspecialchars($data["vga"]);
    $monitor = htmlspecialchars($data["monitor"]);
    $gambar = htmlspecialchars($data["gambar"]);

    // query insert data
    $query = "UPDATE spesifikasi SET 
               processor = '$processor',
               ram = '$ram',
               vga = '$vga',
               monitor = '$monitor',
               gambar = '$gambar'
              WHERE id = $id
             ";
    mysqli_query($conn, $query);


    return mysqli_affected_rows($conn);
}


?>