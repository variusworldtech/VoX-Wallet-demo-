        @extends('layouts.app')


        <!-- Header -->
        @include('partials.header')
        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="widgets.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="widgets.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="widgets.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
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

            <section id="content">
                <header class="content__header" style="padding-top: 15px;">
                    <h1>Deposit methods</h1>

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
                </header>

                <div id="content__grid" data-columns>

                    <!-- Picture List -->
                    <div class="card widget-pictures">
                        <div class="card__header">
                            <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

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

                        <div class="widget-pictures__body">
                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/4.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/5.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/6.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/7.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/8.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/9.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card widget-pictures">
                        <div class="card__header">
                            <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

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

                        <div class="widget-pictures__body">
                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/4.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/5.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/6.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/7.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/8.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/9.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card widget-pictures">
                        <div class="card__header">
                            <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

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

                        <div class="widget-pictures__body">
                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/4.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/5.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/6.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/7.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/8.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/9.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="card widget-pictures">
                        <div class="card__header">
                            <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

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

                        <div class="widget-pictures__body">
                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/4.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/5.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/6.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/7.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/8.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/9.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/1.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/2.png" alt="">
                            </a>

                            <a href="" class="col-xs-3">
                                <img src="demo/img/headers/square/3.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        