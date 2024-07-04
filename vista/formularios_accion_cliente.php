<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acción Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../logo_1.ico" type="image/x-icon">
</head>
<body>
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
                            echo 'Iniciar Actualización';
                            break;
                        case 'eliminar':
                            echo 'Eliminar';
                            break;
                        case 'consulta':
                            echo 'Consultar';
                            break;
                    }
                    ?>
                </button>
                <button type="button" class="btn btn-primary btn-sm" onclick="window.location.reload();">
                    Refrescar Formulario
                </button>
            </div>
        </form>
        <div class="text-center mt-4">
            <a href="../index.php" class="btn btn-primary btn-sm">Volver al menú principal</a>
        </div>
    </div>
</body>
</html>
