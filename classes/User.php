<?php

	class User
	{
		private $username;
		private $name;
		private $lastname;
		private $email;
		private $password;
		private $country;
		private $avatar;
		private $id;

		public function __construct($theUsername, $theName, $theLastName, $theEmail, $theCountry, $theAvatar, $thePassword = null)
		{
			$this->username = $theUsername;
			$this->name = $theName;
			$this->lastname = $theLastName;
			$this->email = $theEmail;
			$this->country = $theCountry;
			$this->avatar = $theAvatar;
			$this->password = $thePassword; // NO USEN EL setPassword()
		}

		public function getName() {
			return $this->name;
		}

		public function getUsername() {
			return $this->username;
		}

		public function getLastname() {
			return $this->lastname;
		}

		public function getEmail() {
			return $this->email;
		}


		public function getPassword() {
			return $this->password;
		}

		public function getCountry() {
			return $this->country;
		}

		public function getAvatar() {
			return $this->avatar;
		}


		public function getId() {
			return $this->id;
		}



		public function setId($theId) {
			$this->id = $theId;
		}



		public function getDataInArray()
		{
			return [
				'id' => $this->getId(),
				'username' => $this->getUsername(),
				'name' => $this->getName(),
				'lastname' => $this->getLastName(),
				'email' => $this->getEmail(),
				'country' => $this->getCountry(),
				'avatar' => $this->getAvatar(),
				'password' => $this->getPassword(),
			];
		}



				public function setPassword($thePassword) {
					$this->password = password_hash($thePassword, PASSWORD_DEFAULT);
				}
	}
