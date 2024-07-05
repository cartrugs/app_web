<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Inactivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Contactos Inactivos</h2>
        <?php if (isset($clientes) && !empty($clientes)): ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>ID Fiscal</th>
                    <th>Domicilio</th>
                    <th>Población</th>
                    <th>Código Postal</th>
                    <th>Provincia</th>
                    <th>Dirección Envío</th>
                    <th>Población Envío</th>
                    <th>Código Postal Envío</th>
                    <th>Sitio Web</th>
                    <th>Activo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($clientes as $clientes) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($clientes['Id_cliente']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['apellidos']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['telefono']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['email']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['id_fiscal']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['domicilio']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['poblacion']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['codigo_postal']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['provincia']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['direccion_envio']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['poblacion_envio']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['codigo_postal_envio']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['sitio_web']); ?></td>
                    <td><?php echo htmlspecialchars($clientes['activo']); ?></td>
                </tr>
                <?php endforeach; ?>   
            </tbody>
        </table>
        <?php else: ?>
        <div class="alert alert-info" role="alert">
            No hay contactos inactivos.
        </div>
        <?php endif; ?>
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-secondary">Volver al menú principal</a>
        </div>
    </div>
</body>
</html>