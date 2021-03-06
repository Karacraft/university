@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.chemical.thinner') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.chemical.paint') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Chemical
                @endslot
                @slot('heading')
                    IPA 2.1.4
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">IPA</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/PYZpCn9dUbw
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/mdmfd05aX3c
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/GKIl4UWFXm0
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/G_KWTEox-GM
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
