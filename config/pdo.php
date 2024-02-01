<?php

try {
    $dsn = 'mysql:dbname=pdo;host=localhost';

    $option= array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    $db= new PDO($dsn, 'root', '', $option);
} catch(PDOException $error){

    die("erreur : " . $error->getMessage());
}

