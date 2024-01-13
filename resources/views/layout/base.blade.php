<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- css link --}}
    <link rel="stylesheet" href="{{URL::asset('css/mine.css')}}">

    <title>@yield('title')</title>
    
  </head>
  <body>

    @auth
      @include('layout.nav')
    @endauth 

    <div class="container">
        @yield('content')
    </div>

    <!-- Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    {{-- js link --}}
    <script src="{{URL::asset('js/mine.js')}}"></script>
  </body>
</html>
