@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.vacmet.machine.vacpump') }}
                @endslot

                @slot('right')
                    {{ route('production.vacmet.machine.vacmmp') }}
                @endslot
                
                @slot('segment')
                    Vacuum Metalizing
                @endslot
                @slot('subsegment')
                    Machine
                @endslot
                @slot('heading')
                    Vacuum Gauge 6.2.2
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Vacuum Gauge</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/NEjeb4cklQM
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/rcSf0ho35NU
                        @endslot
                    @endcomponent
                </div>  
            </div>

        </div>
        {{-- Footer --}}
        @include('includes.footer')
    </div>
</div>
@endsection
