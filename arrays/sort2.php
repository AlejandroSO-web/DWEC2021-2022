<?php

$temperaturas = "20,21,22,23,14,15,34,36,4,6";

$temperatura = explode(",", $temperaturas);

echo "La suma de la media es : " . array_sum($temperatura)/count($temperatura);


echo "<br><br>" . "temperaturas altas  =>";
rsort($temperatura);
print_r (array_slice($temperatura,0,5));
echo "<br><br>" . "temperaturas bajas  =>";
print_r (array_slice($temperatura,-5));


?>