<?php
require 'classes/Aluno.class.php';

$retorno = $aluno = new Aluno();

if ( !$retorno) {
     echo "<h1>FRACASSO</h1>";
     exit;
} else {
   echo "<h3>Conectado ao banco de dados </h3>";

    $aluno -> setRa("4543");
    $aluno -> setNome("Vinicius");
    $aluno -> setCurso("2DS");
    $aluno -> setPeriodo("Integral");

    $ra = $aluno->getRa();
    $nome = $aluno->getNome();
    $curso = $aluno->getCurso();
    $periodo = $aluno->getPeriodo();

    echo "Aluno: $nome - RA: $ra - Curso: $curso - Periodo: $periodo";
}