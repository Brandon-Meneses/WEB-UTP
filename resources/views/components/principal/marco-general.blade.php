<!DOCTYPE html>
<html lang="es" data-theme="cupcake">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{$titulo}}</title>
</head>
<body>

  <main>

      
      <x-principal.navbar></x-principal.navbar>
      
      {{ $slot }} 

      <x-principal.footer></x-principal.footer>
      
      


  </main>

</body>
</html>