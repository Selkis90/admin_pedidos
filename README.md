Admin_Pedidos
Sistema de administración y consulta de pedidos utilizando el patrón de diseño MVC.

API de Órdenes Filtradas por Mes y Estado
Este proyecto proporciona una API para consultar órdenes filtradas por mes y estado desde una base de datos de una tienda.

Componentes del Proyecto
API (api/cargarDatos.php): Maneja las solicitudes para obtener órdenes filtradas por mes y estado.

Directorios y Archivos:

.vscode: Configuración específica de Visual Studio Code.
api: Contiene el script principal cargarDatos.php.
controller, css, img, js, model, view: Directorios para componentes de frontend y lógica de negocio.
.gitignore: Configuración de Git para ignorar archivos específicos.
DB_data.sql: Script SQL para inicializar la base de datos con tablas y datos.
NEW REQUIREMENT CASE.pdf: Documento de requisitos del proyecto.
README.md: Documento actual con información sobre el proyecto.
Otros archivos esenciales como conexion.php, footer.php, header.php, index.php, etc.
Configuración de la Aplicación
Configuración de la Base de Datos:

Copia parametros.example.php a parametros.php.
Define _HOST, _USER, _PASSWORD, _BD_NAME para la conexión a tu base de datos MySQL.
URL de la Aplicación:

Define _APPLICATION_NAME y _URL en parametros.php para la aplicación y la URL base del proyecto.
Uso
API de Consulta:

Accede a cargarDatos.php con parámetros mes y estado para obtener órdenes filtradas.
Frontend:

Utiliza archivos en controller, css, js, model, y view para construir la interfaz de usuario que interactúa con la API.
Requisitos del Sistema
Servidor web con soporte PHP.
Base de datos MySQL configurada con tablas y datos definidos en DB_data.sql.
Configuración correcta de constantes de conexión en parametros.php.