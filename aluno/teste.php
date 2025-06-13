<?php
require 'classes/Aluno.class.php';

$aluno = new Aluno();

$conn = $aluno->conectar();

if ($conn) {
    echo"Banco Conectado pelo teste.php <br>";
    //                       $nome     $ra       $curso      $periodo
    $aluno->cadastrarAluno('Antonio', '22762', 'Politicagem', 'Diurno');
}else {
    echo"erro ao conectar o banco pelo teste.php";
}