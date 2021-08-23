<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    require_once "controllers/personas.php";


    if(isset($_GET['c']))
    {   
        $controlador = cargarControlador($_GET['c']);
    }else{

    }

    $control = new personasController();
    $control->index();


?>