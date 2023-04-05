<?php
    $usr = "";
    $pas = "";
    if (isset($_GET["txtUSER"])){
        $usr = $_GET("txtUSER");
        $pas = $_GET("txtPASS");
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
        <form method="GET" action="txtUSER">

            <div>
                Username
                <input type="text" name="txtUSER">
            </div>

            <div>
                Password
                <input type="text" name="txtPASS">
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