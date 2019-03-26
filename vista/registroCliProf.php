   <?php include 'partials/head.php';?>
   
    <?php include 'partials/menu.php';?>
  
    <?php
    include '../controlador/usuarioControlador.php';
    include '../helps/helps.php';
    $correo=null;
    if(isset($_GET["id"])){
       $id  = validar_campo($_GET["id"]);
               $correo   = usuarioControlador::getDocentPorId($id);
    }
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <div class="container">

      <div class="starter-template">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <form name="form" action="registroUserCode.php" method="POST">

                    <?php if (is_null($correo)) {?>
                    <legend>Registrar Usuarios</legend>
                      <div class="form-group">
                    <p>Nombre del Empleado
                      <select id="tipos" name="tipos" class="form-control">
                      </select>
                    </p>
                    <div class="form-group">
                    <p>Cargo
                      <select id="clipro" name="clipro" class="form-control">
                      </select>
                    </p>
                    </div>
                     <?php } else {?>
                     <legend>Editar Docente [<?php echo $correo->getNombre() ?>]</legend>
                     <input type="hidden" name="id" value="<?php echo $correo->getIdprofesor() ?>">

                     <?php }?>
               
                    </div>
                      <div class="form-group">
                      <label>Nombre </label>
                      <input type="text" placeholder="Introduce tu nombre..." required="" class="form-control" name="nom" value="<?php echo is_null($correo) ? "" : $correo->getNombre() ?>">
                      </div>
                      <div class="form-group">
                      <label>Apellidos </label>
                      <input type="text" placeholder="Introduce tus apellidos..." required="" class="form-control" name="ape" value="<?php echo is_null($correo) ? "" : $correo->getApellido() ?>">
                      </div>

                      <div class="form-group">
                      <label>Correo </label>
                      <input type="email" placeholder="Introduce tu email..." required="" class="form-control" name="cor" value="<?php echo is_null($correo) ? "" : $correo->getCorreo() ?>">
                      </div>   
                      <?php if (is_null($correo)) {?>
                      <div class="form-group">
                      <p>Region
                        <select id="region" name="lista_reproduccion" class="form-control">
                        </select>
                      </p>
                      </div>

                      <div class="form-group" id="div-prov" hidden>
                      <p>Provincias
                        <select id="provincia" name="videos" class="form-control">
                        </select>
                      </p>
                      </div>

                      <div class="form-group" id="div-dis" hidden>
                      <p>Distritos
                        <select id="dis" name="dis" class="form-control">
                        </select>
                      </p>
                      </div>  
                            <?php }?>
                      <script>
                      function valida(e){tecla = (document.all) ? e.keyCode : e.which;if (tecla==8){return true;}patron =/[0-9]/;tecla_final = String.fromCharCode(tecla);return patron.test(tecla_final);}
                      </script> 

                      <div class="form-group">
                      <label>Dni </label>
                        <input type="text"  maxlength="8" onkeypress="return valida(event)"  placeholder="Introduce tu dni..." class="form-control" name="dni" required="" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getDni() ?>">
                      </div>

                        <div class="form-group">
                        <label>Celular </label>
                        <input type="text" maxlength="9" onkeypress="return valida(event)" placeholder="Introduce el celular..." required="" class="form-control" name="cel" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getCelular() ?>">
                        </div>


                      <div class="form-group">
                        <p for="contra" >Contraseña</p></i>
                        <input type="password" placeholder="Introduce tu contraseña..." required="" class="form-control" name="contra" id="contra">

                      </div> 
                     <button type="submit" class="btn btn-primary "> <?php echo is_null($correo) ? "Registrar" : "Editar" ?></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /.container -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/index.js"></script>
        <?php include 'partials/footer.php';?>

