<?php

	// require_once 'config.php';
	require_once 'classes/Validator.php';
	require_once 'classes/RegisterValidator.php';
	require_once 'classes/SaveImage.php';
	require_once 'classes/User.php';
	require_once 'classes/DB.php';
	require_once 'classes/DBJson.php';
	require_once 'classes/Auth.php';

	// $DB = new DBJson('users.json');
	$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];
	$dsn='mysql:host=localhost; dbname=users; port:3306';
	$root='root';
	$pass='';
	$DB = new DBJson($dsn, $root, $pass, $opt);
	$Auth = new Auth($DB);
	
	var_dump('Estoy en profile');
	// Si no estÃ¡ logueda la persona la redirijo al login
	if ( !$Auth->isLogged() ) {
	 	header('location: login.php');
	 	exit;
	 }
	$pageTitle = 'Profile';
	$theUser = $_SESSION['userLoged'];

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
    <!--Vinculción externa de CSS-->
  <!-- <?php   require_once 'head.php' ?> -->
<link rel="stylesheet" href="css/perfilstyles.css">
</head>
  <body>
      <?php require_once('nav-bar.php'); ?>
      <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
				<!-- Preguntamos si NO está logueado el usuario para mostrar los enlaces Register y Login -->
									<!-- <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li> -->
							</ul>
    <div class="contenedorprincipal">
       <div class="contenedor1">
          <br>
          <center><img class="fotousuario" src="data/avatars/<?= $theUser->getAvatar(); ?>" alt="foto del usuario"></center>
          <br>
          <br>
                <h1><center>Mi Perfil</center></h1>
                <br>
                <h2>Hola <?= $theUser->getName(); ?></h2>
          <br>
          <br>
          <a class="item" href="#MisDatos">Mis Datos</a>
          <br>
          <br>
          <a class="item" href="#compras">Compras</a>
          <br>
          <br>
          <a class="item" href="#facturas">Facturación</a>
          <br>
          <br>
          <a class="item" href="#cambiopass">Contraseña</a>
      </div>
      <div class="contenedor2">
          <br>
          <h2 id = "MisDatos"><em><strong><center>Mis datos</center></strong></em></li></h2>
          <br>
          <p><strong>Usuario: </strong><?= $theUser->getUsername(); ?></p>
          <br>
          <p><strong>Nombre: </strong><?= $theUser->getName(); ?></p>
          <br>
          <p><strong>Pais: </strong><?= $theUser->getcountry(); ?></p>
          <br>
          <p><strong>Email: </strong><?= $theUser->getEmail(); ?></p>
          <br>
          <br>
      </div>
      <div class="contenedor3">
         <br>
         <h2 id="compras"><em><strong><center>Compras</center></strong></em></li></h2>
         <br>
         <center><img class="productocomprado" src="images/mate-de-madera-colorido.jpg" alt="producto comprado"></center>
         <p>Mate de madera colorido</p>
         <p>Cantidad: 2</p>
         <p>Precio: $250</p>
         <p>Total: 2 x $250 = $500</p>
         <br>
      </div>
      <div class="contenedor4">
         <br>
         <h2 id="facturas"><em><strong><center>Facturación</center></strong></em></li></h2>
         <img class="facturadecompra" src="images/facturamp.png" alt="factura de compra">
          <a href="facturamp.php">Factura de compra</a>.
      </div>
      <div class="contenedor5">
         <br>
         <h2 id="cambiopass"><em><strong><center>Contraseña</center></strong></em></h2>
         <br>
         <a href="#reset">Reestablecer contraseña</a>
         <br>
         <br>
         <a href="cambiar_contrasenia.php">Cambiar contraseña</a>
         <br>
         <br>
         <a class="dropdown-item" href="logout.php">Salir</a>
      </div>
   </div>

   <?php require_once('footer.php'); ?>
   </body>
</html>
