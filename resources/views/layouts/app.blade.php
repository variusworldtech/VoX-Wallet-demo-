<!DOCTYPE html>
<html lang="en">

<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VoX Wallet</title>

        <script>
            var Laracasts = {
                csrfToken: "{{ csrf_token() }}"
            };
        </script>

        <!-- <script src="https://js.stripe.com/v3/"></script> -->
        <!-- <script>
            var stripe = Stripe('pk_test_ov1Rp6ksiecTl3Q8xe6aqNdJ');
            var elements = stripe.elements();
        </script> -->

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

        <!-- Full Calendar -->
        <link href="{{ asset('vendors/bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">

        <!-- Site CSS -->
        <link href="{{ asset('css/app-1.min.css') }}" rel="stylesheet">

        <!-- Page loader -->
        <script src="{{ asset('js/page-loader.min.js') }}"></script>
        <script src="{{ asset('../../../google_analytics_auto.js') }}"></script>
        <style type="text/css">
            #header{
                background: #03285d;
            }
            body{
                background: #03285d;
            }
            body:before{
                background: #03285d;
            }
            #navigation{
                background: #03285d;
            }
            #main{
                background: #f5f5f5;
            }
            .top-search__input{
                background: #fff;
            }.top-menu>li>a{
                font-size: 10pt;
            }
            .card{
                margin-left: 20px;
                background: #5AA4D9;
                color: #444;
                padding-bottom: 40px;
            }
            .card__header h2 {
                color: #fff;
            }
            .card__header h2 small{
                color: #fff;
            }
            .widget-analytic__info>h2{
                color: #fff;
            }
            section#content {
                padding:10px;
                background-color: #f5f5f5
            }
            .well {
                background-color: #fff
            }
            .table>thead>tr>th {
                vertical-align: bottom;
                border-bottom: 2px solid #ddd;
            }
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
                padding: 15px;
                line-height: 1.42857143;
                vertical-align: top;
                border-top: 1px solid #eee;
            }
            .form-control {
                width: 100%;
                height: 35px;
                background-color: transparent;
                border: 1px solid #ddd; 
                color: #222
            }

            .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
                color: #555;
            }
            .balance
            {
                color: #eee;
                font-size: 24px;
            }
            /* for custom icons in the nav to render in right place*/
            .navigation__menu ul>li>a>img {
                position: absolute;
                left: 25px;
                font-size: 22px;
                top: 2px;
                width: 25px;
                text-align: center;
                padding: 13px 0;
            }
            .logo {
                margin-top: 5px;
                margin-left: -25px
            }
      #header {
          user-select: none;
          padding: 10px 45px;
          margin-bottom: 0px;

      }
    /*  .fixedbutton {
    position: fixed;
    bottom: 560px;
    right: 1000px; 
    }*/

    #fixedbutton {
    position: fixed;
    bottom: 0px;
    right: 0px; 
}
}
        </style>
    </head>
    <body>
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>
        <!-- Header -->

        @include('partials.header')

        <section id="main">
            @include('partials.navigation')
            {{-- <header class="content__header" style="padding-top: 60px;"> --}}
            @yield('content')
            <a href="/stake" role="button" id="fixedbutton">Place a bet</a>
        </section>
    </body>


        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__container">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Malihu ScrollBar -->
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- Moment -->
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>

        <!-- FullCalendar -->
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

        <!-- Simple Weather -->
        <script src="vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>

        <!-- Salvattore -->
        <script src="vendors/bower_components/salvattore/dist/salvattore.min.js"></script>

        <!-- Flot Charts -->
        <script src="vendors/bower_components/flot/jquery.flot.js"></script>
        <script src="vendors/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="vendors/bower_components/flot.curvedlines/curvedLines.js"></script>

        <!-- Sparkline Charts -->
        <script src="vendors/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- EasyPie Charts -->
        <script src="vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="demo/js/flot-charts/curved-line.js"></script>
        <script src="demo/js/flot-charts/line.js"></script>
        <script src="demo/js/easy-pie-charts.js"></script>
        <script src="demo/js/misc.js"></script>
        <script src="demo/js/sparkline-charts.js"></script>
        <script src="demo/js/calendar.js"></script>

        <!-- Site Functions & Actions -->
        <script src="js/app.min.js"></script>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
