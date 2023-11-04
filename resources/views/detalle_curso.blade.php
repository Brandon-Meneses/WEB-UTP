
<!DOCTYPE html>
<html lang="en" data-theme="cupcake">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  @vite('resources/css/app.css')
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title>{{$curso->nombre}}</title>
</head>
<body>




     
<div class="navbar bg-primary text-primary-content sticky top-0 z-40">
    <div class="navbar-start">
      <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
          <li><a href="/">Conócenos</a></li>
          <li><a href="/cursos">Cursos</a></li>
  
        </ul>
      </div>
      <a class="btn btn-ghost normal-case text-xl" href="/">EasyCode</a>
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1">
        <li><a href="/">Conócenos</a></li>
        <li><a href="/cursos">Cursos</a></li>
        <li><a href="/registro">Regístrate</a></li>
  
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
              <a href="/carrito" class="btn btn-primary btn-block">Ver Carrito</a>
            </div>
          </div>
        </div>
      </div>
      <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
          <div class="w-10 rounded-full">
            <img src="https://i.postimg.cc/TP3LWj1f/usuario.png" />
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

  



    <div class="mt-4 min-w-screen  flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div class=" max-w-[400px] w-full md:max-w-5xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10 ">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="{{$curso->url_imagen}}" class="w-full relative z-10" alt="">
                        <div class="border-4 border-yellow-200 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10">
                        <h1 class="font-bold text-purple-700 uppercase text-sm mb-2">{{$curso->categoria}}</h1>
                        <h1 class="font-bold uppercase text-2xl mb-5">{{$curso->nombre}}</h1>
                        <p class="text-sm">{{$curso->descripcion}}</p>
                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-2xl leading-none align-baseline">$</span>
                            <span class="font-bold text-5xl leading-none align-baseline">{{$curso->precio}}</span>
                        </div>
                        <div class="inline-block align-bottom">
                            <button class="btn btn-primary">Compra ahora</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- tabla de los nombres video que se brindarán: --}}
    <div class="mt-4 flex items-center justify-center">
      <div class="w-full max-w-screen-md p-4 bg-white rounded-lg shadow-lg">
        <table class="w-full border-collapse border border-gray-300">
          <thead>
            <tr>
              <th class="border border-gray-300 px-4 py-2">N°</th>
              <th class="border border-gray-300 px-4 py-2">Contenido</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($videos as $video)
              <tr>
                <td class="border border-gray-300 px-4 py-2">{{$video->orden}}</td>
                <td class="border border-gray-300 px-4 py-2">{{$video->nombre}}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    
  
</body>
</html>