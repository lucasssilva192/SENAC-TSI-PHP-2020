<?php

session_start();

echo 'você é o: ' . $_SESSION['nome'] . '<br><br>';

$nota = $_GET['nota']; //  $_REQUEST solicita valores de $_GET ou $_POST

$protocolo = $_GET['protocolo'];

if ( $nota >= 9 ) {

	echo "we are very happy";

} else {

	echo "=( , o que podemos fazer para você nos dar uma nota 10?";
}

echo "<br><br>se protocolo é o $protocolo";
