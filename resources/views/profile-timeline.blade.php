        @extends('layouts.app')
        @section('content')                
            <section id="content">
                <div class="content--boxed-sm">
                    <header class="content__header">
                        <h2>Malinda Hollaway <small>Web/UI Developer, Edinburgh, Scotland</small></h2>
                    </header>

                    <div class="card profile">
                        <div class="profile__img">
                            <img src="demo/img/contacts/2.jpg" alt="">

                            <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                        </div>

                        <div class="profile__info">
                            <p>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magnae tiam porta sem malesuada magna mollis euismod.</p>

                            <ul class="icon-list">
                                <li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>
                                <li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
                                <li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <div class="action-header action-header--card">
                            <ul class="action-header__menu">
                                <li><a href="profile-timeline.html">Timeline</a></li>
                                <li class="active"><a href="profile-about.html">About</a></li>
                                <li><a href="profile-photos.html">Photos</a></li>
                                <li class="action-header__settings"><a href=""><i class="zmdi zmdi-settings"></i></a></li>
                            </ul>
                        </div>

                        <div class="card__body">
                            <div class="card__sub">
                                <h4>About Mallinda Hollaway</h4>
                                <p>Pellentesque vitae quam quis tellus dignissim faucibus. Suspendisse mattis felis at faucibus lobortis. Sed sit amet tellus dolor. Fusce quis sollicitudin velit. Praesent gravida ullamcorper lectus et tincidunt. Phasellus lectus quam, porta pharetra feugiat in, auctor eget dolor.</p>
                                <p>Vestibulum tincidunt imperdiet egestas. In in nunc vitae elit tincidunt tristique id eu justo. Quisque gravida maximus orci, vulputate pharetra mauris commodo at. Mauris eget fermentum ipsum, quis faucibus neque. Fusce eleifend sapien sit amet convallis rhoncus. Proin commodo lacinia lectus, et tempus turpis.</p>
                            </div>

                            <div class="card__sub">
                                <h4>Contact Information</h4>

                                <ul class="icon-list">
                                    <li><i class="zmdi zmdi-phone"></i>308-360-8938</li>
                                    <li><i class="zmdi zmdi-email"></i>robertbosborne@inbound.plus</li>
                                    <li><i class="zmdi zmdi-facebook"></i>robertbosborne</li>
                                    <li><i class="zmdi zmdi-twitter"></i>@robertbosborne</li>
                                    <li><i class="zmdi zmdi-pin"></i>5470 Madison Street Severna Park, MD 21146</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endsection