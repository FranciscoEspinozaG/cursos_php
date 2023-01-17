<!DOCTYPE html>
<html lang="es">
<head>
    <script>
        let schemeColor = window.matchMedia("(prefers-color-scheme: dark)").matches;
        if(schemeColor){
            var darkMode = true;
            document.write('<?php $darkMode = true ?>');
        }else{
            var darkMode = false;
            document.write('<?php $darkMode = false ?>');
        }
    </script>
    <?php
        if($darkMode){
            $schemeColor = 'dark';
        }else{
            $schemeColor = 'white';
        }

        echo $schemeColor;
        echo $darkMode;
    ?>
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152-<?php echo $schemeColor ?>.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180-<?php echo $schemeColor ?>.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192-<?php echo $schemeColor ?>.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32-<?php echo $schemeColor ?>.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96-<?php echo $schemeColor ?>.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16-<?php echo $schemeColor ?>.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144-<?php echo $schemeColor ?>.png">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>

    <!------------------ JS ------------------>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!----------------- CSS ----------------->

    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- BootstrapIcons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css\estilos.css">

    <!-- reminder, this file has a relative path inehrted from where is called, not from his own folder -->
</head>
