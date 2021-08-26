<?php

    class PersonasController
    {
        public function __construct()
        {
            require_once "models/PersonasModel.php";

        }
        public function index()
        {
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

        public function guardar() // recibe los datos via post y los guarda en la base de datos
        {
            $cod_person =$_POST['cod_person']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $name = $_POST['name']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $lname= $_POST['lname']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $phone =$_POST['phone']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $mail = $_POST['mail']; //mysql_escape_string ayuda a evitar las inyecciones sql

            $personas = new Personas_modelo();
            $personas->insertar($cod_person, $name, $lname, $phone,$mail);
            
            $data["titulo"] = "Agregar Nuevo Contacto";
            $this->index(); // 

        }
        public function modificar($id)
        {
            $data["id"] = $id;
            $data["titulo"] = "Modificar";
            require_once "views/Personas/personas_modificar.php";
        }

        public function actualizar() // recibe los datos via post y los guarda en la base de datos
        {
            $id =$_POST['id'];
            $cod_person =$_POST['cod_person']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $name = $_POST['name']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $lname= $_POST['lname']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $phone =$_POST['phone']; //mysql_escape_string ayuda a evitar las inyecciones sql
            $mail = $_POST['mail']; //mysql_escape_string ayuda a evitar las inyecciones sql

            $personas = new Personas_modelo();
            $personas->modificar($id, $cod_person, $name, $lname, $phone,$mail);
            
            $data["titulo"] = "Agregar Nuevo Contacto";
            $this->index(); // 

        }

        public function eliminar() 
        {
            $id=$_GET['id'];
            $personas = new Personas_modelo();
            $personas->eliminar($id);

              $data["titulo"] = "Agregar Nuevo Contacto";
            $this->index(); // 

        }
    }

?>