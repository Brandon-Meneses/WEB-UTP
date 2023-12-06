

-- OJO   !!!!!!!!!!!!!!!!!!!!
-- antes de ejecutar este script, configura en el ./.env los datos de tu base de datos
-- y ejecuta el comando php artisan migrate para crear las tablas

USE proyecto_web_laravel;

INSERT INTO cursos (nombre, descripcion, categoria, precio, url_imagen, created_at) VALUES
('Desarrollo Web con HTML, CSS y JS', 'Aprende a crear sitios web interactivos desde cero con tecnologías web.', 'Frontend', 49.99, 'https://i.postimg.cc/brjJ9TmR/web.jpg', '2023-10-05 22:55:33'),
('Programación en Python', 'Domina uno de los lenguajes más populares y versátiles.', 'Backend', 59.99, 'https://i.postimg.cc/j5f2f945/python.jpg', '2023-10-10 22:55:33'),
('Desarrollo de Aplicaciones Móviles', 'Crea aplicaciones móviles multiplataforma con React Native.', 'Frontend', 79.99, 'https://i.postimg.cc/jS8DYyjs/movil-React.jpg', '2023-10-14 22:55:33'),
('Bases de Datos SQL y MySQL', 'Aprende a diseñar y administrar bases de datos relacionales.', 'Backend', 69.99, 'https://i.postimg.cc/wBZ37HJZ/sql.jpg', '2023-10-20 22:55:33'),
('Desarrollo de Aplicaciones con Node.js', 'Construye aplicaciones del lado del servidor con Node.js.', 'Backend', 59.99, 'https://i.postimg.cc/d3m0HyXc/node.jpg', '2023-11-01 22:55:33'),
('Desarrollo de Aplicaciones con Java', 'Aprende Java y desarrolla aplicaciones empresariales robustas.', 'Frontend', 79.99, 'https://i.postimg.cc/W4hhNtD0/java.jpg', '2023-11-05 22:55:33');

INSERT INTO links_videos (id_curso, nombre, url_video, orden) VALUES
(1, 'Introducción a HTML', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(1, 'CSS Avanzado', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2),
(2, 'Python Orientado a Objetos', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(2, 'Python Funcional', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2),
(3, 'React Native Fundamentals', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(3, 'React Native Avanzado', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2),
(4, 'SQL Básico', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(4, 'SQL Avanzado', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2),
(5, 'Node.js Express', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(5, 'Node.js MongoDB', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2),
(6, 'Java Enterprise', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 1),
(6, 'Java Spring', 'https://www.youtube.com/embed/AEiRa5xZaZw?si=nOHu6OGovwwVSOJP', 2);


INSERT INTO compras (id_usuario, id_curso) VALUES
(1, 1),
(1, 4),
(1, 3),

(2, 3),
(2, 6),
(2, 2),
(2, 1),
(2, 5),

(3, 2),
(3, 4),
(3, 5),
(3, 6);
