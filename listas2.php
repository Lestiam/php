<?php 

$idadeList = [21, 23, 19, 25, 30, 41,18];

list($idadeIgor, $idadeJoao, $idadeMaria) = $idadeList; //atribui a variavel idadeIgor a poi艫o 0 (21), a variavel idadeJoao a posi艫o 2 (23)...
unset ($idadeList[4]); //remove o item 4 (30)

//$idadeList[7] = 20; //aqui eu sei que o pr坦ximo indice vazio 辿 o 7 (ultima posi巽達o), ent達o, eu adiciono o indice 20 ali

$idadeList[count($idadeList)] = 20; //aqui eu n達o sei qual 辿 o 炭ltimo indice livre, ent達o usei o count para contar e colosar no ultimo indice livre para mim

$idadeList[] = 28; //se eu n達o informar nenhum indice, ele coloca no ultimo indice numerico disponivel
foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
?>