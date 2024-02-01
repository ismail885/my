<?php

include '../partials/header.php';

?>

<div class="wrapper">
    <h1>SIGNUP</h1>

    <form action="signup-form" method="POST">
        <input type="text" name="name" placeholder="Votre pseudo">
        <input type="text" name="email" placeholder="Votre email">
        <input type="password" name="password" placeholder="Votre mot de passe">
        <input type="password" name="password" placeholder="Confirmer votre mot de passe">
        <input type="submit" name="submit" value="signup">
    </form>