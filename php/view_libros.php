<?php
require_once 'model_libro.php';
require_once 'conexion.php';
$objec_conexion =new conectar();
$db=$objec_conexion->connect();

if(isset($_REQUEST['action']))
{   switch ($_REQUEST['action'])
    {
        case 'actualizar':
        $update=new registro_libro();
        $update->actualizar_libro($_POST["id2"],$_POST["Cod_publico"],$_POST["Titulo"],$_POST["Descripcion_publicacion"],$_POST["Cod_editorial"],$_POST["Stock_publicacion"],$_POST["Precio_publicacion"]);
        break;
        case 'registrar':
        $insert=new registro_libro();
        $insert->insertar_libro($_POST["Cod_publico"],$_POST["Titulo"],$_POST["Descripcion_publicacion"],$_POST["Cod_editorial"],$_POST["Stock_publicacion"],$_POST["Precio_publicacion"]);
        break;
        case'eliminar':
        $delete=new registro_libro();
        $delete->eliminar_libro($_GET["Cod_interno"]);
        break;
        case'editar':
        $capt = $_GET["Cod_interno"];
        $op = $_GET["Cod_interno"];
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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script> 
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()})
        </script>
        
        
    </head>
    <title>Registro</title>
    <body>

        <!--Aqui tenemos el Header y el Menu navegador que en pantallas pequeñas con un boton desplegable-->
        <!--Aqui tenemos el Header y el Menu navegador que en pantallas pequeñas con un boton desplegable-->
            <header class="p-0 bg-dark text-white">
                <nav class="navbar navbar-expand-sm navbar-dark bg-success" aria-label="Third navbar example">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index_html.php">Doombook</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                        <div class="collapse navbar-collapse" id="navbarsExample03">
                            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                                
                                <li class="nav-item dropdown">
                        <a class="nav-link acive" href="libros.php">
                    Libros
                    </a>
                
                </li>

                <li class="nav-item dropdown" >
                    <a   class="nav-link acive" href="comics.php" >
                    Comics
                    </a>
                
                
                                
                    
                    <li class="nav-item">
                        
                    </li>

                </ul>
                <!----------------------------------------------------------------------------->

                <!----------------------------------------------------------------------------->


                <!--------div para el login ------------------------------->
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2"data-bs-toggle="modal" data-bs-target="#myModal" >Login</button>
                    <a  class="btn btn-warning"   href="registro_cliente.php" >Sign-up</a>
                    
                </div>
                
                    
                </div>
                <div class="modal" id="myModal">
        <div class="modal-dialog pt-5">
            <div class="modal-content pt-3">

            <!-- Modal para el formulario ---------->
            <form method="POST">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-start text-black">Usuario</label>
            <input  name="usuario" type="email" class="form-control form-control-sm rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label text-start text-black">Contraseña</label>
            <input name="password" type="password" class="form-control form-control-sm rounded-pill" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="submit" class="btn btn-danger rounded-pill" >Submit</button>
        </form>
            </div>
        </div>
        </div>
                        </div>
                </nav>
            </header>



            <?php if( !empty($_GET['Cod_interno']) && !empty($_GET['action']) ){ ?>
		<div>
			<form action="#" method="POST" >
				<?php $sql1="SELECT * FROM publicacion
									WHERE Cod_interno='$op'";
				$query=$db->query($sql1);
				while ($row=$query->fetch(PDO::FETCH_ASSOC)){?> 
                		

					<input type="text" name="id2" value="<?php echo $row["Cod_interno"];?>" style="display:none">
					
					<table class="redTable">
						<CENTER><H1>EDITAR PUBLICACIONES</H1><CENTER>
						<tr>
							
							<td>Cod_publico</td>
							<td><input type="text" name="Cod_publico" value="<?php echo $row['Cod_publico']?>" ></td>
						</tr>
						<tr>
							<td>Titulo</td>
							<td><input  type="text" name="Titulo"  value="<?php echo $row['Titulo']?>" style="text-transform: lowercase;"></td>
							<td>Descripcion_publicacion</td>
							<td><input id="form" type="text" name="Descripcion_publicacion"  value="<?php echo $row['Descripcion_publicacion']?>" style="text-transform: lowercase;"></td></tr>
						<tr>
							<td>Codigo Editorial</td>
							<td><input id="form" type="text" name="Cod_editorial"  value="<?php echo $row['Cod_editorial']?>" style="text-transform: lowercase;"></td>
							<td>Stock_publicacion</td>
							<td><input id="form" type="text" name="Stock_publicacion"  value="<?php echo $row['Stock_publicacion']?>" style="text-transform: lowercase;"></td>
						</tr>
						<tr>
							<td>Precio publicacion</td>
							<td><input id="form"  type="text" name="Precio_publicacion" value="<?php echo $row['Precio_publicacion']?>" ></td>
							
						</tr>
						<tr>
							<!-- <td>PREGUNTA DE SEGURIDAD</td>
							<td><select name="security_question_num_question">
								<?php
								// $db=database::conectar();
								// foreach($db->query('select * from security_question')as $row1){
								// 	echo '<option value="',$row1['num_question'],'">',$row1['question'],'</option>';
								// }
								?>
							</select></td> -->
							
						</tr>
						<tfoot>
							<tr>
								<td colspan="4">
									<div class="links">
										<input type="submit" value= "Send" onclick= "this.form.action = '?action=actualizar';"/>
									</div>
								</td>
							</tr>
						</tfoot>
						</table>
				</form>
		</div>	
		 <?php } ?>

		
	<?php } ?>

        
        <?php if (!empty($_GET['m']) and !empty($_GET['action']) ) { ?>
            <div class="container">
                <h1>REGÍSTRATE</h1>
                        <!---------------------------INICIO DE FORMULARIO------------------------------>



                        <!----------------------------------------------------------------------------->





                        <!----------------------------------------------------------------------------->

                    <form  action="#" method="POST" enctype="multipart/form-data">
                        <legend>Publicaciones:</legend>

                    
                        <label for="Cod-Pub">Cod-Pub:</label> 
                                <input input type="text" id="form" type="text" name="Cod_publico"   style="text-transform: lowercase;">
                            <br>
                        <br>
                        <label for="Título">Titulo:</label> 
                                <input type="text" id="form" type="text" name="Titulo"   style="text-transform: lowercase;">
                            <br>
                        <br>
                        <label for="Descripción">Descripcion:</label>
                                <input type="text" id="form" type="text" name="Descripcion_publicacion"   style="text-transform: lowercase;">
                            <br>
                        <br>
                        <label>Editorial</label>
                            
                        <input type="text" id="form" type="text" name="Cod_editorial"   style="text-transform: lowercase;">

                            <br>
                        <!-- <label for="Img">Img:</label> 
                            <input type="file" id="form"  name="img"   style="text-transform: lowercase;">
                            <br>
                        <br> -->
                        <label for="Stock">Stock:</label> 
                                <input type="text" id="form" type="text" name="Stock_publicacion"  style="text-transform: lowercase;">
                            <br>
                        <br>
                        <label for="Precio">Precio:</label>
                                <input type="text" id="form" type="text" name="Precio_publicacion"   style="text-transform: lowercase;">
                            <br>
                        <br>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class="links">

                                    <input id="buton2c" type="submit" value="Send" onclick="action='?action=registrar';"/>	
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </form>
                    <!------------------FIN DE FORMULARIO DE REGISTRO USUARIO---------------------->




                    <!------------------------------------------------------------------------------->





                
                <?php } ?>
                <a href="?action=ver&m=1" id="buton1b">NEW BOOK ASSIGNATION</a>
                </div>
                    <!------------------------------------------------------------------------------->   


                <div>
                    <CENTER><h1>EXISTING BOOKS</h1></CENTER>

                    
                    <div id="">
                        <table class="">
                        
                        <tr>
                            <th>Cod_interno</th>
                            <th>Cod_publico</th>				
                            <th>Titulo</th>
                            <th>descripcion_publicacion</th>
                            <th>Cod_editorial</th>
                            <th>Stock_publicacion</th>
                            <th>Precio_publicacion</th>
                            
                        </tr>
                        <?php
                        
                        $sql1="select * from publicacion";
                        $query=$db->query($sql1);
                    while($row2=$query->fetch(PDO::FETCH_ASSOC)){
                        ?>
                        <form method="POST">
                        <tr>
                            <td><?php echo $row2["Cod_interno"];?></td>
                            <td><?php echo $row2["Cod_publico"];?></td>
                            <td><?php echo $row2["Ttulo"];?></td>
                            <td><?php echo $row2["Descripcion_publicacion"];?></td>
                            <td><?php echo $row2["Cod_editorial"];?></td>
                            <td><?php echo $row2["Stock_publicacion"];?></td>
                            <td><?php echo $row2["Precio_publicacion"];?></td>
                            <td><a href="?action=editar&Cod_interno=<?php echo $row2['Cod_interno']; ?>">Update</a></td>
                            <td><a href="?action=eliminar&Cod_interno=<?php echo $row2['Cod_interno'];?>">Delete</a></td>
                        </tr>
                        </form>
                    <?php } ?>
                    </div>

                 
                
                <! div del footer------------------------------------>
            <!-- <div class="container-fluid bg-success bg-opacity-25">
                <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top">
                    <p class="col-sm-4 mb-0 text-muted">&copy; 2021 DOOMBOOK, Inc</p>


                    <ul class="nav col-sm-4 justify-content-end">
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Comics</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Libros</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Infantil</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
                    </ul>
                </footer>
            </div> -->
            

            <!--script de JS asociado al Bootstrap-------------->
            <script src="js/bootstrap.bundle.min.js"></script>

    
    </body>
 
</html>

