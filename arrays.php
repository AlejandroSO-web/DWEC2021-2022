<?php

$array = ["0" => "Paula","1" => "Alejandro","2" => "Sara"];
$alumnos = [  ["id" => "1", "nombre" => "Jan", "edad" => "19"],
             ["id" => "2", "nombre" => "Alejandro", "edad" => "20"],
             ["id" => "3", "nombre" => "Estefania", "edad" => "13"]
];
$numeros = array(1,2,3,4,5,6,7,8,9,10); 


//Contar nº elementos array
function countArray($array){

    count($array);
    return count($array);
}
echo count($array)."<br><br>";

//Separados por 1 espacio
function separado($array){

    $separado = implode(" ",$array). "<br><br>";
    return $separado;
}
echo separado($array);

//Ordenar alfabeticamente
function ordenado ($array){

    asort($array);
    foreach($array as $id => $valor){
    	echo $valor . "<br><br>";
    }
}
echo ordenado($array);

//Orden inverso

function reverse ($array){

$reverse = array_reverse($array);
$preverse = array_reverse($array, true);
    print_r($reverse). "<br><br>";
}
echo reverse($array);

//Posicion de mi nombre

function buscarPosicion ($array){

    $id = array_search('Alejandro' , $array);
    return $id . "<br><br>";
}
echo buscarPosicion($array);

//Crear tabla html
function array_Table($matriz) {  
    $html = "<table>";
   
    // Table header
         foreach ($matriz[0] as $clave=>$fila) {
           $html .= "<th>".$clave."</th>";
         }
   
     // Table body
        foreach ($matriz as $fila) {
         $html .= "<tr>";
            foreach ($fila as $elemento) {
             $html .= "<td>".$elemento."</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
      
       return $html;}
   
  echo array_Table($alumnos) . "<br><br>";

//Array indexado

function array_columna($alumnos){

    $nombres = array_column($alumnos, 'nombre', 'id');
    print_r($nombres);
}
echo array_columna($alumnos). "<br><br>";

//Suma de los elementos del array

function sumarNumeros($numeros){

    echo "La suma de los elementos del array es: " . array_sum($numeros) . "<br><br>";
}
echo sumarNumeros($numeros);
?>