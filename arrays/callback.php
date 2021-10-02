<?php

$cadena = ["me gusta el fubtol", "como estas?", "la mano arriba", "cadena de cadenas"];

$modificar = array_map("strlen", $cadena);

print_r($modificar);
echo "<br><br>";

echo "El numero mas grande es " . max($modificar) ."<br><br>";
echo "El numero mas pequeño es " . min($modificar)."<br><br>";

?>