<?php
/*
require_once '../config_cliente.php';
require_once (MODELO_PATH . 'modelo_cliente.php');
//require_once '../modelo/modelo_cliente.php';*/

// listar contacto en vista listar_contactos.php
/*function listar_clientes(){
    $clientes = obtener_clientes();
    require_once (VISTA_PATH . 'listar_cliente.php');
    return $clientes;
}*/

// listar contactos inactivos en vista inactivos.php
function listar_clientes_inactivos() {
    $clientes = obtener_clientes_inactivos();
    require VISTA_PATH . 'formulario_inactivo_cliente.php';
    return $clientes;
}

// formulario para nuevas altas
/*function mostrar_formulario_alta($errores = [], $datos = []) {
    require VISTA_PATH . 'alta_cliente.php';
}*/

// formulario de edición
function mostrar_formulario_actualizar($id_fiscal, $errores = [], $datos = []) {
    $cliente = obtener_cliente_por_id($id_fiscal);
    require VISTA_PATH . 'actualizar_cliente.php';
    return $cliente;
}

// Función para mostrar el formulario de consulta de clientes
function mostrar_formulario_consulta($id_fiscal) {
    $cliente = obtener_cliente_por_id($id_fiscal);
    require VISTA_PATH . 'consulta_cliente.php';
    return $cliente;
}

// Función para mostrar el formulario de acción
function mostrar_formulario_accion($tipo, $error = '') {
    require VISTA_PATH . 'formularios_accion_cliente.php';
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['accion'] ?? '';
    $errores = [];
    $datos = [];

    // Validar y sanitizar los datos
    function validar_datos($campo, $nombreCampo, &$errores, &$datos) {
        if (empty($_POST[$campo])) {
            $errores[$campo] = "El campo $nombreCampo es obligatorio.";
        } else {
            $datos[$campo] = limpiar_datos($_POST[$campo]);
        }
        
    }
    
    switch ($accion) {
        /*case 'crear':
            validar_datos('nombre', 'Nombre', $errores, $datos);
            validar_datos('apellidos', 'Apellidos', $errores, $datos);
            validar_datos('telefono', 'Teléfono', $errores, $datos);
            validar_datos('email', 'Email', $errores, $datos);
            validar_datos('id_fiscal', 'ID Fiscal', $errores, $datos);
            validar_datos('domicilio', 'Domicilio', $errores, $datos);
            validar_datos('poblacion', 'Población', $errores, $datos);
            validar_datos('codigo_postal', 'CP', $errores, $datos);
            validar_datos('provincia', 'Provincia', $errores, $datos);
            validar_datos('direccion_envio', 'Dirección de Envío', $errores, $datos);
            validar_datos('poblacion_envio', 'Poblacion de Envío', $errores, $datos);
            validar_datos('codigo_postal_envio', 'CP de Envío', $errores, $datos);
            validar_datos('sitio_web', 'Sitio Web', $errores, $datos);

            if (empty($errores)) {
                guardar_cliente(
                    $datos['nombre'], $datos['apellidos'], $datos['telefono'], 
                    $datos['email'], $datos['id_fiscal'], $datos['domicilio'], 
                    $datos['poblacion'], $datos['codigo_postal'], $datos['provincia'],
                    $datos['direccion_envio'], $datos['poblacion_envio'],
                    $datos['codigo_postal_envio'], $datos['sitio_web']
                );
                header('Location: ../vista/confirmacion_cliente.php?accion=crear');
                exit();
            } else {
              mostrar_formulario_alta($errores, $datos);
            
            }
            break;*/
        
        case 'actualizar':
            $id_fiscal = $_POST['id_fiscal'] ?? null;
            validar_datos('nombre', 'Nombre', $errores, $datos);
            validar_datos('apellidos', 'Apellidos', $errores, $datos);
            validar_datos('telefono', 'Teléfono', $errores, $datos);
            validar_datos('email', 'Email', $errores, $datos);
            validar_datos('id_fiscal', 'ID Fiscal', $errores, $datos);
            validar_datos('domicilio', 'Domicilio', $errores, $datos);
            validar_datos('poblacion', 'Población', $errores, $datos);
            validar_datos('codigo_postal', 'CP', $errores, $datos);
            validar_datos('provincia', 'Provincia', $errores, $datos);
            validar_datos('direccion_envio', 'Dirección de Envío', $errores, $datos);
            validar_datos('poblacion_envio', 'Poblacion de Envío', $errores, $datos);
            validar_datos('codigo_postal_envio', 'CP de Envío', $errores, $datos);
            validar_datos('sitio_web', 'Sitio Web', $errores, $datos);
            

            if (empty($errores)) {
                actualizar_cliente(
                    $datos['nombre'], $datos['apellidos'], $datos['telefono'], 
                    $datos['email'], $datos['id_fiscal'], $datos['domicilio'], 
                    $datos['poblacion'], $datos['codigo_postal'], $datos['provincia'],
                    $datos['direccion_envio'], $datos['poblacion_envio'],
                    $datos['codigo_postal_envio'], $datos['sitio_web']
                );
                header("Location: ../vista/confirmacion_cliente.php?accion=actualizar");
                exit();
                
            } else {
                mostrar_formulario_actualizar($id_fiscal, $errores, $datos);
            }
            break;
        
        case 'eliminar':
            $id_fiscal = $_POST['id_fiscal'] ?? null;
            if ($id_fiscal) {
                eliminar_cliente($id_fiscal);
                header('Location: ../vista/confirmacion_cliente.php?accion=eliminar');
                exit();
            } else {
                $error = "ID Fiscal no proporcionado.";
                mostrar_formulario_accion('eliminar', $error);
            }
            break;
    }

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    $accion = $_GET['accion'] ?? '';
    $id_fiscal = $_GET['id_fiscal'] ?? null;

    switch ($accion) {
        case 'actualizar':
            if ($id_fiscal) {
                $cliente = obtener_cliente_por_id($id_fiscal);
                if ($cliente) {
                    mostrar_formulario_actualizar($id_fiscal);
                } else {
                    $error = "Cliente no encontrado.";
                    mostrar_formulario_accion('actualizar', $error);
                }
            }
            break;

        case 'consulta':
            if ($id_fiscal) {
                $cliente = obtener_cliente_por_id($id_fiscal);
                if ($cliente) {
                    mostrar_formulario_consulta($id_fiscal);
                } else {
                    $error = "Cliente no encontrado.";
                    mostrar_formulario_accion('consulta', $error);
                }
            }
            break;

        case 'eliminar':
            if ($id_fiscal) {
                $cliente = obtener_cliente_por_id($id_fiscal);
                if ($cliente) {
                    eliminar_cliente($id_fiscal);
                    header('Location: ../vista/confirmacion_cliente.php?accion=eliminar');
                    exit();
                } else {
                    $error = "Cliente no encontrado.";
                    mostrar_formulario_accion('eliminar', $error);
                }
            }
            break;

        case 'inactivos':
            listar_clientes_inactivos();
            break;
        
        case 'formulario':
            $tipo = $_GET['tipo'] ?? '';
            mostrar_formulario_accion($tipo);
            break;

        default:
            echo "Acción no indicada";
            break;
    }
}
?><?php

// Muestra errores, warnings y notices directamente en la página
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

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
