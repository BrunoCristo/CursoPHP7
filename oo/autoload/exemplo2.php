<?php
function incluiClasses($nomeClasse)
{
    if (file_exist($nomeClasse . ".php") === true) {
        require_once $nomeClasse . ".php";
    }
}
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    if (file_exists("abstrataS". DIRECTORY_SEPARATOR .$nomeClasse.".php")===true) {
        require_once ("abstrataS". DIRECTORY_SEPARATOR .$nomeClasse.".php");

    }

});



$carro = new DelRey();

$carro->acelerar(80);
