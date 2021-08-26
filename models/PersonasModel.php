<?PHP 

    class Personas_modelo{

        private $db;
        private $personas;

        public function __construct()
        {
            $this->db=Conectar::conexion();
            $this->personas = array();   
        }


        //carga toda la informacion de la tabla
        public function get_personas()
        {
            $sql="SELECT id,cod_person,name,Lname,phone,mail FROM persona WHERE Status_idStatus='1'"; //consulta a la gase de datos
            $resultado = $this->db->query($sql); // db trae la conexion, query ejecuta la consulta
            while($row = $resultado->fetch_assoc()) //ordena los datos en la tabal
            {
                $this->personas[] = $row; // 
            }

            return $this->personas;

        }

        public function insertar($cod_person, $name, $lname, $phone,$mail){
            $resultado = $this->db->query("INSERT INTO persona(cod_person, name, Lname, phone,mail, Status_idStatus) VALUES ('$cod_person','$name','$lname','$phone','$mail', '1')");
        }

        public function modificar($id, $cod_person, $name, $lname, $phone,$mail){
            $resultado = $this->db->query("UPDATE persona set cod_person='$cod_person', name='$name', Lname='$lname', phone = '$phone',mail='$mail' WHERE  id='$id'");
        }
        public function eliminar($id){
            $resultado = $this->db->query("UPDATE persona set Status_idStatus='3' WHERE  id='$id'");

        }
        
        public function get_persona()
        {
            $sql="SELECT id,cod_person,name,Lname,phone,mail FROM persona WHERE id='$id' LIMIT 1"; //consulta a la gase de datos
            $resultado = $this->db->query($sql); // db trae la conexion, query ejecuta la consulta
            while($row = $resultado->fetch_assoc()) //ordena los datos en la tabal
            {
                $this->personas[] = $row; // 
            }

            return $this->personas;

        }




    }

?>