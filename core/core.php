<?php
session_start();

#Constantes de conexión
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'oncrenddb');

#Constantes de la App
define('HTML_DIR', 'views/html/');
define('APP_TITLE', 'Cajero');
define('APP_URL', 'http://localhost/Cajero/');

require 'core/models/class.conexion.php';
