<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acción Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>
<body class="bg-body-secondary lead">
<div class="container mt-5">
        <h2 class="text-center">
            <?php
            $tipo = $_GET['tipo'] ?? '';
            switch ($tipo) {
                case 'actualizar':
                    echo 'Actualizar Cliente';
                    break;
                case 'eliminar':
                    echo 'Eliminar Cliente';
                    break;
                case 'consulta':
                    echo 'Consultar Cliente';
                    break;
                default:
                    echo 'Acción no especificada';
            }
            ?>
        </h2>
        <?php if (isset($error) && !empty($error)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo htmlspecialchars($error); ?>
        </div>
        <?php endif; ?>
        <form action="../controlador/controlador_cliente.php" method="get">
            <input type="hidden" name="accion" value="<?php echo htmlspecialchars($tipo); ?>">
            <div class="mb-3">
                <label for="id_fiscal" class="form-label">ID Fiscal del Cliente</label>
                <input type="text" class="form-control" id="id_fiscal" name="id_fiscal" required>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-sm">
                    <?php
                    switch ($tipo) {
                        case 'actualizar':
                            echo '<i class="bi bi-arrow-repeat"></i> Iniciar Actualización';
                            break;
                        case 'eliminar':
                            echo '<i class="bi bi-trash3"></i> Eliminar';
                            break;
                        case 'consulta':
                            echo '<i class="bi bi-search-heart"></i> Consultar';
                            break;
                    }
                    ?>
                </button>
                <button type="button" class="btn btn-primary btn-sm" onclick="window.location.reload();">
                <i class="bi bi-arrow-clockwise"></i> Refrescar Formulario
                </button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-primary btn-sm"><i class="bi bi-box-arrow-in-left"></i> Inicio</a>
        </div>
    </div>
</body>
</html>
