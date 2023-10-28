<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <title>Landing</title>
</head>
<body>

    
<div class="navbar bg-primary text-primary-content sticky top-0 z-40">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Conócenos</a></li>
        <li>
          <a>Cursos</a>
          <ul class="p-2">
            <li><a>c 1</a></li>
            <li><a>c 2</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <a class="btn btn-ghost normal-case text-xl">EasyCode</a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>Conócenos</a></li>
      <li tabindex="0">
        <details>
          <summary>Cursos</summary>
          <ul class="p-2">
            <li><a>c 1</a></li>
            <li><a>c 2</a></li>
          </ul>
        </details>
      </li>

    </ul>
  </div>

  <div class="flex-none navbar-end">
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle">
        <div class="indicator">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
          <span class="badge badge-sm indicator-item">0</span>
        </div>
      </label>
      <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
        <div class="card-body">
          <span class="font-bold text-lg">0 Items</span>
          <span class="text-info">Subtotal: $0</span>
          <div class="card-actions">
            <button class="btn btn-primary btn-block">View cart</button>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown dropdown-end">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="#" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li>
          <a class="justify-between">
            Profile
            <span class="badge">New</span>
          </a>
        </li>
        <li><a>Settings</a></li>
        <li><a>Logout</a></li>
      </ul>
    </div>
  </div>
</div>




<div class="hero min-h-screen css-gradient-hero">
  <div class="hero-content flex-col lg:flex-row-reverse">

  <img src="https://i.postimg.cc/9QLHKT2N/hero.png" class="max-w-[55%] rounded-lg " />

    <div class="max-w-3xl">
      <h1 class="text-5xl font-bold">Aprende a programar como un experto</h1>
      <p class="py-6">Conviértete en un desarrollador de clase mundial desde cualquier parte del mundo.</p>
      <button class="btn btn-primary">Crea tu cuenta gratis</button>
    </div>
  </div>
</div>


<div class="h-auto py-7 bg-primary flex items-center justify-center">
    <div class="container mx-auto">
        <div class="flex justify-center">
            <div class="w-1/2">
                <h2 class="text-4xl font-bold text-center">El camino del desarrollo</h2>
                <p class="text-center mt-2">Aprende a programar desde cero con nuestros cursos.</p>
            </div>
        </div>
    </div>
</div>



    
</body>
</html>