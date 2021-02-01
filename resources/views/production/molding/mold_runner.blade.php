@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-4 animated fadeIn">

    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('includes.course_header_links')
                @slot('left')
                    {{ route('production.molding.moldtype') }}
                @endslot
                
                @slot('right')
                    {{ route('production.molding.gatting') }}
                @endslot
                <h5>Molding &rarr; Machines &rarr; Runner System 1.2.2  </h5>
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Runner System</h3>
            <hr>
            <br>

            {{-- datat --}}
            <h5>
                    <p>Runner system is that part of feeding system in the mold which connects the sprue to the gate of the mold.</p>
                </h5>
                <h5>
                <p>When designing runner systems the three primary considerations are as follows:</p>
                <ul>
                    <li>The shape of the runner</li>
                    <li>The runner layout</li>
                    <li>The runner dimensions</li>
                </ul>
                <p>There are three types of runner system </p>
                <ul>
                    <li>Cold runner system</li>
                    <li>Hot runner System</li>
                    <li>Semi hot runner system</li>
                </ul>
                <p>More specific demands of the runner design could include the following points:</p>
                <ul>
                    <li>The cavity should fill with a minimum of weld lines</li>
                    <li>The cavities fill at the same time</li>
                    <li>Restrictions to flow should be as low as possible</li>
                    <li>Share of the total shot weight should be as low as possible</li>
                    <li>Should be easily demolded</li>
                    <li>Appearance of the product should be unaffected</li>
                    <li>Length as short as is technically feasible to reduce losses in temperature and pressure and keep scrap to a minimum</li>
                    <li>Cross-section as large as required allowing a longer or equal freezing time to that of the component (to allow effective packing of the part)</li>
                </ul>
                </h5>
                <h5>Cold Runner System</h5>
                <h5><p>Cold runners are commonly used in two and three-plate molds. 
                    The most commonly used runner designs are full-round, half-round and trapezoidal. 
                    The full round is generally preferred for ease of machining and lower pressure loss. 
                    For fast cycles a full-round is not recommended since the greater mass of material takes longer to cool and may control the cycle time. 
                    The runner should be polished for ease of mold filling and part ejection.</p></h5>
                <h5>Hot Runner System</h5>
                <h5>
                <p>Hot runner system is mostly used for feeding multi-impression and large area moldings.</p>
                <p>The advantages of hot runner moldings are as follows:</p>
                <ul>
                    <li>Melt enters the cavities in a more controlled condition than with a sprue and runner system, as the temperature control in the hot runner is adjustable to finer limits</li>
                    <li>A possible reduction in post-molding finishing operations to remove large sprue gate witness marks</li>
                    <li>The elimination of cold sprues and runners in multi-impression molds which would normally be scrapped or reworked</li>
                    <li>Hot runners enable single impression, large area moldings to be edge-gated, whilst keeping the molding in the center of the machine platen</li>
                    <li>Effective increase in the shot capacity of the machine as, once the hot runner is filled; the injection capacity can be fully concentrated into the cavities</li>
                </ul>
            </h5>

            {{-- Youtube Video --}}
            <div class="mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vIdzj786B00" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dSgc1wU0Eys" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uOvyW2nxfsM" allowfullscreen></iframe>
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
