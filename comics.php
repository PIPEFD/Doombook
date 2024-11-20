<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/book1 (1).ico" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Comics</title>
</head>
<body>
<?php
include_once "php/header.php";
?>
<!------------DIV DEL BUSCADOR-------------------------------------------------------------------->

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
    </div>
    <!---------------------PARTE CENTRAL---------------------------------------->
    <main class="bg-warning bg-opacity-75">
    

  <div class="album py-5">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm"> 
            <img src="img/goku.jpg" alt="Goku" height="450px" width="340px" >
            

            <div class="card-body">
              <p class="card-text">DRAGON BALL SUPER Nº74 <br>Toriyama, Akira. <br>Gracias a la separación forzosa del aura aplicada al revés,<br> Goku consigue el aura de sus compañeros y, con ella, ¡derrota definitivamente a Moro!</p>
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">                                 
    
                  
                <button type="button" class="btn btn-secondary bg-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
                </div>
                <small class="text-muted">17´50 €</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/tokio.jpg" alt="Tokyo" height="450px">

            <div class="card-body">
              <p class="card-text">TOKYO REVENGERS <br>Wakue, Ken.<br> DA COMIENZO LA BATALLA ENTRE LA TOMAN Y LA WALHALLA: ¡EL HALLOWEEN SANGRIENTO!.La batalla del Halloween sangriento empieza con dos enfrentamientos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-secondary bg-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
                </div>
                <small class="text-muted">15'99 €</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img src="img/shaman.jpg" alt="Shaman" height="450px">
            <div class="card-body">
              <p class="card-text">SHAMAN KING Nº09<br>Takei, Hiroyuki. <br>Los shamanes son personas que pueden interactuar con los dioses, los espíritus y las almas de los difuntos. Yoh tiene ese poder y quiere convertirse en el rey shaman.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-secondary bg-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg>
                </div>
                <small class="text-muted">14'50 €</small>
              </div>
            </div>
          </div>
        </div>

    </main>
<!--FOOTER--------------------------------------------------------------------------->    
 <!--div del footer------------------------------------>
 <?php
 include_once "php/footer.php";
 ?>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>