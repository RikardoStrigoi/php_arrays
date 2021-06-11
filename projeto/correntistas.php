<?php declare(strict_types=1);

require 'ArrayUtils.php';

$correntistas_e_compras = [
"Giovanni",
 12,
"Maria",
 25,
"Luis",
"Luísa",
"12"
];

var_dump($correntistas_e_compras);

ArrayUtils::remover("Luísa", $correntistas_e_compras);

var_dump($correntistas_e_compras);