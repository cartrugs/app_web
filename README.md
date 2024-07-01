# GRUPO III
## GESTIÓN CLIENTES

### PSEUDOCÓDIGO AÑADIR, ACTUALIZAR, CONSULTAR, LISTAR Y ELIMINAR CLIENTES

**index.php/ raíz**  
Mostrar página de índice con botones de acción.  
Si se selecciona "Consultar Cliente",  
Redirigir a controlador/cliente_controlador.php?accion=formulario&tipo=consulta

**formularios_accion.php/ vista**  
Mostrar formulario de acción para "Consulta de Cliente"  
  Mostrar campo de entrada para 'id_fiscal'  
  Botón de envío para enviar el formulario a cliente_controlador.php

### Vistas
- **formularios_accion.php:** Muestra el formulario para ingresar el id_fiscal.
- **alta_cliente.php:** Muestra el formulario para crear un nuevo cliente.
- **listar_clientes.php:** Muestra la lista de clientes activos.
- **inactivos.php:** Muestra la lista de clientes inactivos.
- **consulta_cliente.php:** Muestra los datos del cliente en formato read-only si el cliente existe.
- **editar_cliente.php:** Muestra el formulario con los datos del cliente para su edición.
- **confirmacion.php:** Muestra mensajes de éxito o error después de las acciones.

### Controlador
**cliente_controlador.php/ controlador**
- Verificar método de solicitud.
- Si método de solicitud es GET:
  - Obtener 'accion' y 'id_fiscal' de la URL.
  - Si `accion` es 'formulario' y `tipo` es 'consulta':
    - Mostrar vista/formularios_accion.php con el tipo 'consulta'.
  - Si `accion` es 'formulario' y `tipo` es 'editar':
    - Mostrar vista/formularios_accion.php con el tipo 'editar'.
  - Si `accion` es 'formulario' y `tipo` es 'eliminar':
    - Mostrar vista/formularios_accion.php con el tipo 'eliminar'.
  - Si `accion` es 'consulta' y 'id_fiscal' está presente:
    - Llamar a `obtener_cliente_por_id(id_fiscal)` desde modelo/cliente_modelo.php.
    - Si el cliente existe:
      - Si el cliente está “inactivo”:
        - Mostrar vista/consulta_cliente.php con alerta de estado inactivo del cliente.
      - Sino:
        - Mostrar vista/consulta_cliente.php con los datos del cliente.
    - Si no existe:
      - Mostrar mensaje de error "Cliente no encontrado" en vista/formularios_accion.php.
  - Si `accion` es 'editar' y 'id_fiscal' está presente:
    - Llamar a `obtener_cliente_por_id(id_fiscal)` desde modelo/cliente_modelo.php.
    - Si el cliente existe:
      - Mostrar vista/editar_cliente.php con los datos del cliente.
    - Si no existe:
      - Mostrar mensaje de error "Cliente no encontrado" en vista/formularios_accion.php.
  - Si `accion` es 'eliminar' y 'id_fiscal' está presente:
    - Llamar a `eliminar_cliente(id_fiscal)` desde modelo/cliente_modelo.php.
    - Mostrar vista/confirmacion.php con mensaje de éxito.
  - Si `accion` es 'listar':
    - Llamar a `listar_clientes()` desde modelo/cliente_modelo.php.
    - Mostrar vista/listar_clientes.php con los datos de los clientes.
  - Si `accion` es 'inactivos':
    - Llamar a `listar_clientes_inactivos()` desde modelo/cliente_modelo.php.
    - Mostrar vista/inactivos.php con los datos de los clientes inactivos.
- Si método de solicitud es POST:
  - Obtener 'accion' del formulario.
  - Si `accion` es 'crear':
    - Obtener datos del formulario.
    - Llamar a `agregar_cliente(datos)` desde modelo/cliente_modelo.php.
    - Mostrar vista/confirmacion.php con mensaje de éxito.
  - Si `accion` es 'actualizar':
    - Obtener 'id_fiscal' y datos del formulario.
    - Llamar a `actualizar_cliente(id_fiscal, datos)` desde modelo/cliente_modelo.php.
    - Mostrar vista/confirmacion.php con mensaje de éxito.
  - Si `accion` es 'eliminar':
    - Obtener 'id_fiscal' del formulario.
    - Llamar a `eliminar_cliente(id_fiscal)` desde modelo/cliente_modelo.php.
    - Mostrar vista/confirmacion.php con mensaje de éxito.

### Modelo
**cliente_modelo.php/ modelo**
- **Función para obtener cliente por ID**
```pseudo
funcion obtener_cliente_por_id(id_fiscal) {
  Conectar a la base de datos
  Preparar y ejecutar consulta SQL para obtener datos del cliente donde id_fiscal = id_fiscal
  Devolver los datos del cliente como array asociativo
}
