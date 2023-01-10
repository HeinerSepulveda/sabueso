<?php 

Class Conexion {

	private $Host;
	private $User;
	private $Pass;
	private $Db;

	public function Conectar(){

		$this -> Host = constant('Host');
		$this -> User = constant('User');
		$this -> Pass = constant('Pass');
		$this -> Db = constant('Db');
		$this -> StrginCon = 'mysql:dbname='.$this -> Db.';host='.$this -> Host;
		$this -> Options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_CASE => PDO::CASE_NATURAL);

		try {

			$Con = New PDO($this -> StrginCon,$this -> User,$this -> Pass, $this -> Options);
			return $Con;

		} catch (PDOException $excp) {

			echo 'Error: '.$excp -> getMessage();
			
		}

	}

}

 ?>