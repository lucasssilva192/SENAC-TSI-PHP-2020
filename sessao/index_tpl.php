<html>
    <head>
        <title>SITE SESSION</title>
    </head>
    <body>
        <center>
            <table border="0.5">
                <tr>
                    <td>
                        <form method="post" action="index.php">
                            <br>
                            <?php
                                if(isset($msg))
                                {
                                    echo $msg;
                                }
                            ?>
                            <br>
                            <label for="login">Login</label>
                            <input type="text" name="login">
                            <br><br>
                            <label for="login">Senha</label>
                            <input type="password" name="senha">
                            <br><br>
                            <input type="submit" name="entrar" value="entrar">
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>