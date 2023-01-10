<!DOCTYPE html>
<html lang="es">

  <title>Login Sabueso</title>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
    <title>Iniciar Sesion</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="public/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/helper.css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:600">
  	<link href="public/css/stylelogin.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body translate="no">
  <div class="login-wrap">
	<div class="login-html">
	<label class="tab">Proyecto Sabueso</label>
	<div class="hr"></div>
		
		
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked="">
		<label for="tab-1" class="tab">Iniciar Sesion</label>
							

		<input id="tab-2" type="radio" name="tab" class="sign-up" 
		<?php if(!empty($datosVista) && $datosVista != 'Usuario y/o contraseña incorrecto!'){
			echo 'checked=""';
		} ?> >
		<label for="tab-2" class="tab">Registrarse</label>

		<div class="login-form">
			<!-- Pestaña iniciar sesion -->
			
			<div class="sign-in-htm">
				<form class="form-valide" action="?url=Login/LoginUsuario" method="post">
                    <div class="form-group">
                         <label for="val-email" class="label">Correo</label>
                    	<div>
                    		<input type="text" class="input" id="val-email" name="val-email" placeholder="Introduzca un correo electronico">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="val-password" class="label">Contraseña</label>
                            <div>
                            	<input type="password" class="input" id="val-password" name="val-password" placeholder="Introduzca una contraseña">
                            </div>
                    </div>
                    <div class="group">
						<input type="submit" class="button" name="Ingresar" value="Iniciar Sesion">
					</div>
            	</form>
				<div class="hr"></div>
					<div class="register-link m-t-15 text-center">
                             <a href="#"> Olvido la Contraseña?</a></p>
                    </div>
                    <div class="register-link m-t-15 text-center">
						<p>	<label for="tab-2"> ¿No tienes cuenta? Registrate</label></p>
                    </div>
					<div class="register-link m-t-15 text-center">
							<?php echo $datosVista; ?>
                    </div>
				
			</div>
			<!-- Pestaña registrarse -->
			<div class="sign-up-htm">
			<form id="form" class="form-valide-register" action="?url=Login/RegistrarUsuario" method="POST">
			<div class="form-group">
                         <label for="val-username" class="label">Usuario</label>
                    	<div>
                    		<input type="text" class="input" id="val-username" name="val-username" placeholder="Introduzca un correo electronico">
                        </div>
                    </div>
					<div class="form-group">
                         <label for="val-email" class="label">Correo</label>
                    	<div>
                    		<input type="text" class="input" id="val-email" name="val-email" placeholder="Introduzca un correo electronico">
                        </div>
                    </div>
					<div class="form-group">
                         <label for="val-password-register" class="label">Contraseña</label>
                    	<div>
                    		<input type="password" class="input" id="val-password-register" name="val-password-register" placeholder="Introduzca un correo electronico">
                        </div>
                    </div>
				<div class="form-group">
                         <label for="val-confirm-password-register" class="label">Confirmar Contraseña</label>
                    	<div>
                    		<input type="password" class="input" id="val-confirm-password-register" name="val-confirm-password-register" placeholder="Introduzca un correo electronico">
                        </div>
                    </div>
				<div class="group">
					<input type="submit" name="Registrarse" class="button" value="Registrarse">
				</div>
			</form>
			<div class="register-link m-t-15 text-center">
							<?php echo $datosVista; ?>
                    </div>
			</div>
      
		</div>
	</div>
</div>
   <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="public/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="public/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="public/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="public/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!-- Sweet Alert -->
    <script src="public/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- Form validation -->
    <script src="public/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="public/js/lib/form-validation/jquery.validate-init.js"></script>
     <!--Custom JavaScript -->
    <script src="public/js/custom.min.js"></script>
</body>
</html>