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
                    {{ route('production.moulding.auxillaries.chiller') }}
                @endslot
                
                @slot('segment')
                    Auxillaries
                @endslot
                @slot('subsegment')
                    Material Drying & Dehumidifying Unit
                @endslot
                @slot('heading')
                    Material Drying & Dehumidifying Unit 1.4.5
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Material Drying & Dehumidifying Unit</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/g_V4GP2gunY
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/vY9bKMbFuqY
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/uhpb8TAWFbQ
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/56MfR_082PI
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
