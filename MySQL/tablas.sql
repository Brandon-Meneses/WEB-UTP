
CREATE DATABASE proyecto_web;


USE proyecto_web;

-- MySQL

CREATE TABLE Usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Correo VARCHAR(255) NOT NULL,
    Contraseña VARCHAR(255) NOT NULL
);

CREATE TABLE Cursos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nobre_curso VARCHAR(255) NOT NULL,
    Descripción TEXT NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL,
    URL_imagen VARCHAR(255) NOT NULL
);

CREATE TABLE Compras (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_usuario INT,
    ID_curso INT,
    Fecha_compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_usuario) REFERENCES Usuarios(ID),
    FOREIGN KEY (ID_curso) REFERENCES Cursos(ID)
);

CREATE TABLE Links_videos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_curso INT,
    Nombre_video VARCHAR(255) NOT NULL,
    URL_video VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_curso) REFERENCES Cursos(ID)
);

CREATE TABLE Links_archivos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_curso INT,
    Nombre_archivo VARCHAR(255) NOT NULL,
    URL_del_Archivo VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);


