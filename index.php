<?php
    require_once "config/config.php";
    require_once "core/routes.php";
    require_once "config/database.php";
    require_once "controllers/personas.php";


    if(isset($_GET['c']))
    {   
        $controlador = cargarControlador($_GET['c']);

        if(isset($_GET['a']))
        {
            cargarAccion($controlador, $_GET['a']);
        }else{
            cargarAccion($controlador, ACCION_PRINCIPAL);
        }

      
    }else{
        $controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
        cargarAccion(CONTROLADOR_PRINCIPAL, ACCION_PRINCIPAL);
       // $accionTmp = ACCION_PRINCIPAL;
        //$controlador->$accion;
    }

    //$control = new personasController();
    //$control->index();


?>