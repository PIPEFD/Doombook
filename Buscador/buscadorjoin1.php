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
      <form method="POST" >
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

$consulta="SELECT publicacion.Titulo, autor.Nombre_autor as Autor, tipo.Descripcion_Tipo as Género, editorial.Nombre_editorial as Editorial, publicacion.Precio_publicacion as Precio FROM publicacion 
INNER JOIN publicacion_autor ON publicacion.Cod_interno = publicacion_autor.Cod_interno 
INNER JOIN autor ON publicacion_autor.DNI_autor= autor.Dni_autor 
INNER JOIN publicacion_tipo ON publicacion.Cod_interno = publicacion_tipo.Cod_interno 
INNER JOIN tipo ON publicacion_tipo.Cod_tipo= tipo.Cod_tipo 
INNER JOIN editorial ON editorial.Cod_editorial = publicacion.Cod_editorial
WHERE tipo.Descripcion_Tipo LIKE '%$busqueda%'
OR publicacion.Titulo LIKE '%$busqueda%'
OR autor.Nombre_autor LIKE '%$busqueda%'
OR editorial.Nombre_editorial LIKE '%$busqueda%'";

$resultado=mysqli_query($conexion, $consulta);

echo "<table class='table table-hover table-bordered border-primary'>";
echo "<tr><th>Título</th><th>Autor</th><th>Género</th><th>Editorial</th><th>Precio</th></tr>"; 

while($fila=mysqli_fetch_row($resultado)) {

    
    
    echo "<tr><td>$fila[0]</td><td>$fila[1]</td><td>$fila[2]</td><td>$fila[3]</td><td>$fila[4]</td></tr>";
    
    
    
    
    }
    
   echo "</table>";
    
    
    mysqli_close($conexion);
    


?>
<!--SELECT publicacion.Título,autor.Nombre_autor as Autor, publicacion.Precio_publicacion as Precio 
FROM publicacion 
INNER JOIN publicacion_autor on publicacion.Cod_interno = publicacion_autor.Cod_interno 
INNER JOIN autor on autor.Dni_autor = publicacion_autor.DNI_autor 
WHERE autor.Dni_autor=1;

SELECT publicacion.Título, autor.Nombre_autor as Autor, tipo.Descripcion_Tipo as Género, editorial.Nombre_editorial as Editorial, publicacion.Precio_publicacion as Precio FROM publicacion 
INNER JOIN publicacion_autor ON publicacion.Cod_interno = publicacion_autor.Cod_interno 
INNER JOIN autor ON publicacion_autor.DNI_autor= autor.Dni_autor 
INNER JOIN publicacion_tipo ON publicacion.Cod_interno = publicacion_tipo.Cod_interno 
INNER JOIN tipo ON publicacion_tipo.Cod_tipo= tipo.Cod_tipo 
INNER JOIN editorial ON editorial.Cod_editorial = publicacion.Cod_editorial
WHERE tipo.Cod_tipo=1;;--->
<!--div del footer------------------------------------>
<div class="container-fluid bg-success bg-opacity-25">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top">
            <p class="col-sm-4 mb-0 text-muted">&copy; 2021 Librería, Inc</p>


            <ul class="nav col-sm-4 justify-content-end">
                <li class="nav-item"><a href="../index_html.php" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="../comics.php" class="nav-link px-2 text-muted">Comics</a></li>
                <li class="nav-item"><a href="../libros.php" class="nav-link px-2 text-muted">Libros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>
<script src="/js/bootstrap.bundle.min.js"></script>

</body>
</html>