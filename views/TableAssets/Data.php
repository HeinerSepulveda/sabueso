<?php

session_start();
 
if(!isset($_SESSION['usuario'])){
    header('Location: ?url=Login');
    exit;

} else{

    echo json_encode($datosVista);
    $NombreUsuario = $_SESSION['usuario'];
    $CorreoUsuario = $_SESSION['correo'];

}

?>