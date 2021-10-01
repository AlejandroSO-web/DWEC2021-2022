<?php


function comparar ($a , $b){
    if ($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$alumno = array ( 'edad' => 5 , 'aula' => 14, 'sillas' => 3, 'mesas' => 20 , 'pisos' => 4);
print_r($alumno);

echo "<br><br>";

uasort($alumno, 'comparar');
print_r($alumno);


?>