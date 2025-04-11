<?php

//importa a classe
require 'Usuario.php';

//variaveis
$sucesso = $usuario = new Usuario();

if(isset($_POST ['inserirNome']) && isset($_POST ['inserirEmail']) && isset($_POST ['inserirSenha'])){
    $name = $_POST_['inserirNome'];
    $email = $_POST_['inserirEmail'];
    $pass = $_POST_['inserirSenha'];
    $usuario = new Usuario();
    $usuario-> cadastrar($name, $email, $pass);
}

if ( $sucesso ){   
    $ff = $usuario->chkUser($email);

    // se o usuario não exitir cadastre ele, se não imprima uma menssagem
    if( $ff == 0){
        $usuario->cadastrar($name, $email, $pass);
        echo "<h1>Cadastrado com sucesso!";
    }else{
        echo "<h1>O usuário já existe.";
    }    
}else{
    // caso tudo der errado imprima essa menssagem
    echo "<h1>Erro ao conectar ao banco";
};