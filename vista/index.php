<?php include 'partials/head.php';?>
<?php include 'partials/menu.php';?>
<div class="container"  style="margin-top: 100px">
<div class="row justify-content-center">
<div  class="col-md-6 col-offset-3"  align="center" style="background-color: #eeeeee; padding: 50px;"  >
<i class="far fa-user-circle fa-8x"   ></i>
<form method="POST"  action="validarCode.php" autocomplete="off"  onsubmit="return validarLogin();"  >
<h1>Login</h1>
<div class="form-group">
<label>Correo Electronico:</label>
<input type="text"  name="txtCorreo"  id="correoLogin"  class="form-control"  style="width:50%;" onclick="validarCorreo()">	
<span  id="correcto" ></span>

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
<?php include 'partials/footer.php';?>


