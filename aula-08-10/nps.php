<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br> você deu a nota $nota pelo motivo \"$explicacao\"";


$db = new PDO('mysql:dbname=tsiphp;host=localhost','root','');  

$stmt = $db->prepare('	INSERT INTO nps ( nota, explicacao)
						VALUES ( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo '<br><br>Pesquisa gravada com sucesso!';

} else {

	echo '<br><br> Erro, tente novamente! ';
}

echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';