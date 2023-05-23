<?php 

// function adiciona2 ($x) //funcao para adicionar 2 ao numero passado
// {
//     return $x + 2;
// }

// $resultado = adiciona2(10);
// echo $resultado;
// exit();

// include não dá erro (apenas avisa) se o arquivo não existe, require dá erro
// require_once garante que o arquivo será incluído apenas uma vez
//include 'funcoes.php'; 
//require 'funcoes.php'; 
require_once 'funcoes.php'; //o requeri lança um erro caso não encontre o arquivo e para o programa além disso, o _once garante que ele só vai rodar uma vez, não importa quantas vezes eu de o mesmo require neste arquivo

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

unset($contasCorrentes['454.654.578-92']); //remove da memoria as informações desta variavel e tambem remove o item de uma

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

echo "<ul>"; //inicia uma lista em HTML
foreach ($contasCorrentes as $cpf => $conta) { //$cpf => $conta é o mesmo que dizer: indice => valor. Ou seja, no foreach, o indice não é definido
    ['titular' => $titular, 'saldo' => $saldo] = $conta; //estou passando meu indice titular pra uma variavel titular e meu indice saldo para uma variavel chamada saldo e armazenando ambos na variavel conta, tudo dentro do list []
    exibeConta($conta);
}
echo "</ul>"; //fecha a lista em html
?>