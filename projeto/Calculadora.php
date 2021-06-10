<?php

class Calculadora
{
  public function calculaMedia(array $notas): ?float
  {
    //size of; retorna quantidade elementos array
    $quantidadeNotas = sizeof($notas);

    if($quantidadeNotas > 0)
    {     

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
      
      return $media;
    } else {
      return null;
    }
  }
}