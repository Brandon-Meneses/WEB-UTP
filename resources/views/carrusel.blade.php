<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Carrusel de Cursos</title>
</head>
<body class="">


<div class="navbar bg-primary sticky top-0 z-40 mb-8">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl" href="/">EasyCode</a>
    </div>
    <div class="flex-2">
        <h2 class="text-2xl text-white">Lista de Cursos Comprados</h2>
    </div>
</div>

<div class="carousel carousel-center rounded-box ">
  <div class="carousel-item">
    <img src="https://i.postimg.cc/wBZ37HJZ/sql.jpg"  alt="Pizza" />
  </div> 
  <div class="carousel-item ">
    <img src="https://i.postimg.cc/jS8DYyjs/movil-React.jpg"  alt="Pizza" />
  </div> 
  <div class="carousel-item ">
    <img src="https://i.postimg.cc/brjJ9TmR/web.jpg"  alt="Pizza" />
  </div> 
  <div class="carousel-item ">
    <img src="https://i.postimg.cc/j5f2f945/python.jpg"  alt="Pizza" />
  </div> 
  <div class="carousel-item ">
    <img src="https://i.postimg.cc/d3m0HyXc/node.jpg"  alt="Pizza" />
  </div> 
  <div class="carousel-item ">
    <img src="https://i.postimg.cc/W4hhNtD0/java.jpg"  alt="Pizza" />
  </div> 

  
</div>
  
</body>
</html>
