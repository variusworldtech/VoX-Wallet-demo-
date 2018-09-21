        @extends('layouts.app')
        @section('content')
            
                <section id="content">
                    <header class="content__header">
                     <h1>Deposit</h1>
                    </header>
                    @if(!isSet(Auth::user()->walletAddress))
                    <form action="/depositsaveaddress" method="POST" id="depositsaveaddress">
                        {{ csrf_field() }}
                        
                        Your wallet address: <input type="text" required pattern="^0x[a-fA-F0-9]{40}$" name="walletAddress" id="walletAddress">
                        <input type="submit" value="Associate Wallet">
                    </form>
                    @else
                    <p>Wallet address: {{ Auth::user()->walletAddress }} </p>
                        <div id="content__grid" data-columns>
                            
                            <!-- Picture List -->
                            <div class="card widget-pictures">
                                <div class="card__header">
                                    <h2>Manual Bank Transfer</h2><br/>
                                    
                                    <div class="well" style="padding:10px">
                                    <p>Sort code: 77 - 16 - 14</p>
                                    <p>Account #: 00042424</p>
                                    <p>Reference: VWTPLAY1</p>
                                    </div>
                                    <p>Please allow 2 hours for Faster payments to complete.</p>
                                </div>
                            </div>
                            <div class="card widget-pictures">
                                <div class="card__header">
                                    <h2>Credit and Debit card
                                        <small>
                                            FEES:<br>
                                            0 GBP<br>
                                            2 to 5 days
                                        </small>
                                    </h2>
                                </div>
                                    <br/>
                                    <a href="/depositByCard" class="btn btn-sm btn-default" role="button">Load VoX now</a>
                                    <!-- <div id="app">
                                        <checkout-form></checkout-form>
                                    </div> -->
                                    <script src="https://checkout.stripe.com/checkout.js"> 
                                    </script>
                                    <!-- <script src="/js/app.js"></script>  -->               


                                            <!-- data-key="pk_test_ov1Rp6ksiecTl3Q8xe6aqNdJ"
                                            data-amount="999"
                                            data-name="Shirl"
                                            data-description="Example charge"
                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                            data-locale="auto"
                                            data-currency="gbp"> -->
                                    <!-- <a href="" class="btn btn-sm btn-default" role="button">Button</a> -->

                                    <!-- <div class="actions">
                                        <div class="dropdown">
                                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="">Refresh</a></li>
                                                <li><a href="">Manage</a></li>
                                                <li><a href="">Settings</a></li>
                                            </ul>
                                        </div>
                                    </div> -->
                                </div>

                            
                            </div>
                            <!-- <div class="card widget-pictures">
                                <div class="card__header">
                                    <h2>Bitcoin <small>
                                            FEES:<br>
                                            0 GBP<br>
                                            2 to 5 days
                                        </small>
                                    </h2>
                                    <a href="" class="btn btn-sm btn-default" role="button">Button</a>

                                </div>
                            </div> -->
                            
                            
                            </div>
                        </div>
                    @endif
                </section>
        @endsection
        