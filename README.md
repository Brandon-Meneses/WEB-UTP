<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto Laravel

## Requisitos para la instalación del proyecto:

 Indispensable tener instalado:
 - Instalar [Git](https://git-scm.com/downloads).
 - [XAMPP](https://www.apachefriends.org/download.html) para la instalación de los servicios de Apache PHP y MySQL.
 - Instalar [Composer](https://getcomposer.org/download/).
 - Instalar [Node.js](https://nodejs.org/en).

 Indispensable tener las variables de entorno configuradas para el uso de los comandos de Git, Composer y Node.js.


## Pasos para la configuración del proyecto:

Clonar el repositorio con el comando:
```bash
git clone https://github.com/Brandon-Meneses/WEB-UTP
```

Instalar las dependencias con el comando:
```bash
composer install && npm install
```

Crear el archivo .env con el comando:
```bash
cp .env.example .env
```
Configurar el archivo .env con los datos de la base de datos:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=proyecto_web_laravel
DB_USERNAME=root
DB_PASSWORD=
```

Recuerda iniciar los servicios de Apache y MySQL en XAMPP.

Haz la migración de las tablas para la base de datos con el comando:
```bash
php artisan migrate
```

Inicia el servidor con el comando:
```bash
php artisan serve
```

En otra terminal ejecuta el comando:
```bash
npm run dev
```



