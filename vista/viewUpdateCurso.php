

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
include '../controlador/cursoControlador.php';
include '../helps/helps.php';
$curso=null;
if(isset($_GET["idcurso"])){
   $id  = validar_campo($_GET["idcurso"]);
           $curso   = cursoControlador::getCursoId($id);
}
?>

<div class="container">

  <div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="updateCodeCurso.php" method="POST">

                <?php if (is_null($curso)) {?>
                <legend>Crear nuevo curso</legend>
                 <div class="form-group">
                  <p>Rol
                    <select id="usuarios" name="usuario" class="form-control">
                    </select>
                  </p>
                </div>
                <?php } else {?>
                <legend>Editar curso [<?php echo $curso->getNomCurso() ?>]</legend>
                <input type="hidden" name="idcurso" value="<?php echo $curso->getIdcurso() ?>">

                <?php }?>
             
              <div class="form-group">
                <label>Nombre </label>
                <input type="text" placeholder="Introduce tu nombre..." required class="form-control" name="nomcur" value="<?php echo is_null($curso) ? "" : $curso->getNomcurso() ?>">
              </div>
              <div class="form-group">
                <labe>Descripcion </label>
                  <input type="text" placeholder="Introduce la descripcion..." required class="form-control" name="desc" value="<?php echo is_null($curso) ? "" : $curso->getDescripcion() ?>">
              </div>                            
                 <button type="submit" class="btn btn-success">Editar</button>
            </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
  </script>
  <script type="text/javascript" src="assets/js/index.js"></script>