<?php
session_start();
if (!isset($_SESSION['user'])) die("Acesso negado");

file_put_contents("senhas.txt", $_POST['new_password']);
echo "Senha alterada com sucesso!";