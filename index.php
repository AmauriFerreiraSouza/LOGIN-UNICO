<?php
 session_start();//inicio minha sessão
 //verifico se existe o ID na minha session
 if (empty($_SESSION['id'])) {
    header("Location: loginUser.php");
 }
?>
<h2>SEJA BEM VINDO</h2>
<a href="logout.php">SAIR</a>