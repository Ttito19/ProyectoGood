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
if(	$_SESSION["correo"]["tipo"] == 3){
		    header("location:docente.php");
		}
}else{
	    header("location:index.php");
}


?>

<?php include 'partials/menu.php';?>
<?php 
include "../controlador/usuarioControlador.php";
include '../helps/helps.php';


$filas=usuarioControlador::getEmpleados();
?>
<div class="container">

	<div class="starter-template">
	
		<br>
		<div class="row">
			<div class="col-md-auto ">			
				<a href="registro_usuario.php" class="btn btn-primary">Registrar Empleados</a>
			<br>
			<br>
			</div>

			<div class="col-md-auto ">
				<div class="panel panel-default">
					<div class="panel-body">
			<table class="table table-active ">
				<thead>
					<tr>	
						    <th>Codigo</th>	
						    <th>Privilegio</th>	
							<th>Nombres</th>	
							<th>Apellidos</th>				
						    <th>Correo</th>
						    <th>Dni</th>
						    <th>Celular</th>	
						  			
						    <th>Accion</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($filas as $cliente ) {
					?>
				<tr>	
				    <td><?php echo $cliente["idempleado"]?></td> 
				    <td><?php echo getRol($cliente["tipo"])?></td>     
	                <td><?php echo $cliente["nombre"]?></td>
	                <td><?php echo $cliente["apellido"]?></td>
	                <td><?php echo $cliente["correo"]?></td>
	                <td><?php echo $cliente["dni"]?></td>
	                <td><?php echo $cliente["celular"]?></td>
	          
	              	                			                  
	                <td>
	                	<a href="viewUpdate.php?idempleado=<?php echo $cliente["idempleado"]?>" class="btn btn-success btn-sn">Editar</a>  
	                   	<a href="javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'eliminar_crud_form.php?idempleado=<?php echo $cliente["idempleado"]?>');" class="btn btn-danger btn-sn">Eliminar</a>
	                </td>
                </tr>
				<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /.container -->


<script type="text/javascript">



	function eliminar(confirmacion, url){

		if(confirmacion){

			window.location.href = url;

		}

	}

</script>
<?php include 'partials/footer.php';?>

