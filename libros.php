<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/book1 (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css">

    <!--CSS https://www.todostuslibros.com/-->
        <!-- <link href="style/app.css?id=323a540283059dfee5ff" rel="stylesheet">
        <link href="/front.css?id=146a1931b2fd1092535d" rel="stylesheet"> -->
        <link href="https://www.todostuslibros.com/css/fontawesome-5.12.0/css/all.min.css" rel="stylesheet">



    <title>Libros</title>
</head>

<body>
<?php
        include_once "php/header.php"
    ?>

    <br>
    <h2 style="text-align:center">BÚSQUEDA DE LIBROS</h2>
    <section class="jumbotron text-center">
    <div class="container border-custom">
        <div class="search-container text-center">
            <form method="GET" action="https://www.todostuslibros.com/busquedas" id="main-search-form">
                <div class="input-group input-group-lg">
                    <input type="text" id="main-search-input-home" name="keyword" value="" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Título, Autor, ISBN...">
                    <div class="input-group-prepend">
                        <button type="submit" class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-search"></i><span>Buscar</span></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    <br>

    <!------------DIV DEL BUSCADOR-------------------------------------------------------------------->
<!-- 
    <div class="bg-success bg-opacity-75 pt-2 pb-2 px-2 d-flex justify-content-start">
    <fieldset>    
 <form action="buscador/buscadorjoin1.php" method="GET"> 
    <label for="" class="text-white">Buscar</label> <input type="text" name="buscar" class="border border-warning rounded-pill">
    
              <button type="submit" name="enviar" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg>
 </form>
</fieldset>
    </div> -->
        <main class="bg-warning bg-opacity-75">
            <br>

               
        <main class="bg-warning bg-opacity-75" style="text-align: center;">
           
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="images/quijoterr.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Don Quijote de la Mancha</h5>
            <p class="card-text">Esta obra narra las aventuras de Alonso Quijano, un hidalgo pobre que de tanto leer novelas de caballería acaba enloqueciendo y creyendo ser un caballero andante.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        </div>
        </div>
 
        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="img/regentar.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">La Regenta</h5>
            <p class="card-text">La ciudad de Vetusta, símbolo de tradiciones anacrónicas y opresivas, es el reino de una hipocresía y de una intolerancia que hacen irrespirable y trágica la vida de Ana Ozores.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
        <div class="col-md-4">
        <img src="images/celestinar.jpg" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">La Celestina</h5>
            <p class="card-text">En La Celestina se muestran los trágicos amores de Calisto y Melibea y las malas artes que emplea la alcahueta Celestina para que se enamoren.</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
        </div>
        </div>

        <div class="card mb-3" style="max-width: 540px;">
        
       
    </main>
    <!--div del footer------------------------------------>
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

    <!--script de JS asociado al Bootstrap-------------->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>