<?php

include '../partials/header.php';

?>

<div class="wrapper">
    <h1>Login</h1>

    <form action="login-form" method="POST">
        <input type="text" name="email" placeholder="Votre email">
        <input type="password" name="password" placeholder="Votre mot de passe">
        <input type="submit" name="submit" value="Login">
    </form>