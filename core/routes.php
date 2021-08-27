<?php

    function cargarControlador($controlador)
    {
          $nombreControlador = ucwords($controlador."Controller"); //ucWords pone la primera mayuscula y el resto minusculas
          $archivoControlador = 'controllers/'.ucwords($controlador).'.php';

          //validando si existe el controlador
        if(!is_file($archivoControlador))
        {
            $archivoControlador = 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';   
        }
        
        require_once $archivoControlador; // se carga el controlador
        $control = new $nombreControlador(); //nombre de la clase
        return $control;
    }

    function cargarAccion($controller, $accion, $id=null){

        if(isset($accion) && method_exists($controller, $accion ))
        {
            if($id==null){

                $controller->$accion(); 

            }else{

                $controller->$accion($id); 
            }
            
        }else{
            $controller->ACCION_PRINCIPAL();
        }

    }
?>