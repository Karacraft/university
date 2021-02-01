@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.moulding.materials.abs') }}
                @endslot

                @slot('right')
                    {{ route('production.moulding.materials.hdpe') }}
                @endslot
                
                @slot('segment')
                   Molding
                @endslot
                @slot('subsegment')
                    Materials
                @endslot
                @slot('heading')
                    Polyamide (Nylon) 1.3.4
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Polyamide (Nylon)</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/1hL4gRavxjg
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/9vHjMxPPGuc
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
