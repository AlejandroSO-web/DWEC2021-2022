<?php       

$navigator = $_SERVER['HTTP_USER_AGENT'];
$content = "";
$title = "";

if (strpos($navigator , 'Firefox') === FALSE){

    $title = "Change the navigator";

    $content = "No compatible con este navegador";


}else{
    
    
    $content = "Mi pagina";
    
    $title = "Bienvenid@s";

}
    

?>

<!doctype html>

<html lang="es">

<head>

<meta charset="utf-8">

<title><?= $title ?></title>

<meta name="author" content="Alejandro Sanchez">

</head>    

<body>

<?= $content ?>

</body>

</html>