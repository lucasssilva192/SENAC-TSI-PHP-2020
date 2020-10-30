<?php
    session_start();

    $credenciais = [0 => ['login' => 'lucas@lucas.com', 'pass' => 'qwerty123456'],
                    1 => ['login' => 'x@x.com', 'pass' => '123'],
                    2 => ['login' => 'matheus@gmail.com', 'pass' => 'cachorro'],];

    if(isset($_SESSION['login']))
    {
        include 'header_tpl.php';
        include 'index_menu_tpl.php';
        include 'footer_tpl.php';
    }
    else if (isset($_POST['entrar'])) 
    {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if(in_array( ['login' => $login, 'pass' => $senha], $credenciais) )
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;

            include 'header_tpl.php';
            include 'index_menu_tpl.php';
            include 'footer_tpl.php';
        }
        else
        {
            $msg = 'Credenciais inválidas, por favor tente novamente.';
            
            include 'index_tpl.php';
        }

        echo "<a href='index.php'>Sair</a>";
    }
    else
    {        
        include 'index_tpl.php';
    }
