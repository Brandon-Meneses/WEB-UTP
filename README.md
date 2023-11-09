<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->
# Proyecto Laravel

Este proyecto es una aplicación web desarrollada con Laravel y Tailwind css.

## Requisitos previos

Antes de comenzar, asegúrate de tener instalado lo siguiente:

- [Git](https://git-scm.com/downloads)
- [XAMPP](https://www.apachefriends.org/download.html) (para los servicios de Apache, PHP y MySQL)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en)

Además, debes tener configuradas las variables de entorno para el uso de los comandos de Git, Composer y Node.js (npm).

## Configuración del proyecto

Sigue estos pasos para configurar el proyecto:

1. Clona el repositorio:
    ```bash
    git clone https://github.com/Brandon-Meneses/WEB-UTP
    ```
    Accede a la carpeta del proyecto:
    ```bash
    cd WEB-UTP
    ```

2. Instala las dependencias:
    ```bash
    composer install && npm install
    ```

3. Crea el archivo .env a partir del ejemplo proporcionado:
    ```bash
    cp .env.example .env
    ```

4. Configura el archivo .env con los datos de tu base de datos:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=proyecto_web_laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

5. Si deseas utilizar la funcionalidad de recuperación de contraseña, crea una cuenta gratuita en [Mailtrap](https://mailtrap.io/) y configura el archivo .env con los datos de tu cuenta de Mailtrap:
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

* En la carpeta `mysql-datos-prueba` hay un archivo SQL con datos de prueba para la base de datos. Puedes importar estos datos a tu base de datos para tener datos de prueba.
    <!-- Si deseas agregar datos de prueba, ejecuta el comando:
    ```bash
    php artisan db:seed
    ``` -->

8. Inicia el servidor:
    ```bash
    php artisan serve
    ```
* Dirige tu navegador a la dirección que se muestra en la terminal.

9. En otra terminal, ejecuta el comando:
    ```bash
    npm run dev
    ```

¡Ahora deberías poder acceder a la aplicación en tu navegador!

