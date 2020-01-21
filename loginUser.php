<?php
    session_start();//inico minha sessão
    require 'Login.php';//faço a requecisão do meu arquivo login.php
    $log = new Login();//instâncio meu objeto (class)
    //verifico se foi enviado o post
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        //se enviado os post armazeno em variáveis
        $email = addslashes($_POST['email']);
        $pass = addslashes(md5($_POST['pass']));
        //passos os valores das variáveis para o meu método getUsers()
        $log->getUsers($email, $pass);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form method="post">
    EMAIL:</br>
    <input type="email" name="email"></br>
    SENHA:</br>
    <input type="password" name="pass">
    </br></br>
    <input type="submit" value="Logar">
    </form>
</body>
</html>