<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos Inactivos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>
<body class="bg-body-secondary lead">
    <div class="container mt-5">
        <h2 class="text-center"><i class="bi bi-ban"></i> Contactos Inactivos</h2>
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
        <div class="text-center mt-5">
            <a href="http://localhost/app_web_cliente/index.php" class="btn btn-primary mb-3"><i class="bi bi-box-arrow-in-left"></i> Inicio</a>
        </div>
    </div>
</body>
</html>