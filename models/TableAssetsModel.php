<?php 


Class TableAssetsModel extends Model{

	function __construct(){

		parent::__construct();
	}


    public function QueryInventario(){

        $Con = $this -> Con -> Conectar();
        $Stmt = $Con -> prepare('SELECT ano,fechaInventario,articulo,responsable,tipoActivo,cantidad,valorComercial,valorTotal FROM inventario_activos');
        $Stmt -> execute();
        $invActivos = $Stmt -> fetchAll(PDO::FETCH_ASSOC);
        return $invActivos;

    }



}

 ?>