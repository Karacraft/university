@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.moulding.auxillaries.materialdryingdehumid') }}
                @endslot

                @slot('right')
                    {{ route('production.moulding.auxillaries.coolingtower') }}
                @endslot
                
                @slot('segment')
                    Auxillaries
                @endslot
                @slot('subsegment')
                    Chiller
                @endslot
                @slot('heading')
                    Chiller 1.4.1
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Chiller</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/0rzQhSXVq60
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/UmWWZdJR1hQ
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/1cvFlBLo4u0
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
