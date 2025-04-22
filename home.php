<?php
session_start();
if (!isset($_SESSION['user'])) die("Acesso negado");
echo "Bem-vindo, admin";
?>
<a href="change_password.php">Alterar senha</a> | <a href="logout.php">Sair</a>