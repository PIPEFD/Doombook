<?php 
require_once 'conexion.php';



class registro_libro extends conectar{ 
			
	private $pdo;
	public function __CONSTRUCT(){
		try {
			$this->pdo=conectar::connect();
		}
		catch(exception $e){
			die($e->Message());
		}
	}
	function insertar_libro($Cod_publico,$Titulo,$Descripcion_publicacion,$Cod_editorial,$Stock_publicacion,$Precio_publicacion){
		//$sql=("SELECT * FROM publicacion");
		$sql="INSERT INTO publicacion (Cod_interno,Cod_publico, Titulo, Descripcion_publicacion,Cod_editorial,Stock_publicacion,Precio_publicacion) 
		values(' ','$Cod_publico','$Titulo','$Descripcion_publicacion',$Cod_editorial,$Stock_publicacion,$Precio_publicacion)";
		$this->pdo->query($sql);

		//print"<script>alert(\"registro agregado exitosamente.\");window.location='registro_libros.php';</script>";
	}
	public function actualizar_libro($id2,$Cod_publico,$Titulo,$Descripcion_publicacion,$Cod_editorial,$Stock_publicacion,$Precio_publicacion){
		//"update user set document_type_cod_document='$type_documenta',id_user='$pin',first_name='$primer',second_name='$segun',first_last_name='$primera',second_last_name='$seguna',password='$passw',address='$direc',phone='$tel',e_mail='$correo',security_question_num_question='$preg',answer='$respu' where document_type_cod_document='$type_documentdos' and id_user='$pindos' ";
		$sql2="UPDATE publicacion 
		SET Cod_publico=$Cod_publico,
		Titulo='$Titulo',Descripcion_publicacion='$Descripcion_publicacion',Cod_editorial=Cod_editorial,
		Stock_publicacion=$Stock_publicacion,Precio_publicacion=$Precio_publicacion 
		WHERE Cod_interno='$id2'";
		echo $sql2;

		$this->pdo->query($sql2);
		// print"<script>alert(\"registro actualizado exitosamente.\");window.location='view.php';</script>";
	}
	public function eliminar_libro($Cod_interno){
		$sql3="DELETE FROM  publicacion where Cod_interno =$Cod_interno";
		$this->pdo->query($sql3);
		// print"<script>alert(\"registro eliminado exitosamente.\");window.location='view.php';</script>";

	}

	

}


			
	
	
?>