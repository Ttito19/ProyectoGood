<?php include 'partials/head.php';?>
<?php
 

 //COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
 if(isset($_SESSION["tipo"]))  
 { 
     if($_SESSION["tipo"]=2){
        header("location:index.php");  
     }else if($_SESSION["tipo"]=3){
        header("location:index.php"); 
     } 

 }



?>
<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["nombre"]; ?></h1>
			
			<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>
			</div>
		</div>
	</div>
</div><!-- /.container -->

						        <?php if (!isset($_SESSION["nombre"])) {?>         
            <?php } else {
    ?>
              <?php if ($_SESSION["nombre"] == 1) {?>
              <li><a href="admin.php">Admin</a></li>
              <li><a href="registro_usuario.php">Registro Empleados</a></li>
              <li><a href="registroCliProf.php">Registro Usuarios</a></li>
              <li><a href="registro_curso.php">Cursos</a></li>
              <li class="active"><a href="crud.php">Lista de Administradores</a></li>
              <li><a href="listar_docentes.php">Lista de Docentes</a></li>
              <li><a href="listar_clientes.php">Lista de Clientes</a></li>
              <li><a href="crudCursos.php">Lista de Cursos</a></li>
              <li class="active"><a href="https://test-install.blindsidenetworks.com/client/BigBlueButton.html?sessionToken=3dooydl1otq1io57">Transmitir</a></li>
              <li class="active"><a href="matricula.php">Matricula</a></li>      
           <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
             
            <?php } ?> 

            <?php 
}?>				
				

	
<?php include 'partials/footer.php';?>
