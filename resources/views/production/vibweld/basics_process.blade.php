@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.vibweld.basics.test') }}
                @endslot

                @slot('right')
                    {{ route('production.vibweld.basics.test') }}
                @endslot
                
                @slot('segment')
                    Vibration Welding
                @endslot
                @slot('subsegment')
                    Basics
                @endslot
                @slot('heading')
                    Process 4.1.1
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Process
            </h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/c-QDy2Q69ww
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/1Dj24XzEqZA
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/zmHChlOXYSo
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/rta8Vt5njuA
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/MDAr80tWUWg
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/KHuHpZoVO5g
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/4K4p_3AyBTc
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
