<?php

$a = 10;

function trocavalor (&$a) {
    $a += 50;
    return $a;

}

echo $a;
echo "<br>";
echo trocavalor($a);