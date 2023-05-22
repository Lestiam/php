<?php 

$conta1 = [
    'titular' => 'Vinicius', //a chave se define por essa sintaxe, o nome da chave entre '' e um copiador de seta (=>) e o valor dessa chave
     'saldo' => 1000
    ]; //é chamado de array associativo

    //$conta1['titular']; //o indice que tem que conter as informações di titular, se chama titular

    $conta2 = [
        'titular' => 'Maria',
        'saldo' => 10000
    ];

    $conta3 = [
        'titular' => 'Alberto',
        'saldo' => 300
    ];

    echo $conta1['titular'];
$contasCorrentes = [$conta1, $conta2, $conta3]; //é um array de arrays
?>