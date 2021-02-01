@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">

        <div class="card border-primary mb-3">
            <div class="card-header bg-primary">
                @component('includes.course_header_links')
                    @slot('left')
                        {{ route('production.lamps.process.annealingofplastic') }}
                        @endslot
                        
                    @slot('right')
                        {{ route('production.lamps.process.adhesivebonding') }}
                    @endslot
                    <h5>Lamps &rarr; Process &rarr; Plasma Surface Treatment 5.1.1</h5>
                @endcomponent
            </div> 
    
            <div class="card-body">
                <h3 class="card-title ml-3">Plasma Surface Treatment</h3>
                <hr>
                <br>
                {{-- Youtube Video --}}
                <div class="mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/V306WHBsSyU" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>     
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/g1BQBX8OtFI" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>  
                        
                    </div>  
                </div>
    
            </div>
            {{-- Div Card-Body Ends here --}}
            <div class="card-footer text-center">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection
