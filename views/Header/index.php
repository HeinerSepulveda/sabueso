<?php
session_start();
 
if(!isset($_SESSION['usuario'])){
    header('Location: ?url=Login');
    exit;
} else{

    $NombreUsuario = $_SESSION['usuario'];
    $CorreoUsuario = $_SESSION['correo'];

}

?>

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
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
    <title>Tablero Principal</title>

    <link href="public/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="public/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="public/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
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
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="?url=Dashboard">
                        <!-- Logo icon -->
                        <b><img src="public/images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="public/images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search -->

                        <!-- Comment -->
                        <!-- End Comment -->
                        <!-- Messages -->
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/images/users/avatar-11.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="?url=Users" class="ConfigUser"><i class="ti-settings"></i> Configuración</a></li>
                                    <li><a href="?url=Login/CerrarSesion"><i class="fa fa-power-off"></i> Salir</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Control Activos</li>
                        <li> <a href="?url=Dashboard" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Tablero</span></a>
                            <!-- <ul aria-expanded="false" class="collapse">
                                <li><a href="index.html">Ecommerce </a></li>
                                <li><a href="index1.html">Analytics </a></li>
                            </ul> -->
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-exp   anded="false"><i class="fa fa-archive"></i><span class="hide-menu">Activos</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?url=TableAssets">Ver Activos</a></li>
                                <li><a href="?url=RegisterAssets">Registrar Activos</a></li>
                                <li><a href="#">Actualizar Activos</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Usuarios</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Usuarios</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">Registrar</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
 