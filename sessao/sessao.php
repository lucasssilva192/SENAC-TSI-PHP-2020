<?php
    session_start();
    //inicia sessao

    if(!isset($_SESSION['login']))
    //verifica se a variavel para criação de sessao ja foi setada
    {
        header('Location: /');
    }