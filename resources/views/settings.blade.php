@extends('layouts.app')
@section('content')
    <section id="content">
        <div class="card">
                    <div class="card__header">
                        <h2>Collapse <small>Flexible plugin that utilizes a handful of classes for easy toggle behavior.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Click the buttons below to show and hide another element via class changes.</p>

                        <div class="btn-demo">
                            <a class="btn btn-default" data-toggle="collapse" href="components.html#collape-demo">
                                Link with href
                            </a>
                            <button class="btn btn-default" type="button" data-toggle="collapse" data-target="#collape-demo">
                                Button with data-target
                            </button>
                        </div>

                        <div class="collapse" id="collape-demo">
                            <p>Curabitur nisi velit, placerat id diam ac, maximus aliquet ex. Integer in laoreet nisl. Maecenas auctor porta ligula, non interdum dolor hendrerit non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum tortor tellus, commodo suscipit cursus vitae, auctor eu massa. Aliquam nibh dolor, lobortis in molestie eget, tristique ac nunc. Aliquam fringilla aliquam est eu congue.</p>
                        </div>

                        <br/>
                        <br/>

                        <p class="m-b-5">Accordion</p>
                        <small>Extend the default collapse behavior to create an accordion with the panel component.</small>

                        <br/>
                        <br/>

                        <div class="panel-group" id="accordion">
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-1">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-1" class="collapse in">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-2">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-2" class="collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-collapse">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="components.html#collapse-3">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse-3" class="collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- <div class="card">
            

            <div class="card__body"> -->
                <!-- <div class="row"> -->
                    <!-- <div class="col-sm-6"> -->
                        <!-- <p>Personal details</p>

                        <div class="form-group form-group--select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div> -->
                    <!-- </div> -->

                    <!-- <div class="col-sm-6"> -->
                        <!-- <p>Blah blah</p>

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

                        <p>Basic Example</p>

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

                        <p>Basic Example</p>

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

                        <p>Basic Example</p>

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

                        <p>Basic Example</p>

                        <div class="form-group form-group--select">
                            <select class="form-control">
                                <option>Select an Option</option>
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div> -->
                   <!--  </div> -->
                <!-- </div> -->
            <!-- </div>
        </div> -->
    </section>
@endsection