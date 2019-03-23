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
include "../controlador/cursoControlador.php";
include '../helps/helps.php';


$filas=cursoControlador::getCursos();
?>
<div class="container">

	<div class="starter-template">
	
		<br>
		<div class="row">
			<div class="col-md-12 ">			
				<a href="registro_curso.php" class="btn btn-primary">Registrar Cursos</a>
			<br>
			<br>
			</div>

			<div class="col-md-10" >
				<div class="panel panel-default">
					<div class="panel-body">
			<table class="table table-hover ">
				<thead>
					<tr>	
						    <th>Codigo</th>
							<th>Nombre Curso</th>	
							<th>Descripción</th>
							<th>Accion</th>					
					</tr>
				</thead>
				<tbody>
				<?php foreach ($filas as $curso ) {
					?>
				<tr>	     
				    <td><?php echo $curso["idcurso"]?></td>       
	                <td><?php echo $curso["nomcurso"]?></td>
	                <td><?php echo $curso["descripcion"]?></td>           
	                <td>
	                	<a href="viewUpdateCurso.php?idcurso=<?php echo $curso["idcurso"]?>" class="btn btn-success btn-sn">Editar</a>  
	                   	<a href="javascript:eliminar(confirm('¿Deséas eliminar este curso?'),'eliminarCurso.php?idcurso=<?php echo $curso["idcurso"]?>');" class="btn btn-danger btn-sn">Eliminar</a>
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

