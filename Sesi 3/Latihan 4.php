<?php
    
    function TentangAplikasi(){
        echo "<h3>Aplikasi Apa Saja</h3>";
        echo "<sup>versi 1.0</sup>"; 
    }  
    
    function CetakLabel01($tx){
        echo "Isi Tabel : " .$tx;
    }

    function CetakLabel02($tx = "Isikan Label"){
        echo "Isi Label : " .$tx;
    }

    function Jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }