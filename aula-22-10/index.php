<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// microsoft.com/pt-br/download/details.aspx?id=55994 LINK PARA INSTALAÇÃO DO DRIVE DE PHP PARA CONEXÃO COM O SQLSERVER

$dsn = 'sqlsrv:Server=localhost\SQLEXPRESS;Database=aula_php_teste';
$user = 'sa';
$password = '123456';

$db = new PDO($dsn, $user, $password);

$sql = 'SELECT nome, telefone FROM cliente';

foreach($db->query($sql) as $registro) {
	echo "Nome: {$registro['nome']} <br> Telefone: {$registro['telefone']}";
}