<?php include 'partials/headd.php';?>
<?php include 'partials/menu.php';?>
</head>
<body class="cover" style="background-image: url(./assets/img/login.jpg);">
	<form id="loginForm" action="validarCode.php" method="POST" autocomplete="off" class="full-box logInForm" role="form" >
		<p class="text-center text-muted"><i class="zmdi zmdi-account-circle zmdi-hc-5x"></i></p>
		<p class="text-center text-muted text-uppercase">Inicia sesión con tu cuenta</p>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserEmail">E-mail</label>
		  <input class="form-control" id="correo" type="email" name="txtCorreo">
		  <p class="help-block">Escribe tú E-mail</p>
		</div>
		<div class="form-group label-floating">
		  <label class="control-label" for="UserPass">Contraseña</label>
		  <input class="form-control" id="password" type="password"  name="txtPassword">
		  <p class="help-block">Escribe tú contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" id="login" class="btn btn-raised btn-danger">
		</div>
	</form>
	<!--====== Scripts -->
	
<!--	<script src="./js/jquery-3.1.1.min.js"></script>-->
	<?php include 'partials/footer.php';?>
	<!--<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>-->

</body>
</html>