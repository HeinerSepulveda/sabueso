<?php 

Class Login extends Controller{

	function __construct(){

		parent::__construct();

	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('Login/index', null);

	}

	public function LoginUsuario(){

		$Mensaje = $this -> objModelo -> Login();
		 
		if (!empty($Mensaje)) {
			$this -> objVista -> cargadorVistas('Login/index', $Mensaje);
		}

	}

	public function RegistrarUsuario(){

		$Mensaje = $this -> objModelo -> registrarUsuario();
		
		if (!empty($Mensaje)) {
		   $this -> objVista -> cargadorVistas('Login/index', $Mensaje);
		}		

   }

	public function CerrarSesion(){

		session_start();
		$_SESSION = array();

		if(session_destroy()){

			$this -> objVista -> cargadorVistas('Login/index', null);
		}

	}




}

 ?>