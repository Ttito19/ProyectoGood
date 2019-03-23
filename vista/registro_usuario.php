

    <?php include 'partials/head.php';?>
   <?php

  if (isset($_SESSION["correo"])) {
      if ($_SESSION["correo"]["tipo"] == 2) {
          header("location:usuario.php");
      }
  }else {
     header("location:index.php");
  }

  if (isset($_SESSION["correo"])) {
  if( $_SESSION["correo"]["tipo"] == 3){
          header("location:docente.php");
      }
  }else{
        header("location:index.php");
  }


  ?>
    <?php include 'partials/menu.php';?>
    <?php
    include '../controlador/usuarioControlador.php';
    include '../helps/helps.php';
    $correo=null;
    if(isset($_GET["id"])){
       $id  = validar_campo($_GET["id"]);
               $correo   = usuarioControlador::getCorreoPorId($id);
    }
    ?>

<!--
    <script language="JavaScript" type="text/JavaScript">

    function FX_passGenerator(form,element) {
      var thePass = "";
      var randomchar = "";
      var numberofdigits = Math.floor((Math.random() * 7) + 6);
      for (var count=1; count<=numberofdigits; count++) {
        var chargroup = Math.floor((Math.random() * 3) + 1);
        if (chargroup==1) {
          randomchar = Math.floor((Math.random() * 26) + 65);
        }
        if (chargroup==2) {
          randomchar = Math.floor((Math.random() * 10) + 48);
        }
        if (chargroup==3) {
          randomchar = Math.floor((Math.random() * 26) + 97);
        }
        thePass+=String.fromCharCode(randomchar);
      }
      eval('document.'+form+'.'+element+'.value = thePass');
    }

    </script>  
-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <div class="container">

      <div class="starter-template">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <form name="form" action="registroCode.php" method="POST" onsubmit="return validar();">

                    <?php if (is_null($correo)) {?>
                    <legend>Registrar Nuevo Empleado</legend>
                    <div class="form-group">
                    <p>Cargo
                      <select id="usuarios" name="usuario" class="form-control">
                      </select>
                    </p>
                    </div>
                     <?php } else {?>
                     <legend>Editar correo [<?php echo $correo->getNombre() ?>]</legend>
                     <input type="hidden" name="id" value="<?php echo $correo->getIdempleado() ?>">

                     <?php }?>
                      <div class="form-group">
                      <label>Nombre </label>
                      <input type="text" placeholder="Introduce tu nombre..."  class="form-control" name="nom" id="nombre" value="<?php echo is_null($correo) ? "" : $correo->getNombre() ?>">
                      </div>
                      <div class="form-group">
                      <labe>Apellidos </label>
                      <input type="text" placeholder="Introduce tus apellidos..."  class="form-control" name="ape" id="apellido" value="<?php echo is_null($correo) ? "" : $correo->getApellido() ?>">
                      </div>

                      <div class="form-group">
                      <label>Correo </label>
                      <input type="text" placeholder="Introduce tu email..."  class="form-control" name="cor" id="correo" value="<?php echo is_null($correo) ? "" : $correo->getCorreo() ?>">
                      </div>   
                      <?php if (is_null($correo)) {?>
                      <div class="form-group">
                      <p>Region
                        <select id="lista_reproduccion" name="lista_reproduccion" class="form-control">
                        </select>
                      </p>
                      </div>

                      <div class="form-group">
                      <p>Provincias
                        <select id="videos" name="videos" class="form-control">
                        </select>
                      </p>
                      </div>

                      <div class="form-group">
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
                      <labe>Dni</label>
                        <input type="text"  maxlength="8" onkeypress="return valida(event)"  placeholder="Introduce tu dni..."  class="form-control" name="dni" id="dni"   oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getDni() ?>">
                      </div>

                        <div class="form-group">
                        <label>Celular </label>
                        <input type="text" maxlength="9" onkeypress="return valida(event)" placeholder="Introduce el celular..."  class="form-control" name="cel" id="celular" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getCelular() ?>">
                      </div>


                      <div class="form-group">
                        <label for="contra" >Contraseña</label>
                        <input type="password" placeholder="Introduce tu contraseña..."  class="form-control" name="contra" id="contra">
              
                        <button type="submit" onClick="FX_passGenerator('form','contra')" >Generar</button>
                      </div> 
                  <button type="submit" class="btn btn-primary " id="registrar"> <?php echo is_null($correo) ? "Registrar" : "Editar" ?></button>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- /.container -->
          <script src="js/bootstrap.min.js"></script>

         <!--  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
           <script src="js/mostrar.js"></script>
                  <script src="js/jquery.min.js"></script>  -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script type="text/javascript" src="assets/js/index.js"></script>
          
           


