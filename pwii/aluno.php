<?php
require "Aluno.class.php";

$aluno = new Aluno();

$con = $aluno->conectar();

$name = $_POST['nome'];
$email = $_POST['e-mail'];
$cpf = $_POST['cpf'];
$rm = $_POST['rm'];

if ($con) {
    $al = $aluno->consulta("seila@hotmail.com");
    if ($al) {
        $aluno->cadastrar("4368", "Caio", "seila@hotmail.com", "111222000-33");
    }else {
        echo "Ja esta cadastrado";
    }
}else {
    echo "<script> alert('ERROR[seilaQual] falta de conexão')</script>";
}