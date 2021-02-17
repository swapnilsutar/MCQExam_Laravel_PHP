<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <title>New Questions </title>
</head>
<body>

   <div class="container">
      <br>
         <a href="/">Home</a>
      <br>
      <h1 class='text-center'>
         ADD NEW QUESTION
      </h1>

      @if( session('status'))
            <script>
                  alert('{{session('status')}}');
            </script>
  
      @endif

   <div class="col-lg-5">
      <form action="/insertquestion" method="post">
      @csrf
         <input type="number" class="form-control" placeholder='Question Number' min='1' name="id"><br>
            <input class="form-control" type="text" name="question" id="question" placeholder="Enter Question">
            <br>
            <input type="text" name="option1" class="form-control" placeholder="Option 1" >
            <br>
            <input type="text" name="option2" class="form-control" placeholder="Option 2" > 
            <br>
            <input type="text" name="option3" class="form-control" placeholder="Option 3">
            <br>
            <input type="text" name="option4" class="form-control" placeholder="Option 4">
            <br>

            <input class="form-control" type="number" min='1' max="4" placeholder="Enter correct option number" name="correct" > <br>

         <button type="submit" class="btn btn-primary w-100" >Insert </button>
      </form>
      
      
      </div>
   </div>
</body>
</html>