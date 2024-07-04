<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de entrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font awesome (icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Favicon -->
    <link rel="icon" href="logo_1.ico" type="image/x-icon">
</head>
<body class="bg-body-secondary lead">
    <header>
        <nav class="navbar navbar-dark bg-dark p-3">
            <a href="#" class="text-white text-decoration-none">Productos /</a>
            <a href="#" class="text-white text-decoration-none">Clientes /</a>
            <a href="#" class="text-white text-decoration-none">RRHH /</a>
            <a href="#" class="text-white text-decoration-none">Buzón de sugerencias</a>
        </nav>
        
    </header>
    <section>
        <div class="container text-center border rounded p-3 mt-5 mb-3 bg-light" >
        <h1 id="cabecera" class="text-center mt-5">Bienvenido a la Intranet/Comercial</h1>
            <div>
                <h2 class="mt-5 text-center">Clientes</h2>
                <h4 class="mt-5 text-center">Departamento Comercial</h4>
                <p class="mt-5"><strong>Selecciona tu opción:</strong></p>
            </div>
            <div class="mt-5 row justify-content-center">
                <div class="col-auto mb-2">
                    <a href="vista/listar_cliente.php" class="btn btn-primary"><i class="bi bi-card-checklist"></i> Listar</a>
                </div>
                <div class="col-auto mb-2">
                    <a href="vista/alta_cliente.php" class="btn btn-success"><i class="bi bi-plus-circle"></i> Alta</a>
                </div>
                <div class="col-auto mb-2">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=actualizar" class="btn btn-warning text-secondary"><i class="bi bi-arrow-repeat"></i> Actualizar</a>
                </div>
                <div class="col-auto mb-2">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=eliminar" class="btn btn-danger"><i class="bi bi-trash3"></i> Eliminar</a>
                </div>
                <div class="col-auto mb-2">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=consulta" class="btn btn-info text-light"><i class="bi bi-search-heart"></i>
                    Consultar</a>
                </div>
                <div class="col-auto mb-2">
                    <a href="controlador/controlador_cliente.php?accion=inactivos" class="btn btn-secondary"><i class="bi bi-ban"></i> Ver Inactivos</a>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
