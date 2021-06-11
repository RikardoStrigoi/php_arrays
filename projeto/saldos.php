<?php

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

foreach ($saldos as $saldo) {
  echo "O saldo é $saldo" . PHP_EOL;
}

// Sort para ordenação crescente de array
sort($saldos);

echo "O menor saldo é $saldos[0]" . PHP_EOL;

$quantidadeSaldos = sizeof($saldos);

echo "O maior saldo é " . $saldos[--$quantidadeSaldos];