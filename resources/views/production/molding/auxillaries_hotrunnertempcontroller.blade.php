@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.moulding.auxillaries.modtempcontroller') }}
                @endslot

                @slot('right')
                    {{ route('production.moulding.auxillaries.materialdryingdehumid') }}
                @endslot
                
                @slot('segment')
                    Auxillaries
                @endslot
                @slot('subsegment')
                    Hot Runner Temperature Controller
                @endslot
                @slot('heading')
                    Hot Runner Temperature Controller 1.4.4
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Hot Runner Temperature Controller</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/XtEoRKineS8
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/pAlwX6-nrvM
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
