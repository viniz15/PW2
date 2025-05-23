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

    public function _construct (){
        //A Classe PDO Foi criada para auxiliar a interação com DB
        //Ela precisa de 3 Atributos

        $dns = "mysql:dbname=usuarioetimpwii;host=localhost";
        $user = "root";
        $pass = "";

        try {
            $this-> pdo = new PDO($dns,$user,$pass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }

    }
}