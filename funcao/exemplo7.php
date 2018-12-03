<?php

function soma(int ...$valores){

    return array_sum($valores);

}

echo soma (2,2);
echo "<br>";
echo soma (7,2.85);
echo "<br>";
echo soma (25,38);
echo "<br>";