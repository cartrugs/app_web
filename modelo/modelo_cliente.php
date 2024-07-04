<?php
require_once 'conexion_cliente.php';


//limpiar los datos recibidos por formulario
function limpiar_datos($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Guardar un nuevo cliente (insertar)
function guardar_cliente($datos) {

    // Limpiar lod datos antes de la inserción
    foreach ($datos as $key => $value) {
        $datos[$key] = limpiar_datos($value);
    }

    $pdo = conectarBD();
    $stmt = $pdo->prepare("INSERT INTO clientes (nombre, apellidos, telefono, email, id_fiscal, domicilio, poblacion, codigo_postal, provincia, direccion_envio, poblacion_envio, codigo_postal_envio, sitio_web, activo) VALUES (:nombre, :apellidos, :telefono, :email, :id_fiscal, :domicilio, :poblacion, :codigo_postal, :provincia, :direccion_envio, :poblacion_envio, :codigo_postal_envio, :sitio_web, :activo)");
    
    return $stmt->execute($datos);
}
?>
