<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Easy Code</title>
    <link rel="stylesheet" href="css/style.css" />

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
        <p>Nuevo curso Disponible! Reservalo ahora <a href="#">aquí</a></p>
    </div>

    <nav>
        <div class="nav-bloq">
            <div class="logo">
                <box-icon color="#ffffff" size="lg" class="logo" name="code-block" alt="Logo"></box-icon>
                <h4>Easy Code</h4>
            </div>
            <div class="group-links-cart">

                <!-- minimo 600px -->
                <ul class="nav-links">
                    <li><a href="#">Conocenos</a></li>
                    <li><a href="php/views/cursos/cursos.php">Cursos</a></li>
                    <li><a href="php/views/usuaio/login.html">Login</a></li>
                </ul>

                <!-- maximo 600px -->
                <div class="hamburger">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn m-1 bg-[#39bad8] border-none">
                            <box-icon color="#ffffff" size="md" name="menu"></box-icon>
                        </label>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-[#39bad9] rounded-box w-52">
                            <li><a href="#">Conocenos</a></li>
                            <li><a href="php/views/cursos/cursos.php">Cursos</a></li>
                            <li><a href="php/views/usuaio/login.html">Login</a></li>
                        </ul>
                    </div>
                </div>

                <div class="cart">
                    <box-icon color='#ffffff' size="md" name='cart'></box-icon>
                   
                    <div class="cart-indicator">
                        <p>0</p>
                    </div>
                </div>
                
            </div>
        </div>
    </nav>

    <div class="hero">
        <div class="hero-text">
            <h1>Aprende a programar como un profesional</h1>
            <p> Conviértete en un desarrollador de clase mundial desde cualquier parte
                del mundo </p>
            <a href="#" class="btn">Comienza</a>
        </div>
    </div>

    <!-- main, contenido: -->

    <div class="frase-slogan">
        <h1 class="slogan-main">EL CAMINO MÁS <span class="slogan-span">FÁCIL</span> HACIA EL APRENDIZAJE</h1>
    </div>

    <main class="main-index">
        <section>

            <div class="container-main-landing">
                <div class="card-main">
                    <div class="card-main-lessons">
                        <iframe class="video-p" width="560" height="315"
                            src="https://www.youtube.com/embed/28JKwGTiyMI?si=M8668XSYKNNj516z"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>

                    <div class="card-main-text-l land-section-descr">
                        <h3>Lecciones paso a paso</h3>
                        <p> Avanza desde ser un principiante total hasta convertirte en un
                            desarrollador de nivel mundial sin saltarte pasos. Cada lección
                            te lleva hacia una comprensión completa y maestría del tema. </p>
                    </div>
                </div>

                <div class="card-main">
                    <div class="card-main-proyects">
                        <img src="img\landing\quienes-somos.jpeg" alt="" />
                    </div>

                    <div class="card-main-text-p land-section-descr">
                        <h3>Proyectos reales</h3>
                        <p> Desarrolla proyectos reales que te ayudarán a construir tu
                            portafolio y te darán la experiencia que necesitas para
                            conseguir un trabajo como desarrollador. </p>
                    </div>
                </div>

                <div class="card-main">
                    <div class="card-main-suport">
                        <img class="img-1" src="img\landing\soporte.jpeg" alt="" />
                    </div>

                    <div class="card-main-text-s land-section-descr">
                        <h3>Soporte de por vida</h3>
                        <p> Obtén soporte de por vida de nuestro equipo de instructores y de
                            la comunidad de Easy Code. Nunca te quedes atascado y siempre
                            avanza.</p>
                    </div>
                </div>
            </div>
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
    <script src="js/index.js"></script>
</body>

</html>
