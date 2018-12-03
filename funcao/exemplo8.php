<?php

function soma(int ...$valores):float {

    return array_sum($valores);

}

echo var_dump(soma(2,2));
echo soma (2,2);
echo "<br>";
echo soma (7,2.85);
echo "<br>";
echo soma (25,38);
echo "<br>";