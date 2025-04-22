<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit;
}
?>
<h2>Login</h2>
<form action="process_login.php" method="POST">
    <input type="text" name="username" placeholder="Usuário" required>
    <input type="password" name="password" placeholder="Senha" required>
    <input type="submit" value="Entrar">
</form>