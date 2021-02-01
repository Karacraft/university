@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.vacmet.material.tungesten') }}
                @endslot

                @slot('right')
                    {{ route('production.vacmet.material.siliconoil') }}
                @endslot
                
                @slot('segment')
                    Vacuum Metalizing
                @endslot
                @slot('subsegment')
                    Material
                @endslot
                @slot('heading')
                    Silicon Oil 6.1.3
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Silicon Oil</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/Z76PUXUGpeM
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
