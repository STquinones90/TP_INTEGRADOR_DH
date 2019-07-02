<?php

	abstract class PasswordValidator
	{

	//public static $avatarName;

		public static function spacesPassword($password)
		{		$posEspacios = strrpos($cadenapassword, ' ');
		 		if ($posEspacios === false) { // nota: tres signos de igual
					return false;
				} else {
					return true;
				}

		}

		public static function lengthPassword($password)
		{		if (strlen($password) >= 5 ) {
			 		return true;
		 		} else {
			 		return false;
		 		}
		}


		public static function requiredCharPassword($password)
		{
			$posD = strrpos($password, 'DH');
			if ($posD === false) {
    		return false;
			} else {
				return true;
			}

		}


	}
