@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="card">
            <div class="card__body">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Apply for vox card now!</h2>
                        <br/>
                        <img src="{{ asset('img/black_card.png') }}"/>
                    </div>
                    <div class="col-sm-4">
                        <form action="/cardapplied" method="POST" id="cardapplied">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Full name*</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="province">Province</label>
                                        <input type="text" class="form-control" id="province" name="province">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="postalcode">Postal Code</label>
                                        <input type="text" class="form-control" id="postalcode" name="postalcode">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-success">Apply</button>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </section>
@endsection