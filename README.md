# GRUPO III :busts_in_silhouette:
## GESTIÓN CLIENTES

### PSEUDOCÓDIGO AÑADIR, ACTUALIZAR, CONSULTAR, LISTAR Y ELIMINAR CLIENTES :page_facing_up:

**index.php/ raíz**  
Mostrar página de índice con botones de acción.  
Si se selecciona "Consultar Cliente",  
Redirigir a controlador/cliente_controlador.php?accion=formulario&tipo=consulta

**formularios_accion.php/ vista**  
Mostrar formulario de acción para "Consulta de Cliente"  
Mostrar campo de entrada para 'id_fiscal'  
Botón de envío para enviar el formulario a cliente_controlador.php

### Vistas :eyes:
- **formularios_accion.php**: Muestra el formulario para ingresar el id_fiscal.
- **alta_cliente.php**: Muestra el formulario para crear un nuevo cliente.
- **listar_clientes.php**: Muestra la lista de clientes activos.
- **inactivos.php**: Muestra la lista de clientes inactivos.
- **consulta_cliente.php**: Muestra los datos del cliente en formato read-only si el cliente existe.
- **editar_cliente.php**: Muestra el formulario con los datos del cliente para su edición.
- **confirmacion.php**: Muestra mensajes de éxito o error después de las acciones.

### Controlador :clipboard:
**cliente_controlador.php/ controlador**  
// Verificar método de solicitud  
Si método de solicitud es GET:
- Obtener 'accion' y 'id_fiscal' de la URL
  - Si accion es 'formulario' y tipo es 'consulta':
    - Mostrar vista/formularios_accion.php con el tipo 'consulta'
  - Si accion es 'formulario' y tipo es 'editar':
    - Mostrar vista/formularios_accion.php con el tipo 'editar'
  - Si accion es 'formulario' y tipo es 'eliminar':
    - Mostrar vista/formularios_accion.php con el tipo 'eliminar'
  - Si accion es 'consulta' y 'id_fiscal' está presente:
    - Llamar a obtener_cliente_por_id(id_fiscal) desde modelo/cliente_modelo.php
      - Si el cliente existe:
        - Si el cliente está “inactivo”:
          - Mostrar vista/consulta_cliente.php con alerta de estado inactivo del cliente
        - Sino:
          - Mostrar vista/consulta_cliente.php con los datos del cliente
      - Si no existe:
        - Mostrar mensaje de error "Cliente no encontrado" en vista/formularios_accion.php
  - Si accion es 'editar' y 'id_fiscal' está presente:
    - Llamar a obtener_cliente_por_id(id_fiscal) desde modelo/cliente_modelo.php
      - Si el cliente existe:
        - Mostrar vista/editar_cliente.php con los datos del cliente
      - Si no existe:
        - Mostrar mensaje de error "Cliente no encontrado" en vista/formularios_accion.php
  - Si accion es 'eliminar' y 'id_fiscal' está presente:
    - Llamar a eliminar_cliente(id_fiscal) desde modelo/cliente_modelo.php
    - Mostrar vista/confirmacion.php con mensaje de éxito
  - Si accion es 'listar':
    - Llamar a listar_clientes() desde modelo/cliente_modelo.php
    - Mostrar vista/listar_clientes.php con los datos de los clientes
  - Si accion es 'inactivos':
    - Llamar a listar_clientes_inactivos() desde modelo/cliente_modelo.php
    - Mostrar vista/inactivos.php con los datos de los clientes inactivos

Si método de solicitud es POST:
- Obtener 'accion' del formulario
  - Si accion es 'crear':
    - Obtener datos del formulario
    - Llamar a agregar_cliente(datos) desde modelo/cliente_modelo.php
    - Mostrar vista/confirmacion.php con mensaje de éxito
  - Si accion es 'actualizar':
    - Obtener 'id_fiscal' y datos del formulario
    - Llamar a actualizar_cliente(id_fiscal, datos) desde modelo/cliente_modelo.php
    - Mostrar vista/confirmacion.php con mensaje de éxito
  - Si accion es 'eliminar':
    - Obtener 'id_fiscal' del formulario
    - Llamar a eliminar_cliente(id_fiscal) desde modelo/cliente_modelo.php
    - Mostrar vista/confirmacion.php con mensaje de éxito

