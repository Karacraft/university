@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.spraybooth.conveyor') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.spraybooth.airflow') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Spray Booth
                @endslot
                @slot('heading')
                    Painting Jigs 2.2.5
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Painting Jigs</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/kYLOYs1pmz0
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/3Y5h2OC5ZbA
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
