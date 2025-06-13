<?php

class Aluno {
    private $id;
    private $ra;
    private $nome;
    private $curso;
    private $periodo;
    private $pdo;

    //getters and setters - modificadores de acesso

    //get retorna o valor que estiver lá dentro do atributo
    public function getRa(){
        return $this-> ra;
    }
    
    public function getNome(){
        return $this-> nome;
    }

    public function getCurso(){
        return $this-> curso;
    }

    public function getPeriodo(){
        return $this-> periodo;
    }

    //o set gravar um valor ao atributo, então eu tenho que passar
    //esse parametro dentro dos ()
    public function setRa($ra){
        $this ->ra = $ra;
    }
    public function setNome($nome){
        $this ->nome = $nome;
    }
    public function setCurso($curso){
        $this ->curso = $curso;
    }
    public function setPeriodo($periodo){
        $this ->periodo = $periodo;
    }

    public function conectar(){
        //A Classe PDO Foi criada para auxiliar a interação com DB
        //Ela precisa de 3 Atributos
        $dns    ="mysql:dbname=aluno;host=localhost";
        $dbUser ="root";
        $dbPass ="";

        try {
           $this->pdo = new PDO($dns, $dbUser, $dbPass);
           return true;
        } catch (exception $e){
            return false;
        }

    }

    public function cadastrarAluno($nome, $ra, $periodo, $curso){
        //passo 01 criar uma var vom a consulta
        $sql = "INSERT INTO aluno set nome = $nome, ra = $ra, curso = $curso, periodo = $periodo ";
        echo $sql;
        //passo 02

        //passo 03

        //passo 04
    }

    
};