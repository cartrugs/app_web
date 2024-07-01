<?php
// config.php
// Configuration file for the application

define('APP_ROOT', __DIR__);

define('CONTROLADOR_PATH', APP_ROOT . '/controlador/');
define('MODELO_PATH', APP_ROOT . '/modelo/');
define('VISTA_PATH', APP_ROOT . '/vista/');

// archivo de conexión a la bbdd

require_once MODELO_PATH. 'conexion.php';

echo "Config file included successfully!";

?>gi