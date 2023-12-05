
<x-app-layout titulo="Conócenos">

    <x-slot name="header">Conócenos</x-slot>

    <div class="hero min-h-screen css-gradient-hero">
      <div class="hero-content flex-col md:flex-row-reverse">
  
        <img src="https://i.postimg.cc/9QLHKT2N/hero.png" class="max-w-[260px] sm:max-w-[350px] lg:max-w-[450px] rounded-lg " />
  
        <div class="max-w-3xl">
          <h1 class="text-5xl font-bold">Aprende a programar como un experto</h1>
          <p class="py-6">Conviértete en un desarrollador de clase mundial desde cualquier parte del mundo.</p>
          <a href="./register" class="btn btn-primary">Crea tu cuenta gratis</a>
        </div>
      </div>
    </div>
  
  
    <div class="h-auto py-7 bg-white dark:bg-neutral flex items-center justify-center dark:text-gray-100">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-1/2">
                    <h2 class="text-4xl font-bold text-center ">El camino del desarrollo</h2>
                    <p class="text-center mt-2 ">Aprende a programar desde cero con nuestros cursos.</p>
                </div>
            </div>
        </div>
    </div>
  
  
    <x-contador-visitas></x-contador-visitas>
  
  
    <!-- Equipo -->
    <div class="bg-white dark:text-gray-100 dark:bg-neutral">
  
      <div class="space-y-16 container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
  
        <div class="text-center">
          <div class="text-sm uppercase font-bold tracking-wider mb-1 text-indigo-600 dark:text-indigo-500">
            Grandes personas
          </div>
          <h2 class="text-4xl font-black text-black mb-4 dark:text-white">
            Conoce a nuestro equipo
          </h2>
          <h3 class="text-xl leading-relaxed font-medium text-gray-700 lg:w-2/3 mx-auto dark:text-gray-300">
            Están trabajando sin parar detrás de escena para ayudarlo a crear mejores productos, servicios web y sitios web.
          </h3>
        </div>
  
  
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-16 text-center">
  
          <div>
            <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
              <img src="https://i.postimg.cc/QxM6kr7R/avatar.jpg" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
            </span>
            <h4 class="text-xl font-bold mb-0.5">
              Brandon Meneses
            </h4>
            <p class="font-medium text-gray-600 dark:text-gray-400">
              Founder &amp; CEO
            </p>
          </div>
  
          <div>
            <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
              <img src="https://i.postimg.cc/QxM6kr7R/avatar.jpg" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
            </span>
            <h4 class="text-xl font-bold mb-0.5">
              Gianny Dantas
            </h4>
            <p class="font-medium text-gray-600 dark:text-gray-400">
              Product Design
            </p>
          </div>
  
          <div>
            <span class="inline-block rounded-full bg-white shadow-lg p-2 mb-5 dark:bg-gray-700/75 dark:shadow-gray-950">
              <img src="https://i.postimg.cc/QxM6kr7R/avatar.jpg" alt="User Avatar" class="inline-block w-28 h-28 rounded-full">
            </span>
            <h4 class="text-xl font-bold mb-0.5">
              Leonardo Espejo
            </h4>
            <p class="font-medium text-gray-600 dark:text-gray-400">
              Web Developer
            </p>
          </div>
          
        </div>
      </div>
    </div>
  
</x-app-layout>

{{-- haz un cuadrito mostrado esta paleta de colores
  ligth: {
                    "primary": "#82e7f2",                       
                    "secondary": "#d6d847",                       
                    "accent": "#9c61f4",    
                    "neutral": "#34233e",        
                    "base-100": "#fcfcfd",      
                    "info": "#afbce9",      
                    "success": "#22b96e",     
                    "warning": "#eec658",      
                    "error": "#e43a67",
                },
                dark: {
                    "primary": "#ade8ed",         
                    "secondary": "#b2ce14",        
                    "accent": "#041fd1",           
                    "neutral": "#1d1f2a",      
                    "base-100": "#353a4b",       
                    "info": "#35b6d0",           
                    "success": "#3bcea4",       
                    "warning": "#e7ac23",      
                    "error": "#e1376a",
                }, --}}

                {{-- <div class="mx-auto max-w-[160px] text-center py-16">
                  <p class="font-semibold pb-2">Paleta de colores modo actual</p>
                  <div class="bg-primary text-white p-2 rounded mb-2">primary</div>
                  <div class="bg-secondary text-white p-2 rounded mb-2">secondary</div>
                  <div class="bg-accent text-white p-2 rounded mb-2">accent</div>
                  <div class="bg-neutral text-white p-2 rounded mb-2">neutral</div>
                  <div class="bg-base-100 text-black p-2 rounded mb-2">base-100</div>
                  <div class="bg-info text-white p-2 rounded mb-2">info</div>
                  <div class="bg-success text-white p-2 rounded mb-2">success</div>
                  <div class="bg-warning text-white p-2 rounded mb-2">warning</div>
                  <div class="bg-error text-white p-2 rounded mb-2">error</div>
                </div> --}}
                



