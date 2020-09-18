<?php
require_once 'config.php'; //insere apenas uma vez no banco, evitando erros

//supervariavel armazena e faz coisas

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

//$apagar = $objBanco->query('DELETE  FROM contatos WHERE id < 11');

//$inserir = $objBanco->query('INSERT INTO contatos(nome, whatsapp) VALUES ("joao","900000000")');

//$atualizar = $objBanco->query('UPDATE contatos SET nome="mateus" WHERE id=12');
//var_dump( $objBanco->errorInfo() );

$nome = $_POST['nomeuser'];
$wpp = $_POST['wpp'];

$inserir = $objBanco->query('INSERT INTO contatos (nome, whatsapp) VALUES ($nome , $wpp)');

var_dump($objBanco->errorInfo());



$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

//var_dump($objBanco->errorInfo())  SUPER IMPORTANTE PARA DEBUGAR

foreach($consulta as $registro){
    echo "ID: {$registro['id']} NOME: {$registro['nome']} WHATSAPP: {$registro['whatsapp']}<br>";
}