


-- stored procedure, que añade un usuario a la base de datos
DELIMITER $$
CREATE PROCEDURE añadir_usuario(
    IN dni INT,
    IN nombre VARCHAR(255),
    IN correo VARCHAR(255),
    IN contraseña VARCHAR(255)
)
BEGIN
    INSERT INTO Usuarios (DNI, Nombre, Correo, Contraseña) VALUES (dni, nombre, correo, contraseña);
END$$
DELIMITER ;

-- stored procedure, que añade un curso a la base de datos
DELIMITER $$
CREATE PROCEDURE añadir_curso(
    IN nombre_curso VARCHAR(255),
    IN descripcion TEXT,
    IN precio DECIMAL(10, 2),
    IN url_imagen VARCHAR(255)
)
BEGIN
    INSERT INTO Cursos (Nobre_curso, Descripción, Precio, URL_imagen) VALUES (nombre_curso, descripcion, precio, url_imagen);
END$$
DELIMITER ;

-- stored procedure, que añade un link de video al curso correspondiente
DELIMITER $$
CREATE PROCEDURE añadir_link_video(
    IN id_curso INT,
    IN nombre_video VARCHAR(255),
    IN url_video VARCHAR(255)
)
BEGIN
    INSERT INTO Links_videos (ID_curso, Nombre_video, URL_video) VALUES (id_curso, nombre_video, url_video);
END$$
DELIMITER ;

-- stored procedure, que añade un link de archivo al curso correspondiente
DELIMITER $$
CREATE PROCEDURE añadir_link_archivo(
    IN id_curso INT,
    IN nombre_archivo VARCHAR(255),
    IN url_archivo VARCHAR(255)
)
BEGIN
    INSERT INTO Links_archivos (ID_curso, Nombre_archivo, URL_archivo) VALUES (id_curso, nombre_archivo, url_archivo);
END$$
DELIMITER ;

-- stored procedure, que añade una compra a la base de datos
DELIMITER $$
CREATE PROCEDURE añadir_compra(
    IN id_usuario INT,
    IN id_curso INT
)
BEGIN
    INSERT INTO Compras (ID_usuario, ID_curso) VALUES (id_usuario, id_curso);
END$$
DELIMITER ;

-- funcion que retorna un true si correo y contraseña coinciden sino false
DELIMITER $$
CREATE FUNCTION login(
    IN correo VARCHAR(255),
    IN contraseña VARCHAR(255)
)
RETURNS BOOLEAN
BEGIN
    DECLARE existe INT;
    SELECT COUNT(*) INTO existe FROM Usuarios WHERE Correo = correo AND Contraseña = contraseña;
    IF existe > 0 THEN
        RETURN TRUE;    
    ELSE
        RETURN FALSE;
    END IF;
END$$
DELIMITER ;
