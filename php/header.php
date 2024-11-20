    <header class="p-0 bg-dark text-white">
        <nav class="navbar navbar-expand-sm navbar-dark bg-success" aria-label="Third navbar example">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">DoomBook</a>
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
            <a  class="btn btn-warning" href="form_cliente.php" >Sign-up</a>

        </ul>
        <?php
          
          if (!isset($_SESSION['usuario'])){
            echo '<!--------div para el login ------------------------------->
                    <div class="text-end">
                      <button type="button" class="btn btn-outline-light me-2"data-bs-toggle="modal" data-bs-target="#myModal" >Login</button>
                      <a  class="btn btn-warning" href="form_cliente.php" >Sign-up</a>
                        
                    </div>
                    <div class="modal" id="myModal">
                      <div class="modal-dialog pt-5">
                        <div class="modal-content pt-3">
            
                        <!-- Modal para el formulario ---------->
                        <form action="php/loguear.php" method="POST">
                      <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label text-start text-black">Usuario</label>
                      <input  name="usuario" type="text" class="form-control form-control-sm rounded-pill" id="exampleInputEmail1" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label text-start text-black">Contraseña</label>
                      <input name="password" type="password" class="form-control form-control-sm rounded-pill" id="exampleInputPassword1">
                    </div>
                  
                    <button type="submit" name="submit" class="btn btn-danger rounded-pill" >Submit</button>
                    </form>
                </div>
              </div>
            </div>';
          }else{
//FALTAN BOTONES: DATOS DEL CLIENTE (SOLO VER) Y PEDIDOS REALIZADOS
            echo 'Buenas usuario';
          }
        ?>
                </div>
        </nav>
    </header>