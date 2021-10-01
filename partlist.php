<?php

$cadenas = ["Seguro", "que", "apruebo", "esta", "asignatura"];

for ( $i = 0; $i<count($cadenas) ; $i++) {

    $options [] = [implode(" ", array_slice($cadenas,0,$i))
                   ,implode(" ",array_slice($cadenas,$i))
                ];


}
print_r($options);
?>