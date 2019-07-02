<?php

	// Inicio la sesión para tener acceso a $_SESSION en todos los archivos
	session_start();
	//
	// 	// Defino el array local de errores que voy a retornar
	// 	$errors = [];
	//
	// 	// Definimos las variables locales que almacenan lo que nos llegó por $_POST y $_FILES
	// 	$username = trim($_POST['username']);
	// 	$password = trim($_POST['password']);
  //   $newPassword = trim($_POST['$newPassword']);
	// 	$newRePassword = trim($_POST['newRePassword']);
	//
	//  // Si está vació el campo: $username
	//  if ( empty($username) ) {
	// 	 $errors['username'] = 'El campo username no puede estar vacío';
	//  }
	//
	// 	// Si está vació el campo: $password y demás validaciones
	// 	if ( empty($password) ) {
	// 		$errors['password'] = 'El campo password es obligatorio';
	// 	} elseif (!validpassword_longitud($password)) {
	// 		$errors['password'] = 'La contraseña debe tener más de 5 caracteres';
	// 	} elseif (validpassword_DH($password)!= true) {
	// 		$errors['password'] = 'La password debe contener una D y H mayuscula';
	// 	} elseif (validpassword_blancos($password) == true) {
	// 		echo 'entro a error';
	// 		$errors['password'] = 'La password no puede contener espacios en blanco';
	// 	}
	//
  //   // Si está vació el campo: $newPassword y demás validaciones
  //   if ( empty($newPassword) ) {
  //     $errors['newPassword'] = 'El campo newPassword es obligatorio';
  //   } elseif (!validpassword_longitud($newPassword)) {
  //     $errors['newPassword'] = 'La contraseña debe tener más de 5 caracteres';
  //   } elseif (validpassword_DH($newPassword)!= true) {
  //     $errors['newPassword'] = 'La newPassword debe contener una D y H mayuscula';
  //   } elseif (validpassword_blancos($newPassword) == true) {
  //     echo 'entro a error';
  //     $errors['newPassword'] = 'La newPassword no puede contener espacios en blanco';
  //   }
	//
	// 	// Si está vació el campo: $newRePassword
	// 	if ( empty($newRePassword) ) {
	// 		$errors['newRePassword'] = 'El campo repetir newPassword es obligatorio';
	// 	} elseif ($newPassword != $newRePassword) { // Si el valor de los campos $newPassword y $newRePassword son distintos
	// 		$errors['newPassword'] = 'Las contraseñas no coinciden';
	// 		$errors['newRePassword'] = 'Las contraseñas no coinciden';
	// 	}
	// 	return $errors;
	// }

// 	// Función para guardar al usuario
// 	function saveUser() {
// 		// Trimeamos los valores que vinieron por $_POST
// 		$_POST['username'] = trim($_POST['username']);
//
// 		// Hasheo el password del usuario
//     $_POST['newPassword'] = password_hash(trim($_POST['newPassword']), PASSWORD_DEFAULT);
//
// 		// Elimino de $_POST la posición "rePassword" ya que no me interesa guardar este dato en mi DB (Data Base)
// 		unset($_POST['newRePassword']);
//
// 		// Trimeo el campo que recibo por $_POST
// 		$newPassword = trim($_POST['newPassword']);
//
// 			// Si el password que recibí por $_POST NO coincide con el password hasheado que está guardado en el usuario
// 		if ( !password_verify($newpassword, $theUser['newpassword']) /*&& !password_verify($password, $theUser_Name['password'])*/) {
// 				$errors['newpassword'] = 'Las credenciales no coinciden';
// 			} else {
// 				echo 'Las credenciales coinciden';
// 			}
// 		}
//
// 		// Si está vacío el campo: $newPassword
// 		if ( empty($newPassword) ) {
// 			$errors['newPassword'] = 'El campo password es obligatorio';
// 		}
// 		// var_dump($errors);
// 		// exit;
// 		// Retorno el array de errores con los mensajes de error
// 		return $errors;
// 	}
//
// 	 //Si la password tiene D y H mayusculas
// 	 function validpassword_DH($cadenapassword) {
// 		 $posD = strrpos($cadenapassword, 'D');
// 		 $posH = strrpos($cadenapassword, 'H');
// 		 if (($posD === false) || ($posH === false)) { // nota: tres signos de igual
//     	return false;
// 		} else {
// 			return true;
// 		}
// 	 }
//
// 	 //Si la password tiene mas de 5 caracteres
// 	 function validpassword_longitud($cadenapassword) {
// 		 if (strlen($cadenapassword) >= 5 ) {
// 			 return true;
// 		 } else {
// 			 return false;
// 		 }
// 	 }
//
//
// 	 //Si la password tiene espacios en blanco
// 	 function validpassword_blancos($cadenapassword) {
// 		 $posEspacios = strrpos($cadenapassword, ' ');
// 		 if ($posEspacios === false) { // nota: tres signos de igual
// 			return false;
// 			} else {
// 			return true;
// 			}
// 	 }
//
// 	// Función para hacer debug
// 	/*
// 		Esta función es solamente para debugear nuestro código cada vez que lo necesitemos
// 		Recibe como parámetro el dato que quiero debugear y lo muestra de manera legible gracias a la etiqueta <pre>
// 		Finaliza con un exit para que no se siga ejecutando el código
// 	*/
// 	function debug($dato) {
// 		echo "<pre>";
// 		var_dump($dato);
// 		echo "</pre>";
// 		exit;
// 	}

$pageTitle = 'Cambio De Contraseña';

// ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php   require_once 'head.php' ?>
  <head>
    <meta charset="utf-8">
    <title>Cambiar contraseña</title>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('fa fa-check-square').addClass('fa fa-check').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('fa fa-check').addClass('fa fa-check-square').attr('action','hide');
				}
			})
		})
	</script>

	<link rel="stylesheet" href="css/perfilstyles.css">
  </head>
  <body>
	  	<center>
		  <div class="formularioDeContraseña">
       <form class="" action="index.php" method="post" enctype="multipart/form-data">
       <br>
       <br>
       Usuario:  <input type="text" name="username" value="" placeholder="Ingresa tu usuario...">
       <br>
       <br>
       Contraseña actual:  <input type="password" name="password" value="" placeholder="Ingresa tu contraseña...">
       <br>
       <br>
       Contraseña nueva:  <input type="password" name="newPassword" value="" placeholder="Ingresa tu nueva contraseña...">
       <br>
       <br>
       Repetir Contraseña nueva:  <input type="password" name="newRePassword" value="" placeholder="Confirma tu nueva contraseña...">
       <br>
			 <br>
			 <br>
       <button type="submit" value="enviar"><center>Enviar</center></button>
       <br>
       <br>
       <a class=" btn btn-primary mi-boton" href="perfilusuario.php"> <center>Volver</center></a>
     </form>
    </div>
	</center>
 </body>
</html>
