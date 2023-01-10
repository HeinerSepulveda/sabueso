<?php 


Class LoginModel extends Model{

	function __construct(){

		parent::__construct();
	}

	public function Login(){


		if (isset($_POST['Ingresar'])) {

		
			$Correo = $_POST['val-email'];
			$Pass = $_POST['val-password'];

			$Con = $this -> Con -> Conectar();
			$Stmt = $Con -> prepare('SELECT * FROM Usuarios WHERE Correo = :Correo LIMIT 1');
			$Stmt -> bindParam(':Correo', $Correo, PDO::PARAM_STR);
			$Stmt -> execute();

			$datosUsuario = $Stmt -> fetch(PDO::FETCH_ASSOC);
 
			if (!$datosUsuario) {

				$Mensaje = 'Usuario y/o contraseña incorrecto!';

			} 
			else {

				if (password_verify($Pass, $datosUsuario['password'])) {

					session_start();
					$_SESSION['usuario'] = $datosUsuario['usuario'];
					$_SESSION['correo'] = $datosUsuario['correo'];
					header('Location: ?url=Dashboard');

				} 
				else {
					
					$Mensaje = 'Usuario y/o contraseña incorrecto!';
				}
			}
			 
			return $Mensaje;
		}


	}

	public function registrarUsuario(){

		if (isset($_POST['Registrarse'])) {
			
			if(!empty($_POST['val-username']) && !empty($_POST['val-email']) && !empty($_POST['val-password-register']) && !empty($_POST['val-confirm-password-register'])){
	
				$Mensaje = '';
				$Usuario = $_POST['val-username'];
				$Correo = $_POST['val-email'];
				$Password = $_POST['val-password-register'];
				$Password_Confirm = $_POST['val-confirm-password-register'];
			
				$Con = $this -> Con -> Conectar();

				$Stmt = $Con -> prepare('SELECT * FROM Usuarios WHERE Correo= :Correo');
				$Stmt->bindParam('Correo', $Correo, PDO::PARAM_STR);
				$Stmt->execute();
			
				if ($Stmt -> rowCount() > 0) {
					$Mensaje = '<p class="error">La dirección de correo electrónico ya está registrada!</p>';
				}

				if ($Password == $Password_Confirm) {

					$Pass_hash = password_hash($Password_Confirm, PASSWORD_BCRYPT);

					if ($Stmt -> rowCount() == 0) {

						$Stmt = $Con -> prepare('INSERT INTO Usuarios (Usuario,Password,Correo) VALUES (:Usuario,:Password,:Correo)');
						$Resultado = $Stmt-> execute(array(':Usuario' => $Usuario, ':Password' => $Pass_hash, ':Correo' => $Correo));
				
						if ($Resultado) {
		
							$Mensaje = '<p class="success">Tu registro fue exitoso!</p>';
		
						} else {
		
							$Mensaje = '<p class="error">Algo salió mal!</p>';
		
						}
					}
						
				}
				else{
					$Mensaje = '<p class="error">Las contraseñas no coinciden</p>';
				}

					return $Mensaje;
			}else{

				$Mensaje = '<p class="error">Ningun Campo puede estar vacio!</p>';
				return $Mensaje;
			}
		}	
	}	
}

 ?>