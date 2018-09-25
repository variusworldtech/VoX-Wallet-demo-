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
                        <li <?php if (strpos($uri, "/dashboard") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/dashboard"><img style="width:25px" src="{{ asset('img/icons/dashboard_icon.png') }}"/> Dashboard</a>
                        </li>
                        <li <?php if (strpos($uri, "/deposit") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/deposit"><img style="width:20px" src="{{ asset('img/icons/deposit_icon.png') }}"/> Deposit</a>
                        </li>
                        <li <?php if (strpos($uri, "/withdraw") === 0) {echo(' class="navigation__active"');} ?>>
                            <a href="/withdraw"><img style="width:20px" src="{{ asset('img/icons/withdraw_icon.png') }}"/> Withdraw</a>
                        </li>
                        <li <?php if ($uri == "/send") {echo(' class="navigation__active"');} ?>>
                            <a href="/send"><img style="width:20px" src="{{ asset('img/icons/transfer_icon.png') }}"/> Send</a>
                        </li>
                        <li <?php if ($uri == "/card") {echo(' class="navigation__active"');} ?>>
                            <a href="/card"><img style="width:20px" src="{{ asset('img/icons/vox_card-icon.png') }}"/> VoX Card</a>
                        </li>
                        <li  <?php if ($uri == "/transactions") {echo(' class="navigation__active"');} ?>>
                            <a href="/transactions"><img style="width:20px" src="{{ asset('img/icons/transactions_icon.png') }}"/> Transactions</a>
                        </li>

                    </ul>
                </div>
            </aside>
