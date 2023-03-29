<?php
    $judulpage = "LATIHAN SCRIPT PHP";
    $konten = "<h3>Latihan Script PHP</h3>";
    $konten .= "<p>Dasar Penulisan PHP:<ul><li>Penulisan Script PHP Bersikap case sensitive </li><li>Setiap akhir baris ditandai dengan titik koma</li></p>";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <title><?=$judulpage; ?></title>
    </head>
    <body>
       
        <?php 
            echo $konten;
        ?>
    </body>
</html>