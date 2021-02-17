<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Admin Login </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="./style.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container-fluid">
         <!-- <a class="navbar-brand m-auto" href="#">Multiple Choice Question</a> -->
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav m-auto">
               <a class="nav-link" aria-current="page" href="/">Home</a>
               <a class="nav-link" href="/login">Login</a>

            </div>
         </div>
      </div>
   </nav>

   <div class="container">
      <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6">
      <div class="login-card ">
         <div class="card mt-5">
            <div class="card-header">
               Login 
            </div>
            <div class="card-body mb-5 mt-3">
               <form action="/checklogin" method='post'>
               @csrf
                  <input type="text" name="username" placeholder="Username" class="form-control"> <br>
                  <input type="password" name="password" placeholder="Password" class="form-control"> <br>
                  <button type="submit" class="btn btn-primary w-100">Login</button>
               </form>
            </div>
         </div>
         </div>
      </div>
      </div>

   </div>

   <footer class='text-center mt-5'>
      Copyright &#169; 2021 : <a href="https://swapnilsutar.netlify.com" target="_blank"> Swapnil Sutar</a>
   </footer>
</body>
</html>