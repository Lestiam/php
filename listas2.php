<?php 

$idadeList = [21, 23, 19, 25, 30, 41,18];

list($idadeIgor, $idadeJoao, $idadeMaria) = $idadeList; //atribui a variavel idadeIgor a poi��o 0 (21), a variavel idadeJoao a posi��o 2 (23)...
unset ($idadeList[4]); //remove o item 4 (30)

//$idadeList[7] = 20; //aqui eu sei que o próximo indice vazio é o 7 (ultima posição), então, eu adiciono o indice 20 ali

$idadeList[count($idadeList)] = 20; //aqui eu não sei qual é o último indice livre, então usei o count para contar e colosar no ultimo indice livre para mim

$idadeList[] = 28; //se eu não informar nenhum indice, ele coloca no ultimo indice numerico disponivel
foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
?>