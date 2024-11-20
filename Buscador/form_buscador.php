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
    
<!------BUSCADOR GENERAL PARA PUBLICACIONES,TITULOS,AUTORES,GENEROS Y EDITORIALES------>
<fieldset>
    <legend>Buscar por título, autor, género o editorial</legend>
 <form action="buscadorjoin1.php" method="GET"> 
    <label for="">Buscar:</label> <input type="text" name="buscar">
    <input type="submit" name="enviar" value="Vamos">
 </form>
</fieldset>

<br>
<fieldset>
    <legend>Buscar rol usuario</legend>
 <form action="buscadorjoin.php" method="GET"> 
    <label for="">Buscar usuario:</label> <input type="text" name="buscar">
    <input type="submit" name="enviar" value="Vamos">
 </form>
</fieldset>
 
<br>
<fieldset>
    <legend>Buscar códigos</legend>
 <form action="buscador.php" method="GET"> 
    <label for="">Buscar:</label> <input type="text" name="buscar">
    <input type="submit" name="enviar" value="Vamos">
 </form>
</fieldset>
<script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>