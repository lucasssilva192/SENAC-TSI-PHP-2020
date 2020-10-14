<?php

require_once 'db.php';

echo "<pre>";

//evita sql injection, mas prefira consulta preparada
$id = preg_replace('/\D/', '', $_GET['id']);

if( $objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false) {
    $msg = "Excluido com sucesso";
} else{
    $msg = "Falha ao excluir";
}
include 'apaga_contato_tpl.php';