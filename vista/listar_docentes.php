<?php include 'partials/head.php';?>


<?php include 'partials/menu.php';?>
<?php 
include "../controlador/usuarioControlador.php";
include '../helps/helps.php';


$filas=usuarioControlador::getDocente();
?>
<div class="container">

	<div class="starter-template">
	
		<br>
		<div class="row">
			<div class="col-md-auto ">			
				<a href="registroCliProf.php" class="btn btn-primary">Registrar Usuarios</a>
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
							<th>Nombres</th>	
							<th>Apellidos</th>				
						    <th>Correo</th>
						    <th>Dni</th>
						    <th>Celular</th>							   
						    <th>Registrador</th>		
						    <th>Privilegio</th>	
						    <th>Acciones</th>	
					
					</tr>
				</thead>
				<tbody>
				<?php foreach ($filas as $docente ) {
					?>
				<tr>	
				    <td><?php echo $docente["idprofesor"]?></td> 
				    <td><?php echo $docente["nompro"]?></td> 
	                <td><?php echo $docente["apepro"]?></td>
	                <td><?php echo $docente["corpro"]?></td>
	                <td><?php echo $docente["dnipro"]?></td>
	                <td><?php echo $docente["celpro"]?></td>	               
	                <td><?php echo $docente["idempleado"]?></td>
	                <td><?php echo getRol($docente["tipo"])?></td>
	              	                			                  
	                <td>
	             <a href="procesoUpdateDocente.php?idprofesor=<?php echo $docente["idprofesor"]?>" class="btn btn-success btn-sn">Editar</a>  
							 <a href="javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'eliminar_docente_form.php?idprofesor=<?php echo $docente["idprofesor"]?>');" class="btn btn-danger btn-sn">Eliminar</a>
									</td>
					<!--javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'');-->
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
}else{
	$("body").overhang({
  type: "error",
  message: "Se cancelo la operacion",
  duration: 0.5,
	
});
}

}
</script>
<?php include 'partials/footer.php';?>

