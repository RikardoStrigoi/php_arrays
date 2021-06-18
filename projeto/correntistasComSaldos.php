<?php

namespace Alura;

require 'autoload.php';

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
   2500,
   3000,
   4400,
   1000,
   8700,
   9000
];

//array associativo
$correntistasComSaldo = array_combine($correntistas, $saldos);

var_dump($correntistasComSaldo);

//exibe saldo da Chave "Giovanni
echo "O saldo de Giovanni é: {$correntistasComSaldo["Giovanni"]}" . PHP_EOL;

$correntistasComSaldo["Matheus"] = 4500;
$correntistasComSaldo["Giovanni"] += 2500;

var_dump($correntistasComSaldo);

if (array_key_exists('João', $correntistasComSaldo)) {
  echo "O Saldo de João é: {$correntistasComSaldo["João"]}";
} else {
  echo "Não encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(8000, $correntistasComSaldo);

var_dump($maiores);