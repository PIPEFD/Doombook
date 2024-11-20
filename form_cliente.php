<?php
require_once 'model_registro.php';
require_once 'conexion.php';
$objec_conexion =new conectar();
$db=$objec_conexion->connect();


if(isset($_REQUEST['action'])){
     switch ($_REQUEST['action'])
    {
        case 'actualizar':
        $update=new mach_acces();
        $update->update_mach_acces($_POST["Cod_usuario"],$_POST["Nombre_usuario"],$_POST["Apellido"],$_POST["Telefono"],$_POST["Alias"],$_POST["Pass"],$_POST["Direccion"],$_POST["Cod_tipo_usuario"]);
        break;
        case 'registrar':
        $insert=new mach_acces();
        $insert->insert_mach_acces($_POST["Nombre_usuario"],$_POST["Apellido"],$_POST["Telefono"],$_POST["Alias"],$_POST["Pass"],$_POST["Direccion"]);
        break;
        case'eliminar':
        $delete=new mach_acces();
        $delete->delete_mach_acces($_GET["Cod_usuario"]);
        break;
        case'editar':
        $capt = $_GET["Cod_usuario"];
        $op = $_GET["Cod_usuario"];
        break;
         }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/book1 (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script> 
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()})
    </script>
    
   
</head>

<body>
    <!--Aqui tenemos el Header y el Menu navegador que en pantallas pequeñas con un boton desplegable-->
    <!--Aqui tenemos el Header y el Menu navegador que en pantallas pequeñas con un boton desplegable-->
  <?php
   include_once "header.php";
  ?>

    <div class="container">
        <h1>REGÍSTRATE</h1>
        <form method="POST" enctype="multipart/form-data">
				<table class="redTable">
				<H1>REGISTER NEW USER</H1>
			
					<td>Nombre</td>
					<td><input id="form" type="text" name="Nombre_usuario"  placeholder="Nombre" style="text-transform: lowercase;"></td>
          <td>Apellido</td>
					<td><input id="form" type="text" name="Apellido"  placeholder="Apellido" style="text-transform: lowercase;"></td>
				</tr>
					<td>Teléfono</td>
					<td><input id="form" type="text" name="Telefono"  placeholder="Telefono" style="text-transform: lowercase;"></td>
					<!--<td>SEGUNDO APELLIDO</td>
					<td><input id="form" type="text" name="second_last_name" placeholder="segundo apellido" style="text-transform: lowercase;"></td>--->
				</tr>
				<tr>
					<td>Alias</td>
					<td><input id="form"  type="text" name="Alias"  placeholder="Alias" ></td>
					<td>Contraseña</td>
					<td><input type="text" id="form" name="Pass"  placeholder="Contraseña" style="text-transform: lowercase;"></td>
				</tr>
				<tr>
					<td>Dirección</td>
					<td><input type="text" id="form" name="Direccion" placeholder="Direccion" style="text-transform: lowercase;"></td>
				<!--	<td>E-MAIL</td>
					<td><input type="text" id="form" name="e_mail" value="<?php echo $row[""];?>" placeholder="e_mail" style="text-transform: lowercase;"></td>
				</tr>
				<tr>--->
					
					</select></td>
					
				<tfoot>
					<tr>
						<td colspan="4">
							<div class="links">
								<input id="buton2c" type="submit" value="Send" onclick="this.form.action='?action=registrar';"/>	
							</div>
						</td>
					</tr>
				</tfoot>
				</table>
				
			</form>
      </div>
      
<!-- <a href="?action=ver&m=1" id="buton1b">NEW USER ASSIGNATION</a> -->
    <!--div del footer------------------------------------>
    <?php
    include_once "footer.php";
    ?>


    <!--script de JS asociado al Bootstrap-------------->
    <script src="js/bootstrap.bundle.min.js"></script>

  
  </body>
 
</html>
