@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.molding.injectunit') }}
                @endslot

                @slot('right')
                    {{ route('production.molding.processtroubleshoot') }}
                @endslot
                
                @slot('segment')
                    Molding
                @endslot
                @slot('subsegment')
                    Machines
                @endslot
                @slot('heading')
                    Clamping Unit 1.1.3
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Clamping Unit</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/egWBqxA6wjA
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/8SpDmGFD7uw
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
