<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body class="">


    <div class="navbar bg-primary sticky top-0 z-40 mb-8">
        <div class="flex-1">
          <a class="btn btn-ghost normal-case text-xl" href="/">EasyCode</a>
        </div>
        <div class="flex-none">
          <ul class="menu menu-horizontal px-1">
            <li><a href="/cursos">Más Cursos</a></li>
          </ul>
        </div>
    </div>

    


    <div class="pointer-events-auto w-screen max-w-md m-auto mb-16">
        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
          <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
            <div class="flex items-start justify-between">
              <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Carrito</h2>
              <div class="ml-3 flex h-7 items-center">
              </div>
            </div>

            <div class="mt-8">
              <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                  <li class="flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="https://i.postimg.cc/wBZ37HJZ/sql.jpg" alt="Bases de Datos SQL y MySQL" class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">Bases de Datos SQL y MySQL</a>
                          </h3>
                          <p class="ml-4">$90.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Backend</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">🧑‍💻</p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remover</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="flex py-6">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="https://i.postimg.cc/jS8DYyjs/movil-React.jpg" alt="Desarrollo de Aplicaciones Móviles" class="h-full w-full object-cover object-center">
                    </div>

                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">Desarrollo de Aplicaciones Móviles</a>
                          </h3>
                          <p class="ml-4">$32.00</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Fontend</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">🧑‍💻</p>

                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remover</button>
                        </div>
                      </div>
                    </div>
                  </li>

                  <!-- More products... -->
                </ul>
              </div>
            </div>
          </div>

          <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900">
              <p>Subtotal</p>
              <p>$122.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500">El impuesto ya está incluido.</p>
            <div class="mt-6">
              <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-primary px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Comprar</a>
            </div>
            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
              <p>
                o
                <a href="/cursos" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Continuar comprando
                  <span aria-hidden="true"> &rarr;</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
</body>
</html>