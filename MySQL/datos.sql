

-- Añadir usuarios
CALL añadir_usuario(111, 'Leonardo Espejo', 'leonardo@leonardo.com', 'contra');
CALL añadir_usuario(222, 'Brandon Meneses', 'brandon@brandon.com', 'contra');
CALL añadir_usuario(333, 'Giovanni Dantas', 'dantas@dantas.com', 'contra');

-- Añadir cursos
CALL añadir_curso('Desarrollo Web con HTML, CSS y JS', 'Aprende a crear sitios web interactivos desde cero con tecnologías web.', 49.99, 'https://i.postimg.cc/brjJ9TmR/web.jpg');
CALL añadir_curso('Programación en Python', 'Domina uno de los lenguajes más populares y versátiles.', 59.99, 'https://i.postimg.cc/j5f2f945/python.jpg');
CALL añadir_curso('Desarrollo de Aplicaciones Móviles', 'Crea aplicaciones móviles multiplataforma con React Native.', 79.99, 'https://i.postimg.cc/jS8DYyjs/movil-React.jpg');
CALL añadir_curso('Bases de Datos SQL y MySQL', 'Aprende a diseñar y administrar bases de datos relacionales.', 69.99, 'https://i.postimg.cc/wBZ37HJZ/sql.jpg');
CALL añadir_curso('Desarrollo de Aplicaciones con Node.js', 'Construye aplicaciones del lado del servidor con Node.js.', 59.99, 'https://i.postimg.cc/d3m0HyXc/node.jpg');
CALL añadir_curso('Desarrollo de Aplicaciones con Java', 'Aprende Java y desarrolla aplicaciones empresariales robustas.', 79.99, 'https://i.postimg.cc/W4hhNtD0/java.jpg');

-- Añadir links de video
CALL añadir_link_video(1, 'Introducción a HTML', 'https://www.example.com/html_intro_video');
CALL añadir_link_video(1, 'CSS Avanzado', 'https://www.example.com/css_advanced_video');
CALL añadir_link_video(2, 'Python Orientado a Objetos', 'https://www.example.com/python_oop_video');
CALL añadir_link_video(2, 'Python Funcional', 'https://www.example.com/python_functional_video');
CALL añadir_link_video(3, 'React Native Fundamentals', 'https://www.example.com/react_native_video');
CALL añadir_link_video(3, 'React Native Avanzado', 'https://www.example.com/react_native_advanced_video');
CALL añadir_link_video(4, 'SQL Básico', 'https://www.example.com/sql_basic_video');
CALL añadir_link_video(4, 'SQL Avanzado', 'https://www.example.com/sql_advanced_video');
CALL añadir_link_video(5, 'Node.js Express', 'https://www.example.com/node_express_video');
CALL añadir_link_video(5, 'Node.js MongoDB', 'https://www.example.com/node_mongodb_video');
CALL añadir_link_video(6, 'Java Enterprise', 'https://www.example.com/java_enterprise_video');
CALL añadir_link_video(6, 'Java Spring', 'https://www.example.com/java_spring_video');

-- Añadir links de archivo
CALL añadir_link_archivo(1, 'Ejemplos HTML', 'https://www.example.com/html_examples.pdf');
CALL añadir_link_archivo(1, 'CSS Cheat Sheet', 'https://www.example.com/css_cheat_sheet.pdf');
CALL añadir_link_archivo(2, 'Python Cheat Sheet', 'https://www.example.com/python_cheat_sheet.pdf');
CALL añadir_link_archivo(2, 'Python Practice Problems', 'https://www.example.com/python_practice_problems.pdf');
CALL añadir_link_archivo(3, 'React Native Starter Code', 'https://www.example.com/react_native_code.zip');
CALL añadir_link_archivo(3, 'React Native Practice Problems', 'https://www.example.com/react_native_practice_problems.pdf');
CALL añadir_link_archivo(4, 'SQL Practice Queries', 'https://www.example.com/sql_practice_queries.pdf');
CALL añadir_link_archivo(4, 'SQL Practice Problems', 'https://www.example.com/sql_practice_problems.pdf');
CALL añadir_link_archivo(5, 'Node.js Practice Problems', 'https://www.example.com/node_practice_problems.pdf');
CALL añadir_link_archivo(5, 'Node.js Practice Code', 'https://www.example.com/node_practice_code.zip');
CALL añadir_link_archivo(6, 'Java Enterprise Framework', 'https://www.example.com/java_enterprise_framework.zip');
CALL añadir_link_archivo(6, 'Java Spring Practice Problems', 'https://www.example.com/java_spring_practice_problems.pdf');

-- Añadir compras
CALL añadir_compra(111, 1);
CALL añadir_compra(111, 4);
CALL añadir_compra(222, 3);
CALL añadir_compra(222, 6);
CALL añadir_compra(333, 2);
