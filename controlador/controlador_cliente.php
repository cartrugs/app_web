<?php

// Muestra errores, warnings y notices directamente en la página
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

require_once '../config_cliente.php';
require_once MODELO_PATH . 'modelo_cliente.php';

$accion = $_GET['accion'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($accion) {
        case 'procesar_alta':
            $datos = [
                'nombre' => $_POST['nombre'],
                'apellidos' => $_POST['apellidos'],
                'telefono' => $_POST['telefono'],
                'email' => $_POST['email'],
                'id_fiscal' => $_POST['id_fiscal'],
                'domicilio' => $_POST['domicilio'],
                'poblacion' => $_POST['poblacion'],
                'codigo_postal' => $_POST['codigo_postal'],
                'provincia' => $_POST['provincia'],
                'direccion_envio' => $_POST['direccion_envio'],
                'poblacion_envio' => $_POST['poblacion_envio'],
                'codigo_postal_envio' => $_POST['codigo_postal_envio'],
                'sitio_web' => $_POST['sitio_web'],
                'activo' => $_POST['activo']
            ];
            
            if (guardar_cliente($datos)) {
                $_SESSION['status'] = 'cliente_creado';
            } else {
                $_SESSION['status'] = 'error_creacion';
            }

            header('Location: ../vista/alta_cliente.php');
            exit();

        default:
            echo "Acción no válida.";
            break;
    }
}

?>
