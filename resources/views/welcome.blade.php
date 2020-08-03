<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>

<body class="bg-white">
  <div id="app">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="bg-blue-500 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12">
        <div class="flex-grow">
          <h1 class="text-white text-center text-2xl sm:text-5xl mb-2">Seja bem vindo(a)</h1>
          <p class="text-center text-blue-200 sm:text-lg">Já configuramos o TailwindCSS e o JWT para você.</p>
        </div>
      </div>
      <div class="lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12">
        <div class="flex-grow">
          <h1 class="text-gray-600 text-center text-2xl sm:text-5xl mb-2">O resto é com você!!!</h1>
          <p class="text-center text-gray-500 sm:text-lg">Fique a vontade para clonar esse projeto e utilizar como base.</p>
          <p class="text-center text-gray-500 sm:text-lg">Continuaremos...</p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>