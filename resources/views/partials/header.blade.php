        <header id="header">
            <div class="logo">
                <a href="/dashboard" class="hidden-xs">
                <img src="{{ asset('img/vox_wallet-logo.png') }}" style="max-width: 200px;">
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>
            <ul class="top-menu">
                {{-- <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li> --}}
                {{-- <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-notifications"></i></a>
                </li> --}}
                <li>
                    <div class="balance">{{ (Auth::user()->transactions->where('CreditOrDebit', 'Credit')->sum('amount')) - (Auth::user()->transactions->where('CreditOrDebit', 'Debit')->sum('amount')) }} <span style="font-size:16px">VoX &nbsp;</div>
                </li>
                <li class="top-menu__profile dropdown">
                    <a data-toggle="dropdown" href="" id="profile_pic">
                           
                        <img src="{{ Gravatar::fallback('https://missingtricks.net/wp-content/uploads/2018/01/Attitude-DP-1-1-300x300.jpg')->get(Auth::user()->email) }}" alt="{{ Auth::user()->name }}">
                       &nbsp; {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu pull-right dropdown-menu--icon">
                        <li>

                        <a href="{{URL::to('/profile') }}"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <!-- <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a> -->
                        </li>
                        <li>
                            <!-- <a href=""><i class="zmdi zmdi-settings"></i> Settings</a> -->
                        </li>
                        <li>
                            <a href="{{ URL::to('/logout') }}" id="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for people, files & reports">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form> -->
        </header>




