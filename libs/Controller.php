<?php 

Class Controller{

	function __construct (){

		$this -> objVista = New View();

	}

	public function cargarModelo($Modelo){

		$archivoModelo = 'models/'.$Modelo.'Model.php';

		if (file_exists($archivoModelo)) {
			
			require_once $archivoModelo;
			$nombreModelo = $Modelo.'Model';
			$this -> objModelo = New $nombreModelo;

		}

	}

}

 ?>