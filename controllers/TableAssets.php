<?php 

Class TableAssets extends Controller{

	function __construct(){

		parent::__construct();

	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('TableAssets/index', null);

	}

	public function DatosTabla(){

		$invActivos = $this -> objModelo -> QueryInventario();
		 
		if (!empty($invActivos)) {
			
			$datos = array();
			foreach($invActivos as $inv){

				$datos[] = $inv;
				
			}
			$datosTabla = array('sEcho' => 1, 'iTotalRecords' => count($datos), 'iTotalDisplayRecords' => count($datos), 'aaData' => $datos);
			$this -> objVista -> cargadorVistas('TableAssets/Data', $datosTabla);

		}

	}






}

 ?>