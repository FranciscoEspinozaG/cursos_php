<?php
    function subir_imagen(){
        if(isset($_FILES["inputImagen"])){
            $extension = explode('.', $_FILES["inputImagen"]["name"]);
            $nuevo_nombre = rand() . '.' . $extension[1];
            $ubicacion = './img/' . $nuevo_nombre;
            move_uploaded_file($_FILES["inputImagen"]["tmp_name"], $ubicacion);
        }
    }
?>