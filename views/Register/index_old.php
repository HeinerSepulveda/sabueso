<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Formulario de Registro</title>
    <!-- Bootstrap Core CSS -->
    <link href="public/css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="public/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="public/css/helper.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h4>Formulario de Registro</h4>
                                <form id="form" class="form-valide" action="?url=Register/RegistrarUsuario" method="POST">
                                    <div class="form-group">
                                            <label for="val-username">Usuario</label>
                                            <div>
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Introduzca un nombre de usuario">
                                            </div>
                                     </div>
                                    <div class="form-group">
                                            <label for="val-email">Correo</label>
                                            <div>
                                                <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Introduzca un correo">
                                            </div>
                                     </div>
                                    <div class="form-group">
                                            <label for="val-password">Contraseña</label>
                                            <div>
                                                <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Introduzca una contraseña">
                                            </div>
                                     </div>
                                     <div class="form-group">
                                            <label for="val-confirm-password">Confirmar Contraseña</label>
                                            <div>
                                                <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Confirme la contraseña">
                                            </div>
                                     </div>
                                    </div>
                                    <button type="submit"  name="val-register" id="val-register" class="btn btn-primary btn-flat m-b-30 m-t-30">Registrar</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>¿Ya tienes cuenta? <a href="?url=Login"> Ingresar</a></p>
                                    </div>
                                </form>

                                <?php 

                                        echo $datosVista;

                                    
                                ?>
                                <!-- swett 
                                <button class="btn btn-danger btn sweet-wrong">Sweet Wrong</button>
                                <script>document.querySelector('.sweet-wrong').onclick = function(){
                                    sweetAlert("Oops...", "Something went wrong !!", "error")};
                                </script>
                                -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


        


    </script>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="public/js/lib/jquery/jquery.min.js"></script>
    <!-- Jquery 
    <script>
    
    $(document).ready(function(){       
        $('#val-register').click(function(){
            var url = "?url=Register/RegistrarUsuario";
            $.ajax({                        
            type: "POST",                 
            url: url,                     
            data: $("#form").serialize(), 
            success: function(data)             
            {
                    $('#form')[0].reset();
                    alert("Agregado con exito ");				
                                    
            }
        });
        });
    });	
    </script>
    -->

    <!-- Bootstrap tether Core JavaScript -->
    <script src="public/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="public/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="public/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="public/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="public/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->

    <script src="public/js/lib/sweetalert/sweetalert.min.js"></script>
    <!-- scripit init-->
    <script src="public/js/lib/sweetalert/sweetalert.init.js"></script>
    
    <script src="public/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="public/js/lib/form-validation/jquery.validate-init.js"></script>
    <script src="public/js/custom.min.js"></script>
    <!-- Form validation -->

</body>

</html>