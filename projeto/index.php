<?php

namespace Alura;

require 'autoload.php';

/*
Forma basica de declaração de arrays seria:
$notas = array(9, 3, 10, 5, 10);
Porém é usado [] sem necessidade de declarar "array" na frente
*/

$notas = [9, 3, 10, 5, 10, 5];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
  echo "Media geral: $media";
} else {
  echo "Não foi possível calcular a média";
}
