<?php
    $usr = "";
    $pas = "";
    $ust = "";
    $past = "";
    if (isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $pas = $_POST["txPASS"];

        if($ust==""){
            $ust = "<div style='color:red;'>Username Masih Kosong</div>";
        }
        if($past==""){
            $past = "<div style='color:red;'>Password Masih Kosong</div>";
        }
    }

?><!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="Latihan_2.php">

            <div>
                Username
                <input type="text" name="txUSER">
                <?=$ust?>
            </div>

            <div>
                Password
                <input type="text" name="txPASS">
                <?=$past?>
            </div>

            <div>
                <button>Login</button>
            </div>
        
        </form>

            <div>
                isi dari form :<br>
                    1. Username : <?=$usr?><br>
                    2. Password : <?=$pas?>
            </div>
    </body>
</html>