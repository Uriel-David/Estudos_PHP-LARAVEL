<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name') }} :: @yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <div class="logo">
        <img src="{{ asset('img/Test-Image-800x800.jpg') }}" alt="Digital">
    </div>

    <div class="container">
        @yield('conteudo')
    </div>

    <footer>
      <p>Digital - 2021</p>
    </footer>

</body>
</html>
