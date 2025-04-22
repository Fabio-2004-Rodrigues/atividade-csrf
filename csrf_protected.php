<?php
session_start();
if (!isset($_SESSION['user'])) die("Acesso negado");

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<form action="process_csrf.php" method="POST">
    <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
    <input type="password" name="new_password" placeholder="Nova Senha">
    <input type="submit" value="Alterar Senha">
</form>