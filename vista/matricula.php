

<?php include 'partials/head.php';?>
<?php

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


?>
<?php include 'partials/menu.php';?>


<div class="container">

  <div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <form action="../add.php" method="POST">

            
            <legend>Matricula</legend>
               <div class="form-group">
                    <p>Curso
                      <select id="curso" name="mult[]" class="form-control">
                      </select>
                    </p>
                    </div>

         <!--          <div class="form-group">
                    <p>Profesor
                      <select id="profesor" name="profesor" class="form-control">
                      </select>
                    </p>
                    </div>-->

                       <div class="form-group">
                    <p>Alumnos
                      <select  id="cliente" name="multi[]" class="form-control" multiple="multiple">
                        
                      </select>
                    </p>
                    </div>
                <!--             <div class="form-group">
                    <label> Hora Inicial
                      <input type="time" name="ini[]" multiple="multiple">
                    </label>
                      </div>
                       <div class="form-group">
                     <label> Hora  Final
                      <input type="time" name="fini[]" multiple="multiple">
                    </label>
                        </div>-->
                 <button type="submit"  name="submit" class="btn btn-success">Registrar Curso</button>


              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /.container -->
      <script src="js/bootstrap.min.js"></script>

           <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
           <script src="js/mostrar.js"></script>
                  <script src="js/jquery.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
           <script type="text/javascript" src="assets/js/index.js"></script>



