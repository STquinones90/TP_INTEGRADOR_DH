<?php
require_once 'config.php';
require_once 'classes/Validator.php';
require_once 'classes/RegisterValidator.php';
require_once 'classes/SaveImage.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/DBJson.php';
require_once 'classes/Auth.php';


$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
$dsn='mysql:host=localhost; dbname=users; port:3306';
$root='root';
$pass='';
$DB = new DBJson($dsn, $root, $pass, $opt);
$Auth = new Auth($DB);

if ( $Auth->isLogged() ) {

    exit;
		header('location: perfilusuario.php');
		exit;
	}



$registrerValidator = new RegisterValidator;
//Si es post se seteó?
if ($_POST) {
    if (!empty($_POST['email'])) {
          if ( $DB->emailExist($_POST['email']) ) {
              // var_dump('Entro a setear error de que ese mail ya existe');
              $registrerValidator->setError('email', 'Ya se registraron con ese correo electrónico');
            }
          }
          if (!empty($_POST['username'])) {
            if ( $DB->usernameExist($_POST['username']) ) {
                $registrerValidator->setError('username', 'Ya se registraron con ese username');
              }
          }
          if ($registrerValidator->isValid()) {
          SaveImage::uploadImage($_FILES['avatar']);
          $user = new User($_POST['username'], $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['country'], SaveImage::$avatarName);
          $user->setPassword($_POST['password']);
          $DB->saveUser($user);
			    $Auth->login($user);


      }

      		}


          $countries = [
          		'ar' => 'Argentina',
          		'bo' => 'Bolivia',
          		'br' => 'Brasil',
          		'co' => 'Colombia',
          		'cl' => 'Chile',
          		'ec' => 'Ecuador',
          		'pa' => 'Paraguay',
          		'pe' => 'Perú',
          		'uy' => 'Uruguay',
          		've' => 'Venezuela',
          	];


 ?>
﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrate!</title>
    <!-- Etiqueta meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- LLamda a font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Llamada a bootstrap y relacionados -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script>
		$(document).on('ready', function() {
			$('#show-hide-passwd').on('click', function(e) {
				e.preventDefault();
				var current = $(this).attr('action');
				if (current == 'hide') {
					$(this).prev().attr('type','text');
					$(this).removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','show');
				}
				if (current == 'show') {
					$(this).prev().attr('type','password');
					$(this).removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','hide');
				}
			})
		})
	</script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script>
	$(document).on('ready', function() {
		$('#show-hide-repasswd').on('click', function(e) {
			e.preventDefault();
			var current = $(this).attr('action');
			if (current == 'hide') {
				$(this).prev().attr('type','text');
				$(this).removeClass('fas fa-eye-slash').addClass('fas fa-eye').attr('action','show');
			}
			if (current == 'show') {
				$(this).prev().attr('type','password');
				$(this).removeClass('fas fa-eye').addClass('fas fa-eye-slash').attr('action','hide');
			}
		})
	})
