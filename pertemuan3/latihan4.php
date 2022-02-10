<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan tabel</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0">
    <?php for($a = 1; $a <= 10; $a++) : ?>
    <tr>
        <?php for($i = 1; $i <= 10; $i++) : ?>
        <td></td>  
        <?php endfor; ?>  
    </tr>
    <?php endfor; ?>

</table>


</body>
</html>


<?php



echo "<br>";



echo "<br>";

for($j = 10; $j >= 1; $j--) {
    echo "Kelas $j <br>";
}

?>