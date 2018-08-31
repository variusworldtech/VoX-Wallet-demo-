<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

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
                background: #fff;
            }
            .top-search__input{
                background: #fff;
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
			#header {
			    user-select: none;
			    padding: 10px 45px;
			    margin-bottom: 0px;
			}
        </style>
    </head>

    <body>
      <!-- Header -->
  
        @include('partials.header')
        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="index.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="index.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="index.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="notifications__messages">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">David Villa Jacobs</div>
                                    <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Candice Barnes</div>
                                    <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Jeannette Lawson</div>
                                    <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Darla Mckinney</div>
                                    <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>

                    <div class="tab-pane" id="notifications__updates">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">David Villa Jacobs</div>
                                    <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading">Candice Barnes</div>
                                <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading">Jeannette Lawson</div>
                                <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Darla Mckinney</div>
                                    <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane" id="notifications__tasks">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>

            @include('partials.navigation')

            <section id="content" style="padding-top: 20px;">
                <div class="card">
                    <div class="card__header">
                        <h2>Sales Statistics <small>Vestibulum purus quam scelerisque, mollis nonummy metus</small></h2>

                        <div class="actions">
                            <a href=""><i class="zmdi zmdi-check-all"></i></a>
                            <a href=""><i class="zmdi zmdi-trending-up"></i></a>
                            <div class="dropdown">
                                <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="">Change Date Range</a></li>
                                    <li><a href="">Change Graph Type</a></li>
                                    <li><a href="">Other Settings</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flot-chart-edge">
                        <center>
                            <h2>$458,778</h2>
                        </center>
                        <!--<div id="chart-curved-line" class="flot-chart"></div>-->
                    </div>
                </div>
                <!--
                <div id="content__grid" data-columns>
                    <div class="card widget-analytic">
                        <div class="card__header">
                            <h2>Website Impressions <small>Consectetur Ultricies Porta Fringilla</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="widget-analytic__info">
                                <i class="zmdi zmdi-caret-up-circle"></i>
                                <h2>987,453</h2>
                            </div>
                            <div class="widget-analytic__chart">
                                <div class="chart-sparkline-line">9,5,6,3,9,7,5,4,6,5,6,4,9</div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-analytic">
                        <div class="card__header">
                            <h2>Website Traffics <small>Nullam Adipiscing Pellentesque</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="widget-analytic__info">
                                <i class="zmdi zmdi-caret-up-circle"></i>
                                <h2>356,785K</h2>
                            </div>
                            <div class="widget-analytic__chart">
                                <div class="chart-sparkline-line">2,4,6,5,6,4,5,3,7,3,6,5,9,6</div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-analytic">
                        <div class="card__header">
                            <h2>Total Sales <small>Purus Malesuada Consectetur</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card__body">
                            <div class="widget-analytic__info">
                                <i class="zmdi zmdi-caret-down-circle"></i>
                                <h2>$458,778</h2>
                            </div>
                            <div class="widget-analytic__chart">
                                <div class="chart-sparkline-line">9,4,6,5,6,4,5,7,9,3,6,5,9</div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-pie-grid">
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="92" data-pie-size="80">
                                <span class="chart-pie__value">92</span>
                            </div>
                            <div class="widget-pie-grid__title">Email<br> Scheduled</div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="11" data-pie-size="80">
                                <span class="chart-pie__value">11</span>
                            </div>
                            <div class="widget-pie-grid__title">Email<br> Bounced</div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="52" data-pie-size="80">
                                <span class="chart-pie__value">52</span>
                            </div>
                            <div class="widget-pie-grid__title">Email<br> Opened</div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="44" data-pie-size="80">
                                <span class="chart-pie__value">44</span>
                            </div>
                            <div class="widget-pie-grid__title">Storage<br>Remaining</div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="78" data-pie-size="80">
                                <span class="chart-pie__value">78</span>
                            </div>
                            <div class="widget-pie-grid__title">Web Page<br> Views</div>
                        </div>
                        <div class="col-xs-4 col-sm-6 col-md-4 widget-pie-grid__item">
                            <div class="chart-pie" data-percent="32" data-pie-size="80">
                                <span class="chart-pie__value">32</span>
                            </div>
                            <div class="widget-pie-grid__title">Server<br> Processing</div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card__header">
                            <h2>Recent Posts <small>Venenatis portauam Inceptos ameteiam</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">David Villa Jacobs</div>
                                    <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Candice Barnes</div>
                                    <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Jeannette Lawson</div>
                                    <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Darla Mckinney</div>
                                    <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>

                            <a href="" class="view-more">
                                <i class="zmdi zmdi-long-arrow-right"></i> View all
                            </a>
                        </div>
                    </div>

                    <div class="card widget-past-days">
                        <div class="card__header">
                            <h2>For the past 30 days <small>Pellentesque ornare sem lacinia quam</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flot-chart-edge">
                            <div class="flot-chart flot-chart--sm" id="chart-past-days"></div>
                        </div>

                        <div class="list-group list-group--striped">
                            <div class="list-group-item">
                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="chart-sparkline-bar">6,9,5,6,3,7,5,4,6,5,6,4,2,5,8,2,6,9</div>
                                </div>

                                <div class="widget-past-days__info">
                                    <small>Page Views</small>
                                    <h3>47,896,536</h3>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="chart-sparkline-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>

                                <div class="widget-past-days__info">
                                    <small>Site Visitors</small>
                                    <h3>24,456,799</h3>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="chart-sparkline-bar">5,7,2,5,2,8,6,7,6,5,3,1,9,3,5,8,2,4</div>
                                </div>

                                <div class="widget-past-days__info">
                                    <small>Total Clicks</small>
                                    <h3>13,965</h3>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="widget-past-days__chart hidden-sm">
                                    <div class="chart-sparkline-bar">3,9,1,3,5,6,7,6,8,2,5,2,7,5,6,7,6,8</div>
                                </div>

                                <div class="widget-past-days__info">
                                    <small>Total Returns</small>
                                    <h3>198</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card widget-recent-signups">
                        <div class="card__header card__header--highlight">
                            <h2>Most Recent Signups <small>Magna Cursus Malesuada</small></h2>
                            <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="chart-sparkline-line m-t-20">9,4,6,5,6,4,5,7,9,3,6,5,9</div>
                        </div>

                        <div class="card__body widget-recent-signups__list">
                            <a href=""><div class="avatar-char">B</div></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt=""></a>
                            <a href=""><div class="avatar-char">L</div></a>
                            <a href=""><div class="avatar-char">A</div></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt=""></a>
                            <a href=""><div class="avatar-char">Z</div></a>
                            <a href=""><div class="avatar-char">I</div></a>
                            <a href=""><div class="avatar-char">S</div></a>
                            <a href=""><div class="avatar-char">C</div></a>
                            <a href=""><div class="avatar-char">W</div></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt=""></a>
                            <a href=""><div class="avatar-char">A</div></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/9.jpg" alt=""></a>
                            <a href=""><div class="avatar-char">N</div></a>
                            <a href=""><div class="avatar-char">X</div></a>
                            <a href=""><div class="avatar-char">V</div></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/7.jpg" alt=""></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/6.jpg" alt=""></a>
                            <a href=""><img class="avatar-img" src="demo/img/profile-pics/8.jpg" alt=""></a>
                            <a href=""><div class="avatar-char">F</div></a>
                            <a href=""><div class="avatar-char">E</div></a>
                            <a href=""><div class="avatar-char">A</div></a>
                            <a href=""><div class="avatar-char">A</div></a>
                            <a href=""><div class="avatar-char">M</div></a>
                            <a href=""><div class="avatar-char">O</div></a>
                            <a href=""><div class="avatar-char">I</div></a>
                        </div>
                    </div>

                    <div class="card widget-todo-lists">
                        <div class="card__header card__header--highlight">
                            <h2>Todo lists <small>Mattis Malesuada Risus</small></h2>

                            <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
                        </div>

                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="checkbox checkbox--char">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="checkbox__helper"><i>F</i></span>
                                        <span class="widget-todo-lists__info">
                                            Fivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                            <small>Today at 8.30 AM</small>
                                        </span>

                                        <span class="list-group__attrs">
                                            <span>#Messages</span>
                                            <span>!!!</span>
                                        </span>
                                    </label>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Mark as done</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="checkbox checkbox--char">
                                    <label>
                                        <input type="checkbox" checked>
                                        <span class="checkbox__helper"><i>N</i></span>
                                        <span class="widget-todo-lists__info">
                                            Nullam id dolor id nibh ultricies vehicula ut id elit
                                            <small>Today at 12.30 PM</small>
                                        </span>

                                        <span class="list-group__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </span>
                                    </label>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Mark as done</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="checkbox checkbox--char">
                                    <label>
                                        <input type="checkbox">
                                        <span class="checkbox__helper"><i>C</i></span>
                                        <span class="widget-todo-lists__info">
                                            Cras mattis consectetur purus sit amet fermentum
                                            <small>Tomorrow at 10.30 AM</small>
                                        </span>

                                        <span class="list-group__attrs">
                                            <span>#Clients</span>
                                            <span>!!</span>
                                        </span>
                                    </label>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Mark as done</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="checkbox checkbox--char">
                                    <label>
                                        <input type="checkbox">
                                        <span class="checkbox__helper"><i>I</i></span>
                                        <span class="widget-todo-lists__info">
                                            Integer posuere erat a ante venenatis dapibus posuere velit aliquet
                                            <small>05/08/2016 at 08.00 AM</small>
                                        </span>

                                        <span class="list-group__attrs">
                                            <span>#Server</span>
                                            <span>!</span>
                                        </span>
                                    </label>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Mark as done</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="checkbox checkbox--char">
                                    <label>
                                        <input type="checkbox">
                                        <span class="checkbox__helper"><i>P</i></span>
                                        <span class="widget-todo-lists__info">
                                            Praesent commodo cursus magnavel scelerisque nisl consectetur
                                            <small>10/08/2016 at 04.00 AM</small>
                                        </span>

                                        <span class="list-group__attrs">
                                            <span>#Server</span>
                                            <span>!</span>
                                        </span>
                                    </label>
                                </div>

                                <div class="actions list-group__actions">
                                    <div class="dropdown">
                                        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="">Mark as done</a></li>
                                            <li><a href="">Edit</a></li>
                                            <li><a href="" data-demo-action="delete-listing">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="view-more"><i class="zmdi zmdi-long-arrow-right"></i> View all</a>
                    </div>

                    <div class="card widget-calendar">
                        <div class="card__header card__header--highlight">
                            <div class="widget-calendar__year"></div>
                            <div class="widget-calendar__day"></div>

                            <button class="btn btn--float"><i class="zmdi zmdi-plus"></i></button>
                        </div>

                        <div class="card__body--sm">
                            <div id="widget-calendar__main"></div>
                        </div>
                    </div>



                </div>
                -->
            </section>

        </section>
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
    </body>
</html>
