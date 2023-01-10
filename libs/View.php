<?php 

Class View {


	public function cargadorVistas($Vista,$datosVista){

		require_once 'views/'.$Vista.'.php';

	}


}


 ?>