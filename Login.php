<?php
class Login{
   //crio meu metodo construtor  
   public function __construct(){
       //abro um try
        try {
            //crio minha conexão com o banco de dados
            $this->pdo = new PDO("mysql:dbname=login_unico;host=127.0.0.1", "root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            //pego a mensagem de erro se houver
            echo "ERROR!".$e->getMessage();
        }
   }
   //CRIO MEU MÉTODO QUE VERIFICA SE EXISTE UM USUÁRIO COM AQUELE EMAIL E SENHA
   public function getUsers($email, $pass){
       //echo $email, $pass;
        $user = array();
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $pass);
        $sql->execute();

        if($sql->rowCount() > 0){
            $user = $sql->fetch(PDO::FETCH_ASSOC);
            //armazeno na session o id do usuário
            $_SESSION['id'] = $user['id'];
            //redireciono para index
            header("Location: index.php");
        }
        return $user;
   }  
}