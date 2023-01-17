<?php

    include("conexion.php");
    include("funciones.php");

    $query = "";
    $salida = "";
    $query = "SELECT * FROM usuarios";

    if (isset($_POST["search"]["value"])) {
        $query .= 'WHERE nombre LIKE "%' . $_POST["search"]["value"] . '%"';
        $query .= 'OR apellidos LIKE "%' . $_POST["search"]["value"] . '%"';

    }
?>