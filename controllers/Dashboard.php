<?php 

Class Dashboard extends Controller{

	function __construct(){
		parent::__construct();
		
	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('Dashboard/index', null);

	}


}

 ?>