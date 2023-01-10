<?php 

Class Route{

	function __construct(){

		if (isset($_GET['url'])) {
			
			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);

			$archivoControlador = 'controllers/'.$url[0].'.php';

			if (file_exists($archivoControlador)) {
				
				require_once $archivoControlador;
				$objControlador = New $url[0]();

				if (isset($url[0]) && !isset($url[1])) {

					$objControlador -> cargarVista();

				}else{
					
					if (method_exists($objControlador, $url[1])) {

						$objControlador -> cargarModelo($url[0]);
						$objControlador -> {$url[1]}();
						
					}
					else{

						require_once 'controllers/404.php';
						$objErrores = New Errores();
						$objErrores -> cargarVista();

					}

				}

			}
			else{

				require_once 'controllers/404.php';
				$objErrores = New Errores();
				$objErrores -> cargarVista();
			}

		}
		else{
			
			if(session_start()){

				header('Location: ?url=Dashboard');
			}

			else{
				
				require_once 'controllers/Login.php';
				$objControlador = New Login();
				$objControlador -> cargarVista();
				$objControlador -> cargarModelo('Login');
			}			

		}

	}


}

 ?>