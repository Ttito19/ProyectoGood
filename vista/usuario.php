<?php include 'partials/head.php';?>
<?php
/*
if (isset($_SESSION["correo"])) {
    if ($_SESSION["correo"]["tipo"] == 1) {
        header("location:admin.php");
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
}*/

?>

<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["correo"]["nomcli"]; ?></h1>
				
				<!--	<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>-->
			</div>
		</div>
	</div>
</div><!-- /.container -->

						        <?php if (!isset($_SESSION["correo"])) {?>         
            <?php } else {
    ?>
              <?php if ($_SESSION["correo"]["tipo"] == 2) {?>
               <li><a href="usuario.php">Cliente</a></li>
              <li><a href="cerrar-sesion.php">Cerrar Sesión</a></li>
             
            <?php } ?> 

            <?php 
}?>				
					

	
<?php include 'partials/footer.php';?>