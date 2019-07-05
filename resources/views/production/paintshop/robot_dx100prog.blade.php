@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.robot.yaskawarobots') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.robot.dx200prog') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Robot
                @endslot
                @slot('heading')
                    DX100 Programming 2.6.2
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">DX100 Programming</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/AOJxJYFGDBw
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/qPgsN23-_U4
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/M-pSiPfOW7w
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/LSY_w-hf6Ps
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/_BxXFzCU680
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/ExeSA9BA2ZU
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/bjqVJ0m3gz4
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/wcaCYK7Um3k
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/UBl27s-Atek
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
