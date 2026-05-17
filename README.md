# El Servidor Perdido - Escape Room Digital 🚀

## 📋 Detalle de la Evaluación
* **Institución:** Instituto Profesional AIEP
* **Módulo:** Taller de Aplicaciones para Internet
* **Docente:** Roberto Carmona Claro
* **Integrantes del Grupo:**
  * Daniel Andrés Rodríguez Salazar
  * Jonathan Alegría Saavedra

---

## 📖 Descripción del Proyecto
**"El Servidor Perdido"** es una aplicación web interactiva basada en el concepto de *Escape Room*. La narrativa se ambienta en el año 2035, donde los usuarios deben asumir el rol de analistas de sistemas para recuperar los archivos críticos de un mainframe antiguo superando 4 niveles de seguridad basados en acertijos lógicos sobre tecnologías de desarrollo web.

El sistema cuenta con persistencia de datos local, control de flujo adaptativo, y un diseño visual inmersivo con estética ciberpunk y estilo de terminal de comandos.

---

## 🛠️ Tecnologías y Arquitectura Utilizadas

El proyecto fue desarrollado integrando de manera nativa tecnologías del lado del cliente y del lado del servidor:

* **Backend (Servidor):** **PHP 8** para la gestión de sesiones globales (`session_start`), control de la lógica de negocio, validación de respuestas de formulario (insensible a mayúsculas/minúsculas mediante `strcasecmp`) y redirección automatizada de flujos.
* **Base de Datos:** **MySQL** para el almacenamiento y la extracción dinámica de los contenidos de las pistas, mensajes de éxito y orden correlativo de los niveles.
* **Frontend (Cliente):** * **HTML5:** Marcado estructural limpio de los contenedores, formularios y estados de la sesión.
  * **CSS3:** Hoja de estilos personalizada con diseño responsivo, transformaciones, efectos hover y animaciones de parpadeo (`@keyframes`).
  * **JavaScript:** Validación en el navegador para interceptar campos vacíos (`.trim()`) antes del envío al servidor, optimizando el rendimiento.

---

## 💾 Instrucciones de Despliegue Local

Para ejecutar este proyecto en un entorno de desarrollo local, siga estos pasos:

1. **Clonar o descargar** este repositorio dentro de la carpeta raíz de su servidor local (ej: `C:\xampp\htdocs\escape-room`).
2. Asegurarse de iniciar los servicios de **Apache** y **MySQL** desde el Panel de Control de XAMPP.
3. Ingresar a **phpMyAdmin** (`http://localhost/phpmyadmin/`).
4. Importar el archivo `database.sql` incluido en el proyecto para levantar automáticamente la base de datos `escape_room` y su respectiva tabla con las pistas reglamentarias.
5. Abrir el navegador web e ingresar a la ruta del proyecto: `http://localhost/escape-room/index.php`.
