<?php

$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");


//orden edad ascendente
function ordenado ($edades){

    asort($edades);
    foreach($edades as $id => $valor){
    	echo $valor . " ";
    }
}
echo ordenado($edades) . "<br>";


//orden alfabetico por id
function orderBy($edades){

    ksort($edades);
    foreach($edades as $id => $valor){
        echo $id. " ";
    }
}
echo orderBy($edades) . "<br>";


//orden descendente edad
function reorderBy($edades){

    arsort($edades);
    foreach($edades as $id => $valor){
        echo $valor . " ";
        
    }
}
echo reorderBy($edades). "<br>";

//orden descendente por id

function descenNombre($edades){

    krsort($edades);
    foreach($edades as $id => $valor){
            echo $id . " ";

    }
}
echo descenNombre($edades). "<br>";
?>
