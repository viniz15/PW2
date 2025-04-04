<?php
class usuario{
//declara as variaveis
    private $id;
    private $nome;
    private $email;
    private $senha;
    
    private $pdo;
    
    function __construct(){
        //declarando e adicionado valores para as variaveis
        $dns    = "mysql:dbname=usuariopw2;host=localhost";
        $dbUser = "root";
        $dbPass = "";

        try {
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    function cadastrar($nome, $email, $senha){
        //criar o query(consulta)
        $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";

        //preparar o query
        $stmt = $this->pdo->prepare($sql);

        //usar o bindValue
        $stmt->bindValue(":n", $nome);
        $stmt->bindValue(":e", $email);
        $stmt->bindValue(":s", $senha);

        //executar o query
        $stmt->execute();
    }

    function chkUser($email){
        
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindValue(":e", $email);

        $stmt->execute();

        //saber se encontrou o registro
        return $stmt->rowCount() > 0;

    }
};