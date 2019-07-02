<?php



	class RegisterValidator extends Validator
	{
		private $username;
		private $password;
		private $rePassword;
		private $name;
		private $lastname;
		private $email;
		private $country;
		private $avatar;

		public function __construct()
		{
			$this->username = isset($_POST['username']) ? trim($_POST['username']) : null;
			$this->password = isset($_POST['password']) ? ($_POST['password']) : null;
			$this->rePassword = isset($_POST['rePassword']) ? ($_POST['rePassword']) : null;
			$this->name = isset($_POST['name']) ? trim($_POST['name']) : null;
			$this->lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : null;
			$this->email = isset($_POST['email']) ? trim($_POST['email']) : null;
			$this->country = isset($_POST['country']) ? $_POST['country'] : null;
			$this->avatar = isset($_FILES['avatar']) ? $_FILES['avatar'] : null;
		}

		public function isValid()
		{

			// Si está vació el atributo: $username
			if ( empty($this->username) ) {
				$this->setError('username', 'El campo usuario no puede estar vacío');
			}

			// Si está vació el atributo: $name
			if ( empty($this->name) ) {
				$this->setError('name', 'El campo nombre no puede estar vacío');
			}

			// Si está vació el atributo: $apellido
			if ( empty($this->lastname) ) {
				$this->setError('lastname', 'El campo apellido no puede estar vacío');
			}

			// Si está vació el atributo: $email
			if ( empty($this->email) ) {
				$this->setError('email', 'El campo email es obligatorio');
			} elseif ( !filter_var($this->email, FILTER_VALIDATE_EMAIL) ) { // Si el atributo $email NO es un formato de email válido
				$this->setError('email', 'Introducí un formato de email válido');
			}
			var_dump('la pass:');
			var_dump($this->password);
			// Si está vació el atributo: $password
			if ( empty($this->password) ) {
				$this->setError('password', 'El campo password es obligatorio');
			} elseif (strlen($this->password) < 5) {
				$this->setError('password', 'La password no puede tener menos de 5 caracteres');
			} elseif (strrpos($this->password, ' ') == true) {
				$this->setError('password', 'La password no puede contener espacios');
			} elseif ((strrpos($this->password, 'DH')) === false) {
				$this->setError('password', 'La password debe contener una D y H seguidas');
				exit;
			}

			// Si está vació el atributo: $rePassword
			if ( empty($this->rePassword) ) {
				$errors['rePassword'] = 'El campo repetir password es obligatorio';
				$this->setError('rePassword', 'El campo repetir password es obligatorio');
			} elseif ($this->password != $this->rePassword) { // Si el valor de los atributos $password y $rePassword son distintos
				$this->setError('password', 'Las contraseñas no coinciden');
				$this->setError('rePassword', 'Las contraseñas no coinciden');
			}



			// Si está vació el atributo: $country
			if ( empty($this->country) ) {
				$this->setError('country', 'Elegí un país');
			}

			// Si no cargaron ningún archivo
			if ( $this->avatar['error'] != UPLOAD_ERR_OK ) {
				$this->setError('avatar', 'Subí una imagen');
			} else {
				// Si cargaron algún archivo, obtengo su extensión
				$ext = pathinfo($this->avatar['name'], PATHINFO_EXTENSION);

				// Si la extesnión del archivo que cargaron NO está en mi array de formatos permitidos
				if (( $ext != 'jpg') && ( $ext !=  'png') && ($ext != 'gif') ) {
					// $this->setError('avatar', 'Los formatos permitidos son JPG, PNG y GIF');
				}
			}

			// Finalmente retornamos si la validación es válida
			return empty($this->getAllErrors());
		}

		public function getUsername() {
			return $this->username;
		}


		public function getName() {
			return $this->name;
		}


		public function getLastName() {
			return $this->lastname;
		}

		public function getEmail() {
			return $this->email;
		}

		public function getcountry() {
			return $this->country;
		}

	}
