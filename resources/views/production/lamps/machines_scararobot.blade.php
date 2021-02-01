@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">

        <div class="card border-primary mb-3">
            <div class="card-header bg-primary">
                @component('includes.course_header_links')
                    @slot('left')
                        {{ route('production.lamps.machines.scararobot') }}
                    @endslot
    
                    @slot('right')
                        {{ route('production.lamps.machines.scararobot') }}
                    @endslot
                    <h5>Lamps &rarr; Machines &rarr; SCARA Robot 5.2.1</h5>
                @endcomponent
            </div> 
    
            <div class="card-body">
                <h3 class="card-title ml-3">SCARA Robot</h3>
                <hr>
                <br>
                {{-- Youtube Video --}}
                <div class="mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dyyy0KqIUcE" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>     
                        <div class="row mt-2">
                            <div class="col-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9YliJPs-IJs" allowfullscreen></iframe>
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
