            <?php $uri = $_SERVER['REQUEST_URI'];?>

            <style>
              /* @media (max-width: 1279px) { */
                #navigation {
                  /* width: 270px !important; */
                  position: absolute !important;
                  height: 100% !important;
                  top: 0 !important;
                }
              /* } */

              #main {
                  padding: 0 40px 30px 270px !important;
                  min-height: calc(100vh - 159px) !important;
              }
            </style>
            <aside id="navigation" class="toggled">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>

                        <li <?php if (strpos($uri, "/deposit") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/deposit"><i class="zmdi zmdi-upload"></i> Get VoX</a>
                        </li>
                        <li <?php if (strpos($uri, "/withdraw") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/withdraw"><i class="zmdi zmdi-arrow-back"></i> Withdraw</a>
                        </li>
                        <li <?php if ($uri == "/send") {echo(' class="navigation__active"');} ?>>
                            <a href="/send"><i class="zmdi zmdi-arrow-forward"></i> Send</a>
                        </li>
                        <li  <?php if ($uri == "/card") {echo(' class="navigation__active"');} ?>>
                            <a href="/card"><i class="zmdi zmdi-card"></i> VoX Card</a>
                        </li>
                        <li  <?php if ($uri == "/transactions") {echo(' class="navigation__active"');} ?>>
                            <a href="/transactions"><i class="zmdi zmdi-wrap-text"></i>Transactions</a>
                        </li>

                    </ul>
                </div>
            </aside>
