<?php
session_start();

if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'cliente_creado') {
        echo '<div class="alert alert-success">Cliente creado con éxito.</div>';
    } elseif ($_SESSION['status'] == 'cliente_existente') {
        echo '<div class="alert alert-warning">El cliente ya existe.</div>';
    } elseif ($_SESSION['status'] == 'error_creacion') {
        echo '<div class="alert alert-danger">Hubo un error al crear el cliente.</div>';
    }
    unset($_SESSION['status']);
}
?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Alta de Cliente</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>

<body class="bg-body-secondary lead">
    <div class="container mt-5">
        <div class="card mb-5">
            <h1 class="text-center mt-3"><i class="bi bi-person-add"></i> Alta de Cliente</h1>

            <form action="../controlador/controlador_cliente.php?accion=procesar_alta" method="post" class="p-5">
                <!-- Campos del formulario -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="id_fiscal" class="form-label">ID Fiscal:</label>
                        <input type="text" class="form-control" id="id_fiscal" name="id_fiscal" placeholder="ID fiscal" required>
                    </div>
                    <div class="col-md-6">
                        <label for="domicilio" class="form-label">Domicilio:</label>
                        <input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="poblacion" class="form-label">Población:</label>
                        <input type="text" class="form-control" id="poblacion" name="poblacion" placeholder="Población" required>
                    </div>
                    <div class="col-md-6">
                        <label for="codigo_postal" class="form-label">Código Postal:</label>
                        <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Código postal" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="provincia" class="form-label">Provincia:</label>
                        <input type="text" class="form-control" id="provincia" name="provincia" placeholder="Provincia" required>
                    </div>
                    <div class="col-md-6">
                        <label for="direccion_envio" class="form-label">Dirección de Envío:</label>
                        <input type="text" class="form-control" id="direccion_envio" name="direccion_envio" placeholder="Dirección de envío">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="poblacion_envio" class="form-label">Población de Envío:</label>
                        <input type="text" class="form-control" id="poblacion_envio" name="poblacion_envio" placeholder="Población de envío">
                    </div>
                    <div class="col-md-6">
                        <label for="codigo_postal_envio" class="form-label">Código Postal de Envío:</label>
                        <input type="text" class="form-control" id="codigo_postal_envio" name="codigo_postal_envio" placeholder="Código postal de envío">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="provincia_envio" class="form-label">Provincia de Envío:</label>
                        <input type="text" class="form-control" id="provincia_envio" name="provincia_envio" placeholder="Provincia de envío">
                    </div>
                    <div class="col-md-6">
                        <label for="sitio_web" class="form-label">Sitio Web:</label>
                        <input type="text" class="form-control" id="sitio_web" name="sitio_web" placeholder="Sitio web">
                    </div>
                    <!-- <input type="checkbox" class="form-check-input" id="activo" name="activo" value="1" checked>
                    <label class="form-check-label" for="activo">Activo</label> -->
                    <input type="hidden" name="activo" value="1">
                </div>
                <!-- <input type="hidden" name="activo" value="1"> -->
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success"><i class="bi bi-plus-circle"></i>
                    Alta</button>
                </div>
            </form>
            <div class="text-center mt-5">
                <a href="http://localhost/app_web_cliente/index.php" class="btn btn-primary mb-3"><i class="bi bi-box-arrow-in-left"></i> Inicio</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>