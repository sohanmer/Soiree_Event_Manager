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
    <body class="container">
            <h1 class="text-center text-primary mt-5">Soiree List</h1>      
            <div class="mt-5">
               <table class="table table-dark mt-2 text-center" >
                    <thead>
                            <tr>
                              <th scope="col">Date</th>
                              <th scope="col">Venue</th>
                            </tr>
                    </thead>
                        @foreach ($soiree as $event)
                             <tr>
                                <td><?= $event->date?></td>
                                <td><?= $event->venue?></td>
                            </tr>
                        @endforeach
                            
               </table>  
               <div class="text-center mt-5">  
                    <a href="/"><button class="btn btn-primary"><b>Add Soiree</b></button></a>
               </div>
            </div>
        </div>
    </body>
</html>
