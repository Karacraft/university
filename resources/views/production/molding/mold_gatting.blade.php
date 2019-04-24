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
    
            <h5>Gatting System</h5> 
            
            <h5>
            <p>The gate is the connection between the runner system and the molded part. The objective of the gate is to allow enough material flow for both mold filling and thermal shrinkage compensation.</p>
            </h5>
            <h5>
                <p>Types of Gatting Systems</p>
            
            <p>Sprue Gate</p>
            <p>This type of gate is normally used for single-impression molds, especially suitable when the component is cup shaped and involves a base. Compared to a side gate, the material flow is more direct, experiencing minimal pressure loss and reduced shearing.</p>
            
            <p>Restricted  Gate </p>
            <p>This type of gating is used for multi-cavity tools. Finishing operations can often be eliminated because the small gate is broken off during the ejection of the molding. The gate must not be too small otherwise the filling of the cavity is impaired.
                    However, the gate must not be made too large otherwise it will not break off satisfactorily during ejection.
                    </p>

            <p>Side / Edge Gate</p>
            <p>This type of gating is shown in Figure 4.16 and is normally used for multi-impression molds where components are relatively small and of a flat or shallow nature. The size of the gate is dependent upon the shape and thickness of the molding. 
                    For thick sections the gate thickness should be approximately 75% of the component thickness and as wide as the runner.
                    </p>

            <p>Flash Gate</p>
            <p>This gate type is used for long flat components of thin section. This type of gate can
                    be used quite successfully. It enables a large cavity to be filled quickly and consistently. The length and width of the article and the flow pattern required dictate the length of the gate. In some instances it is advantageous to have the gate the full length of the article, though usually a gate length which is about 50% of the longer side dimension is sufficient.
                    </p>

            <p>Fan Gate</p>
            <p>For thick section moldings such as optical lenses, this type of gating is often used. This is because it enables the runner to be made of an adequate size to help prevent the material from chilling off when it is injected slowly (as is necessary when making these components). It also allows sufficient follow-up pressure into the cavity during the cooling contraction.</p>
            
            <p>Tab Gate</p>
            <p>This type of gating can be used as an alternative to side gating, especially in multi-impression molds, to produce articles of a flat or shallow nature. It has certain advantages over normal side gates in that the design minimizes the jetting of material into the mold cavity which leads to weld lines and flow marks.</p>
            
            {{-- Youtube Video --}}
            <div class="container">
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
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/MBmXWyraW1w" allowfullscreen></iframe>
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