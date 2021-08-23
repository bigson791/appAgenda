<?php

    class PersonasController
    {
        public function index()
        {
            require_once "models/PersonasModel.php";
            $personas = new Personas_modelo();
            $data["titulo"] = "personas";
            $data["personas"] = $personas->get_personas();

            require_once "views/Personas/personas.php";
        }

        public function nuevo()
        {
            $data["titulo"] = "Nuevo Contacto";
            require_once "views/Personas/personas_nuevo.php";
        }
    }

?>