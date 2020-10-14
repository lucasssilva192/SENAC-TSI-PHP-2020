<?php


require_once 'db.php';

$tabela = array()

$lista_sql = 'SELECT id, nome, whatsapp 
              FROM contatos 
              ORDER BY nome';

foreach( $objBanco->query( $lista_sql ) as $registro ){
    $tabela[$registro['id']] = [ 'nome'=> $registro['nome'], 
                                'whatsapp'=>$registro['whatsapp'] ];
}
//echo "<pre>"; var_dump($tabela);
include 'grava_contato_tpl.php';