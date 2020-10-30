<?php
    session_start();

    $nota = $_GET['nota'];
    $user = $_SESSION['user'];

    switch($nota)
    {
        case 'péssimo':
        case 'ruim':
        case 'bom':
            echo "$user, o que podemos fazer para melhorar?";
        break;
        default:
            echo "Agradecemos sua opinião, $user!";
        break;
    }