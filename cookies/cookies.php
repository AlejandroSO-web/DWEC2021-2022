<?php

    $language = $_COOKIE['Language'] ?? "" ;
    $setLanguage = $_GET['setLanguage'] ?? 'es';

    if ($setLanguage == 'es'){

        $language = 'es';

        $content = "Esta página está en Castellano (Idioma por defecto)";

        $title = "Cambiar el idioma de la página";

    }else if( $setLanguage == 'en'){

        $language = 'en';

        $content = "This page is in English";

        $title = "Change the language of the page";

    }
        setcookie("Language", $language);

?>

<!doctype html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <title><?= $title ?></title>

    <meta name="author" content="Víctor Ponz">

</head>    

<body>

    <ul><?= $title ?>

        <li><a href='cookies.php?setLanguage=es'>Español</a></li>

        <li><a href='cookies.php?setLanguage=en'>Inglés</a></li>

    </ul>

    <?= $content ?>

</body>

</html>