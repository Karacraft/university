@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.spraybooth.paintingjigs') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.spraybooth.watercurtain') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Spray Booth
                @endslot
                @slot('heading')
                    Air Flow 2.2.1
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Air Flow</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    {{-- @component('components.youtube')
                        @slot('source')
                            https://www.youtube.com/embed/wJnJxZfSfKM
                        @endslot
                    @endcomponent --}}
                   
                </div>  
            </div>

        </div>
        {{-- Footer --}}
        @include('includes.footer')
    </div>
</div>
@endsection
