<?php 

Class Users extends Controller{

	function __construct(){

		parent::__construct();

	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('Users/index', null);

	}





}

 ?>