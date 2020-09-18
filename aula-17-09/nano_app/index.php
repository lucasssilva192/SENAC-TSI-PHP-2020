<?php

require_once 'conectabd.php';


$nome = $_POST['nm'];
$wpp = $_POST['wpp'];


//como evitar sql injection

//para dar sql injection e form -> '; + COMANDO 

$objStmt = $objBanco->prepare('INSERT INTO contatos
                                            (nome, whatsapp)
                                        VALUES
                                            (:nm, :wzap)  ');
//substitui :nm e :wzap pelos valores enviados pelo usuario
$objStmt->BindParam(':nm', $_POST['nm']);
$objStmt->BindParam(':wzap', $_POST['wpp']);

if($objStmt->execute()){
    $msg = 'Obrigado por se cadastrar';
}
else{
    $msg = 'Erro ao cadastrar, tente novamente.';
}
                                        
include 'grava_contato_tpl.php';
