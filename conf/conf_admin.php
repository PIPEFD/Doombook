<?php
session_start();
$usuario=$_SESSION['usuario'];
    if (!isset($usuario)){
      header("location:../index.html");
    }
?>
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
    <?php
        include_once "php/header.php"
    ?>

    
       <h4>Hola <?php echo $usuario  ?></h4>
       <p><a  href="includes/cerrar.php">Cerrar Sesion</p>
    
    <!--div del footer------------------------------------>
    <div class="container-fluid bg-success bg-opacity-25">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-0 border-top">
            <p class="col-sm-4 mb-0 text-muted">&copy; 2021 Librería, Inc</p>


            <ul class="nav col-sm-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Comics</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Libros</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Infantil</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>

    <!--script de JS asociado al Bootstrap-------------->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>


