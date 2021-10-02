<?php

//http://localhost/DWEC2021-2022/cadenas.php?nombre=alejandro

$nombre = "";
$prefijo= "";
$url = 'http://username:password@hostname:9090/path?arg=value';
function mostraNombre(&$nombre){

    if($_GET["nombre"] == NULL){
        $nombre = "usuario";
    }else{
        $nombre = trim(($_GET["nombre"]), '/');
    }

    return $nombre;

}
echo "Te llamas =>" . mostraNombre($nombre). "<br><br>";


function longitud($nombre){
    
    return  strlen($nombre);
}
echo "La longitud es =>" . longitud($nombre). "<br><br>";


function nombreMayus ($nombre){

    return strtoupper($nombre);
}
echo "Nombre en mayúsculas =>" . nombreMayus($nombre) . "<br><br>";

function nombreMinus ($nombre){

    return strtolower($nombre);
}
echo "Nombre en minusculas =>" . nombreMinus($nombre) . "<br><br>";

//http://localhost/DWEC2021-2022/cadenas.php?nombre=alejandro&prefijo=a

function samePrefijo($nombre,$prefijo){

if($_GET["prefijo"] == NULL){
    $prefijo = "";
    return "prefijo no definido". "<br><br>";
}else{
    $prefijo = $_GET["prefijo"];
}
$posicion = strpos($nombre, $prefijo);

if ($posicion !== false){
    return "Tiene el mismo prefijo". "<br><br>";
}else{
    return "No tiene el mismo prefijo". "<br><br>";
}

}
echo  samePrefijo($nombre,$prefijo);


function cuantosHay ($nombre ){

$name = strtolower($nombre);
return substr_count($nombre, "a" );
}
echo "Hay " . cuantosHay($nombre) . " a minisculas" . "<br><br>";


function ubicacionPrimera ($nombre){
   
    if(stripos($nombre,"a") === NULL){
        return "no se encuentra la a en la cadena". "<br><br>";
    }else{
        return "la primera letra se encuentra en la posicion " . stripos($nombre,"a")."<br><br>";
    }
    }
    echo ubicacionPrimera($nombre) . "<br><br>";

function cambiaNombre($nombre) {
    $nombre = strtolower($nombre);
    return str_ireplace("o" , "0" , $nombre);
}
echo "Cadena cambiada => " . cambiaNombre($nombre) . "<br><br>";


function desgloseURL($url){

    echo "Protocolo => ". (parse_url($url, PHP_URL_SCHEME)) . "<br><br>";
    echo "Usuario => ". (parse_url($url, PHP_URL_USER)). "<br><br>";
    echo "Path => ". (parse_url($url, PHP_URL_PATH)). "<br><br>";
    echo "Querystring => ". (parse_url($url, PHP_URL_QUERY)). "<br><br>";

}
echo desgloseURL($url);
?>