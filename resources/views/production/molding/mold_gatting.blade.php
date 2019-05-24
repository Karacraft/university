@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-4 animated fadeIn">

    <div class="card border-primary mb-3">

        <div class="card-header bg-primary">
            @component('includes.course_header_links')
                @slot('left')
                    {{ route('production.molding.runner') }}
                @endslot
                
                @slot('right')
                    {{ route('production.molding.component') }}
                @endslot
                <h5>Molding &rarr; Machines &rarr; Gatting System 1.2.3  </h5>
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">Gatting System</h3>
            <hr>
            <br>

            <div class="mb-4">
                <div class="container">

                    <div class="row">
                        <h4>What is Gate?</h4>
                        <p>The gate is the connection between the runner system and the molded part. The objective of the gate is to allow enough material flow for both mold filling and thermal shrinkage compensation.</p>
                        <br>
                    </div>
        
                    <div class="row">
                        <h4>Types of gating system:</h4>
                    </div>
                    <div class="row">
                        <p class="lead">There are two major classification of gates:</p>
                    </div>

                    <div class="row">
                        <h4>Manually trimmed gates</h4>
                        <p>
                            Manually trimmed gates are those that require an operator to separate parts from runners during a secondary operation. The reasons for using manually trimmed gates are:
                        </p>
                        <ul>
                            <li>
                                The gate is too bulky to be sheared from the part as the tool is opened.
                            </li>
                            <li>
                                Some shear-sensitive materials (e.g., PVC) should not be exposed to the high shear rates inherent to the design of automatically trimmed gates.
                            </li>
                            <li>
                                Simultaneous flow distribution across a wide front to achieve specific orientation of fibers of molecules often precludes automatic gate trimming. 
                            </li>
                        </ul>
                        <p>
                            The following gate types are trimmed from the cavity manually:
                        </p>
                    </div>
                    <div class="row">
                        <ol>
                            <li>Direct (sprue) gate</li>
                            <li>Tab gate</li>  	
                            <li>Edge (standard) gate</li>
                            <li>Overlap gate</li> 	
                            <li>Fan gate</li>  	
                            <li>Disk (diaphragm) gate</li>
                            <li>Ring gate</li>  	
                            <li>Spoke (spider) gate</li>  	
                            <li>Film (flash) gate</li>
                        </ol>
                    </div>

                    <div class="row">
                        <h4>Automatically trimmed gates</h4>
                        <p>Automatically trimmed gates incorporate features in the tool to break or shear the gate as the molding tool is opened to eject the part. Automatically trimmed gates should be used to:</p>
                        <ul>
                            <li>Avoid gate removal as a secondary operation</li>
                            <li>Maintain consistent cycle times for all shots</li>
                            <li>Minimize gate scars</li>
                        </ul>
                        
                    </div>
                    <div class="row">
                            <p>The following gate types are trimmed from the cavity automatically:</p>
                    </div>
                    <div class="row">
                        
                        <ol>
                            <li>Pin gate</li>
                            <li>Submarine (tunnel, chisel) gate</li>
                            <li>Hot-runner (hot-probe) gate</li>
                            <li>Valve gate</li>
                        </ol>
                    </div>

                    {{-- Youtube videos --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qYo7wsbfmXg" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>     
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_VzjIyKWHow" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jcjBElN2k1k" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="col-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Xxd10zlYf7M" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  

                </div>
            </div>
            
            


            {{-- Youtube Video --}}
            <div class="container">
                
            </div>   
        

        </div>
        {{-- Div Card-Body Ends here --}}
        <div class="card-footer text-center">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </div>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded",function(){
    // console.log("windows loaded");

    var deptnav =  document.getElementById('departmentnav');
    var selfcheck = document.getElementById('selfcheck');
    var result = document.getElementById('result');
    var cont = document.getElementById('continue');

    deptnav.classList.add('hideme');
    selfcheck.classList.add('hideme');
    result.classList.add('hideme');

    // console.log(cont);

    cont.addEventListener('click',function(){
        selfcheck.classList.remove('hideme');
        // result.classList.remove('hideme');
    })

    var myChart = new DonutChart(document.getElementById("mychart"), {
    r: 55,
    stroke: 20,
    scale: 100,
    items: [
      { label: "A", value: .80 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
        ]
    })
})


</script>
@endsection