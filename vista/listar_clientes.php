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
      <br>
			<div class="col-md-auto ">			
				<a href="registroCliProf.php" class="btn btn-primary">Registrar Usuarios</a>
			<br>
			<br>
			</div>	
			<table class="table" id="table" >
				<thead>
					<tr class="table-warning">	
					<td scope="col">Codigo</td>
					<td scope="col">Nombres</td>
					<td scope="col">Apellidos</td>
					<td scope="col">Correo</td>
					<td scope="col">Dni</td>
					<td scope="col">Celular</td>
					<td scope="col">Registrador</td>
					<td scope="col">Privilegio</td>			
			  	<td colspan="2">   Acciones  </td>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($filas as $clientes ) {
					?>
				<tr>	
				    <td><?php echo $clientes["idcliente"]?></td> 
				    <td><?php echo $clientes["nomcli"]?></td> 
	                <td><?php echo $clientes["apecli"]?></td>
	                <td><?php echo $clientes["corcli"]?></td>
	                <td><?php echo $clientes["dnicli"]?></td>
	                <td><?php echo $clientes["celcli"]?></td>	          
	                <td><?php echo $clientes["idempleado"]?></td>
	                <td><?php echo getRol($clientes["tipo"])?></td>          	                			                  
	                <td><a href="procesoUpdateCliente.php?idcliente=<?php echo $clientes["idcliente"]?>" class="btn btn-success btn-sn">Editar</a>
				             <a href="javascript:prueba();" class="btn btn-danger btn-sn">Eliminar</a></td>
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
		eliminar(true, "eliminar_usuarios_form.php?idcliente=<?php echo $clientes['idcliente']?>")
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

