<?php

$anoNascimento = 1990;
$nomeCompleto = "";
$nome1 = "João";
//$1nome = "" não se pode utilizar nome no inicio da variavel somente

$sobrenome = "Lolo";

$nomeCompleto = $nome1 ." " . $sobrenome;

echo $nomeCompleto;


echo $nome1;
echo "<br/>";
unset($nome);

if (isset($nome1)) {
    echo $nome1;
}
