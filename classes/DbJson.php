<?php

	class DBJson extends DB
	{
		private $dbName;

		public function __construct($dsn, $root, $pass, $opt)
		{

			$this->dbName = new PDO($dsn, $root, $pass, $opt);
			//var_dump($this->dbName);
			//var_dump('Creo la conexion');

		}


		public function saveUser(User $oneUser){
			var_dump('Entro a guardar al usuario');
			try {
				var_dump('Voy a ejecutar insert');
				var_dump($oneUser->getUsername());
				$username = $oneUser->getUsername();
				$name = $oneUser->getName();
				$lastname = $oneUser->getLastname();
				$email = $oneUser->getEmail();
				$country = $oneUser->getcountry();
				$avatar = $oneUser->getAvatar();
				$password = $oneUser->getPassword();
  			$sql="INSERT INTO user  values (default, '$username', '$name', '$lastname','$email', '$country', '$avatar', '$password')";
  			$query= $this->dbName->prepare($sql);
  			$query->execute();
			} catch(\Exception $e) {
				var_dump('Exploto la insercion');
				exit;
			}



		}

		public function emailExist($email){
			$consulta = $this->dbName->query("SELECT count(*) FROM user where email ='". $email."'");
      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
			var_dump('mail de select: ');
			var_dump($email);
			var_dump('Resultado de busqueda email: ');
			var_dump($resultado);
			if ($resultado['count(*)'] > 0) {
				return true;
			}
				return false;
		}



		public function usernameExist($username){
				$consulta = $this->dbName->query("SELECT count(*) FROM user where username ='". $username."'");
	      $resultado = $consulta->fetch(PDO::FETCH_ASSOC);

				if ($resultado['count(*)'] > 0) {
					return true;
				}
					return false;
		}
}
