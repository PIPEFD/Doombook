<?php

require_once "conexion.php";
$objec_conexion = new conectar();
$db=$objec_conexion->connect();
class mach_acces extends conectar{ 
			
	private $pdo;
	public function __CONSTRUCT(){
		try {
			$this->pdo=conectar::connect();
		}
		catch(exception $e){
			die($e->Message());
		}
	}

        

         function insert_mach_acces($Nombre_usuario, $Apellido, $Telefono, $Alias, $Pass, $Direccion)
        {

            
            $sql1="INSERT INTO usuario (Cod_usuario, Nombre_usuario, Apellido, Telefono, Alias, Pass, Direccion, Cod_tipo_usuario) VALUES ('','$Nombre_usuario','$Apellido', $Telefono,'$Alias','$Pass','$Direccion',2)";
            $this->pdo->query($sql1);
           // print"<script>alert(\"Registro Agregado Exitosamente.\");window.location='view_user_rol.php';</script>";
        }
        public function update_mach_acces($id2,$id,$machine,$rol,$rol2)
        {
            $sql = "UPDATE user_has_role SET
            user_id_user_role = '$id',
            user_document_type_cod_document_user_has_role='$machine',
            role_cod_role = '$rol'
            WHERE user_id_user_role = '$id2' and role_cod_role = '$rol2'";
            $this->pdo->query($sql);
                print "<script>alert(\"Registro Actualizado exitosamente.\");window.location='view_user_rol.php';</script>";
        }
        public function delete_mach_acces($machine)
        {
            $sql = "DELETE FROM document_type WHERE cod_document='$machine'";
            $this->pdo->query($sql);
                 print "<script>alert(\"Registro Eliminado exitosamente.\");window.location='view_user_rol.php';</script>";
        }
    }
?>