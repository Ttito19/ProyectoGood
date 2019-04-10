

<?php include 'partials/head.php';?>
<?php
/*
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
*/

?>
<?php include 'partials/menu.php';?>
<?php
include '../controlador/usuarioControlador.php';
include '../helps/helps.php';
$correo=null;
if(isset($_GET["idcliente"])){
   $id  = validar_campo($_GET["idcliente"]);
           $correo   = usuarioControlador::getClientPorId($id);
}
?>


<div class="container">
    <div class="form-row">
      <div class="col-sm-4  offset-sm-4 justify-content-center">
            <form action="updateUsuarioCliente.php" method="POST">

             <?php if (($correo)) {?>
           <legend>Editar Datos del Usuario: [<?php echo $correo->getNombre() ?>]</legend>
              <input type="hidden" name="id" value="<?php echo $correo->getIdcliente()?>">
              <?php }?>

          
             
              <div class="form-group">
                <label>Nombre </label>
                <input type="text" placeholder="Introduce tu nombre..." required class="form-control" name="nom" value="<?php echo is_null($correo) ? "" : $correo->getNombre() ?>">
              </div>

              <div class="form-group">
                <label>Apellidos </label>
                  <input type="text" placeholder="Introduce tus apellidos..." required class="form-control" name="ape" value="<?php echo is_null($correo) ? "" : $correo->getApellido() ?>">
              </div>

              <div class="form-group">
                  <label>Correo </label>
                  <input type="email" placeholder="Introduce tu email..." required class="form-control" name="cor" value="<?php echo is_null($correo) ? "" : $correo->getCorreo() ?>">
              </div>   
               
                <script>
                  function valida(e){tecla = (document.all) ? e.keyCode : e.which;if (tecla==8){return true;}patron =/[0-9]/;tecla_final = String.fromCharCode(tecla);return patron.test(tecla_final);}
                </script> 

              <div class="form-group">
                  <label>Dni</label>
                    <input type="text"  maxlength="8" onkeypress="return valida(event)"  placeholder="Introduce tu dni..." required class="form-control" name="dni" required="" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getDni() ?>">
              </div>

              <div class="form-group">
                    <label>Celular </label>
                    <input type="text" maxlength="9" onkeypress="return valida(event)" placeholder="Introduce el celular..." required class="form-control" name="cel" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="<?php echo is_null($correo) ? "" : $correo->getCelular() ?>">
              </div>


              <div class="form-group">
                    <label>Contraseña </label>
                    <input type="password" placeholder="Introduce tu contraseña..." required class="form-control" name="contra">
              </div> 

                 <button type="submit" class="btn btn-success">Editar</button>
                 <a href="listar_clientes.php" class="btn btn-danger" >Cancelar </a>
                </form>
        </div>
      </div>
    </div><!-- /.container -->

    <?php include 'partials/footer.php';?>