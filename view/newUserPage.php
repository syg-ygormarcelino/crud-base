<?php
    include('../public/imports/bootstrap.php');
?>

<form action="../controller/userController.php" method="post">
    <label for="">Username:</label>
    <input type="text" name="username">
    <label for="">E-Mail:</label>
    <input type="email" name="email">
    <label for="">Password:</label>
    <input type="password" name="password">
    <input type="submit" value="Cadastrar">
</form>