<?php

/*
Forma basica de declaração de arrays seria:
$notas = array(9, 3, 10, 5, 10);
Porém é usado [] sem necessidade de declarar "array" na frente
*/

$notas = [9, 3, 10, 5, 10, 5];

//size of; retorna quantidade elementos array
$quantidadeNotas = sizeof($notas);

echo "Quantidade de elementos no array: $quantidadeNotas" . PHP_EOL;

for ($i=0; $i < $quantidadeNotas; $i++) { 
  echo "Nota $i = {$notas[$i]}". PHP_EOL;
}

$soma = 0;
for ($i=0; $i < $quantidadeNotas; $i++) {
  $soma += $notas[$i];   
}
echo "Soma das Notas: $soma" . PHP_EOL;

$media = $soma / $quantidadeNotas;
echo "Media geral: $media";