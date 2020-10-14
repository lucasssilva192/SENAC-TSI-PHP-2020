<?php

require_once 'db.php';

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


$lista_sql = 'SELECT id, nome, whatsapp 
              FROM contatos 
              ORDER BY nome';
foreach( $objBanco->query( $lista_sql ) as $registro ){
    $tabela[$registro['id']] = [ 'nome'=> $registro['nome'], 
                                'whatsapp'=>$registro['whatsapp'] ];
}
//echo "<pre>"; var_dump($tabela);
include 'grava_contato_tpl.php';