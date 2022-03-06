<?php 

require "../functions.php";

$keyword = $_GET["keyword"];

$query = "SELECT * FROM spesifikasi
              WHERE
              processor LIKE '%$keyword%' OR
              ram LIKE '%$keyword%' OR
              vga LIKE '%$keyword%' OR
              monitor LIKE '%$keyword%'
         ";
$spesifikasi = query($query);


?>

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