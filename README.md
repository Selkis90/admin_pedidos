# Admin_Pedidos

Sistema de administración y consulta de pedidos utilizando el patrón de diseño MVC.

## Descripción del Proyecto
Admin_Pedidos es una aplicación web diseñada para gestionar y consultar pedidos utilizando el patrón Modelo-Vista-Controlador (MVC). Incluye una API para filtrar órdenes por mes y estado, así como componentes front-end y archivos esenciales para su funcionamiento.

## Instalación y Configuración

### Paso a Paso de Configuración del Host Virtual
1. **Crear Host Virtual:**
   - Sigue las instrucciones detalladas en el archivo [paso a paso virtual host actual.pdf](paso%20a%20paso%20virtual%20host%20actual.pdf) para configurar un host virtual en tu servidor.

### Clonar Repositorio
2. **Clonar Repositorio:**
   - Una vez configurado el host virtual, clona el repositorio desde GitHub:
     ```bash
     git clone https://github.com/Selkis90/admin_pedidos.git
     ```

### Configuración de la Base de Datos
3. **Configurar Base de Datos:**
   - Utiliza el archivo `parametros.example.php` como plantilla para crear `parametros.php`.
   - Define las constantes `_HOST`, `_USER`, `_PASSWORD`, `_BD_NAME` en `parametros.php` para la conexión a tu base de datos MySQL.

### Acceso al Proyecto
4. **Acceso al Proyecto:**
   - Abre tu navegador web y navega a `admin_pedidos.test`.
   - Esto debería dirigirte a la aplicación Admin_Pedidos lista para su uso.

## Estructura del Proyecto
- **Directorios y Archivos**:
  - `.vscode`: Configuración específica de Visual Studio Code.
  - `api`: Contiene el script principal `cargarDatos.php`.
  - `controller`, `css`, `img`, `js`, `model`, `view`: Componentes para el front-end y lógica de negocio.
  - `.gitignore`: Configuración de Git para ignorar archivos específicos.
  - `DB_data.sql`: Script SQL para inicializar la base de datos con tablas y datos.
  - `NEW REQUIREMENT CASE.pdf`: Documento de requisitos del proyecto.
  - `README.md`: Documento actual con información detallada sobre el proyecto.
  - `cargarDatos.php`, `conexion.php`, `footer.php`, `header.php`, `index.php`: Archivos esenciales para el funcionamiento de la aplicación.
  - `parametros.example.php`: Plantilla para configuración de parámetros de conexión.
  - `paso a paso virtual host actual.pdf`: Documento con instrucciones detalladas para configurar un host virtual.

---

**Nota**: Asegúrate de tener un servidor web configurado con soporte para PHP y una base de datos MySQL correctamente configurada antes de comenzar con la instalación.

