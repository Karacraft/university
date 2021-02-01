@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-4 animated fadeIn">

    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('includes.course_header_links')
                @slot('left')
                    {{ route('production.molding.component') }}
                @endslot
                
                @slot('right')
                    {{ route('production.molding.moldtype') }}
                @endslot
                <h5>Molding &rarr; Molds &rarr; Maintenance 1.2.5  </h5>
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Maintenance</h3>
            <hr>
            <br>


            {{-- Youtube Video --}}
            <div class="mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VW-V4MCXeSY" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DSQcd-iP92M" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vfxlJuSdwM4" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>    
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/I2ul4vI2rQE" allowfullscreen></iframe>
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
