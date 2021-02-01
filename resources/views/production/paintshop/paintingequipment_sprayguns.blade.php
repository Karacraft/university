@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.paintingequipments.paintpumps') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.paintingequipments.paintpumps') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Painting Equipment
                @endslot
                @slot('heading')
                    Spray Guns 2.5.1
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Spray Guns</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/AUdQe7wBKOs
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/0-7dV0ETjH8
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/Vu3aCxGSadw
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/vOmB0yzJ0m8
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/SyDzgpdc228
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/nWrrQM7SyOQ
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/qsOk_HSoNSo
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
