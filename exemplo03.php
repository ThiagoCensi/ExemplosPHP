<?php

// Basicos
$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//////////////////////////////////////////////////////////

//camposto

$frutas = array("Abacaxi", "Laranja", "Manga");
//trazer o nome com array
//echo $frutas[2];

//objeto

$nascimento = new DateTime();

//var_dump($nascimento);

//////////////////////////////////////////////////////////

// Especiais

$arquivo = fopen("exemplo03.php", "r");
//var_dump($arquivo);

$nulo = null;
$vazio = "";

?>