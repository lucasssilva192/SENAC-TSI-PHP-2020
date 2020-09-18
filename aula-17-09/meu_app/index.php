<?php

require_once 'conectarbd.php';

$nome = $_POST['nm'];
$wpp = $_POST['wpp'];

$objStmt = $objBanco->prepare('INSERT INTO contatos (nome, whatsapp) VALUES (:nm, :wzap)');

$objStmt->BindParam(':nm', $_POST['nm']);
$objStmt->BindParam(':wzap', $_POST['wpp']);

if($objStmt->execute()){
    $mensagem = 'Obrigado por se cadastrar :)';
}
else{
    $mensagem = 'Erro ao cadastrar, tente novamente :(';
}
                                        
include 'grava_contato_tpl.php';
