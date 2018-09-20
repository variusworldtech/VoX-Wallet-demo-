        <header id="header">
            <div class="logo">
                <a href="/dashboard" class="hidden-xs">
                    <img src="https://www.variusworldtech.com/images/varius_world_tech-logo.png" style="max-width: 200px;">
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>
            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li>

                <!-- <li class="top-menu__apps dropdown hidden-xs hidden-sm">
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
                </li> -->
               <!--  <li class="dropdown hidden-xs">
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
                </li> -->

                <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-notifications"></i></a>
                </li>
                @guest
                    <a href="{{URL::to('/login') }}"><li>Login</li></a>
                    <a href="{{URL::to('/register') }}"><li>Signup</li>
                @else
                <div>
                    <h1>{{ (Auth::user()->transactions->where('CreditOrDebit', 'Credit')->sum('amount')) - (Auth::user()->transactions->where('CreditOrDebit', 'Debit')->sum('amount')) }} VoX</h1>
                </div>
                    <li class="top-menu__profile dropdown">
                        <a data-toggle="dropdown" href="">
                            <img src="{{ Gravatar::fallback('https://missingtricks.net/wp-content/uploads/2018/01/Attitude-DP-1-1-300x300.jpg')->get(Auth::user()->email) }}" alt="It's {{ Auth::user()->name }}">
                        </a>
                            <a data-toggle="dropdown" href="">
                            <img src="demo/img/profile-pics/1.jpg" alt="">
                        </a>
                            <a data-toggle="dropdown" href="" id="profile_pic">
                            <img src="demo/img/profile-pics/1.jpg" alt="profile_pic">
                        </a>
                        <ul class="dropdown-menu pull-right dropdown-menu--icon">
                            <li>

                            <a href="{{URL::to('/profile') }}"><i class="zmdi zmdi-account"></i> {{ Auth::user()->name }}</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                            </li>
                            <li>
                                <a href="{{ URL::to('/logout') }}" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>

            <!-- <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for people, files & reports">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form> -->
        </header>




