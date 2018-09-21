            <?php $uri = $_SERVER['REQUEST_URI'];?>
            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        <li <?php if ($uri == "/dashboard") {echo(' class="navigation__active"');} ?>>
                            <a href="/dashboard"><i class="zmdi zmdi-home"></i>Dashboard</a>
                        </li>
                        <li <?php if (strpos($uri, "/deposit") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/deposit"><i class="zmdi zmdi-format-underlined"></i> Deposit</a>
                        </li>
                        <li <?php if (strpos($uri, "/withdraw") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/withdraw"><i class="zmdi zmdi-widgets"></i> Withdraw</a>
                        </li>
                        <li <?php if ($uri == "/send") {echo(' class="navigation__active"');} ?>>
                            <a href="/send"><i class="zmdi zmdi-widgets"></i> Send</a>
                        </li>
                        <li  <?php if ($uri == "/card") {echo(' class="navigation__active"');} ?>>
                            <a href="/card"><i class="zmdi zmdi-widgets"></i> VoX Card</a>
                        </li>
                        <li  <?php if ($uri == "/transactions") {echo(' class="navigation__active"');} ?>>
                            <a href="/transactions"><i class="zmdi zmdi-widgets"></i>Transactions</a>
                        </li>
                        <!-- <li <?php if ($uri == "/settings") {echo(' class="navigation__active"');} ?>>
                            <a href="/settings"><i class="zmdi zmdi-widgets"></i> Settings</a>
                        </li> -->
                        <!-- <li>
                            <a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Help</a>
                        </li> -->

                        <!-- <li class="navigation__sub">
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
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                            <ul>
                                <li><a href="animations.html">Animations</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
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
                        </li> -->
                    </ul>
                </div>
            </aside>