<?php

require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Bruno Henrique");
$cad->setEmail("bruno.cristofolini01@gmail.com");
$cad->setSenha("123456");

echo $cad;