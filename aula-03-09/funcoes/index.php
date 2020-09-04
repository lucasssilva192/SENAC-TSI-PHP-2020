<?php

function operacaoMatematica(float $num1, float $num2, string $operacao) : float
{
    switch ($operacao) {
        case 'soma':
        case 'Soma':
        case 'SOMA':
        case '+':
            return $num1 + $num2;
        case 'subtração':
        case 'Subtração':
        case 'SUBTRAÇÃO':
        case '-':
            return $num1 - $num2;
        case 'multiplicação':
        case 'Multiplicação':
        case 'MULTIPLICAÇÃO':
        case '*':
            return $num1 * $num2;
        case 'divisão':
        case 'Divisão':
        case 'DIVISÃO':
        case '/':
            return $num1 / $num2;
        default:
            echo "alternativa inválida";
    }
}

echo "\nO resultado da operação é " . operacaoMatematica(5.5 , 5,'multiplicação') . "\n";

function retornaDia(int $dia) : string {
    //resolução com switch
    /* switch ($dia){
        case 0:
            return 'Domingo';
        case 1:
            return 'Segunda';
        case 2:
            return 'Terça';
        case 3:
            return 'Quarta';
        case 4;
            return 'Quinta';
        case 5:
            return 'Sexta';
        case 6:
            return 'Sabado';
        default:
            return 'Opção inválida';
    }
    */
    //resolução com string
    $semana = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];
    return $semana[$dia] ?? 'Insira um valor ente 0 e 6.';
}

echo "<br><br><br>";

echo "\n" . retornaDia(0) . "\n";

$nome = "Lucas";

//caso coloque um & antes do $ da variável, o valor dela irá mudar permentemente, independente de seu escopo
function mudaNome(string $var) : string {
    $var = "Arnaldo";
    return $var;
}

echo "<br><br><br>";
echo "\nA função retornará: " . mudaNome($nome) . "\n";
echo "<br><br>";

echo "\nA variável \$nome ainda vale: $nome \n";
echo "<br><br>";

echo "O escopo se mantém mas o valor dela é alterado";