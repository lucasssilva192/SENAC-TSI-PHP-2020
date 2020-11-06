<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=banco_php';
$user = 'sa';
$password = '123456';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);