<?php
    $age = array("Komang"=>"19","Manik"=>"20","Wastika"=>"45");

    echo "Umur Dari Wastika adalah " .$age["Manik"]. " Tahun<br>";

    echo "<hr>";
    
    echo "<ol>";
    foreach($age as $nama => $umur){
        echo "<li> Umur Dari " . $nama . " adalah " . $umur . "</li>";
    }
    echo "</ol>";