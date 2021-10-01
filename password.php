<?php

function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){

$pass = chr(rand(65,90));
$min = "";
$num = "";
$otro = "";

for ($i = 0; $i < 5; $i++){
$min.= chr(rand(97,122));

}
$pass.= $min;

for($i = 0; $i < 3 ; $i++){
$num = chr(rand(48,57));

}
$pass.= $num;

for($i = 0; $i < 2 ; $i++){
$otro= chr(rand(58,64));

}
$pass.= $otro;
return str_shuffle($pass);
}
echo rand_Pass();

?>