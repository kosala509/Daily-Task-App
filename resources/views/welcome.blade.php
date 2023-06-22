<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Daily Task App</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="styleshhet" type="text/css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <style>
            html,body{
                background-color: #fff;
                color:#636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height{
                height: 100vh;
            }

            .flex-center{
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref{
                position : relative;
            }

            .top-right{
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content{
                text-align: center;
            }

            .title{
                font-size: 84px;
            }

            .links > a{
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 1rem;
                text-decoration: none;
                text-transform: upperacase;
            }

            .m-b-md{
                margin-bottom: 30px;
            }

        </style>
    </head>
    <body >
        <div class="flex-center position-ref full-height">
            @if(Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div> 
            @endif
            
            <div class="content">
                <div class="title m-b-md">
                    Daily Task App
                </div>
                <br>
                <br>
                <br>
                <a href="/tasks" class="btn btn-primary">View Tasks</a>
            </div>       
        </div>
    </body>
</html>
