<?php 

// function adiciona2 ($x) //funcao para adicionar 2 ao numero passado
// {
//     return $x + 2;
// }

// $resultado = adiciona2(10);
// echo $resultado;
// exit();

// include n�o d� erro (apenas avisa) se o arquivo n�o existe, require d� erro
// require_once garante que o arquivo ser� inclu�do apenas uma vez
//include 'funcoes.php'; 
//require 'funcoes.php'; 
require_once 'funcoes.php'; //o requeri lan�a um erro caso n�o encontre o arquivo e para o programa al�m disso, o _once garante que ele s� vai rodar uma vez, n�o importa quantas vezes eu de o mesmo require neste arquivo

$contasCorrentes = [
     '123.456.789-10' => [
        'titular' => 'Igor',
         'saldo' => 100
        ],
     '548.326.978-78' =>  [
        'titular' => 'Maria',
         'saldo' => 10000
        ],
     '454.654.578-92' =>  [
        'titular' => 'Alberto',
         'saldo' => 300
        ]
     ]; 

$contasCorrentes ['548.326.978-78'] = sacar($contasCorrentes['548.326.978-78'], 500);

$contasCorrentes ['454.654.578-92'] = sacar($contasCorrentes['454.654.578-92'], 200);

$contasCorrentes ['123.456.789-10'] = depositar($contasCorrentes['123.456.789-10'], -900);

unset($contasCorrentes['454.654.578-92']); //remove da memoria as informa��es desta variavel e tambem remove o item de uma

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

// echo "<ul>"; //inicia uma lista em HTML
// foreach ($contasCorrentes as $cpf => $conta) { //$cpf => $conta � o mesmo que dizer: indice => valor. Ou seja, no foreach, o indice n�o � definido
//     ['titular' => $titular, 'saldo' => $saldo] = $conta; //estou passando meu indice titular pra uma variavel titular e meu indice saldo para uma variavel chamada saldo e armazenando ambos na variavel conta, tudo dentro do list []
//     exibeConta($conta);
// }
// echo "</ul>"; //fecha a lista em html
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?> <!--aqui eu abro e fecho o PHP para reabri-lo na linha 69 e fechalo. � a interpola��o entre php e html -->
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3> <!--fa�o o mesmo aqui, abrindo o php dentro do html, s� de colocar "menor?=, ele entende que � um php, tamb�m n�o preciso colocar o echo-->
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd> <!--dado dessa lista-->
        <?php } ?> 
    </dl>  
</body>
</html>

