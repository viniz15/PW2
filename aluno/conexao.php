<?php
//desnecessario
function conecta(){
    $way  ="mysql:dbname=usuarioetimpwii;host=localhost";
    $user ="root";
    $pass ="";

    try {
        $pdo = new PDO ($way, $user, $pass)
    } catch (\Throwable $th) {
        echo "erro";
    }
}