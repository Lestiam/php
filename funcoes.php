<?php 
echo "Ola. Arquivo de funcoes aqui. \n";
//uma função executa e devolve (retorna) um valor
function sacar(array $conta, float $valorASacar) : array //colocar um tipo na frente quer dizer que estou especificando que ali eu só posso receber daquele tipo, no caso, o valor precisa ser um float
{                                                 //o :array indica que essa funcao retorna um array
    if ($valorASacar > $conta ['saldo']) {// se 500 for maior que o saldo desta conta....
        exibeMensagem("Você não pode sacar este valor");
    }else {
        $conta ['saldo'] -= $valorASacar; //digo que a pessoa dona desse CPF, terá - valorASacar reais no saldo
    }

    return $conta; //retorna a conta modificada

}

function exibeMensagem(string $mensagem) //pega a mensagem como parametro //uma subrotina executa tudo oq ela precisa executar e não devolve valor nenhum
{
    echo $mensagem . '<br>'; //exibe a mensagem e depois quebra uma linha '<br>' é a quebra de linha em HTML
}

function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0)
        $conta ['saldo'] += $valorADepositar; 
    else
        exibeMensagem("Depositos precisam ser positivos.");
    return $conta; //retorno a conta modificada
}

function titularComLetrasMaiusculas (array &$conta) //o & informa que eu estou recebendo a conta em si, e não somente uma cópia dela, sem o &, eu recebo uma copia da conta "uma copia do nome Igor"
{
    $conta ['titular'] = mb_strtoupper($conta ['titular']); //pega o nome do titular e passa esse nome para letras maiusculas
}

function exibeConta (array $conta) //recebe um array de uma conta
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>"; //monta um html contendo um item de lista, informando um titular e uma conta
}

?>