
USE proyecto_web_laravel;


-- OJO, la tabla users se debe crear desde Migrations en Laravel, comando -> php artisan migrate

    -- CREATE TABLE users (
    --     id INT AUTO_INCREMENT PRIMARY KEY,
    --     name VARCHAR(255) NOT NULL,
    --     email VARCHAR(255) NOT NULL,
    --     password VARCHAR(255) NOT NULL
    -- );

-- OJO, Despues de haber migrado la tabla users, recien se puede crear las siguientes tablas


CREATE TABLE cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    url_imagen VARCHAR(255) NOT NULL
);

CREATE TABLE links_videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_curso INT,
    nombre VARCHAR(255) NOT NULL,
    url_video VARCHAR(255) NOT NULL,
    orden INT NOT NULL,
    FOREIGN KEY (id_curso) REFERENCES cursos(id)
);

CREATE TABLE links_archivos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_curso INT,
    nombre VARCHAR(255) NOT NULL,
    url_archivo VARCHAR(255) NOT NULL,
    FOREIGN KEY (id_curso) REFERENCES cursos(id)
);

CREATE TABLE compras (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario BIGINT(20) UNSIGNED, -- debe coincidir con el tipo de datos en la tabla users de Laravel
    id_curso INT, 
    fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES users(id),
    FOREIGN KEY (id_curso) REFERENCES cursos(id)
);
