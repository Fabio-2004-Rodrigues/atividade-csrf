<?php
session_start();
if (!isset($_SESSION['user'])) die("Acesso negado");
?>
<form action="process_change.php" method="POST">
    <input type="password" name="new_password" placeholder="Nova Senha">
    <input type="submit" value="Alterar Senha">
</form>