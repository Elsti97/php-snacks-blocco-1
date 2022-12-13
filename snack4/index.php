<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$arrayNumerico = [];

while (count($arrayNumerico) < 15) {
  $numRandom = rand(1, 100);
  if (!in_array($numRandom, $arrayNumerico))
    $arrayNumerico[] = $numRandom;
}
var_dump($arrayNumerico);
print_r($arrayNumerico);
?>