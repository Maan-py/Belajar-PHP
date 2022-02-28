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

    // ambil data dari tiap element dalam form
    $processor = htmlspecialchars($data["processor"]);
    $ram = htmlspecialchars($data["ram"]);
    $vga = htmlspecialchars($data["vga"]);
    $monitor = htmlspecialchars($data["monitor"]);

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    // query insert data
    $query = "INSERT INTO spesifikasi
                VALUES
                ('', '$processor', '$ram', '$vga', '$monitor', '$gambar')
                ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



function upload() {
    
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu');
            </script>";

        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'jfif'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower( end($ekstensiGambar) );
    
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang anda upload bukan gambar');
            </script>";

        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('Ukuran gambar terlalu besar');
            </script>";

        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;

}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM spesifikasi WHERE id = $id");

    return mysqli_affected_rows($conn);
}



function ubah($data) {
    global $conn;
    
    // ambil data dari tiap element dalam form
    $id = $data["id"];
    $processor = htmlspecialchars($data["processor"]);
    $ram = htmlspecialchars($data["ram"]);
    $vga = htmlspecialchars($data["vga"]);
    $monitor = htmlspecialchars($data["monitor"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    
    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES["gambar"]["error"] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    

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



function cari($keyword) {
    $query = "SELECT * FROM spesifikasi
              WHERE
              processor LIKE '%$keyword%' OR
              ram LIKE '%$keyword%' OR
              vga LIKE '%$keyword%' OR
              monitor LIKE '%$keyword%'
             ";

    return query($query);
}



function registrasi($data) {
    global $conn;

    $username = strtolower( stripslashes($data["username"]) );
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('Username sudah terdaftar!')
              </script>
            ";
        return false;
    }



    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo " <script>
                alert('Konfirmasi password tidak sesuai!')
              </script>
            ";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan user baru ke database
    mysqli_query( $conn, "INSERT INTO user VALUES('', '$username', '$password')" );
    return mysqli_affected_rows($conn);
}


?>