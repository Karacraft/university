@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.moulding.materials.pp') }}
                @endslot

                @slot('right')
                    {{ route('production.moulding.materials.nylon') }}
                @endslot
                
                @slot('segment')
                   Molding
                @endslot
                @slot('subsegment')
                    Materials
                @endslot
                @slot('heading')
                    Acrylonitrile Butadiene Styrene (ABS) 1.3.3
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Acrylonitrile Butadiene Styrene (ABS)</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/p1VUm46hd4c
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/Ou9nMd-GkHQ
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/EPFzOD-AYeA
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
