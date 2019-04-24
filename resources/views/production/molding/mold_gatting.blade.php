@extends('layouts.app')

@section('content')
    <div class="container mt-4 animated fadeIn">

        {{-- Course Linkage --}}
        <div class="row text-center bg-primary text-white py-2">
            <div class="col-1">
                {{-- <a href="">&#60;</a> --}}
            </div>
            <div class="col-10">
                <h4>Moulding &rarr; Moulds &rarr; Gating System 1.2.3</h4>
            </div>
            <div class="col-1">
                {{-- <a href="">&#62;</a> --}}
            </div>
        </div>
        {{-- Course Heading --}}
        <div class="row py-2">
            <div class="col-12">
                <h2 class="text-primary">Gating System</h2>
            </div>
            {{-- <div class="col-1">
                <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
            </div> --}}
        </div>

        {{-- Add Course Details Here --}}
        <div class="mb-4">
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
            
            {{-- SelfCheck = Hidden By Default  --}}
            <div class="card border-primary animated fadeIn hideme" id="selfcheck">
                <div class="body">

                    <h3 class="ml-3 mt-3">Self Check</h3>
                    <hr class="border-primary">
                    {{-- Question 1 --}}
                    <div class="container">
                        <h5>Question # 1</h5>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Sketch</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control" disabled></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Please Define in Details</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Save Your Q#1 Progress</button>
                    </div>
                    <hr>

                    {{-- Question 2 --}}
                    <div class="container">
                        <h5>Question # 2</h5>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Sketch</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control" disabled></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Please Define in Details</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary mb-2">Save Your Q#2 Progress</button>
                    </div>
                    <hr>
        
                    {{-- Question 3 --}}
                    {{-- <div class="container">
                        <h5>Question # 3</h5>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Your Sketch</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control" disabled></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Please Define in Details</label>
                                    <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info mb-2">Save Your Q#3 Progress</button>
                    </div>
                    <hr> --}}

                    {{-- Question 4 --}}
                    <div class="container">
                        <h5>Question # 3 - Which of the following processes of moulding is widely used for manufacturing of bottle caps and automotive dashboards?</h5>
                        <div class="m-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq4" id="q41" value="5">
                                <label class="form-check-label" for="q41">
                                    Compression moulding
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq4" id="q42" value="0">
                                <label class="form-check-label" for="q42">
                                    Transfer moulding
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq4" id="q43" value="0">
                                <label class="form-check-label" for="q43">
                                    Injection moulding
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq4" id="q44" value="0">
                                <label class="form-check-label" for="q44">
                                    Jet moulding
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>

                    {{-- Question 5 --}}
                    <div class="container">
                        <h5>Question # 4 - Complex shape of parts or components cannot be formed by the injection moulding process.</h5>
                        <div class="m-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq5" id="q51" value="5">
                                <label class="form-check-label" for="q51">
                                    True
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq5" id="q52" value="0">
                                <label class="form-check-label" for="q52">
                                    False
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr>

                    {{-- Question 6 --}}
                    <div class="container">
                        <h5>Question # 5 - Which of the following cooling systems is used in injection moulding process to increase solidification rate of components made?</h5>
                        <div class="m-5">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq6" id="q61" value="5">
                                <label class="form-check-label" for="q61">
                                    Air jet cooling system
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq6" id="q62" value="0">
                                <label class="form-check-label" for="q62">
                                    Water cooling system
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq6" id="q63" value="0">
                                <label class="form-check-label" for="q63">
                                    Cooling with free convection
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radioq6" id="q64" value="0">
                                <label class="form-check-label" for="q64">
                                    Cooling with fins
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- Test Results = Hidden By Default --}}
            <div class="card mt-2 hideme" id="result">
                <div class="card-body bg-primary text-white">
                    <div class="row text-center">
                        {{-- <div class="col">
                            <h2 class="h-100 d-flex justify-content-center flex-column">Result</h2>
                        </div> --}}
                        <div class="col"><h2 class="">Knowledge</h2>
                                <img src="{{ asset('images/brain.png') }}" alt="" width="120px">
                                <h2 class="text-dark mt-2">100%</h2>
                        </div>
                        <div class="col"><h2>Self Check</h2>
                            <div id="mychart"></div>
                            <h2 class="text-dark mt-2">80%</h2>
                        </div>
                    </div>
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