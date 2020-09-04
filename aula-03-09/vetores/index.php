<?php

date_default_timezone_set('America/Sao_Paulo');
//locale_set_default ('pt-BR');
 
$semana[0] = "Domingo";
$semana[1] = "Segunda";
$semana[2] = "Terça";
$semana[3] = "Quarta";
$semana[4] = "Quinta";
$semana[5] = "Sexta";
$semana[6] = "Sábado";

$hoje = date('w');

echo "\n hoje é " . $semana[$hoje] . "\n";
echo "<br><br>";

unset($semana);

$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça'] = 2;
$semana['Quarta'] = 3;
$semana['Quinta'] = 4;
$semana['Sexta'] = 5;
$semana['Sábado'] = 6;

$hoje = date('w');

echo "\n hoje é " . $semana['Quinta'] . " com indice alfanumérico \n";
echo "<br><br>";

$usuario = [ 'nome' => 'Luiz bono',
             'idade' => 25,
             'peso' => 67.8,
             'signo' => 'aquariano'];

//string concatenada
//echo "O professor " . $usuario['nome'] . " tem " . $usuario['idade'] . " anos, pesa " . $usuario['peso'] . "KG e é " . $usuario['signo'];
//echo "<br><br>";

//string em aspas duplas
echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa {$usuario['peso']}KG e é {$usuario['signo']} .";
echo "<br><br>";

//formatação de número para GRAMAS
//echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa " . number_format( $usuario['peso'], 2, ',', '.') . " gramas e é {$usuario['signo']} .";
//echo "<br><br>";

 /*
define('RES_P_PAG', 'MU');

for($i = 0; $i < RES_P_PAG; $i++){
    echo "Resultado $i <br>";
}

echo 'Olá ' . MUNDO . "<br><br>";
*/
//vetor com dados de 3 professores
$professores = array(	0 => array(	'nome' 	=> 	'Luiz Bono',
									'idade'	=>	25,
									'peso'	=>	67808.44,
									'signo'	=>	'aquariano'),
						1 => array(	'nome' 	=> 	'Thiago Claro',
									'idade'	=>	35,
									'peso'	=>	54808.44,
									'signo'	=>	'sagitário'),
						2 => array(	'nome' 	=> 	'Thyago Quintas',
									'idade'	=>	21,
									'peso'	=>	7808.44,
                                    'signo'	=>	'leonino'));
//fechamento de php para inicar no html
?>


<table border="1"> 
<tr> 
    
    <td> ID </td> 
    <td> NOME </td> 
    <td> IDADE </td> 
    <td> PESO </td> 
    <td> SIGNO </td> 
    
    </tr>
<?php

//foreach = para cada professor haverá uma linha com os dados da variavel professor
foreach ($professores as $linha => $professor){
    echo 
    "<tr> 
    <td> $linha </td> 
    <td> {$professor['nome']} </td> 
    <td> {$professor['idade']} </td> 
    <td> {$professor['peso']} </td> 
    <td> {$professor['signo']} </td>  
    </tr>";
};
?>
</table>

