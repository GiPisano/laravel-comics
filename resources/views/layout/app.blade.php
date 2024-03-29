<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    @include('partials.header')

    <div class="comics-section">
        @yield('main-content')
    </div>
    
    @include('partials.footer')
  </body>

</html>
