<?php

class Pessoa
{

    public $nome; //Atributo
    public function falar() //Metodo
    {

        return "O meu nome é " . $this->nome;

    }

}

$bruno = new Pessoa();
$bruno->nome = "Bruno Henrique";
echo $bruno->falar();
