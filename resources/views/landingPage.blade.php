<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
         @extends('bootstrap')
    </head>
    <body>    
            <div class="container mt-5">
                <h1 class="text-primary text-center">Enter the information of next Soiree.</h1>
                <form action="retrieve" method= "POST">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class=" text-center mt-5 mb-5"><button type="submit" class="btn btn-primary">View Soiree</button></div>
                </form>
                <form class="container mt-4" action="store" method="POST" style="width:25%">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="form-group">
                          <input type="date" class="form-control" name="date" id="date" aria-describedby="dateHelp" placeholder="DD-MM--YY">
                        </div>
                        <div class="form-group">
                         <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue">
                        </div>
                        <div class="text-center">
                         <button type="submit mt-3" class="btn btn-primary">Submit</button>
                        </div>
                </form>                
            </div>
        </div>
    </body>
</html>
