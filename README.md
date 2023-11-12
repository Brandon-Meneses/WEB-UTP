<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->
# Proyecto Laravel

Este proyecto es una aplicación web desarrollada con Laravel.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

- [Git](https://git-scm.com/downloads)
- [XAMPP](https://www.apachefriends.org/download.html) (para los servicios de Apache, PHP y MySQL)
- [Composer](https://getcomposer.org/download/) (administrador de dependencias de PHP)
- [Node.js](https://nodejs.org/en) (npm)

Ten configuradas las variables de entorno para el uso de los comandos de Git, Composer y Node.js (npm).

## Configuración del proyecto

Sigue estos pasos para configurar el proyecto:

De preferencia usa la terminal de [Git Bash](https://git-scm.com/downloads).

1. Clona el repositorio:
    ```bash
    git clone https://github.com/Brandon-Meneses/WEB-UTP
    ```
    Accede a la carpeta del proyecto.

2. Instala las dependencias:
    ```bash
    composer install && npm install
    ```

3. Crea el archivo .env a partir del ejemplo proporcionado:
    ```bash
    cp .env.example .env
    ```

4. Configura el nuevo archivo .env con los datos de tu base de datos, no modifiques "DB_DATABASE=proyecto_web_laravel":
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=proyecto_web_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Crea una cuenta gratuita en [Mailtrap](https://mailtrap.io/) para simular el envío de correos electrónicos. Configura el archivo `.env` con los datos de tu cuenta de Mailtrap:
    ```bash
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_username
    MAIL_PASSWORD=your_password
    ```

6. Inicia los servicios de Apache y MySQL en XAMPP.

7. Realiza la migración de las tablas para la base de datos:
    ```bash
    php artisan migrate
    ```
    confirma la creacion de la base de datos con "yes".

    Genera los usuarios por defecto:
    ```bash
    php artisan db:seed
    ```   
    con el comando anterior se crean los usuarios con los que podras acceder a la aplicacion:
    - Administrador:
        - Correo: admin@admin.com
        - Contraseña: admin
    - Test 1:
        - Correo: test1@test.com
        - Contraseña: test
    - Test 2:
        - Correo: test2@test.com
        - Contraseña: test
    
8. En la carpeta `mysql-datos-prueba` hay un archivo SQL `datos.sql` con datos de prueba. Importa el archivo a tu base de datos.

9. Genera una clave para la aplicación:
     ```bash
    php artisan key:generate
    ```

10. Inicia el servidor:
    ```bash
    php artisan serve
    ```
    o para acceder desde otros dispositivos en la misma red:
    ```bash
    php artisan serve --host=YOUR_IP_ADDRESS --port=80
    ```
    * Dirige tu navegador a la dirección que se muestra en la terminal.

11. En otra terminal, ejecuta el comando:
    ```bash
    npm run dev
    ```

¡Ahora deberías poder acceder a la aplicación en tu navegador!

Si deseas tenerl el control de el inicio de sesion por GitHub deberás crear una OAuth App en GitHub, para ello sigue los pasos de este [tutorial](https://docs.github.com/es/developers/apps/building-oauth-apps/creating-an-oauth-app). Luego las credenciales reemplázalas al final del archivo `.env`
