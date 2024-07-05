<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>
<body class="bg-body-secondary lead">
    <div class="container mt-5 text-center">
        <h2>
            <?php
            $accion = $_GET['accion'] ?? '';
            switch ($accion) {
                case 'crear':
                    echo 'Cliente creado con éxito';
                    break;
                case 'actualizar':
                    echo 'Cliente actualizado con éxito';
                    break;
                case 'eliminar':
                    echo 'Cliente eliminado con éxito';
                    break;
                default:
                    echo 'Operación realizada con éxito';
            }
            ?>
        </h2>
        <div class="text-center mt-5">
            <a href="http://localhost/app_web_cliente/index.php" class="btn btn-primary mb-3"><i class="bi bi-box-arrow-in-left"></i> Inicio</a>
        </div>
    </div>
</body>
</html>