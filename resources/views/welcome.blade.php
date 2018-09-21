<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VoX Wallet</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {

                background-color:#03285d;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .logo {
                height:70px;
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
                color: #fff;
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
    </head>
    <body>

        <div class="flex-center position-ref full-height col-sm">
            <img src="https://variusworldtech.com/images/poker_chip-token-NEW.png"  style="width:150px">
           
                <div class="top-right links">
                    @auth
                        You are logged in. <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else                        
                        <a href="{{URL::to('/login') }}">Login</a>
                        <a href="{{URL::to('/register') }}">Signup</a>
                    @endauth
                </div>
           

            <div class="content">
                <div class=" m-b-md">
                    <img class="logo logo-light" alt="logo" src="https://variusworldtech.com/images/varius_world_tech-logo.png">
                    
                    <p>Varius World Technology are excited to launch our new ICO raising funds to developer our inductsty specific Distributed Ledger Technology protocol. </p>

                    <p>Browse our site and see for yourself why you should invest in VWT!</p>
                </div>


                <!-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> -->
            </div>
        </div>
    </body>
</html>
