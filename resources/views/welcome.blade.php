<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Exam </title>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>
            .card{
                background-color:wheat;
            }
            .card-header{
                padding:10px;
                background-color:;
            }
            .card-body{
                padding:10px;
            }
        </style>
    </head>
    <body class="container">
        <h1 class="text-center"> Swapnil Sutar</h1>

        <h3>
            Basic Web Development MCQ
        </h3>
        <form action="answer" method="post">
        @csrf
            <div class="card">
            <ol class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="card-header">
                        What is HTML ? 
                        <input type="hidden" name="111" value="Question 1">
                    </div>
                    <div class="card-body" >
                        <div class="form-check">
                            <input  class="form-check-input" type="radio" id="1" name="1" value="1">       
                            <label for="1">HyperText Markup Language</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="1" id="2" value="2"> 
                            <label for="2">
                            Hyper Text Makeup Language
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="1" id="3" value="3"> 
                            <label class="form-check-label" for="3">
                            Hyperlink Makeup Language
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="1" id="4" value="4"> 
                            <label for="4">
                            Hyper Text Makeup Language
                            </label>
                        </div>
                    </div>
                </li>
            </ol>
            </div>
            <button class='btn btn-success' type="submit">Submit</button>
        </form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
