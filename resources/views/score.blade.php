<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title> Score </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <link rel="stylesheet" href="./style.css">
   
   </head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light ">
               <!-- <a class="navbar-brand m-auto" href="#">Multiple Choice Question</a> -->
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav m-auto">
                     <a class="nav-link" aria-current="page" href="/">Home</a>
                     @if(session('name'))
                        <a class="nav-link" href="/logout"> {{session('name')}} Logout</a>
                     @else
                        <a class="nav-link" href="/login">Login</a>
                     @endif
                  </div>
               </div>
         
   </nav>

   
   <div class="container">
      <h3 class="text-center mt-5">
         {{ $message }}
      </h3>
      <div class="row">
         <div class="col-lg-3"></div>
         <div class="col-lg-6 mt-5">
         <div class="text-center ">
               <div class="alert alert-success  ">
                  You have answered <strong> {{ $score }} </strong> questions correctly out of <strong> {{ $total }} </strong> total questions.
               </div>      
         </div>
         </div>
      </div>


   </div>

   <footer class='text-center mt-5 mb-5'>
      Copyright &#169; 2021 : <a href="https://swapnilsutar.netlify.com" target="_blank"> Swapnil Sutar</a>
   </footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
