<?php
                /*    este presente para gestionar los datos allí contenidos.*/
                  /*    este presente para gestionar los datos allí contenidos.*/


    class conectar //Se declara una clase en donde contiene los parametros necesarios para la conexión
    {
        
        private  $host ="localhost" ;
        private  $username="root" ;
        private  $userpassword="";
        private  $nameBd="doombook" ;


        public function _construct(){
        /*Por medio del _construct , se asignan los datos contenido en el archivo config.php
                                       a las variables declaradas dentro de la clase conectar*/


            $this->host = HOST; 
            $this->username = USER;
            $this->userpasword = PASSWORD;
            $this->nameBd = BD;

            
        
        }        
        public  function connect(){
            try
            {
                $conexion= "mysql:host=".$this->host.";dbname=".$this->nameBd;                
                $atributos= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                $pdo=new PDO($conexion,$this->username ,$this->userpassword,$atributos);
                //echo "Conexion OK!";
                return $pdo;
            } catch(PDOException $e) {
                    die("ERROR :" .$e->getMessage());
            }
            
        }
    }

      
    // $objec_conexion = new conectar();
    // $bd=$objec_conexion->connect();
    // print_r ($bd);
        
?>    

