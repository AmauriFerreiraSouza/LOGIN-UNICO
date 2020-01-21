<?php
session_start();//inicio minha sessão
unset($_SESSION['id']);//dou unset na minha Session
header("Location: index.php");//redireciono para a index
exit;