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
                Vibration Welding
            @endslot
        @endcomponent
        {{-- The Tabs --}}
        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="basics-tab" data-toggle="tab" role="tab" aria-controls="basics" aria-selected="true" href="#basics">Basics 4.1</a>
            </li>
        </ul> 
        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Basics--}}
            <div class="tab-pane fade show active" id="basics" role="tabpanel">
                <div class="row m-2 animated fadeIn mt-2">
                    {{-- Paint --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Process 4.1.1
                        @endslot
                        @slot('route')
                            {{ route('production.vibweld.basics.process') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vibweld/process.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Chemical --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Test 4.1.2
                        @endslot
                        @slot('route')
                            {{ route('production.vibweld.basics.test') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/vibweld/test.jpg') }}
                        @endslot
                    @endcomponent
                    

                </div>
            </div>
        </div>

    </div>

@endsection
