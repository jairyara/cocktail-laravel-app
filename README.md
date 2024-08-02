# Proyecto Cocktails

Este proyecto está desarrollado con Laravel, utilizando Tailwind CSS, Laravel Sail para el entorno de desarrollo,
DataTables para la visualización de datos tabulares dinámicos, y SweetAlert para notificaciones interactivas.

## Funcionalidades Principales

### 1. Creación de Cocteles

- **Descripción**: Permite a los usuarios crear nuevos cocteles mediante un formulario.

### 2. Listado de Cocteles

- **Descripción**: Muestra todos los cocteles creados, utilizando DataTables para una visualización interactiva y
  dinámica.

### 3. Edición de Cocteles

- **Descripción**: Permite editar los detalles de los cocteles existentes.

### 4. Eliminación de Cocteles

- **Descripción**: Permite eliminar cocteles existentes.

### 5. Vista de Coctel Random

- **Descripción**: Consulta la API externa TheCocktailDB a través de AJAX (con jQuery) para mostrar un coctel aleatorio.
  Los usuarios tienen la opción de crear el coctel mostrado.

## Tecnologías Utilizadas

- **Laravel**: Framework PHP para el backend.
- **Tailwind CSS**: Framework CSS para el diseño y estilización.
- **Laravel Sail**: Entorno de desarrollo Dockerizado para simplificar la configuración del ambiente.
- **DataTables**: Plugin jQuery para la visualización de tablas dinámicas.
- **SweetAlert**: Librería JavaScript para crear alertas y notificaciones personalizadas.

## Instalación y Uso

1. Clona el repositorio:

   ```bash
   git clone https://github.com/jairyara/cocktail-laravel-app
   ```

2. Accede al directorio del proyecto:

   ```bash
   cd proyecto-cocktails
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
    ```

3. Configura Laravel Sail para el entorno Docker:

    ```bash
    ./vendor/bin/sail up -d
    ```
   
4. Ejecuta las migraciones y seeders:

    ```bash
   ./vendor/bin/sail artisan migrate
    ```
   
5. Accede a la aplicación

    ```bash
    http://localhost
    ```
   
## Licencia

Este proyecto es de código abierto y está disponible bajo la Licencia MIT.