### Modelo :file_folder:
**cliente_modelo.php/ modelo**  
// Función para obtener cliente por ID
- **funcion obtener_cliente_por_id(id_fiscal)**:
  - Conectar a la base de datos
  - Preparar y ejecutar consulta SQL para obtener datos del cliente donde id_fiscal = id_fiscal
  - Devolver los datos del cliente como array asociativo

// Función para obtener todos los clientes activos
- **funcion obtener_clientes**:
  - Conectar a la base de datos
  - Ejecutar consulta SQL para obtener todos los clientes donde activo = TRUE
  - Devolver los datos de los clientes como array asociativo

// Función para obtener clientes inactivos
- **funcion obtener_clientes_inactivos**:
  - Conectar a la base de datos
  - Ejecutar consulta SQL para obtener todos los clientes donde activo = FALSE
  - Devolver los datos de los clientes como array asociativo

// Función para agregar un nuevo cliente
- **funcion agregar_cliente**(id_cliente, nombre, apellidos, telefono, email, id_fiscal, domicilio, poblacion, codigo_postal, provincia, direccion_envio, poblacion_envio, codigo_postal_envio, provincia_envio, sitio_web, activo):
  - Conectar a la base de datos
  - Preparar y ejecutar consulta SQL para insertar (insert into) un nuevo cliente con los datos proporcionados
  - Devolver resultado de la operación

// Función para actualizar un cliente existente
- **funcion actualizar_cliente**(nombre, apellidos, telefono, email, id_fiscal, domicilio, poblacion, codigo_postal, provincia, direccion_envio, poblacion_envio, codigo_postal_envio, provincia_envio, sitio_web):
  - Conectar a la base de datos
  - Preparar y ejecutar consulta SQL para actualizar (update set) el cliente donde id_fiscal = id_fiscal con los nuevos datos
  - Devolver resultado de la operación

// Función para eliminar un cliente (marcar como inactivo)
- **funcion eliminar_cliente**(id_fiscal):
  - Conectar a la base de datos
  - Preparar y ejecutar consulta SQL para actualizar el campo activo a FALSE donde id_fiscal = id_fiscal
  - Devolver resultado de la operación

### Especificaciones de bbdd de clientes (Vista)
**consulta_cliente.php/ vista**  
// Mostrar datos del cliente de manera read-only  
Si los datos del cliente están presentes:
- Mostrar campos del cliente (id_cliente, nombre, apellidos, telefono, email, id_fiscal, domicilio, poblacion, codigo_postal, provincia, direccion_envio, poblacion_envio, codigo_postal_envio, provincia_envio, sitio_web, activo) en formato read-only
- Si el cliente está inactivo:
  - Mostrar alerta de estado inactivo del cliente
- Si los datos del cliente no están presentes:
  - Mostrar mensaje "Cliente no encontrado"

### Estructura de tablas

```sql
CREATE TABLE clientes (
  Id_cliente INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  apellidos VARCHAR(255) NOT NULL,
  teléfono VARCHAR(20) NOT NULL,
  email VARCHAR(255) NOT NULL,
  id_fiscal VARCHAR(50) NOT NULL,
  domicilio VARCHAR(255) NOT NULL,
  población VARCHAR(255) NOT NULL,
  codigo_postal INT(5) NOT NULL,
  provincial VARCHAR(255) NOT NULL,
  direccion_envio VARCHAR(255),
  población_envio VARCHAR(255),
  codigo_postal_envio INT(5),
  sitio_web VARCHAR(255),
  activo ENUM('si', 'no') NOT NULL DEFAULT 'si'
);
