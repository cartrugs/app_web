<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
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
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-secondary">Volver al menú principal</a>
        </div>
    </div>
</body>
</html>