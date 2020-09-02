<?php
    $clima = "frio";

    if($clima == "frio")
    {
        echo " meu pé congela!<br><br>";
    }

    $bool = '1';

    // condicional com operador ternário
    //=== compara valor e tipo
    $var = $bool == 1 ? '$bool é igual a 1' : '$bool é diferente de true';
    echo "$var";

    $frase = " meu pai tinha um cachorro verde e amarelo";

    if(strpos($frase, 'meu') !== false)
    {
        echo "<br> encontrei o meu";
    }
    else
    {
        echo "<br> não há meu algum";
    }

    echo "<br><br>";

    switch ($clima) {
        case 'quente':
        case 'tropical':
            echo "adoro clima quente";
            if(true)
            {
                echo "<br>-- if dentro do switch";
                
                if(true)
                {
                    echo "---- if aninhado dentro do switch";
                }
            }
            break;
        
        case 'morno':
            echo "morno é melhor que frio";
            break;  
            
        case 'frio':
            echo "frio adoro quando está longe";
            break;

        default:
            echo " erro";
            break;
    }
