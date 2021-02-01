@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

   {{-- Make Container Flew --}}
   <div class="container-flex animated fadeIn">
        {{-- Add Heading Of Page --}}
        <div class="col-lg-3 col-md-6 col-sm-6">
            <h4 class="border-top border-bottom shadow-sm p-2">Lamps</h4>
        </div>    
        {{-- Tabs --}}
        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="process-tab" data-toggle="tab" role="tab" aria-controls="process" aria-selected="true" href="#process">Process 5.1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="machines-tab" data-toggle="tab" role="tab" aria-controls="machines" aria-selected="false" href="#machines">Machines 5.2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tests-tab" data-toggle="tab" role="tab" aria-controls="tests" aria-selected="false" href="#tests">Tests 5.3</a>
            </li>
        </ul> 

        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Machines 1.1 Data --}}
            <div class="tab-pane fade show active" id="process" role="tabpanel" aria-labelledby="home-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Plasma Surface Treatment 5.1.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.plasmasurfacetreatment') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_plasmatreatment.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Adhesive Bonding 5.1.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.adhesivebonding') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_adhesivebonding.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Metal Plastic Welding 5.1.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.metalplasticwelding') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_metalplastic.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Ultrasonic Welding 5.1.4
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.ultrasonicwelding') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_ultrasonicwelding.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Hot Plate Welding 5.1.5
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.hotplatewelding') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_hotplatewelding.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Annealing of Plastic 5.1.6
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.process.annealingofplastic') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_annealing.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            {{-- Machines 1.1 Data --}}
            <div class="tab-pane fade" id="machines" role="tabpanel" aria-labelledby="home-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                SCARA Robot 5.2.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.machines.scararobot') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_scararobot.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Tests 1.1 Data --}}
            <div class="tab-pane fade" id="tests" role="tabpanel" aria-labelledby="home-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Air Leak Tester 5.3.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.lamps.tests.airleak') }}" target="_blank">
                                    <img src="{{ asset('images/production/lamps/lamps_airleaktester.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
