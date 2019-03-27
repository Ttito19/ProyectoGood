<?php include 'partials/head.php';?>
<?php
/*
if (isset($_SESSION["correo"])) {
    if ($_SESSION["correo"]["tipo"] == 1) {
        header("location:admin.php");
    }
}else {
    header("location:login.php");
}

if (isset($_SESSION["correo"])) {
if(	$_SESSION["correo"]["tipo"] == 2){
		    header("location:usuario.php");
		}
}else{
	    header("location:login.php");
}
*/

?>

<?php include 'partials/menu.php';?>
<div class="container">
	<div class="starter-template">
		<br>
		<br>
		<br>
		<div class="jumbotron">
			<div class="container text-center">
				<h1><strong>Bienvenido</strong> <?php echo $_SESSION["correo"]["nompro"]; ?></h1>
				
				<!--	<p>
					<a href="cerrar-sesion.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
				</p>-->
			</div>
		</div>
	</div>
</div><!-- /.container -->

	
<?php include 'partials/footer.php';?>