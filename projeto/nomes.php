<?php

$nomes = "Ricardo, Heloise, Cleide, Ariana";

//explode separa string em array passando um delimitador
$array_nomes = explode(", ", $nomes);

foreach ($array_nomes as $nome) {
  echo "Olá $nome" . PHP_EOL;
}

//implode junta elementos de array em string 
$nomesJuntos = implode(", ", $array_nomes);

echo $nomesJuntos;