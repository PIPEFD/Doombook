<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/book1(1).ico" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script> 
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')
        myModal.addEventListener('shown.bs.modal', function () {
        myInput.focus()})
    </script>
    
    <title>Inicio</title>
</head>

<body>
    <?php
        include_once "php/header.php"
    ?>
     <main>
        <!--Carrusel-------------------------------------->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

            <!--Indicadores que aparecen abajo--------------------------->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                
            </div>
            <!--Diapositivas o Slides que tiene el carrusel-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="img/carrusel1.jpg" width="100%" height="550px" class="d-block w-100">

                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="h1">Libros</h1>
                            <p>!Todos los autores a los mejores precios!</p>
                            <p><a class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" href="#">Acceder</a></p>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <div class="carousel-item">
                <img src="img/carrusel3.jpg" width="100%" height="550px" class="d-block w-100">


                    <div class="container">
                        <div class="carousel-caption">
                            <h1 class="h1 text-warning">Comics</h1>
                            <p class="text-warning" >!Aquí encontrarás todas las novedades!</p>
                            <p><a class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#myModal"  href="#">Acceder</a></p>
                        </div>
                    </div>
                </div>
                
            </div>

            <!--Botones laterales de control del carrusel------------------------>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
    </main>
    <!--div del footer------------------------------------>
    <div class="container-fluid bg-success bg-opacity-25">
        <?php
            include_once "php/footer.php"
        ?>
    
    
        
    </div>

    <!--script de JS asociado al Bootstrap-------------->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>


</html>


  
  
