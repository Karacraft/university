@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.moulding.auxillaries.chiller') }}
                @endslot

                @slot('right')
                    {{ route('production.moulding.auxillaries.modtempcontroller') }}
                @endslot
                
                @slot('segment')
                    Auxillaries
                @endslot
                @slot('subsegment')
                    Cooling Tower
                @endslot
                @slot('heading')
                    Cooling Tower 1.4.2
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Cooling Tower</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/ry_eTuqSj3k
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/z9-cVGrR9OE
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/zuFfhCbEmPo
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
