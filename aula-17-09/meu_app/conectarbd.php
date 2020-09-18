<?php
require_once 'config.php';

try{
//tenta
    $objBanco = new PDO(DSN, DB_USER, DB_PASS);
//se nao conseguir
} catch( PDOException $objErro) {
    echo 'Problema ao conectar ao SGBD: ' . $objBanco->getMessage();
    exit();
}