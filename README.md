# Task Front & Task Back

Este proyecto consiste en una aplicación web desarrollada con React para el frontend y CodeIgniter 4 para el backend.

## Instrucciones para ejecutar el proyecto

### Requisitos previos

*   **XAMPP:** Asegúrate de tener XAMPP instalado con Apache y MySQL en funcionamiento.
*   **PHP:** El backend requiere PHP versión 7.4 o superior.

### INSTRUCCIONES

1.  **Mueve el proyecto a htdocs:** 
    ```
    Descarga el proyecto, y muevelo dentro de la carpeta htdocs en XAMPP.
    ```

2.  **Abre localhost:**
    ```
    abre el proyecto en el navegador, accediento por medio de la ruta localhost, debe tener iniciado el servicio de Apache y MySQL
    ```

3. **Crea la base de datos**
   ```
   Usa el archivo db, que contiene la base de datos.
   ```

### Frontend (React)

1.  **Navega a la carpeta del frontend:**
    ```
    desde la terminal, navegamos a la carpeta del proyecto/tasks
    cd task
    ```

2.  **Instala las dependencias:**
    instalamos las dependencias con el comando:
    ```
    npm install
    ```

3.  **Inicia el servidor de desarrollo:**
    ```
    npm start
    ```

    Esto abrirá la aplicación en tu navegador.

## BackEnd (CodeIgniter 4)

1. **Verifica URL**
   verifica que la URL del proyecto seaa igual a la que se encuentra en codeigniter 4, en la carpeta App/Config/App.php, si no coinciden, solo actualiza la de base URL del archivo php.
   
    
## Dependencias necesarias


### Frontend (React)

*   React
*   `@emotion/react@^11.14.0`
*   `@emotion/styled@^11.14.0`
*   `@mui/icons-material@^6.4.4`
*   `@mui/material@^6.4.4`
*   `@mui/styled-engine-sc@^6.4.3`
*   `axios@^1.7.9`
*   `sweetalert2@^11.17.2`
*   `sweetalert2-react-content@^5.1.0`


## Explicación del funcionamiento del sistema

El sistema funciona de la siguiente manera:

1.  El usuario interactúa con la interfaz de usuario en el frontend (React).
2.  El frontend realiza solicitudes a la API del backend (CodeIgniter 4) para obtener o enviar datos.
3.  El backend procesa las solicitudes, interactúa con la base de datos si es necesario y devuelve una respuesta al frontend.
4.  El frontend recibe la respuesta y actualiza la interfaz de usuario en consecuencia.

## Estructura del proyecto

*   **task-back**: Contiene el código del backend desarrollado con CodeIgniter 4.

## Tecnologías utilizadas

*   **Frontend**: React, JavaScript, HTML, CSS
*   **Backend**: CodeIgniter 4, PHP
