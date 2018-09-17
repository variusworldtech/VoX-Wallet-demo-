@extends('layouts.app')
@section('content')
    <section id="content">
    	<div class="card">
            <div class="card__body">
                <div class="row">
                    <div class="col-sm-4">
                        <p>Account</p>

                        <div class="form-group form-group--select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>GBP</option>
                                <option>Ether</option>
                                <option>VoX</option>
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <p>Date range</p>

                        <div class="form-group form-group--select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Custom</option>
                                <option>Last 7 days</option>
                                <option>Last 30 days</option>
                                <option>Last 6 months</option>
                                <option>Last year</option>
                            </select>
                        </div>
                    </div>
                        <div class="col-sm-4">
                        <p>Transaction type</p>

                        <div class="form-group form-group--select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                 	</div>
                </div>
            </div>
        </div>
    </section>
@endsection