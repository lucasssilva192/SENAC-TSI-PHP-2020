<?php

$db = mysqli_connect("localhost", "root", "", "aula-php");
//conectando com banco de dados
$query = mysqli_query ($db, //função para criar tabela e a variavel de conexao
                   'CREATE TABLE contatos 
                   ( id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                     nome VARCHAR(255) NOT NULL,
                     whatsapp BIGINT )'); 
//criar tabela - nome
//id e suas propriedades
//nome e suas propriedades
//whatsapp e suas propriedades

if ($query){
    echo "Tabela criada com sucesso!";
}
else{
    echo "Falha ao criar a tabela.";
    echo mysqli_connect_error();
}

$contato = ['nome' => 'Lucas Santos Silva', 'whatsapp' => '5511940055670']; //criação de objeto com os dados q serão inseridos
if ( mysqli_query($db, "INSERT INTO contatos 
                        (nome, whatsapp) 
                    VALUES 
                        ('{$contato['nome']}', '{$contato['whatsapp']}')")){
//função p adicionar, variavel de conexao e -> inserir em NOME DA TABELA, CAMPOS DE INSERÇÃO 
//VALORES ('{$variavel['propriedade']}', '{$variavel['propriedade']}')")
    echo '<br> Contato inserido com sucesso!';
}
else{
    echo 'Falha ao inserir contato';
}

$query = mysqli_query($db, 'SELECT
                                id, nome, whatsapp
                            FROM
                                contatos');
//funcao para selecionar, SELECT -> colunas que precisa exibir, FROM -> tabela de onde virão os dados

echo '<table>';
echo "<tr> <td> ID </td> <td> NOME </td> <td> WHATSAPP </td> </tr>";
//para exibir o que esta na tabela, enquanto estiverem registros na query
while ( $registro = $query -> fetch_assoc() ){
    echo "<tr>
            <td> {$registro['id']} </td>
            <td> {$registro['nome']} </td>
            <td> {$registro['whatsapp']} </td>
          </tr>";
    //cada linha exibira um id nome e whatsapp conforme os mesmos existirem
}

//comando para excluir algum dado
//funcao de alterar dados no banco, variavel de conexao, APAGAR DE nome da tabela ONDE condição para se apagar algo
if (mysqli_query($db, 'DELETE FROM contatos WHERE id < 10')){
    echo "<br>Registro excluído com sucesso";
}
else{
    echo "<br>Falha ao excluir registro";
}
