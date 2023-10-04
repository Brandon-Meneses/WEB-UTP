<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;700&display=swap" rel="stylesheet">

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    
    <div class="adds">
        <p> Nuevo curso Disponible! Reservalo ahora <a href="#">aquí</a></p>
    </div>

    <nav>
        <div class="nav-bloq">
            <div class="logo">
                <box-icon color='#ffffff' size="lg" class="logo" name='code-block' alt="Logo"></box-icon>
                <h4>Easy Code</h4>
            </div>
            <div class="group-links-cart">

                <!-- minimo 600px -->
                <ul class="nav-links">
                    <li><a href="./index.html">Conocenos</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="./login.html">Login</a></li>
                </ul>

                <!-- maximo 600px -->
                <div class="hamburger">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn m-1 bg-[#39bad8] border-none">
                            <box-icon color="#ffffff" size="md" name="menu"></box-icon>
                        </label>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-[#39bad8] rounded-box w-52">
                            <li><a href="./index.html">Conocenos</a></li>
                            <li><a href="#">Cursos</a></li>
                            <li><a href="./login.html">Login</a></li>
                        </ul>
                    </div>
                </div>


                <div class="cart">
                    <box-icon color='#ffffff' size="md" name='cart'></box-icon>
                   
                    <span color='#ffffff' id="contador" class="contador-carrito contador-rojo">0</span>
                </div>
            </div>
        </div>
    </nav>



    <main class="main-cursos">

        <section class="general-curses-page">
            <!-- presentacion, barra dusqueda y cursos disponivles -->

            <div class="presentation">
                <h2>Cursos</h2>
                <p>Encuentra el curso que más se adapte a tus necesidades</p>
            </div>

            <aside class="search-bar">
                <input type="text" placeholder="Buscar curso">
                <box-icon name='search-alt-2' color='#b8b8b8' ></box-icon>
            </aside>

            <section class="courses tarjetas-cursos">


                <!-- MODELO de tarjeta -->

                <!-- <div class="course">
                    <img src="./img/courses/web.jpg" alt="Curso 1">
                    <h3>Desarrollo Web con HTML, CSS y JavaScript</h3>
                    <p>Aprende a crear sitios web interactivos desde cero con las tecnologías fundamentales de la web.</p>
                    <div class="venta-p">
                        <button class="btn-saber-mas">Más</button>
                        <button class="btn-carrito">                    
                            <box-icon color='#ffffff' name='cart'></box-icon>
                        </button>
                        <p class="precio">$49.99</p>
                    </div>
                </div> -->



                <!-- ------------------------ -->
                <!-- Cursos por JavaScript !! -->
                <!-- ------------------------ -->

                

            </section>  

        </section>
        

    </main>



    <footer>
        <div class="footer-container">
            <div class="fs-1 footer-section social-net-top">
                <div class="fs-img">
                    <box-icon color="#b8b8b8" size="lg" name="code-block" alt="Logo"></box-icon>
                </div>

                <ul>
                    <li>
                        <a href="https://fb.com/">
                            <box-icon name="facebook-circle" type="logo" color="#b8b8b8"></box-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://instagram.com/">
                            <box-icon name="instagram-alt" type="logo" color="#b8b8b8"></box-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://youtube.com/"> <box-icon name="youtube" type="logo" color="#b8b8b8"></box-icon>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="fs-2 footer-section">
                <h3>Cursos</h3>
                <ul>
                    <li><a href="./cursos.html">Todos los cursos</a></li>
                    <li><a href="#">Desarrollo Web</a></li>
                    <li><a href="#">Python</a></li>
                    <li><a href="#">React Native</a></li>
                </ul>
            </div>

            <div class="fs-3 footer-section">
                <h3>Contacto</h3>
                <div class="email-container">
                    <p class="email-text">Email: <a href="mailto:easycode@coders.com">easycode@coders.com</a></p>
                </div>
                <p>Teléfono: <a href="tel:(01)4772544">(01)4772544</a></p>
            </div>

            <div class="fs-4 footer-section">
                <h3>Trabaja con Nosotros</h3>
                <a href="#">Ver oportunidades de trabajo</a>
            </div>

            <p class="copyright"> &copy; 2023 Instituto Easy Code | Todos los derechos reservados </p>
        </div>
    </footer>




    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="js/main.js"></script>
</body>
</html>