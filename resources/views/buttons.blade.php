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

        <!-- Demo only -->
        <link href="{{ asset('demo/css/demo.css') }}" rel="stylesheet">

        <!-- Site CSS -->
        <link href="{{ asset('css/app-1.min.css') }}" rel="stylesheet">

        <!-- Page loader -->
        <script src="{{ asset('js/page-loader.min.js') }}"></script>
    <script src="{{ asset('../../../google_analytics_auto.js') }}"></script></head>

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
        <header id="header">
            <div class="logo">
                <a href="index.html" class="hidden-xs">
                    Material
                    <small>admin extended dark</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>

            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li>

                <li class="top-menu__apps dropdown hidden-xs hidden-sm">
                    <a data-toggle="dropdown" href="">
                        <i class="zmdi zmdi-apps"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-calendar"></i>
                                <small>Calendar</small>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="zmdi zmdi-file-text"></i>
                                <small>Files</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-email"></i>
                                <small>Mail</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small>News</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-image"></i>
                                <small>Gallery</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href=""><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                        <li class="hidden-xs">
                            <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-mae-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-notifications"></i></a>
                </li>
                <li class="top-menu__profile dropdown">
                    <a data-toggle="dropdown" href="">
                        <img src="demo/img/profile-pics/1.jpg" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dropdown-menu--icon">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for people, files & reports">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form>
        </header>

        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="buttons.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="buttons.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="buttons.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
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

            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__toggles">
                    <a href="" class="active" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                        <i class="zmdi zmdi-email"></i>
                    </a>
                    <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__updates">
                        <i class="zmdi zmdi-notifications"></i>
                    </a>
                    <a href=""  data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__tasks">
                        <i class="zmdi zmdi-playlist-plus"></i>
                    </a>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        <li>
                            <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
                        </li>
                        <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="tables.html">Normal Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>
                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-examples.html">Form Examples</a></li>
                                <li><a href="form-validations.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                            <ul>
                                <li><a href="animations.html">Animations</a></li>
                                <li class="navigation__active"><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="preloaders.html">Preloaders</a></li>
                                <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                <li><a href="media.html">Media</a></li>
                                <li><a href="components.html">Components</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts</a>
                            <ul>
                                <li><a href="flot-charts.html">Flot Chart</a></li>
                                <li><a href="other-charts.html">Others</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                            <ul>
                                <li><a href="photos.html">Default</a></li>
                                <li><a href="photo-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                        <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                            <ul>
                                <li><a href="profile-timeline.html">Profile</a></li>
                                <li><a href="list-view.html">List View</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="wall.html">Wall</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login and Sign Up</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>
        
            <section id="content">
                <div class="content__header">
                    <h2>Buttons</h2>

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

                <div class="card">
                    <div class="card__header">
                        <h2>Basic Examples <small>Use any of the available button classes to quickly create a styled button.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Color Schemes</p>

                        <div class="btn-demo">
                            <button class="btn btn-default">Default</button>
                            <button class="btn btn-info">Info</button>
                            <button class="btn btn-primary">Primary</button>
                            <button class="btn btn-success">Success</button>
                            <button class="btn btn-warning">Warning</button>
                            <button class="btn btn-danger">Danger</button>
                            <button class="btn btn--light">MAE Style</button>
                            <button class="btn btn-link">Link</button>
                        </div>

                        <br/>
                        <br/>

                        <p>Button Sizes</p>
                        <small>Fancy larger or smaller buttons? Add the button sizing classes.</small>

                        <br/>
                        <br/>

                        <div class="btn-demo">
                            <button class="btn btn-default btn-lg">Large</button>
                            <button class="btn btn-default">Default</button>
                            <button class="btn btn-default btn-sm">Small</button>
                            <button class="btn btn-default btn-xs">Extra Small</button>

                            <br>
                            <br>

                            <button class="btn btn--light btn-lg">Large</button>
                            <button class="btn btn--light">Default</button>
                            <button class="btn btn--light btn-sm">Small</button>
                            <button class="btn btn--light btn-xs">Extra Small</button>
                        </div>

                        <br/>
                        <br/>

                        <p>Disable Stat</p>

                        <div class="btn-demo">

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Button Icons <small>You can refer the Icons page for the complete list of Material Design font icons</small></h2>
                    </div>
                    <div class="card__body">
                        <div class="btn-demo">
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-refresh"></i> Sync</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-check"></i> Check</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-close"></i> Check</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-menu"></i> Menu</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-apps"></i> Apps</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-check-all"></i> Done</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-trending-up"></i> Up</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-apps"></i> Get</button>
                            <button class="btn btn-default btn--icon-text"><i class="zmdi zmdi-phone"></i> Call</button>

                            <br/>
                            <br/>

                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-refresh"></i> Sync</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-check"></i> Check</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-close"></i> Check</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-menu"></i> Menu</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-apps"></i> Apps</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-check-all"></i> Done</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-trending-up"></i> Up</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-apps"></i> Get</button>
                            <button class="btn btn--light btn--icon-text"><i class="zmdi zmdi-phone"></i> Call</button>

                            <br/>
                            <br/>

                            <button class="btn btn-default btn-primary btn--icon-text"><i class="zmdi zmdi-home"></i> Home</button>
                            <button class="btn btn-default btn-info btn--icon-text"><i class="zmdi zmdi-search"></i> Search</button>
                            <button class="btn btn-default btn-success btn--icon-text"><i class="zmdi zmdi-more-vert"></i> More</button>
                            <button class="btn btn-default btn-warning btn--icon-text"><i class="zmdi zmdi-arrow-forward"></i> Forward</button>
                            <button class="btn btn-default btn-danger btn--icon-text"><i class="zmdi zmdi-arrow-back"></i> Back</button>

                            <br/>
                            <br/>
                            <br/>

                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-refresh"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-check"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-close"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-menu"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-check-all"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-trending-up"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn-default btn--icon"><i class="zmdi zmdi-phone"></i></button>

                            <br/>
                            <br/>

                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-refresh"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-check"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-close"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-menu"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-check-all"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-trending-up"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-apps"></i></button>
                            <button class="btn btn--light btn--icon"><i class="zmdi zmdi-phone"></i></button>

                            <br/>
                            <br/>

                            <button class="btn btn-primary btn--icon"><i class="zmdi zmdi-home"></i></button>
                            <button class="btn btn-info btn--icon"><i class="zmdi zmdi-search"></i></button>
                            <button class="btn btn-success btn--icon"><i class="zmdi zmdi-more-vert"></i></button>
                            <button class="btn btn-warning btn--icon"><i class="zmdi zmdi-arrow-forward"></i></button>
                            <button class="btn btn-danger btn--icon"><i class="zmdi zmdi-arrow-back"></i></button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Block Level Buttons <small>Create block level buttons - those that span the full width of a parent - by adding .btn-block.</small></h2>
                    </div>

                    <div class="card-padding card__body">
                        <button class="btn btn-default btn-block">Default</button>

                        <br/>

                        <button class="btn btn--light btn-block">Primary</button>

                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Button Groups <small>Group a series of buttons together on a single line with the button group</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic Example</p>
                        <div class="btn-group-demo">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Left</button>
                                <button type="button" class="btn btn-primary">Middle</button>
                                <button type="button" class="btn btn-primary">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Left</button>
                                <button type="button" class="btn btn-info">Middle</button>
                                <button type="button" class="btn btn-info">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Left</button>
                                <button type="button" class="btn btn-success">Middle</button>
                                <button type="button" class="btn btn-success">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Left</button>
                                <button type="button" class="btn btn-warning">Middle</button>
                                <button type="button" class="btn btn-warning">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-danger">Left</button>
                                <button type="button" class="btn btn-danger">Middle</button>
                                <button type="button" class="btn btn-danger">Right</button>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn--light">Left</button>
                                <button type="button" class="btn btn--light">Middle</button>
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <p class="m-b-5">Button Toolbars</p>
                        <small>Combine sets of '.btn-group.' into a '.btn-toolbar' for more complex components.</small>

                        <br/>
                        <br/>

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>
                                <button type="button" class="btn btn-default">3</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">4</button>
                                <button type="button" class="btn btn-default">5</button>
                                <button type="button" class="btn btn-default">6</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">7</button>
                                <button type="button" class="btn btn-default">8</button>
                                <button type="button" class="btn btn-default">9</button>
                            </div>
                        </div>

                        <br/>

                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <button type="button" class="btn btn--light">1</button>
                                <button type="button" class="btn btn--light">2</button>
                                <button type="button" class="btn btn--light">3</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn--light">4</button>
                                <button type="button" class="btn btn--light">5</button>
                                <button type="button" class="btn btn--light">6</button>
                            </div>
                            <div class="btn-group">
                                <button type="button" class="btn btn--light">7</button>
                                <button type="button" class="btn btn--light">8</button>
                                <button type="button" class="btn btn--light">9</button>
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <p class="m-b-5">Button Group Sizing</p>
                        <small>Instead of applying button sizing classes to every button in a group, just add '.btn-group-*' to each '.btn-group', including when nesting multiple groups.</small>

                        <br/>
                        <br/>

                        <div class="btn-group-demo">
                            <div class="btn-group btn-group-lg">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                            <div class="btn-group btn-group-lg">
                                <button type="button" class="btn btn--light">Left</button>
                                <button type="button" class="btn btn--light">Middle</button>
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>

                        <div class="btn-group-demo">
                            <div class="btn-group btn-group">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                            <div class="btn-group btn-group">
                                <button type="button" class="btn btn--light">Left</button>
                                <button type="button" class="btn btn--light">Middle</button>
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>

                        <div class="btn-group-demo">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn--light">Left</button>
                                <button type="button" class="btn btn--light">Middle</button>
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>

                        <div class="btn-group-demo">
                            <div class="btn-group btn-group-xs">
                                <button type="button" class="btn btn-default">Left</button>
                                <button type="button" class="btn btn-default">Middle</button>
                                <button type="button" class="btn btn-default">Right</button>
                            </div>

                            <div class="btn-group btn-group-xs">
                                <button type="button" class="btn btn--light">Left</button>
                                <button type="button" class="btn btn--light">Middle</button>
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <p class="m-b-5">Justified Button Groups</p>
                        <small>Make a group of buttons stretch at equal sizes to span the entire width of its parent. Also works with button dropdowns within the button group.</small>

                        <br/>
                        <br/>

                        <div class="btn-group btn-group-justified">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Left</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Middle</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default">Right</button>
                            </div>
                        </div>

                        <br/>

                        <div class="btn-group btn-group-justified">
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn--light">Left</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn--light">Middle</button>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn--light">Right</button>
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <p class="m-b-5">Nesting</p>
                        <small>Place a '.btn-group' within another '.btn-group' when you want dropdown menus mixed with a series of buttons.</small>

                        <br/>
                        <br/>

                        <div class="btn-group-demo">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">1</button>
                                <button type="button" class="btn btn-default">2</button>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons.html#">Dropdown link</a></li>
                                        <li><a href="buttons.html#">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn--light">1</button>
                                <button type="button" class="btn btn--light">2</button>

                                <div class="btn-group">
                                    <button type="button" class="btn btn--light dropdown-toggle" data-toggle="dropdown">Dropdown</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="buttons.html#">Dropdown link</a></li>
                                        <li><a href="buttons.html#">Dropdown link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <footer id="footer">
                Copyright &copy; 2015 Material Admin

                <ul class="footer__menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Reports</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </footer>
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

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="demo/js/misc.js"></script>

        <!-- Site Functions & Actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>