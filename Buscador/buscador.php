<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!--Aqui tenemos el Header y el Menu navegador que en pantallas pequeñas con un boton desplegable-->
    <header class="p-0 bg-dark text-white">
        <nav class="navbar navbar-expand-sm navbar-dark bg-success" aria-label="Third navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="index_html.php">Librería</a>
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
        <!--------div para el login ------------------------------->
        <div class="text-end">
            <button type="button" class="btn btn-outline-light me-2"data-bs-toggle="modal" data-bs-target="#myModal" >Login</button>
            <a  class="btn btn-warning"   href="registro_cliente.php" >Sign-up</a>
            
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
<?php


$busqueda=$_GET["buscar"];

$db_host="localhost";
$db_nombre="doombook";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host, $db_usuario, $db_contra);

mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra");

$consulta="SELECT * FROM autor WHERE Nombre_autor LIKE '%$busqueda%'
UNION
SELECT * FROM editorial WHERE Nombre_editorial LIKE '%$busqueda%'
UNION 
SELECT * FROM tipo WHERE Descripcion_Tipo LIKE '%$busqueda%'
UNION
SELECT Nombre_usuario, Apellido FROM usuario WHERE Nombre_usuario OR Apellido LIKE '%$busqueda%'";

$resultado=mysqli_query($conexion, $consulta);

echo "<table class='table table-striped table-bordered border-primary'>";
echo "<tr><th>Número</th><th>Nombre</th></tr>"; 
while($fila=mysqli_fetch_row($resultado)) {

    
    
    echo "<tr><td>$fila[0]</td><td>$fila[1]</td></tr>";
    
    
    
    
    }
    
   echo "</table>";

   if($fila==0){
       echo "El termino ". $busqueda." no ha sido encontrado, intentalo de nuevo!";
   }
    
    
    mysqli_close($conexion);
    


?>
<div class="container-fluid bg-success bg-opacity-25">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top">
            <p class="col-sm-4 mb-0 text-muted">&copy; 2021 Librería, Inc</p>


            <ul class="nav col-sm-4 justify-content-end">
                <li class="nav-item"><a href="index_html.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="comics.php" class="nav-link px-2 text-muted">Comics</a></li>
                <li class="nav-item"><a href="libros.php" class="nav-link px-2 text-muted">Libros</a></li>                
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
<script src="/js/bootstrap.bundle.min.js"></script>

</body>
</html>