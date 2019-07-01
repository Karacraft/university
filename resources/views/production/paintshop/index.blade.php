@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

   {{-- Make Container Flew --}}
   <div class="container-flex animated fadeIn">
        {{-- Add Heading Of Page --}}
        @component('components.page_heading')
            @slot('heading')
                Paint Shop
            @endslot
        @endcomponent
        {{-- The Tabs --}}
        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="chemical-tab" data-toggle="tab" role="tab" aria-controls="chemical" aria-selected="true" href="#chemical">Chemical 2.1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="spraybooth-tab" data-toggle="tab" role="tab" aria-controls="spraybooth" aria-selected="true" href="#spraybooth">Spray Booth 2.2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="oven-tab" data-toggle="tab" role="tab" aria-controls="oven" aria-selected="true" href="#oven">Oven 2.3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="airfilteration-tab" data-toggle="tab" role="tab" aria-controls="airfilteration" aria-selected="true" href="#airfilteration">Air Filteration 2.4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="paintingequipment-tab" data-toggle="tab" role="tab" aria-controls="paintingequipment" aria-selected="true" href="#paintingequipment">Painting Equipment 2.5</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="robot-tab" data-toggle="tab" role="tab" aria-controls="robot" aria-selected="true" href="#robot">Robot 2.6</a>
            </li>
        </ul> 
        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Chemical 2.1 Data --}}
            <div class="tab-pane fade show active" id="chemical" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
                    {{-- Paint --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Paint 2.1.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.chemical.paint') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/paint.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Chemical --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Hardener 2.1.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.chemical.hardner') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/hardner.jpg') }}
                        @endslot
                    @endcomponent
                    
                    @component('components.tab_content')
                        @slot('tabheader')
                            Thinners 2.1.3
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.chemical.thinner') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/thinner.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            IPA 2.1.4
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.chemical.ipa') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/ipa.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Spray Booth 2.2 Data --}}
            <div class="tab-pane fade" id="spraybooth" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Airflow 2.2.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.spraybooth.airflow') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/airflow.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Water Curtain 2.2.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.spraybooth.watercurtain') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/watercurtain.jpg') }}
                        @endslot
                    @endcomponent
                    
                    @component('components.tab_content')
                        @slot('tabheader')
                            Paint Filters 2.2.3
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.spraybooth.paintfilters') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/paintfilter.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Conveyor 2.2.4
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.spraybooth.conveyor') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/conveyor.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Painting Jigs 2.2.5 
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.spraybooth.paintingjigs') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/paintingjig.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Oven 2.3 Data --}}
            <div class="tab-pane fade" id="oven" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            IR Oven 2.3.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.oven.iroven') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/iroven.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            UV Oven 2.3.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.oven.uvoven') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/uvoven.jpg') }}
                        @endslot
                    @endcomponent
                    
                </div>
            </div>
            {{-- Air filteration 2.4 Data --}}
            <div class="tab-pane fade" id="airfilteration" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Mesh Filter 2.4.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.airfilteration.meshfilter') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/meshfilter.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Bag Filter 2.4.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.airfilteration.bagfilter') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/bagfilter.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Ceiling Filter 2.4.3
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.airfilteration.ceilingfilter') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/ceilingfilter.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Air filteration 2.4 Data --}}
            <div class="tab-pane fade" id="paintingequipment" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Spray Guns 2.5.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.paintingequipments.sprayguns') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/spraygun.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Paint Pump 2.5.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.paintingequipments.paintpumps') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/paintpump.jpg') }}
                        @endslot
                    @endcomponent
                    
                </div>
            </div>
            {{-- Air filteration 2.4 Data --}}
            <div class="tab-pane fade" id="robot" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Programming 2.6.1
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.robot.programming') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/programming.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Yaskawa Robots 2.6.2
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.robot.yaskawarobots') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/yaskawarobots.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            DX100 2.6.3
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.robot.dx100prog') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/dx100programming.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            DX200 2.6.4
                        @endslot
                        @slot('route')
                            {{ route('production.paintshop.machines.dx200prog') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/paintshop/dx200programming.jpg') }}
                        @endslot
                    @endcomponent
                </div>
            </div>
        </div>

    </div>

@endsection
