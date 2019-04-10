<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>

<?php 
include "../controlador/usuarioControlador.php";
include '../helps/helps.php';
$filas=usuarioControlador::getDocente();
?>

<div class="container">
      <br>
			<div class="col-md-auto ">			
				<a href="registroCliProf.php" class="btn btn-primary">Registrar Usuarios</a>
			<br>
			<br>
			</div>
			<table class="table table-bordered table-active" id="tabla" >
				<thead>
					<tr class="table-info" >	
						    <td scope="col">Codigo</td>	
							  <td scope="col">Nombres</td>	
						   	<td scope="col">Apellidos</td>				
						    <td scope="col">Correo</td>
						    <td scope="col">Dni</td>
						    <td scope="col">Celular</td>							   
						    <td scope="col">Registrador</td>		
						    <td scope="col">Privilegio</td>	
						    <td scope="col">Acciones</td>	
					
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
								 <a href="javascript:prueba();" class="btn btn-danger btn-sn">Eliminar</a>
									</td>
					<!--javascript:eliminar(confirm('¿Deséas eliminar este usuario?'),'');-->
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
  message: "Error interno",
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
		eliminar(true, "eliminar_usuarios_form.php?idprofesor=<?php echo $docente['idprofesor']?>")
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
<!--
<script type="text/javascript"     >  

$('#table').pagination({
    dataSource: [1, 2, 3,...15],
    pageSize: 5,
    autoHidePrevious: true,
    autoHideNext: true,
    callback: function(data, pagination) {
        // template method of yourself
        var html = template(data);
        dataContainer.html(html);
    }
})

</script>
-->




<?php include 'partials/footer.php';?>
