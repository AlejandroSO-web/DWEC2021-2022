<?php
$numeros = [1, 2, 3, 4, 5];
$numeros2 = [6, 7, 8, 9, 10];

$num = array_map('null',$numeros,$numeros2);
print_r($num);

$maximo = max($numeros(1, 2, 3, 4, 5),$numeros2(6, 7, 8, 9, 10));

$minimo = min($numeros(1, 2, 3, 4, 5),$numeros2(6, 7, 8, 9, 10));

echo "Valor mas alto " . $maximo . "valor mas bajo " . $minimo;


?>
