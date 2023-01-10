<?php 

Class Errores extends Controller{

	function __construct(){
		parent::__construct();
		
	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('404/index', null);

	}


}

 ?>