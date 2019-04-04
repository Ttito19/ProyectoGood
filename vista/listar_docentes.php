<?php include 'partials/head.php';?>
<?php
/*
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
}*/
?>

<?php include 'partials/menu.php';?>
<?php 
include "../controlador/usuarioControlador.php";
include '../helps/helps.php';
$filas=usuarioControlador::getCliente();
?>
<div class="container">

	<div class="col-md-auto ">	
		</div>			
				<a href="registroCliProf.php" class="btn btn-primary">Registrar Usuarios</a>
				<br>
        <br>	
			<table class="table table-active ">
				<thead>
					<tr class="bg-warning">	
						    <th scope="col">Codigo</th>	
							  <th scope="col">Nombres</th>	
							  <th scope="col">Apellidos</th>				
						    <th scope="col">Correo</th>
						    <th scope="col">Dni</th>
						    <th scope="col">Celular</th>					
						    <th scope="col">Registrador</th>		
						    <th scope="col">Privilegio</th>	
					      <th scope="col">Acciones</th>	
					</tr>
				</thead>
				<tbody>
				<?php foreach ($filas as $clientes ) {
					?>
				<tr>	
				          <th><?php echo $clientes["idcliente"]?></th> 
				          <th><?php echo $clientes["nomcli"]?></th> 
	                <th><?php echo $clientes["apecli"]?></th>
	                <th><?php echo $clientes["corcli"]?></th>
	                <th><?php echo $clientes["dnicli"]?></th>
	                <th><?php echo $clientes["celcli"]?></th>	          
	                <th><?php echo $clientes["idempleado"]?></th>
	                <th><?php echo getRol($clientes["tipo"])?></th>
	              	                			                  
	                <th><a href="procesoUpdateCliente.php?idcliente=<?php echo $clientes["idcliente"]?>" class="btn btn-success btn-sn">Editar</a>  
				        	<a href="javascript:prueba();" class="btn btn-danger btn-sn">Eliminar</a></th>
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
		eliminar(true, "eliminar_usuarios_form.php?idcliente=<?php echo $clientes['idcliente']?>" )
    } else {
		$("body").overhang({
  type: "error",
  message: "Operacion cancelada",
  duration: 0.5,
});
	}
  }
})
}
</script>
<?php include 'partials/footer.php';?>