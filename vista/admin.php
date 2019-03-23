<?php include 'partials/headd.php';?>
<?php

if (isset($_SESSION["correo"])) {
    if ($_SESSION["correo"]["tipo"] == 2) {
        header("location:usuario.php");
    }
}else {
   header("location:index.php");
}

if (isset($_SESSION["correo"])) {
if(	$_SESSION["correo"]["tipo"] == 3){
		    header("location:docente.php");
		}
}else{
	    header("location:index.php");
}


?>


<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["correo"]["nombre"]; ?></h1>
			
			<!--	<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>-->
			</div>
		</div>
	</div>
</div><!-- /.container -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Good Partner Consulting <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
				<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					
					<figcaption class="text-center text-titles"> Bienvenido <?php echo $_SESSION["correo"]["nombre"]; ?></figcaption>
				</figure>
				
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Dashboard
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administrador <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						        <?php if (!isset($_SESSION["correo"])) {?>         
            <?php } else {
    ?>
              <?php if ($_SESSION["correo"]["tipo"] == 1) {?>
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
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Users <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="subject.html"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Registro de Usuario</a>
						</li>
					
						<li>
							<a href="teacher.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Teacher</a>
						</li>
						<li>
							<a href="student.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Student</a>
						</li>
						<li>
							<a href="representative.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i> Representative</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar" style="background-color: #28324e;" >
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
			</ul>
		</nav>	
	</section>


	
<?php include 'partials/footer.php';?>
