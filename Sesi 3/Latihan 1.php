<?php

    
    $cars = array("Mercedes","Koenigsegg","Esemka");

    $jumlah = count($cars);
    echo "Jumlah Data : ". $jumlah . "<br>";
    for($i=0;$i<$jumlah;$i++){
        echo "<br>Kendaraan " .$cars[$i];
    }

    echo "<hr>";

    echo "<ol>";
    foreach($cars as $data){
        echo "<li> Kendaraan " . $data . "</li>";
    }
    echo "</ol>";