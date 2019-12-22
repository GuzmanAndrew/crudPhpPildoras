<?php

try {
    $base = new PDO('mysql:host=localhost; dbname=usuarios', 'root', 'Andrewseigokan9');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
} catch (Exception $e) {
    die('Error' . $e->getLine());
    echo ("Linea del error" .  $e->getLine());
}

?>