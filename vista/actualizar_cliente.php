<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Actualizar Cliente</h2>
        <?php if (isset($cliente) && $cliente): ?>
        <form action="../controlador/controlador_cliente.php" method="post">
            <input type="hidden" name="accion" value="actualizar">
            <input type="hidden" name="id_fiscal" value="<?php echo htmlspecialchars($cliente['id_fiscal']); ?>">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($cliente['nombre']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo htmlspecialchars($cliente['apellidos']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo htmlspecialchars($cliente['telefono']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($cliente['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="id_fiscal" class="form-label">ID Fiscal</label>
                <input type="text" class="form-control" id="id_fiscal" name="id_fiscal" value="<?php echo htmlspecialchars($cliente['id_fiscal']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="domicilio" class="form-label">Domicilio</label>
                <input type="text" class="form-control" id="domicilio" name="domicilio" value="<?php echo htmlspecialchars($cliente['domicilio']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="poblacion" class="form-label">Población</label>
                <input type="text" class="form-control" id="poblacion" name="poblacion" value="<?php echo htmlspecialchars($cliente['poblacion']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="codigo_postal" class="form-label">CP</label>
                <input type="text" class="codigo_postal" id="codigo_postal" name="codigo_postal" value="<?php echo htmlspecialchars($cliente['poblacion']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="provincia" class="form-label">Provincia</label>
                <input type="text" class="form-control" id="provincia" name="provincia" value="<?php echo htmlspecialchars($cliente['provincia']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="direccion_envio" class="form-label">Dirección de Envío</label>
                <input type="text" class="form-control" id="direccion_envio" name="direccion_envio" value="<?php echo htmlspecialchars($cliente['direccion_envio']); ?>">
            </div>
            <div class="mb-3">
                <label for="poblacion_envio" class="form-label">Población de Envío</label>
                <input type="text" class="form-control" id="poblacion_envio" name="poblacion_envio" value="<?php echo htmlspecialchars($cliente['poblacion_envio']); ?>">
            </div>
            <div class="mb-3">
                <label for="codigo_postal_envio" class="form-label">CP de Envío</label>
                <input type="text" class="form-control" id="codigo_postal_envio" name="codigo_postal_envio" value="<?php echo htmlspecialchars($cliente['codigo_postal_envio']); ?>">
            </div>
            <div class="mb-3">
                <label for="sitio_web" class="form-label">Sitio Web</label>
                <input type="text" class="form-control" id="sitio_web" name="sitio_web" value="<?php echo htmlspecialchars($cliente['sitio_web']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Cliente no encontrado.
        </div>
        <?php endif; ?>
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-secondary">Volver al menú principal</a>
        </div>
    </div>
</body>
</html>