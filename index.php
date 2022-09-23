<?php
require_once 'Pessoa.php';

$func = new Pessoa();
$outrofunc = new Pessoa();
$func->cadastro("Tio Patinhas","9999-9999","patinhas@gmail.com","Papa Leguas","7777-7777","paleguas@gmail.com");

$outrofunc->nome= "Papa Leguas";
$outrofunc->telefone="7777-7777";
$outrofunc->email="paleguas@gmail.com";

/* echo $func->nome;
echo "<br>";
echo $outrofunc->nome; */

$func->mostraDados();
$outrofunc->mostraDados();