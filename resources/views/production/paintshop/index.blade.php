@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

   {{-- Make Container Flew --}}
   <div class="container-flex animated fadeIn">
        {{-- Add Heading Of Page --}}
        <div class="col-lg-3 col-md-6 col-sm-6">
            <h4 class="border-top border-bottom shadow-sm p-2">Paint Shop</h4>
        </div>    
        
        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="machines-tab" data-toggle="tab" role="tab" aria-controls="machines" aria-selected="true" href="#machines">Machines 2.1</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" id="molds-tab" data-toggle="tab" role="tab" aria-controls="molds" aria-selected="false" href="#molds">Molds 1.2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="materials-tab" data-toggle="tab" role="tab" aria-controls="materials" aria-selected="false" href="#materials">Materials 1.3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="auxillaries-tab" data-toggle="tab" role="tab" aria-controls="auxillaries" aria-selected="false" href="#auxillaries">Auxillaries 1.4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mold_defacts-tab" data-toggle="tab" role="tab" aria-controls="mold_defacts" aria-selected="false" href="#mold_defacts">Mold Defacts 1.5</a>
            </li> --}}
        </ul> 

        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Machines 1.1 Data --}}
            <div class="tab-pane fade show active" id="machines" role="tabpanel" aria-labelledby="home-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Material 2.1.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.materials') }}" target="_blank">
                                    <img src="{{ asset('images/ps_machine_material.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Spary Booth & Air Handling Unit 2.1.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.sprayboothahu') }}" target="_blank">
                                    <img src="{{ asset('images/ps_machine_ahu.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Robot 2.1.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.robot') }}" target="_blank">
                                    <img src="{{ asset('images/ps_machine_robot.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Spray Gun with Pump 2.1.4
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.sprayguns') }}" target="_blank">
                                    <img src="{{ asset('images/ps_machine_spraygun.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                I.R Oven 2.1.5
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.iroven') }}" target="_blank">
                                    <img src="{{ asset('images/ps_machine_over_ir.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Teaching Controller Unit 2.1.6
                            </div>
                            <div class="card-body bg-secondary">
                                <img src="{{ asset('images/ps_machine_tc.jpg') }}" class="card-img-bottom">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Coneyors 2.1.7
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.paintshop.conveyors') }}" target="_blank">
                                    <img src="{{ asset('images/conveyor.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
