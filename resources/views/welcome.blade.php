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
                padding:20px;
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

            .links > a {
                font-size: 32px;
            }
            .center {
                text-align: center;
                margin:auto;
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <img class="logo logo-light" alt="logo" src="https://variusworldtech.com/images/varius_world_tech-logo.png">
        </div>
        
        <br/> <br/> <br/> <br/> <br/>
        <div class="center" style="width:80%"> 
            <div class="content flex-center" style="vertical-align:center;height:100px">
                    <img src="https://variusworldtech.com/images/poker_chip-token-NEW.png"  style="float:left;width:150px">
                
                    <div class="links">
                                             
                                <a href="{{URL::to('/login') }}">Login</a>
                                <a href="{{URL::to('/register') }}">Signup</a>
                           
                        </div> 
                
            </div>
        </div>
    </body>
</html>
