<html>
    <head></head>
    <body>
           <h1> <?php echo $mensagem; ?> </h1>
           <h2> <a href="index.html"> Retornar a tela inicial </a> </h2>
        <br><br>
        <table border="1px solid black">
    <tr> <td> id </td> <td> nome </td> <td> whatsapp </td> </tr>
    <?php
    if (is_array($tabela) ){
        foreach ($tabela as $id => $reg){
            echo "
                <tr>
                <td> $id </td>
                <td> {$reg['nome']} </td>
                <td> {$reg['whatsapp']} </td>
                <td> <a href='apaga_contato.php?id=$id'> Apagar </a> </td>
                </tr>
                ";
        }
    }
    else{
        echo "<tr> <td colspan='3'> Não há dados </td> </tr>";
    }
    ?>
        </table>

        </body>
</html>