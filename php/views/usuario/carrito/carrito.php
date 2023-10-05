<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200;700&display=swap" rel="stylesheet">

    <!-- DaisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="body-carrito">
    <div class="bg-cyan-400 text-white py-4 text-center">
        <h1 class="text-3xl titulo-bold">Tu Carrito</h1>
    </div>

    <style>
        .titulo-bold {
            font-family: "Kanit", sans-serif;
            font-weight: bold;
        }
        .body-carrito {
            background-color: #f3f4f6;
            min-height: 100vh;
        }

    </style>

    <div class="container mx-auto mt-8 max-w-4xl">
        <!-- Tabla de productos en el carrito -->
        <table class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-cyan-400 text-white">Imagen</th>
                    <th class="px-4 py-2 bg-cyan-400 text-white">Nombre</th>
                    <th class="px-4 py-2 bg-cyan-400 text-white">Precio</th>
                    <th class="px-4 py-2 bg-cyan-400 text-white">Acciones</th>
                </tr>
            </thead>
            <tbody class="tabla-cursos-carrito">

                <!-- Formato: -->
                <!-- <tr>
                    <td class="px-4 py-2"><img src="imagen_producto_1.jpg" alt="Producto 1" class="w-16 h-16"></td>
                    <td class="px-4 py-2">Producto 1</td>
                    <td class="px-4 py-2">$50.00</td>
                    <td class="px-4 py-2"><button class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded">Borrar</button></td>
                </tr> -->


                <!-- Volcar datos del LocalStorage por JavaScript: -->


            </tbody>
        </table>
    </div>

    <!-- boleta con el monto total de los objetos del localhost -->
    <div class="container mx-auto mt-8 max-w-sm">
        <div class="bg-cyan-400 text-white py-4 text-center">
            <h1 class="text-3xl titulo-bold">Total</h1>
        </div>
        <div class="place-content-center bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <!-- estilo: Total: $ -->
            <div>
                <p class="text-2xl font-bold">Total: $ <span class="total"></span></p>
                <!-- Boton pagar -->
                <button class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded w-full mt-4">Pagar</button>
                
            </div>
        </div>
    </div>

    <script src="../../../../js/carrito.js"></script>
</body>
</html>
