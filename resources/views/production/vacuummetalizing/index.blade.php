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
                Vacuum Metailizing
            @endslot
        @endcomponent
        {{-- The Tabs --}}
        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="chemical-tab" data-toggle="tab" role="tab" aria-controls="chemical" aria-selected="true" href="#chemical">Material 6.1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="spraybooth-tab" data-toggle="tab" role="tab" aria-controls="spraybooth" aria-selected="true" href="#spraybooth">Machine 6.2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="oven-tab" data-toggle="tab" role="tab" aria-controls="oven" aria-selected="true" href="#oven">Clean Room 6.3</a>
            </li>
        </ul> 
        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Chemical 2.1 Data --}}
            <div class="tab-pane fade show active" id="chemical" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">

                    @component('components.tab_content')
                        @slot('tabheader')
                            Aluminium 6.1.1
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.material.aluminium') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/aluminium.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Tungsten 6.1.2
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.material.tungesten') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/tungsten.jpg') }}
                        @endslot
                    @endcomponent
                    
                    @component('components.tab_content')
                        @slot('tabheader')
                            Silicon Oil 6.1.3
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.material.siliconoil') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/siliconoil.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Material --}}
            <div class="tab-pane fade" id="spraybooth" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Vacuum Pumps 6.2.1
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.machine.vacpump') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/vacpump.jpg') }}
                        @endslot
                    @endcomponent

                    @component('components.tab_content')
                        @slot('tabheader')
                            Vacuum Gauge 6.2.2
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.machine.vacgauge') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/vacgauge.jpg') }}
                        @endslot
                    @endcomponent
                    
                    @component('components.tab_content')
                        @slot('tabheader')
                        Vacuum Metalizing Machine Process 2.2.3
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.machine.vacmmp') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/vacmmp.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Clean Room --}}
            <div class="tab-pane fade" id="oven" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
            
                    @component('components.tab_content')
                        @slot('tabheader')
                            Air Filteration 6.3.1
                        @endslot
                        @slot('route')
                            {{ route('production.vacmet.cleanroom.airfilteration') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vacmet/airfilteration.jpg') }}
                        @endslot
                    @endcomponent
                </div>
            </div>
          
        </div>

    </div>

@endsection
