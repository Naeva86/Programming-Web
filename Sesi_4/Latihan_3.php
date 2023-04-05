<?php
    $usr = "";
    $pas = "";
    if (isset($_REQUEST["txUSER"])){
        $usr = $_REQUEST["txUSER"];
        $pas = $_REQUEST["txPASS"];
    }

?><!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form dengan Request Handle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="GET" action="Latihan_3.php">

            <div>
                Username
                <input type="text" name="txUSER">
            </div>

            <div>
                Password
                <input type="text" name="txPASS">
            </div>

            <div>
                <button>Login</button>
            </div>
        
        </form>

        <div>
            isi dari form :<br>
                1. Username : <?=$usr?><br>
                2. Password : <?$pas?>
        </div>
    </body>
</html>