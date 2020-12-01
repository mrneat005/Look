<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Including scss that comes with laravel-->
      <!-- You have to install and rub watch npm 
        so every time it will look for changes and updates them
      simply type this command to intall npm 
    $ npm install
    then
    $npm run dev  //single
    $npm run watch //continously
    -->
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <!-- npm is no working getting some error-->
   <!-- npm installation error fixed by installing node js-->
   
  <title>Look</title>
  </head>
  <body>

    @include('inc_components.messages')

    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a style="font-size: 36px" class="navbar-brand font-weight-bolder font-italic " href="/">Look</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li style="padding: 5px" class="font-weight-bold bg-success " style="hover:red">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="font-weight-bold ">
            <a class="nav-link" href="/index">index <span class="sr-only">(current)</span></a>
          </li>
          <li class="font-weight-bold ">
          <a class="nav-link" href="/services">services<span class="sr-only">(current)</span></a>
        </li>
        <li class="font-weight-bold">
        <a class="nav-link" href="/posts">Posts<span class="sr-only">(current)</span></a>
      </li>
      <li class="font-weight-bold ">
    <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
  </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
               <a href="/posts/create" class="btn btn-success">Create</a>
            </li>

         </ul>
        </div>
      </nav>

      <!-- cntent for others files-->
      @yield('content')
      <!-- lets try it outs-->
        


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>