</script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- Enlazo mi hoja de estilo -->
    <link rel="stylesheet" href="css/styles-registro.css">
		<link rel="stylesheet" href="css/styles-footer.css">

  </head>
  <body>
      <div class="mi-contenedor">
          <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h1><img src="images/logo.png" height="45px" width="55px" alt="logo"><strong>  market palace</strong></h1>
                        <div class="mis-descripciones">
                          <p>Un lugar donde encontrás todo lo que querés</p>
                        </div>
                    </div>
                </div>

                <!-- Aca va a ir el contenedor del form -->
                <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 mi-form-contenedor">
                            <!-- Como si fuera el 'header' del formulario -->
                            <div class="mi-cabecera-form">
                                  <div class="mi-contenido-izquierdo">
                                        <h3>Encontra eso que buscas</h3>
                                        <p>Crea tu cuenta aqui!</p>
                                  </div>
                                  <div class="mi-contenido-derecho">
                                        <i class="far fa-user-circle"></i>
                                  </div>
                            <!-- Aca va a ir el formulario en si       -->
                            </div>
                            <div class="mi-principal-form">
                                  <form role="form" class="" action="" method="post" enctype="multipart/form-data">
                                      <!-- Agrupamientos de los inputs, usamos unas clases propias de bootstrap -->
                                      <div class="form-group">
                                            <input type="text" name="username" value="<?= $registrerValidator->getUsername(); ?>" placeholder="Ingresa tu usuario..." class="form-control <?= $registrerValidator->hasError('username') ? 'is-invalid' : null ?>" id="username-form">

					    <div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('username') ? $registrerValidator->getError('username') : null; ?>
        				    </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="password" name="password" value="" placeholder="Ingresa tu password..." class="form-control <?= $registrerValidator->hasError('password') ? 'is-invalid' : null ?>" id="password-form">
																						<i id="show-hide-passwd" action="hide" class="fas fa-eye-slash mi-check" aria-hidden="true"></i>
																						<div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('password') ? $registrerValidator->getError('password') : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="password" name="rePassword" value="" placeholder="Repite tu password..." class="form-control <?= $registrerValidator->hasError('rePassword') ? 'is-invalid' : null ?>" id="password-form">
																						<i id="show-hide-repasswd" action="hide" class="fas fa-eye-slash mi-check" aria-hidden="true"></i>
																						<div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('rePassword') ? $registrerValidator->getError('rePassword') : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="name" value="<?= $registrerValidator->getName() ?>" placeholder="Ingresa tu nombre..." class="form-control <?= $registrerValidator->hasError('name') ? 'is-invalid' : null ?>" id="name-form">
                                            <div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('name') ? $registrerValidator->getError('name') : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="lastname" value="<?= $registrerValidator->getLastName() ?>" placeholder="Ingresa tu apellido..." class="form-control <?= $registrerValidator->hasError('lastname') ? 'is-invalid' : null ?>" id="lastname-form">
                                            <div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('lastname') ? $registrerValidator->getError('lastname') : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                            <input type="text" name="email" value="<?= $registrerValidator->getEmail() ?>" placeholder="Ingresa tu email..." class="form-control <?= $registrerValidator->hasError('email') ? 'is-invalid' : null ?>" id="email-form">
                                            <div class="invalid-feedback">
          				                                <?= $registrerValidator->hasError('email') ? $registrerValidator->getError('email') : null; ?>
        				                            </div>
                                      </div>
                                      <div class="form-group">
                                        <label><b>País de nacimiento:</b></label>
								                                <select

									                                       name="country"
									                                       class="form-control <?= $registrerValidator->hasError('country') ? 'is-invalid' : null; ?>"
								                                >
									                              <option value="">Elegí un país</option>
									                              <?php foreach ($countries as $code => $country): ?>
										                            <option
											                           value="<?= $code ?>"
											                          <?= $code == $registrerValidator->getcountry('country') ? 'selected' : null; ?>
										                            >
											                          <?= $country ?>
										                            </option>
									                              <?php endforeach; ?> -->
								                                </select>
								                                <div class="invalid-feedback">
          				                              <?= $registrerValidator->hasError('country') ? $registrerValidator->getError('country') : null; ?>
        				                                </div>
							                        </div>
                                      <!-- </div> -->
                                      <div class="form-group">
                                        <label><b>Imagen de perfil:</b></label>
								                                  <div class="custom-file">
									                                           <input
										                                                   type="file"
									 	                                                   name="avatar"
										                                                   class="custom-file-input <?= $registrerValidator->hasError('avatar') ? 'is-invalid' : null; ?>"
									                                           >
									                                           <label class="custom-file-label">Choose file...</label>
									                                 <div class="invalid-feedback">
	          				                                    <?= $registrerValidator->hasError('avatar') ? $registrerValidator->getError('avatar') : null; ?>
	        				                                 </div>
								                                   </div>
                                      </div>
                                      <button type="submit" name="button" class=" btn btn-primary mi-boton">Ingresar</button>
                                  </form>
                            </div>
                      </div>
                </div>

               </div>
		             <footer class="mi-footer"><h5 class="mi-texto-footer">© 2017-2019 Company, Inc.</h5></footer>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 mi-sidebar">
            <ul class="nav navbar-nav list-inline">
                <li class="list-inline-item"><a class="" href="index.php"><i class="fas fa-home"></i></a></li>
                <li class="list-inline-item"><a class="" href="faqs.php"><i class="fas fa-question"></i></li>
                <li class="list-inline-item"><a class="" href="#"><i class="fas fa-headset"></i></li>
								<li class="list-inline-item"><a class="" href="perfilusuario.php"><i class="fas fa-user-alt"></i></a></li>
            </ul>
          </div>
      </div>
  </body>
</html>
