<?php

$nome = "Bruno";

function test()
{
    global $nome;
    echo $nome;
}

function test2()
{
    $nome = "joao";
    echo $nome . "agora no test2";
}
test();

test2();
