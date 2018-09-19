        @extends('layouts.app')
        @section('content')
                <section id="content">
                    <header class="content__header"><h1>Send methods</h1>
                        <!-- <div class="actions">
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
                        </div> -->
                    </header>
                    <?php if ($message !== ""):?>
                        <div class="alert alert-{{ $type }}" role="alert">
                            {!!html_entity_decode($message)!!}
                        </div>
                    <?php endif;?>
                    <?php if ($message2 !== ""):?>
                        <div class="alert alert-{{ $type2 }}" role="alert">
                            {!!html_entity_decode($message2)!!}
                        </div>
                    <?php endif;?>
                    <?php if (!isset($_POST['amount'])):?>
                        <div id="content__grid" data-columns>
                            <div class="card">
                                <div class="card__header">
                                    <h2>Choose who you want to send VoX to</h2>
                                </div>
                                <form method="POST" action="{{ URL::to('/send') }}">
                                     @csrf
                                    <div class="card__body">
                                        <p><input type="text" name="email" placeholder="email"></p>
                                        <a type="submit" class="btn btn-default">Search</a>
                                    </div>                                   
                                </form>
                            </div>
                        </div>
                        <?php if (isset($_POST['email'])):?>
                            @foreach ($users as $user)
                                <div class="card" style="max-width: 300px;">
                                    <center>
                                        <div class="card__header">
                                            <h2>Would you like to send to: {{ $user->username }}</h2>
                                        </div>
                                        <div class="card__body">
                                          <div class="row">
                                            <div class="col-6">
                                              <img src="{{ $user->avatar }}" />
                                            </div>
                                            <div class="col-6">                                              
                                                <form action="{{ URL::to('/send') }}" method="POST">
                                                    @csrf
                                                    <br>
                                                    <input type="text" name="amount">
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <br>
                                                    <input type="submit" value="Send">                                                    
                                                </form>
                                            </div>
                                          </div>
                                        </div> 
                                    </center>
                                </div>
                            @endforeach
                        <?php else:?>

                        <?php endif;?>
                    <?php endif;?>
                </section>
        @endsection
        