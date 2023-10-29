

-- OJO   !!!!!!!!!!!!!!!!!!!!
-- antes de ejecutar este script, configura en el ./.env los datos de tu base de datos
-- y ejecuta el comando php artisan migrate para crear las tablas

USE proyecto_web_laravel;

-- agregar usuarios
CALL agregar_usuario('Leonardo', 'espejo@leonardo.com', 'contra');
CALL agregar_usuario('Brandon', 'meneses@brandon.com', 'contra');
CALL agregar_usuario('Gianny', 'dantas@gianny.com', 'contra');

-- agregar cursos
CALL agregar_curso('Desarrollo Web con HTML, CSS y JS', 'Aprende a crear sitios web interactivos desde cero con tecnologías web.', 'Frontend', 49.99, 'https://i.postimg.cc/brjJ9TmR/web.jpg');
CALL agregar_curso('Programación en Python', 'Domina uno de los lenguajes más populares y versátiles.', 'Backend',59.99, 'https://i.postimg.cc/j5f2f945/python.jpg');
CALL agregar_curso('Desarrollo de Aplicaciones Móviles', 'Crea aplicaciones móviles multiplataforma con React Native.', 'Frontend',79.99, 'https://i.postimg.cc/jS8DYyjs/movil-React.jpg');
CALL agregar_curso('Bases de Datos SQL y MySQL', 'Aprende a diseñar y administrar bases de datos relacionales.', 'Backend',69.99, 'https://i.postimg.cc/wBZ37HJZ/sql.jpg');
CALL agregar_curso('Desarrollo de Aplicaciones con Node.js', 'Construye aplicaciones del lado del servidor con Node.js.', 'Backend',59.99, 'https://i.postimg.cc/d3m0HyXc/node.jpg');
CALL agregar_curso('Desarrollo de Aplicaciones con Java', 'Aprende Java y desarrolla aplicaciones empresariales robustas.', 'Frontend',79.99, 'https://i.postimg.cc/W4hhNtD0/java.jpg');

-- agregar links de video
CALL agregar_video(1, 'Introducción a HTML', 'https://www.example.com/html_intro_video', 1);
CALL agregar_video(1, 'CSS Avanzado', 'https://www.example.com/css_advanced_video', 2);
CALL agregar_video(2, 'Python Orientado a Objetos', 'https://www.example.com/python_oop_video', 1);
CALL agregar_video(2, 'Python Funcional', 'https://www.example.com/python_functional_video' , 2);
CALL agregar_video(3, 'React Native Fundamentals', 'https://www.example.com/react_native_video' , 1);
CALL agregar_video(3, 'React Native Avanzado', 'https://www.example.com/react_native_advanced_video' , 2);
CALL agregar_video(4, 'SQL Básico', 'https://www.example.com/sql_basic_video' , 1);
CALL agregar_video(4, 'SQL Avanzado', 'https://www.example.com/sql_advanced_video' , 2);
CALL agregar_video(5, 'Node.js Express', 'https://www.example.com/node_express_video' , 1);
CALL agregar_video(5, 'Node.js MongoDB', 'https://www.example.com/node_mongodb_video' , 2);
CALL agregar_video(6, 'Java Enterprise', 'https://www.example.com/java_enterprise_video' , 1);
CALL agregar_video(6, 'Java Spring', 'https://www.example.com/java_spring_video' , 2);

-- agregar links de archivo
CALL agregar_archivo(1, 'Ejemplos HTML', 'https://www.example.com/html_examples.pdf');
CALL agregar_archivo(1, 'CSS Cheat Sheet', 'https://www.example.com/css_cheat_sheet.pdf');
CALL agregar_archivo(2, 'Python Cheat Sheet', 'https://www.example.com/python_cheat_sheet.pdf');
CALL agregar_archivo(2, 'Python Practice Problems', 'https://www.example.com/python_practice_problems.pdf');
CALL agregar_archivo(3, 'React Native Starter Code', 'https://www.example.com/react_native_code.zip');
CALL agregar_archivo(3, 'React Native Practice Problems', 'https://www.example.com/react_native_practice_problems.pdf');
CALL agregar_archivo(4, 'SQL Practice Queries', 'https://www.example.com/sql_practice_queries.pdf');
CALL agregar_archivo(4, 'SQL Practice Problems', 'https://www.example.com/sql_practice_problems.pdf');
CALL agregar_archivo(5, 'Node.js Practice Problems', 'https://www.example.com/node_practice_problems.pdf');
CALL agregar_archivo(5, 'Node.js Practice Code', 'https://www.example.com/node_practice_code.zip');
CALL agregar_archivo(6, 'Java Enterprise Framework', 'https://www.example.com/java_enterprise_framework.zip');
CALL agregar_archivo(6, 'Java Spring Practice Problems', 'https://www.example.com/java_spring_practice_problems.pdf');

-- agregar compras
CALL agregar_compra(1, 1);
CALL agregar_compra(1, 4);
CALL agregar_compra(2, 3);
CALL agregar_compra(2, 6);
CALL agregar_compra(3, 2);
