<?php include 'partials/head.php';?>
  <link rel="stylesheet" href="assets/css/main.css">
<?php include 'partials/menu.php';?>
<body class="cover" style="background-image: url(./assets/img/login.jpg);">
	<form id="loginForm" action="validarCode.php" method="POST" autocomplete="off" class="full-box logInForm" role="form"  onsubmit="return validarLogin();" >
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">E-mail</label>
		  <input class="form-control" id="correoLogin" type="email" name="txtCorreo">
		  <p class="help-block">Escribe tú E-mail</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" id="passwordLogin" type="password"  name="txtPassword">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
		<button type="submit" class="btn btn-raised btn-danger" id="registrar">Registrar</button>
		</div>
	</form>
	<?php include 'partials/footer.php';?>
	