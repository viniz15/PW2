<?php

require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if ($sucesso){
    $user = $usuario->chkUser("seila@gmail.com");

    if ($user == 0) {
        $usuario->cadastrar("Arthur", "seila@gmail.com", "12345678");
        echo"Cadastrado com sucesso";
    } else {
        echo "O Usuario já existe.<br>";
        echo"Pare de ser inutil e faça algo direito!";
    }
}else{
    echo"Erro ao conectar ao banco";
};