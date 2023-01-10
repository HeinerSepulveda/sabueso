<?php 


Class ContentModel extends Model{

	function __construct(){

		parent::__construct();
	}


    public function QueryTablero1(){

        $Con = $this -> Con -> Conectar();
        $Stmt = $Con -> prepare('SELECT cantidad,valorComercial,valorTotal FROM inventario_activos');
        $Stmt -> execute();
        $invActivos = $Stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $invActivos;

    }

    public function QueryTablero2(){

        $Con = $this -> Con -> Conectar();
        $Stmt = $Con -> prepare('SELECT COUNT(id), COUNT(responsable), COUNT(tipoActivo), COUNT(valorComercial), COUNT(valorTotal) FROM inventario_activos');
        $Stmt -> execute();
        $countActivos = $Stmt -> fetch(PDO::FETCH_NUM);

        return $countActivos;

    }

    public function QueryTablero3(){

        $añoInicio = 2007;
        $añoFin = 2021;

        for($añoInicio; $añoInicio<=$añoFin; $añoInicio++){
            
            $Con = $this -> Con -> Conectar();
            $Stmt = $Con -> prepare('SELECT COUNT(id) FROM inventario_activos WHERE ano = '.$añoInicio.'');
            $Stmt -> execute();
            $countEntradas[] = $Stmt -> fetch(PDO::FETCH_NUM);

        }

        return $countEntradas;


    }

}

 ?>