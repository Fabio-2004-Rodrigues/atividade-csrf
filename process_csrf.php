<?php
session_start();
if (!isset($_SESSION['user'])) die("Acesso negado");

if ($_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die("CSRF token inválido!");
}

file_put_contents("senhas.txt", $_POST['new_password']);
echo "Senha alterada com proteção CSRF!";