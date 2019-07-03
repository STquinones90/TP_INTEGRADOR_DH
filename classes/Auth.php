<?php

	class Auth
	{

		public function __construct(DB $DB)
		{
			session_start();
			if ( isset($_COOKIE['userLogedEmail']) && !$this->isLogged() ) {
				// Busco al usuario por el email que tengo almacenado en la cookie
				$theUser = $DB->getUserByEmail($_COOKIE['userLogedEmail']);
				exit;
				// Guardo en sesión al usuario que busqué anteiormente
				$_SESSION['userLoged'] = $theUser;
				exit;
			}

		}

		public function login(User $theUser) {
			// Guardo en sesión al usuario que recibo por parámetro OBJETO de tipo USUARIO
			$_SESSION['userLoged'] = $theUser;
			var_dump($theUser);
			// Redirecciono al perfil del usuario
			header('location: perfilusuario.php');
			exit;
		}


		public function isLogged() {
			// El return devuelve true o false, según lo que retorne la función isset()
			// var_dump('Entra a preguntar si esta logueado');
			return isset($_SESSION['userLoged']);
		}
	}
