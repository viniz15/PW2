<?php
class Aluno{
    private $id;
    private $rm;
    private $nome;
    private $email;
    private $cpf;
    private $pdo;

    public function conectar(){
        $dns = "mysql:dbname=etimpwiicontact;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function getId(){
        return $this->id;
    }
    public function getRm(){
        return $this->rm;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getCpf(){
        return $this->cpf;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setRm($rm){
        $this->rm = $rm;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function cadastrar ($rm, $nome, $email, $cpf){
        //criar uma variavel com a consulta sql
        $sql = "INSERT INTO aluno SET rm = :r, nome = :n, email = :e, cpf = :c";
        //se o metodo tem paramentros, temos que usar o apelido para passar os valores
        //e chamar o metodo pdo e prepare
        $sql = $this->pdo->prepare($sql);

        //dando apelidos
        $sql-> bindValue(":r", $rm);
        $sql-> bindValue(":n", $nome);
        $sql-> bindValue(":e", $email);
        $sql-> bindValue(":c", $cpf);

        return $sql->execute();
    }

    public function consulta($email){
        $sql ="SELECT * FROM aluno WHERE email = :e";
        $sql = $this->pdo->prepare($sql);
        $sql ->bindValue(":e", $email);
        $sql->execute();
        return $sql-> rowCount() > 0;
    }
    
}