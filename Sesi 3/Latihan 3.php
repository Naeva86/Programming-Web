<?php


$mahasiswa = array(
    array("Nama"=>"Wastika","ID"=>"1234","Kota"=>"Karangasem"),
    array("Nama"=>"Mahayana","ID"=>"4321","Kota"=>"Badung"),
    array("Nama"=>"Yudistira","ID"=>"69420","Kota"=>"Karangasem"),
    array("Nama"=>"Baaskara","ID"=>"0000","Kota"=>"Buleleng"),
);

// echo $mahasiswa[2]["Nama"];
// echo "<hr>";
// print_r($mahasiswa);

// echo "<hr>";

// foreach($mahasiswa as $data){

//     foreach($data as $label => $nval){
//         echo $label . " : " . $nval . "<br>";
//     }
    
//     echo "<hr>";

// }

header("Content-type: application/json");
echo json_encode($mahasiswa);