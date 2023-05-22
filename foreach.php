<?php 

$contasCorrentes = [
     '123.456.789-10' => [
        'titular' => 'Igor',
         'saldo' => 1000
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

$contasCorrentes ['987.654.254-69'] = [
    'titular' => 'Claudia' ,
    'saldo' => 2000
]; //adiciono um outro indice a minha $contasCorrentes

    // for ($i = 0; $i < count($contasCorrentes); $i++) {
    //     echo $contasCorrentes[$i] ['titular'] . PHP_EOL;
    // }

foreach ($contasCorrentes as $conta) { //para cada uma das contas correntes, eu chamo elas do que eu quero chamar, no caso conta. Eu posso acessa-las chamando as $conta
    echo $conta ['titular'] . PHP_EOL; //chamo a conta e exibo seu titular. é o mesmo do exemplo acima,só que de uma forma mais simples
}

$contasCorrentes[] = [ //como meu array não possui indices, ele coloca o Pedro no primeiro indice disponivel, que no caso, é o zero
    'titular' => 'Pedro',
    'saldo' => 26
];

foreach ($contasCorrentes as $cpf => $conta) { //$cpf => $conta é o mesmo que dizer: indice => valor. Ou seja, no foreach, o indice não é definido
    echo $cpf . " " .$conta['titular'] . PHP_EOL; //aqui eu imprimo o indice
}
?>