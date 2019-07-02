<?php

$dsn='mysql:host=localhost; dbname=users; port:3306';

$opt=[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION];

$db=new PDO($dsn, 'root','', $opt);

 ?>
