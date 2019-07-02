<?php

	class Auth
	{

		public function __construct(DB $DB)
		{
			session_start();
			var_dump('Sesion start');

			if ( isset($_COOKIE['userLogedEmail']) && !$this->isLogged() ) {
				// Busco al usuario por el email que tengo almacenado en la cookie
				$theUser = $DB->getUserByEmail($_COOKIE['userLogedEmail']);
				var_dump('Entro a comparar cookies y eso');
				exit;
				// Guardo en sesión al usuario que busqué anteiormente
				$_SESSION['userLoged'] = $theUser;
				var_dump('Guarde sesion , entre al if');
				exit;
			}

		}

		public function login(User $theUser) {
			// Guardo en sesión al usuario que recibo por parámetro OBJETO de tipo USUARIO
			var_dump('Entra a loguear');
			$_SESSION['userLoged'] = $theUser;
			var_dump($theUser);
			// Redirecciono al perfil del usuario
			header('location: perfilusuario.php');
			exit;
		}


		public function isLogged() {
			// El return devuelve true o false, según lo que retorne la función isset()
			var_dump('Entra a preguntar si esta logueado');
			return isset($_SESSION['userLoged']);
		}
	}
