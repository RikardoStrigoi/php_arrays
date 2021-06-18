<?php

namespace Alura;

require 'autload.php';

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$correntistasNaoPagantes = [
  "Luis",
  "Luisa",
  "Rafael",
];

//array_diff deleta diferença entre 02 arrays
$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

var_dump($correntistasPagantes) ;