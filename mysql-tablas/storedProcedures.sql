
USE proyecto_web_laravel;

-- stored procedure, que añade un usuario a la base de datos
DELIMITER $$
CREATE PROCEDURE agregar_usuario(
    IN nombre VARCHAR(255),
    IN correo VARCHAR(255),
    IN contrasena VARCHAR(255)
)
BEGIN
    INSERT INTO users (name, email, password) VALUES (nombre, correo, contrasena);
END$$
DELIMITER ;

-- stored procedure, que añade un curso a la base de datos
DELIMITER $$
CREATE PROCEDURE agregar_curso(
    IN nombre_curso VARCHAR(255),
    IN descripcion TEXT,
    IN categoria VARCHAR(15),
    IN precio DECIMAL(10, 2),
    IN url_imagen VARCHAR(255)
)
BEGIN
    INSERT INTO cursos (nombre, descripcion, categoria, precio, url_imagen) VALUES (nombre_curso, descripcion, categoria, precio, url_imagen);
END$$
DELIMITER ;

-- stored procedure, que añade un link de video al curso correspondiente
DELIMITER $$
CREATE PROCEDURE agregar_video(
    IN id_curso INT,
    IN nombre_video VARCHAR(255),
    IN url_video VARCHAR(255),
    IN orden INT
)
BEGIN
    INSERT INTO links_videos (id_curso, nombre, url_video, orden) VALUES (id_curso, nombre_video, url_video, orden);
END$$
DELIMITER ;

-- stored procedure, que añade un link de archivo al curso correspondiente
DELIMITER $$
CREATE PROCEDURE agregar_archivo(
    IN id_curso INT,
    IN nombre_archivo VARCHAR(255),
    IN url_archivo VARCHAR(255)
)
BEGIN
    INSERT INTO links_archivos (id_curso, nombre, url_archivo) VALUES (id_curso, nombre_archivo, url_archivo);
END$$
DELIMITER ;

-- stored procedure, que añade una compra a la base de datos
DELIMITER $$
CREATE PROCEDURE agregar_compra(
    IN id_usuario BIGINT(20) UNSIGNED,
    IN id_curso INT
)
BEGIN
    INSERT INTO compras (id_usuario, id_curso) VALUES (id_usuario, id_curso);
END$$
DELIMITER ;

-- si el usuario ya ha comprado el curso, no se le permite comprarlo de nuevo, y se le muestra un mensaje de error
DELIMITER $$

CREATE TRIGGER curso_previamente_comprado BEFORE INSERT ON compras
FOR EACH ROW
BEGIN
    IF (SELECT COUNT(*) FROM compras WHERE id_usuario = NEW.id_usuario AND id_curso = NEW.id_curso) > 0 THEN
        SET @mensaje = CONCAT('Ya has comprado el curso: "', (SELECT nombre FROM cursos WHERE id = NEW.id_curso), '".');
        SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = @mensaje;
    END IF;
END$$

DELIMITER ;

