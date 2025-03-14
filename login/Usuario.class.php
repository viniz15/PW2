<?php 
class Usuario {
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $pdo;


    // esse metodo construtor ira se conectar com o banco de dados
     public function __construct(){
        $dns = "mysql:dbname=usuariopwii;host=localhost";
        $dbUser = "root";
        $dbPass = "";
        try{
            // PDO (Php Database Objects)
            $this->pdo = new PDO($dns, $dbUser, $dbPass);
           
            return true;
        } catch(\throwable $th) {
         return false;
           
        }

     }

     function cadastrar($nome, $email, $senha){
         //passo 1 - criar a query (consulta)
         $sql = "INSERT INTO usuarios SET nome = :n, email = :e, senha = :s";

         //passo 2 - preparar a query
         $stmt =$this->pdo->prepare($sql);

         //passo 3 - usar o bind value 
         $stmt ->bindValue(":n", $nome);
         $stmt ->bindValue(":e", $email);
         $stmt ->bindValue(":s", $senha);
         
         // pass0 4 - execute

         $stmt -> execute();
     }

     function chkUser($email){
        //passo 1
        $sql = "SELECT * FROM usuarios WHERE email = :e";

        //passo 2
        $stmt = $this -> pdo -> prepare($sql);

        //passo 3
        $stmt -> bindValue(":e", $email);

        //passo 4
        $stmt -> execute();

        //saber se encontrou o registro
        return $stmt->rowCount() > 0; 
     }
     
}
