<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Carrito de Compra</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-6 max-w-4xl">
        <h1 class="text-3xl font-semibold mb-6">Carrito de Compra</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="px-4 py-2">Imagen</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <!-- Primer elemento del carrito -->
                <tr>
                    <td class="px-4 py-2">
                        <img src="img/Tarjetas_Invitacion.jpeg" alt="Producto 1" class="w-16 h-16">
                    </td>
                    <td class="px-4 py-2">Producto 1</td>
                    <td class="px-4 py-2">$19.99</td>
                    <td class="px-4 py-2">
                        <button class="text-red-500 hover:text-red-700">Eliminar</button>
                    </td>
                </tr>
                <!-- Segundo elemento del carrito -->
                <tr>
                    <td class="px-4 py-2">
                        <img src="img/Merch_Polo.jpeg" alt="Producto 2" class="w-16 h-16">
                    </td>
                    <td class="px-4 py-2">Producto 2</td>
                    <td class="px-4 py-2">$29.99</td>
                    <td class="px-4 py-2">
                        <button class="text-red-500 hover:text-red-700">Eliminar</button>
                    </td>
                </tr>
                <!-- Puedes agregar más elementos del carrito aquí -->
            </tbody>
        </table>
    </div>
</body>
</html>
