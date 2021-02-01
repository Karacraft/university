@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">

        <div class="card border-primary mb-3">
            <div class="card-header bg-primary">
                @component('includes.course_header_links')
                    @slot('left')
                        {{ route('production.molding.energy') }}
                    @endslot
    
                    @slot('right')
                        {{ route('production.molding.hydraulics') }}
                    @endslot
                    <h5>Molding &rarr; Machines &rarr; Efficiency 1.1.6  </h5>
                @endcomponent
            </div> 
    
            <div class="card-body">
                <h3 class="card-title ml-3">Efficiency</h3>
                <hr>
                <br>
                {{-- Youtube Video --}}
                <div class="mb-4">
                    <h4>No Videos Yet</h4>
                    <div class="container hideme">
                        <div class="row">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rqbZz517ajI" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>     
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2U7cYM43KmM" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>  
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TguHaCX-lNc&t" allowfullscreen></iframe>
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
