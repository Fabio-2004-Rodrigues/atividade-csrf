<?php
session_start();
if ($_POST['username'] == 'admin' && $_POST['password'] == '123') {
    $_SESSION['user'] = 'admin';
    header("Location: home.php");
} else {
    echo "Login inválido";
}