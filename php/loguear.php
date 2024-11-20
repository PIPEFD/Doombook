

<?php
// require_once "php/conexion.php"; 
    // require_once $_SERVER['DOCUMENT_ROOT']."php/conexion.php"; 
    require_once 'conexion.php';

    // DE ESTA MANERA SE PERIMTE LOCALIZAR EL ARCHIVO DENTRO CON LA PALABRA RESERVADA DE PHP
    $objec_conexion =new conectar();
    $db=$objec_conexion->connect();
  session_start();
  //error_reporting(0);
  $usuario=$_POST['usuario'];
  $password=$_POST['password'];
  $submit=$_POST['submit'];
  
  $consulta="SELECT * FROM usuario where Alias='$usuario' and Pass='$password'" ;
  $resultado=$db->query($consulta);
   var_dump($resultado);
  if ($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
 
        if ($fila['Cod_tipo_usuario']==1){ //Admin
            // $_SESSION ['login']=TRUE;
            // $_SESSION['usuario']= $usuario;
            header("Location:conf_admin.php");

        }elseif ($fila['Cod_tipo_usuario']==2){ //usuario
            $_SESSION ['login']=TRUE;
            $_SESSION['usuario']= $usuario;
            header("Location:conf_user.php");

        }
  }else{
    header("Location:../index.html?error=si");
  }

?>