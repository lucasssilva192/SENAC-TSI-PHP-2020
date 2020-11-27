<html>
    <head>
        <title>Meu site</title>
    </head>
    <body>
        <center>
            <h1>crie sua Conta</h1>
            <table border="1">
                <tr>
                    <td>
                        <form method="post" action="usuario/cadastro.php">
                            <br>
                            <font color="red">
                            <?php
                                if(count($erros) > 0)
                                {
                                    foreach($erros as $erro)
                                    {
                                        echo $erro . '<br>';
                                    }
                                }
                            ?>
                            </font>
                            <br>
                            <label for="nome">nome</label>
                            <input type="text" id="nome" name="nome" required>
                            <br>
                            <label for="email">email</label>
                            <input type="email" id="email" name="email" required>
                            <br>
                            <label for="senha">senha</label>
                            <input type="password" id="senha" name="senha" required>
                            <br>
                            <label for="confSenha">confirmar senha</label>
                            <input type="password" id="confSenha" name="confSenha" required>
                            <br><br>
                            <input type="submit" name="cadastrar" value="Cadastrar">
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>