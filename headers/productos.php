<?php

$productos = ["1" => "Producto 1", "2" => "Producto 2", "3" => "Producto 3"];
$id =  $_GET["produc" ?? ""];

if(array_key_exists($id, $productos)){
    echo "Producto " . $productos[$id];
}else{
    http_response_code(404);
    echo "ERROR 404 not found";
}



?>
