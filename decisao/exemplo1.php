<?php

$qualASuaIdade = 17;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "É Criança";

} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolecente";

} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto";

} else {
    echo "Idoso";
}

echo ($qualASuaIdade < $idadeMaior)? "Menor de idade":"Maior de Idade";
