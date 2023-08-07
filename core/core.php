<?php
/*
  EL NÚCLEO DE LA APLICACIÓN!
*/

session_start();
date_default_timezone_set('America/Caracas');

#Constantes de conexión
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','electron');

#Constantes de la APP
define('HTML_DIR','html/');
define('APP_TITLE','Electron - Compra Facil');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Ocrend Software.');
define('APP_URL','http://localhost/carrito-de-compras/');

#Estructura
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Cliente.php');
require('core/bin/ajax/goAgregar.php');

$_cliente = Cliente();



?>
