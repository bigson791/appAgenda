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
            $sql="SELECT cod_person,name,Lname,phone,mail FROM persona"; //consulta a la gase de datos
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

    }

?>