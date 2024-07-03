<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de entrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav>
            <a href="#">Productos /</a>
            <a href="#">Clientes /</a>
            <a href="#">RRHH /</a>
            <a href="#">Buzón de sugerencias</a>
        </nav>
        <h1 id="cabecera" class="text-center mt-5">Bienvenido a la Intranet/Comercial</h1>
    </header>
    <section>
        <div class="container">
            <div class="row my-5">
                <div class="col-12">
                    <h2 class="text-center my-4">Clientes</h2>
                    <h4 class="text-center my-2">Departamento Comercial</h4>
                    <p>
                        <strong>Selecciona tu opción:</strong>
                    </p>   
                </div>
            </div>
            <div class="row my-4">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
                <div class="col">
                    <a href="vista/listar_cliente.php" class="btn btn-primary btn-lg w-100">Ver Clientes</a>
                </div>
                <div class="col">
                    <a href="vista/alta_cliente.php" class="btn btn-success btn-lg w-100">Crear Nuevo Cliente</a>
                </div>
                <div class="col">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=actualizar" class="btn btn-warning btn-lg w-100">Editar Cliente</a>
                </div>
                <div class="col">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=eliminar" class="btn btn-danger btn-lg w-100">Eliminar Cliente</a>
                </div>
                <div class="col">
                    <a href="controlador/controlador_cliente.php?accion=formulario&tipo=consulta" class="btn btn-info btn-lg w-100">Consultar Cliente</a>
                </div>
                <div class="col">
                    <a href="controlador/controlador_cliente.php?accion=inactivos" class="btn btn-secondary btn-lg w-100">Ver Clientes Inactivos</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>