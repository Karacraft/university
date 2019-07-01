@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.robot.dx100prog') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.robot.programming') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Robot
                @endslot
                @slot('heading')
                    DX200 Programming 2.6.3
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">DX200 Programming</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/pvz3PUMIcXg?list=PLoQTh8O3tekJgeIkHPYf4R3C7cdYVDBcl
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/xVo0iJySY1w?list=PLoQTh8O3tekJgeIkHPYf4R3C7cdYVDBcl
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/Xwyzy4tD9Z0?list=PLoQTh8O3tekJgeIkHPYf4R3C7cdYVDBcl
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/8OTuSdHd2QY?list=PLoQTh8O3tekJgeIkHPYf4R3C7cdYVDBcl
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/IVm6M_n1-l4?list=PLoQTh8O3tekJgeIkHPYf4R3C7cdYVDBcl
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
