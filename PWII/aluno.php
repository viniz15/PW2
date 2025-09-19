<?php
require "Aluno.class.php";

$aluno = new Aluno();

$con = $aluno->conectar();

$name = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rm = $_POST['rm'];

if ($con) {
    $al = $aluno->consulta($email);
    if (!$al) {
        $aluno->cadastrar($rm, $name, $email, $cpf);
        echo "Cadastrado com sucesso";
    }else {
        echo "Ja esta cadastrado";
    }
}else {
    echo "<script> alert('ERROR[seilaQual] falta de conexão')</script>";
}
    
