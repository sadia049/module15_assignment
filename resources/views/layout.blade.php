<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3658ab6f9c.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet"  href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  

  <title>TINTYONE</title>
  </head>
<body>

@include('header')

@yield('content')

@include('footer')



<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>