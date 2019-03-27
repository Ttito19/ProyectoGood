<?php include 'partials/head.php';?>
<?php



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
				<?php foreach ($filas as $empleados ) {
					?>
				<tr>	
				    <td><?php echo $empleados["idempleado"]?></td> 
				    <td><?php echo getRol($empleados["tipo"])?></td>     
	                <td><?php echo $empleados["nombre"]?></td>
	                <td><?php echo $empleados["apellido"]?></td>
	                <td><?php echo $empleados["correo"]?></td>
	                <td><?php echo $empleados["dni"]?></td>
	                <td><?php echo $empleados["celular"]?></td>
	          
	              	                			                  
	                <td>
	                	<a href="viewUpdate.php?idempleado=<?php echo $empleados["idempleado"]?>" class="btn btn-success btn-sn">Editar</a>  
	                   	<a href="javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'eliminar_crud_form.php?idempleado=<?php echo $empleados["idempleado"]?>');" class="btn btn-danger btn-sn">Eliminar</a>
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

			window.setTimeout(function(){

window.location.href = url;

}, 1000);
$("body").overhang({
  type: "success",
  message: "Eliminado Correctamente"
});

	}else{
		$("body").overhang({
  type: "error",
  message: "Operacion cancelada",
  duration: 0.5,
});
	}
}
</script>
<?php include 'partials/footer.php';?>

