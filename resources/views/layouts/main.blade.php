<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shorcut icon" href={{ asset("/img/LOGO.png") }}>
    <title> Teman Bearly | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- custom js -->
<link rel="stylesheet" href="{{ asset("js/script.js") }}">
<link href = {{ asset("/css/main.css") }} rel = "stylesheet" >
<link href = {{ asset("/css/cart.css") }} rel = "stylesheet" >
<link href = {{ asset("/css/dashboard.css") }} rel = "stylesheet" >
<link href = {{ asset("/css/main.dashboard.css") }} rel = "stylesheet" >
<link href = {{ asset("/css/trix.css") }} rel = "stylesheet" >
  </head>


  <body>
    @include('partials.navbar');

    <div class="container mt-4" >
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @include('partials.footer')
  </body>
</html>
