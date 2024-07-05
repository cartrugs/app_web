<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>

<body class="bg-body-secondary lead">
    <div class="container mt-1">
        <div class="card mb-1">
            <h2 class="text-center mt-3 mb-3">Listado de Clientes</h2>
            <table class="table table-striped-columns text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Id fiscal</th>
                        <th>Sitio web</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) : ?>
                        <tr>
                            <td><?= htmlspecialchars($cliente['Id_cliente']) ?></td>
                            <td><?= htmlspecialchars($cliente['nombre']) ?></td>
                            <td><?= htmlspecialchars($cliente['apellidos']) ?></td>
                            <td><?= htmlspecialchars($cliente['telefono']) ?></td>
                            <td><?= htmlspecialchars($cliente['email']) ?></td>
                            <td><?= htmlspecialchars($cliente['id_fiscal']) ?></td>
                            <td><?= htmlspecialchars($cliente['sitio_web']) ?></td>
                            <td>
                                <a href="../controlador/controlador_cliente.php?accion=actualizar&id_fiscal=<?= urlencode($cliente['id_fiscal']) ?>" class="btn btn-warning btn-sm text-secondary mb-1"><i class="bi bi-arrow-repeat"></i> Actualizar</a>
                                <form method="POST" action="../controlador/controlador_cliente.php" style="display:inline;">
                                <input type="hidden" name="accion" value="eliminar">
                                <input type="hidden" name="id_fiscal" value="<?= htmlspecialchars($cliente['id_fiscal']) ?>">
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este cliente?')">
                                    <i class="bi bi-trash3"></i> Eliminar
                                </button>
                            </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="text-center mt-5">
                <a href="index.php" class="btn btn-primary mb-3"><i class="bi bi-box-arrow-in-left"></i> Inicio</a>
            </div>
        </div>
    </div>
</body>

</html>