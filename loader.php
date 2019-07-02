<?php

//en este archivo voy a cargar TODAS las clases del sistema de la remisería
//para poder incluirlo en la primera línea de cualquier archivo de mi sistema
//y asegurarme que voy a poder acceder a TODAS esas clases y sus métodos

//CLASES
require_once 'config.php';
require_once 'classes/Validator.php';
require_once 'classes/RegisterValidator.php';
require_once 'classes/SaveImage.php';
require_once 'classes/User.php';
require_once 'classes/DB.php';
require_once 'classes/DBJson.php';
require_once 'classes/Auth.php';



//como este archivo lo voy a requerir en todas las páginas
//creo la conexión a la base de datos y de esta forma me aseguro de tener la conexión instanciada SIEMPRE


$dsn='mysql:host=localhost; dbname=users; port:3306';

$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

$db=new PDO($dsn, 'root','', $opt);


//$conex = DB::dbConnect('localhost', 'remiseria_db', 'root', '');

//para saber qué parámetros recibe el método dbConnect ir a la clase DB