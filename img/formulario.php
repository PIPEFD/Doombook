
<?php
    $is_error=FALSE;
    $isLoged=FALSE;
    $usuario="";
    $password="";


    //****


    // */
    function crearform($usuario,$password){
        $action=$_SERVER['PHP_SELF'];

    $formulario=<<< FORM
        <form method="post" action="$action">
            <input type="text" name="usuario"placeholder="introduce usuario" value="$usuario" required>
            <input type="text" name="password" placeholder="introduce contraseña" value="$password" required>
            <input type="submit" name="submit" value="Acceder">

        </form>
    FORM;
    return $formulario;
    }
    //FIN DE crearForm()
    //------------------------------

    //--------------------------------------
    if (isset($_POST['submit'])){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        $fh = fopen('people.txt','rb');
        while ((! feof($fh)) && ($line = fgets($fh))) {
                $line = trim($line);
                $info = explode('|', $line);
            if (($info[0] ==$_POST['usuario'])&& ($info[1]== $_POST ['password'])){
                echo "El usuario existe";
                $isLoged=TRUE;
                break;
            }
            else{
                $is_error=FALSE;
                 echo "El usuario no existe";
                break;
            }
            //print '<li> ' . $info[0] . '.' . $info[1] ."</li>\n";
        } 
        fclose($fh);

        //echo "proceso formulario<br>";
        
    }



    if ($is_error) {
        echo '<p style="color:red">Se ha producido algun error </p>';

    } elseif ($isLoged){
        header ("Location:bienvenido.php");
        exit;
    }
    echo crearform($usuario,$password);

?>

































