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
<br>
	<div class="col-md-auto ">			
				<a href="registro_usuario.php" class="btn btn-primary">Registrar Empleados</a>
			<br>
			<br>
		</div>
			<table class="table table-bordered table-active">
				<thead>
					<tr class="table-info">	
						    <td scope="col">Codigo</td>	
						    <td scope="col">Privilegio</td>	
						  	<td scope="col">Nombres</td>	
						  	<td scope="col">Apellidos</td>				
						    <td scope="col">Correo</td>
						    <td scope="col">Dni</td>
						    <td scope="col">Celular</td>				
						    <td colspan="2">Accion</td >
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
						<td><a href="viewUpdate.php?idempleado=<?php echo $empleados["idempleado"]?>" class="btn btn-success btn-sn">Editar</a>  
	                   	<a href="javascript:prueba();" class="btn btn-danger btn-sn">Eliminar</a> </td>
         </tr>
				<?php }?>
							</tbody>
						</table>
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

function prueba(){
	$("body").overhang({
		type: "confirm",
  message: "¿Deseas eliminar?",
  overlay: true,
  callback: function (value) {
    if (value) {
		eliminar(true, "eliminar_crud_form.php?idempleado=<?php echo $empleados['idempleado']?>")
    } else {
			
		$("body").overhang({
  type: "error",
  message: "Operacion cancelada",
  duration: 0.5,
});
	}
  }
});
}




</script>
<?php include 'partials/footer.php';?>

