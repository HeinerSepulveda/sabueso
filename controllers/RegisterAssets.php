<?php 

Class RegisterAssets extends Controller{

	function __construct(){

		parent::__construct();

	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('RegisterAssets/index', null);

	}





}

 ?>