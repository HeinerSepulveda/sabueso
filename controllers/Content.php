<?php 

Class Content extends Controller{

	function __construct(){

		parent::__construct();

	}

	public function cargarVista(){

		$this -> objVista -> cargadorVistas('Content/index', null);

	}

	public function Tablero(){

		$invActivos = $this -> objModelo -> QueryTablero1();
		 
		if (!empty($invActivos)) {

			$Cantidad = $this -> sumaDatosFilas($invActivos, 'cantidad');
			$valorComercial = $this -> sumaDatosFilas($invActivos, 'valorComercial');
			$valorTotal = $this -> sumaDatosFilas($invActivos, 'valorTotal');
			$datosMostrar = array($Cantidad,$valorComercial,$valorTotal);

			return $datosMostrar;

		}

	}

	public function DatosTablero(){
		
		$datosMostrar = $this -> Tablero();
		$countActivos = $this -> objModelo -> QueryTablero2();
		$countEntradas = $this -> objModelo -> QueryTablero3();

		$porResponsable = round(($countActivos[1]*100)/$countActivos[0],0);
		$porTipoActivo = round(($countActivos[2]*100)/$countActivos[0],0); 
		$porTipoActivo = round(($countActivos[3]*100)/$countActivos[0],0); 
		$porValorTotal = round(($countActivos[4]*100)/$countActivos[0],0); 
		$porcentajes = array($porResponsable,$porTipoActivo,$porTipoActivo,$porValorTotal);
		
		$datosActivos = array_merge($datosMostrar,$porcentajes,$countEntradas);
		 
		if (!empty($countActivos) && !empty($datosMostrar)) {

			$this -> objVista -> cargadorVistas('Content/index', $datosActivos);
		}

	}
	
//Funcion que Suma los datos numericos de un arreglo de filas de la tabla temporal.
	public function sumaDatosFilas($Filas, $NombreFila){

		$Incremento = 1;
		for($i=0; $i<count($Filas); $i++) {
				
			if(count($Filas)==1){
	
				$Fila = $Filas[0][$NombreFila];
			}
			else{  
				if($i<1){
						
					$Fila = $Filas[$i][$NombreFila] + $Filas[1][$NombreFila];
				}
				if($i>0){  
	
					$Fila = $Fila + $Filas[$Incremento][$NombreFila];
	
				}
				$Incremento++;
				if($Incremento == count($Filas)){
	
					break;
				}
			}     
		}
	
		return $Fila;
	}

}

 ?>