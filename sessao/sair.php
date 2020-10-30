<?php
    session_start();

    session_destroy();

    header('Location: index.php');

    //inicia a sessao, a destroi e volta para index