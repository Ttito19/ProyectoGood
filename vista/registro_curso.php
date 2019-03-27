

<?php include 'partials/head.php';?>
<?php
/*
if (isset($_SESSION["correo"])) {
    if ($_SESSION["correo"]["tipo"] == 2) {
        header("location:usuario.php");
    }
}else {
   header("location:login.php");
}

if (isset($_SESSION["correo"])) {
if( $_SESSION["correo"]["tipo"] == 3){
        header("location:docente.php");
    }
}else{
      header("location:login.php");
}

*/
?>
<?php include 'partials/menu.php';?>


<div class="container">

  <div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="cursoCode.php" method="POST">

            
              <legend>Crear nuevo Curso</legend>
               <div class="form-group">
                    <label>Curso</label>
                    <input type="text" placeholder="Introduce el curso..." required class="form-control" name="txtnomcurso">
                  </div> 

              
              <div class="form-group">
                    <label>Descripcion</label>
                    <input type="text" placeholder="Introduce la Descripcion..." required class="form-control" name="txtdescripcion">
                  </div> 
                <!--         <div class="form-group">
                    <label>Hora inicial</label>
                    <input type="time" placeholder="Introduce horario inicial..." required class="form-control" name="txthorainicial">
                  </div> 
                         <div class="form-group">
                    <label>Hora final</label>
                    <input type="time" placeholder="Introduce horario final..." required class="form-control" name="txthorafinal">
                  </div> -->

                 <button type="submit" class="btn btn-success">Registrar Curso</button>
            </form>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->

<?php include 'partials/footer.php';?>

