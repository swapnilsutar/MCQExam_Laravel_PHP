<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title> Exam </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">

        <style>
            .card{
                /* background-color:wheat; */
            }
            .card-header{
                padding:10px;
                background-color:;
            }
            .card-body{
                padding:0px;
            }
            a{
                text-decoration:none;
            }
        </style>
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
                    <a class="nav-link" href="/login">login</a>

                    </div>
                </div>
            </div>
        </nav>

        <div class="container">

        <br>
        <h3 class="text-center">
            Best of Luck
        </h3>
        <br>


        <form action="submitanswer" method="post" name="testCheckout">
        @csrf
        @foreach($question as $q)
        <div class="card">
            <div class="card-header">
            
                {{ $q->id}}. 
                {{ $q->question}}
            
            </div>
            @foreach($data as $d)
                @if( ($q->id) == ($d->question_number) )
                    
                <div class="card-body">
                    <div class="form-check">
                        <li>
                        <input class="form-check-input" type="radio" name='{{ $q->id }}' id="{{ $d->id }}" value="{{ $d->is_correct }}">
                        <label class="form-check-label" for="{{ $d->id }}">
                            {{ $d->option }}
                        </label>
                        </li>
                    </div>
                </div>

                @endif
            @endforeach
        </div>
        <br>
        @endforeach
        <button type="submit" class='btn btn-danger w-100'>Submit</button>

    </form>

<br><br>

 


    <footer class='text-center mt-5 mb-5'>
        Copyright &#169; 2021 : <a href="https://swapnilsutar.netlify.com" target="_blank"> Swapnil Sutar</a>
    </footer>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
