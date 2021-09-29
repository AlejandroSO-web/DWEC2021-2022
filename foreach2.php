<?php

$colores = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');

$html = "<ul>";

foreach( $colores as $color => $valor){

    $html.="<li><a href='$valor'/> $color</a></li>";

}

echo $html;

?>