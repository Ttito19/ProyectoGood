
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php session_start();?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="descripcion" content="">
    <meta name="autor" content="">
    <title>Starter Template for Bootstrap</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    
   <!-- <link href="assets/css/all.css" rel="stylesheet">-->
    <link rel="stylesheet" type="text/css" href="assets/css/overhang.min.css" />
    <script src="assets/js/validarLogin.js"></script>   
    <script defer src="assets/js/all.js"></script> <!--load all styles -->
  </head>

 <!-- <body class="cover" style="background-image: url(././assets/img/login.jpg);" >-->
 <body>
<?php include 'partials/menu.php';?>
<div class="container"  style="margin-top: 100px">
<div class="row justify-content-center">
<div  class="col-md-6 col-offset-3"  align="center" style="background-color: #eeeeee; padding: 50px;"  >
<i class="far fa-user-circle fa-8x"   ></i>
<form method="POST"  action="validarCode.php" autocomplete="off"  onsubmit="return validarLogin();"  >
<h1>Login</h1>
<div class="form-group">
<label>Correo Electronico:</label>
<input type="text"  name="txtCorreo"  id="correoLogin"  class="form-control"  style="width:50%;" >	
<span  id="correcto"></span>

</div>
<div class="form-group">
<label>Clave:</label>
<input type="password" name="txtPassword" id="passwordLogin"   class="form-control"  style="width:50%;">	
</div>	
<input  type="submit" class="btn btn-primary"  >
<input  type="submit" value="Google"  class="btn btn-danger"  >

</form>
<br>
<a href="olvidarContraseña.php">¿Has olvidado tu contraseña?</a>
</div>
</div>
</div>

<script  type="text/javascript">
document.getElementById('correoLogin').addEventListener('input', function() {
    evento = event.target;
    validar1 = document.getElementById('correcto');
    
    emailRegex = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    //Se muestra un texto a modo de ejemplo, luego va a ser un icono
    if (emailRegex.test(evento.value)) {
      validar1.innerText = "Correo válido";
      validar1.style.color='#7FFF00';
   //   validar.style.display = 'none';
    } else {
      validar1.innerText = " Correo incorrecto";
      validar1.style.color='#DC143C';
    }
});


</script>




<?php include 'partials/footer.php';?>


