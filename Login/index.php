<?php

//importa a classe
require 'Usuario.php';

$sucesso = $usuario = new Usuario();

if ( $sucesso ){   
    $ff = $usuario->chkUser("viniciusz1525@gmail.com");

    // se o usuario não exitir cadastre ele, se não imprima uma menssagem
    if( $ff == 0){
        $usuario->cadastrar("Vinicius Zidomar", "viniciusz1525@gmail.com", "12345678");
        echo "<h1>Cadastrado com sucesso!";
    }else{
        echo "<h1>O usuário já existe.";
    }    
}else{
    // caso tudo der errado imprima essa menssagem
    echo "<h1>Erro ao conectar ao banco";
};