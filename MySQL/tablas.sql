
CREATE DATABASE proyecto_web;


USE proyecto_web;

--MySQL

CREATE TABLE Usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(255) NOT NULL,
    Correo VARCHAR(255) NOT NULL,
    Contraseña VARCHAR(255) NOT NULL
);

CREATE TABLE Cursos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre_del_Curso VARCHAR(255) NOT NULL,
    Descripción TEXT NOT NULL,
    Precio DECIMAL(10, 2) NOT NULL,
    URL_de_la_Imagen VARCHAR(255) NOT NULL
);

CREATE TABLE Compras (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_de_Usuario INT,
    ID_del_Curso INT,
    Fecha_de_Compra TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (ID_de_Usuario) REFERENCES Usuarios(ID),
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);

CREATE TABLE Links_Videos_de_Curso (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_del_Curso INT,
    Nombre_del_Video VARCHAR(255) NOT NULL,
    URL_del_Video VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);

CREATE TABLE Links_Archivos_de_Texto (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_del_Curso INT,
    Nombre_del_Archivo VARCHAR(255) NOT NULL,
    URL_del_Archivo VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);

CREATE TABLE Links_Documentos (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_del_Curso INT,
    Nombre_del_Documento VARCHAR(255) NOT NULL,
    URL_del_Documento VARCHAR(255) NOT NULL,
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);

CREATE TABLE Cursos_Comprados (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_de_Usuario INT,
    ID_del_Curso INT,
    FOREIGN KEY (ID_de_Usuario) REFERENCES Usuarios(ID),
    FOREIGN KEY (ID_del_Curso) REFERENCES Cursos(ID)
);
