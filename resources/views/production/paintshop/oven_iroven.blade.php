@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.oven.uvoven') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.oven.uvoven') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Oven
                @endslot
                @slot('heading')
                    IR Oven 2.3.1
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">IR Oven</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/xaJbxrbFyag
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/40zcO4X-BSQ
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/IDto0_1haxA
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/99oXCcqnSD0
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/Fxe1sJ0FVz8
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
