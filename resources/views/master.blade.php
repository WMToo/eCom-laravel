<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    
    
    <title>Hello, world!</title>
  </head>
  <body>
   
    {{View::make('header')}}
    @yield('content')
    {{-- {{View::make('footer')}} --}}
  </body>
  <style>
      .custom-login {
        height: 500px;
        padding-top:100px;

      }
      img.slider-img {
        height: 400px!important;

      }
      .slider-text {
        background-color: grey;
      }
      .trending-img {
        height: 100px;
      }
      .trending-item{
        float:left;
        width: 16 %;
      }
      .trending-wrapper{
        margin:30px;
      }
      .detail-img{
        height:200px;
      }
  </style>
</html>