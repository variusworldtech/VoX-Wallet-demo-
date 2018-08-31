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
                    <li><a class="user-alert__messages" href="components.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="components.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="components.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
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
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="preloaders.html">Preloaders</a></li>
                                <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                <li><a href="media.html">Media</a></li>
                                <li class="navigation__active"><a href="components.html">Components</a></li>
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
                    <h2>Components</h2>

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
                        <h2>Dropdown <small>Toggleable, contextual menu for displaying lists of links</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic Previews (After triggering)</p>

                        <div class="dropdown-basic-demo">
                            <ul class="dropdown-menu">
                                <li><a href="components.html#">Action</a></li>
                                <li><a href="components.html#">Another action</a></li>
                                <li><a href="components.html#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="components.html#">Separated link</a></li>
                            </ul>
                        </div>

                        <div class="dropdown-basic-demo">
                            <ul class="dropdown-menu dropdown-menu--icon">
                                <li><a href="components.html#"><i class="zmdi zmdi-home"></i> Action</a></li>
                                <li><a href="components.html#"><i class="zmdi zmdi-account"></i> Another action</a></li>
                                <li><a href="components.html#"><i class="zmdi zmdi-email"></i> Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="components.html#"><i class="zmdi zmdi-pin"></i> Separated link</a></li>
                            </ul>
                        </div>

                        <p>Dropdown Alignments</p>

                        <div class="clearfix dropdown-btn-demo">
                            <div class="dropdown">
                                <button type="button" class="btn btn-default" data-toggle="dropdown">Dropdown Left (default)</button>

                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <button type="button" class="btn btn-default" data-toggle="dropdown">Dropdown Right</button>

                                <ul class="dropdown-menu pull-right">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <br/>

                        <p>Dropups - Trigger dropdown menus above elements</p>

                        <div class="dropdown-btn-demo">
                            <div class="dropdown dropup">
                                <a href="components.html#" class="btn btn-default" data-toggle="dropdown">This is a Dropup</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown dropup">
                                <a href="components.html#" class="btn btn-default" data-toggle="dropdown">This is another Dropup</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown dropup">
                                <a href="components.html#" class="btn btn-default" data-toggle="dropdown">This is right aligned Dropup</a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <br/>

                        <p>Button Dropdowns</p>

                        <div class="dropdown-btn-demo">
                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-default" data-toggle="dropdown">Default</a>
                                <ul class="dropdown-menu pull-left">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-primary" data-toggle="dropdown">Primary</a>
                                <ul class="dropdown-menu pull-left">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-info" data-toggle="dropdown">Info</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-success" data-toggle="dropdown">Success</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-warning" data-toggle="dropdown">Warning</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn-danger" data-toggle="dropdown">Danger</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="dropdown">
                                <a href="components.html#" class="btn btn--light" data-toggle="dropdown">Danger</a>
                                <ul class="dropdown-menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                        <br/>

                        <p>Split Button Dropdowns</p>

                        <div class="dropdown-btn-demo">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Default</button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Primary</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-info">Info</button>
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Success</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-warning">Warning</button>
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn-danger">Danger</button>
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <button type="button" class="btn btn--light">Danger</button>
                                <button type="button" class="btn btn--light dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Split button dropdowns</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="components.html#">Action</a></li>
                                    <li><a href="components.html#">Another action</a></li>
                                    <li><a href="components.html#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="components.html#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Modal <small>Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>A rendered modal with header, body, and set of actions in the footer.</p>

                        <div class="clearfix modal-preview-demo">
                            <div class="modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modal title</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Curabitur blandit mollis lacus. Nulla sit amet est. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Cras sagittis.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link">Save changes</button>
                                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <p>Modals have two optional sizes available via modifier classes.</p>

                        <div class="btn-demo">
                            <a data-toggle="modal" href="components.html#modal--default" class="btn btn-sm btn-default">Modal - Default</a>
                            <a data-toggle="modal" href="components.html#modal--small" class="btn btn-sm btn-default">Modal - Small</a>
                            <a data-toggle="modal" href="components.html#modal--large" class="btn btn-sm btn-default">Modal - Large</a>
                        </div>

                        <br/>

                        <!-- Modal Default -->
                        <div class="modal fade" id="modal--default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link">Save changes</button>
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Small -->
                        <div class="modal fade" id="modal--small" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link">Save changes</button>
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Large -->
                        <div class="modal fade" id="modal--large" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link">Save changes</button>
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p>Other Examples</p>

                        <div class="btn-demo">
                            <a data-toggle="modal" href="components.html#modal--no-animation" class="btn btn-default">Without Animation</a>
                            <a data-toggle="modal" href="components.html#modal--prevent-click" class="btn btn-default">Prevent Outside Click</a>
                        </div>

                        <div class="modal" id="modal--no-animation">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link">Save changes</button>
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal--prevent-click" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla. Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-link">Save changes</button>
                                        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Tabs <small>Add quick, dynamic tab functionality to transition through panes of local content, even via dropdown menus.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic example.</p>

                        <div class="tab">
                            <ul class="tab-nav">
                                <li class="active"><a href="components.html#tab-home" data-toggle="tab">Home</a></li>
                                <li><a href="components.html#tab-profile" data-toggle="tab">Profile</a></li>
                                <li><a href="components.html#tab-message" data-toggle="tab">Messages</a></li>
                                <li><a href="components.html#tab-setting" data-toggle="tab">Settings</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-home">
                                    <p>Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nulla sit amet est. Praesent ac massa at ligula laoreet iaculis.
        Vivamus aliquet elit ac nisl. Nulla porta dolor. Cras dapibus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                    <p>In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nam eget dui. In ac felis quis tortor malesuada pretium. Phasellus consectetuer vestibulum elit.
        Duis lobortis massa imperdiet quam. Pellentesque commodo eros a enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Phasellus a est. Pellentesque commodo eros a enim.
        Cras ultricies mi eu turpis hendrerit fringilla. Donec mollis hendrerit risus. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Praesent egestas neque eu enim. In hac habitasse platea dictumst.</p>
                                </div>
                                <div class="tab-pane" id="tab-profile">
                                    <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-message">
                                    <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-setting">
                                    <p>Praesent turpis. Phasellus magna. Fusce vulputate eleifend sapien. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.</p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>

                        <p>Justified tab links.</p>

                        <div class="tab">
                            <ul class="tab-nav tab-nav--justified">
                                <li class="active"><a href="components.html#tab-home-2" data-toggle="tab">Home</a></li>
                                <li><a href="components.html#tab-profile-2" data-toggle="tab">Profile</a></li>
                                <li><a href="components.html#tab-message-2" data-toggle="tab">Messages</a></li>
                                <li><a href="components.html#tab-setting-2" data-toggle="tab">Settings</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-home-2">
                                    <p>Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nulla sit amet est. Praesent ac massa at ligula laoreet iaculis.
                                        Vivamus aliquet elit ac nisl. Nulla porta dolor. Cras dapibus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                    <p>In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nam eget dui. In ac felis quis tortor malesuada pretium. Phasellus consectetuer vestibulum elit.
                                        Duis lobortis massa imperdiet quam. Pellentesque commodo eros a enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Phasellus a est. Pellentesque commodo eros a enim.
                                        Cras ultricies mi eu turpis hendrerit fringilla. Donec mollis hendrerit risus. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Praesent egestas neque eu enim. In hac habitasse platea dictumst.</p>
                                </div>
                                <div class="tab-pane" id="tab-profile-2">
                                    <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-message-2">
                                    <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-setting-2">
                                    <p>Praesent turpis. Phasellus magna. Fusce vulputate eleifend sapien. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.</p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>

                        <p>Tab link icons (and justified).</p>

                        <div class="tab">
                            <ul class="tab-nav tab-nav--justified tab-nav--icon">
                                <li class="active"><a href="components.html#tab-home-3" data-toggle="tab"><i class="zmdi zmdi-home"></i></a></li>
                                <li><a href="components.html#tab-profile-3" data-toggle="tab"><i class="zmdi zmdi-account"></i></a></li>
                                <li><a href="components.html#tab-message-3" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                                <li><a href="components.html#tab-setting-3" data-toggle="tab"><i class="zmdi zmdi-settings"></i></a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-home-3">
                                    <p>Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nulla sit amet est. Praesent ac massa at ligula laoreet iaculis.
                                        Vivamus aliquet elit ac nisl. Nulla porta dolor. Cras dapibus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                    <p>In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nam eget dui. In ac felis quis tortor malesuada pretium. Phasellus consectetuer vestibulum elit.
                                        Duis lobortis massa imperdiet quam. Pellentesque commodo eros a enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Phasellus a est. Pellentesque commodo eros a enim.
                                        Cras ultricies mi eu turpis hendrerit fringilla. Donec mollis hendrerit risus. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Praesent egestas neque eu enim. In hac habitasse platea dictumst.</p>
                                </div>
                                <div class="tab-pane" id="tab-profile-3">
                                    <p>Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-message-3">
                                    <p>Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.Morbi mattis ullamcorper velit. Etiam rhoncus. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi. Cras id dui. Curabitur turpis.
                                        Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Nulla sit amet est. Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Praesent ac sem eget est egestas volutpat.
                                        Cras varius. Morbi mollis tellus ac sapien. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Fusce vel dui.</p>
                                </div>
                                <div class="tab-pane" id="tab-setting-3">
                                    <p>Praesent turpis. Phasellus magna. Fusce vulputate eleifend sapien. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Wizard <small>This twitter bootstrap plugin builds a wizard out of a formatter tabbable structure. It allows to build a wizard functionality using buttons to go through the different wizard steps and using events allows to hook into each step individually.</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="tab-wizard">
                            <ul class="tab-nav tab-nav--centered tab-wizard__nav">
                                <li class="active"><a href="components.html#tab-wizard-1" data-toggle="tab">First</a></li>
                                <li><a href="components.html#tab-wizard-2" data-toggle="tab">Second</a></li>
                                <li><a href="components.html#tab-wizard-3" data-toggle="tab">Third</a></li>
                                <li><a href="components.html#tab-wizard-4" data-toggle="tab">Forth</a></li>
                                <li><a href="components.html#tab-wizard-5" data-toggle="tab">Fifth</a></li>
                                <li><a href="components.html#tab-wizard-6" data-toggle="tab">Sixth</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="tab-wizard-1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tincidunt ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                                    <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                                    <p>Aliquam tempus rutrum neque, a blandit dui. Proin quis elit non est scelerisque pharetra nec id libero. Quisque id tincidunt elit. Maecenas non mauris malesuada, interdum justo et, ullamcorper magna. Nulla libero risus, vestibulum pharetra eleifend in, aliquam ac odio. Sed ligula orci, rhoncus sit amet ipsum vel, vehicula interdum ligula. </p>
                                </div>
                                <div class="tab-pane fade" id="tab-wizard-2">
                                    <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                                </div>
                                <div class="tab-pane fade" id="tab-wizard-3">
                                    <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                                    <p>Aliquam tempus rutrum neque, a blandit dui. Proin quis elit non est scelerisque pharetra nec id libero. Quisque id tincidunt elit. Maecenas non mauris malesuada, interdum justo et, ullamcorper magna. Nulla libero risus, vestibulum pharetra eleifend in, aliquam ac odio. Sed ligula orci, rhoncus sit amet ipsum vel, vehicula interdum ligula. </p>
                                </div>
                                <div class="tab-pane fade" id="tab-wizard-4">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tincidunt ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                                </div>
                                <div class="tab-pane fade" id="tab-wizard-5">
                                    <p>Cras mattis vulputate lacus sed aliquet. Pellentesque ultricies lectus ut augue tincidunt volutpat. Quisque lorem lectus, vulputate et feugiat ac, tincidunt eu neque. Suspendisse et dignissim ex. Praesent finibus vestibulum faucibus. Vestibulum scelerisque aliquam eros, id tincidunt lacus interdum eu. Praesent molestie leo sed varius tempus. Etiam quis turpis eget diam aliquet congue ut non risus. In sed sapien placerat, fermentum odio id, sagittis magna. Donec sollicitudin ipsum eget pretium tincidunt. Mauris venenatis metus a turpis eleifend, vitae tincidunt nunc tristique. Nulla facilisi. In hac habitasse platea dictumst. Curabitur auctor nibh eget mauris iaculis, id tempor ex egestas. Proin nisl diam, malesuada quis ipsum vitae, tincidunt efficitur neque. Nam suscipit magna ac nisl ornare lobortis.</p>
                                </div>
                                <div class="tab-pane fade" id="tab-wizard-6">
                                    <p>Nunc gravida hendrerit turpis a iaculis. Aenean tempus bibendum augue at tempor. Vestibulum nec ligula elementum nisi viverra mattis ac in nibh. Cras eu elementum massa. Integer cursus quam maximus, ornare ex at, bibendum dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus quis eleifend turpis, eget luctus felis.</p>
                                </div>

                                <ul class="pagination pagination--alt">
                                    <li class="tab-wizard__first tab-wizard__previous"><span><i class="zmdi zmdi-more-horiz"></i></span></li>
                                    <li class="tab-wizard__previous"><span><i class="zmdi zmdi-long-arrow-left"></i></span></li>
                                    <li class="tab-wizard__next"><span><i class="zmdi zmdi-long-arrow-right"></i></span></li>
                                    <li class="tab-wizard__last tab-wizard__next"><span><i class="zmdi zmdi-more-horiz"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Collapse <small>Flexible plugin that utilizes a handful of classes for easy toggle behavior.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Click the buttons below to show and hide another element via class changes.</p>

                        <div class="btn-demo">
                            <a class="btn btn-default" data-toggle="collapse" href="components.html#collape-demo">
                                Link with href
                            </a>
                            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collape-demo">
                                Button with data-target
                            </button>
                        </div>

                        <div class="collapse" id="collape-demo">
                            <p>Curabitur nisi velit, placerat id diam ac, maximus aliquet ex. Integer in laoreet nisl. Maecenas auctor porta ligula, non interdum dolor hendrerit non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tortor tellus, commodo suscipit cursus vitae, auctor eu massa. Aliquam nibh dolor, lobortis in molestie eget, tristique ac nunc. Aliquam fringilla aliquam est eu congue.</p>
                        </div>

                        <br/>
                        <br/>

                        <p class="m-b-5">Accordion</p>
                        <small>Extend the default collapse behavior to create an accordion with the panel component.</small>

                        <br/>
                        <br/>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-1">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-1" class="collapse in">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-2">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-2" class="collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-3">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-3" class="collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Tooltips <small>Tooltips are an updated version, which don't rely on images, use CSS3 for animations, and data-attributes for local title storage.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Hover over the links below to see tooltips.</p>

                        <p>Tight pants next level keffiyeh <a href="components.html#" data-toggle="tooltip" title="" data-original-title="Default tooltip">you probably</a> haven't heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney's fixie sustainable quinoa 8-bit american apparel <a href="components.html#" data-toggle="tooltip" title="Another tooltip">have a</a> terry richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan <a href="components.html#" data-toggle="tooltip" title="Another one here too">whatever keytar</a>, scenester farm-to-table banksy Austin <a href="components.html#" data-toggle="tooltip" title="The last tip!">twitter handle</a> freegan cred raw denim single-origin coffee viral.</p>

                        <p class="m-b-5">Static tooltip</p>
                        <small>Four options are available: top, right, bottom, and left aligned.</small>

                        <br/>
                        <br/>

                        <div class="btn-demo">
                            <button type="button" class="btn btn--light" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
                            <button type="button" class="btn btn--light" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
                            <button type="button" class="btn btn--light" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
                            <button type="button" class="btn btn--light" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Popovers <small>Add small overlays of content, like those on the iPad, to any element for housing secondary information.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Four options are available: top, right, bottom, and left aligned.</p>

                        <br/>

                        <div class="popover-demo">
                            <div class="popover top">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Popover top</h3>
                                <div class="popover-content">
                                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                </div>
                            </div>

                            <div class="popover right">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Popover right</h3>
                                <div class="popover-content">
                                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                </div>
                            </div>

                            <div class="popover bottom">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Popover bottom</h3>

                                <div class="popover-content">
                                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                </div>
                            </div>

                            <div class="popover left">
                                <div class="arrow"></div>
                                <h3 class="popover-title">Popover left</h3>
                                <div class="popover-content">
                                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>

                        <br/>

                        <p>Popover on Click</p>
                        <div class="btn-demo">
                            <button class="btn btn--light" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Top
                            </button>

                            <button class="btn btn--light" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Right
                            </button>

                            <button class="btn btn--light" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Bottom
                            </button>

                            <button class="btn btn--light" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Left
                            </button>
                        </div>

                        <br/>
                        <br/>

                        <p>Popover on Hover</p>
                        <div class="btn-demo">
                            <button class="btn btn--light" data-trigger="hover" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Top
                            </button>

                            <button class="btn btn--light" data-trigger="hover" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Right
                            </button>

                            <button class="btn btn--light" data-trigger="hover" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Bottom
                            </button>

                            <button class="btn btn--light" data-trigger="hover" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." title="" data-original-title="Popover Title">
                                Left
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Progress Bar <small>Provide up-to-date feedback on the progress of a workflow or action with simple yet flexible progress bars.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic Examples</p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                              <span class="sr-only">60% Complete</span>
                            </div>
                        </div>

                        <br/>

                        <p>Contextual alternatives</p>
                        <div class="progress m-b-10">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                        </div>
                        <div class="progress m-b-10">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                        </div>

                        <br/>

                        <p>Striped Progress bars</p>
                        <div class="progress progress-striped m-b-10">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                        </div>
                        <div class="progress progress-striped m-b-10">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"></div>
                        </div>
                        <div class="progress progress-striped m-b-10">
                            <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                        </div>
                        <div class="progress progress-striped m-b-10">
                            <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                        </div>

                        <br/>

                        <p>Stacked Progress bar</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 35%">
                                <span class="sr-only">35% Complete (success)</span>
                            </div>
                            <div class="progress-bar progress-bar-warning" style="width: 20%">
                                <span class="sr-only">20% Complete (warning)</span>
                            </div>
                            <div class="progress-bar progress-bar-danger" style="width: 10%">
                                <span class="sr-only">10% Complete (danger)</span>
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

        <!-- Bootstrap Wizard -->
        <script src="vendors/bower_components/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

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