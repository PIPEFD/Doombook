<?php
session_start();
    if (!isset($_SESSION['usuario'])){
      header("location:../index.html");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script> 
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()})
    </script>
    
    <title>Document</title>
</head>

<body style="background:black;">
    <?php
        include_once "header.php"
    ?>
    
       <h4>Hola <?php echo $_SESSION['usuario']  ?></h4>
       <p><a  href="cerrar.php">Cerrar Sesion</p>
    
    <!--FOOTER------------------------------------>
    <?php
    include_once "footer.php";
    ?>
    <!--script de JS asociado al Bootstrap-------------->
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>

</html>


