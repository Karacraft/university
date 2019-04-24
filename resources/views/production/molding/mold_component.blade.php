@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-4 animated fadeIn">

    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('includes.course_header_links')
                @slot('left')
                    {{ route('production.molding.gatting') }}
                @endslot

                @slot('right')
                    {{ route('production.molding.moldtype') }}
                @endslot

                <h4>Moulding &rarr; Moulds &rarr; Components 1.2.4</h4>
            @endcomponent
        </div>
        {{-- Card Body Starts Here --}}
        <div class="card-body">
            <h3 class="card-title">Components</h3>
            <br>
            
            <img  class="img-fluid mx-auto d-block" src="{{ asset('images/mould_component_front.png') }}" alt="Mould Component">

            <h4>What is Mold?</h4>
            <p>Mold is a hollow form or cavity into which molten plastic is forced to give the shape of the required component.<br>
            Molds separate into at least two halves (called the <strong>Core</strong> and the <strong>Cavity</strong>) to permit the part to be extracted.
            </p>
            <br>

            <h4>Top Clamping Plate</h4>
            <p>It holds the fixed side of the mold to the fixed platen of the injection machine.</p>
            <br>

            <h4>Locating Ring</h4>
            <p>A locating ring is a circular member fitted on to the front face of the <strong>mold</strong> over the sprue bush.<br>
            Its purpose is to register (or <strong>locate</strong>) the <strong>mold</strong> in the correct position on the injection machine, to ensure proper alignment between the nozzle and the sprue bush, thereby eliminating leakage.</p>
            <br>

            <h4>Sprue bushing</h4>
            <p>A <strong>sprue</strong> is a channel through which to transfer molten plastic injected from the nozzle of the injector into the <strong>mold</strong>.<br> 
            It is a part of <strong>sprue bush</strong>, which is a separate part from the <strong>mold</strong>.</p>
            <br>

            <h4>Cavity Plate</h4>
            <p>The plate used to create a cavity (via a gap) that will be filled with the plastic material and form the plastic component.</p>
            <br>

            <h4>Core Plate</h4>
            <p>The section that is engaged in opening / closing movement is called a core plate.</p>
            <br>

            <h4>Guide Pillar and Guide Bush</h4>
            <p>For each cycle, the core and cavity of mold are aligned to ensure quality. This alignment is ensured by <strong>guide pillar</strong> and <strong>guide bush</strong>.</p>
            <br>

            <h4>Ejector retainer plate</h4>
            <p>This plate is used to hold the ejector pins, shoulder bolts, and give space to ejector leader pin and support pillar.</p>
            <br>

            <h4>Ejector Plate</h4>
            <p>This plate pushes the ejector pins and return pins to eject the molded product and it is connected with ejector rods and then clamping unit hydraulic system.</p>
            <br>

            <h4>Spacer Block</h4>
            <p>Mounted between the movable clamping plate (bottom plate) and the movable cavity plate to give space and allow the ejector plate to move when ejecting the part.<br> 
            The required length of spacer block depend on ejector stroke that needed to eject product.</p>
            <br>

            <h4>Ejection Pin</h4>
            <p>A rod, pin or sleeve that pushes a molded part off of a core or out of a cavity of a mold.</p>
            <br>

            <h4>Ejector Return Pins</h4>
            <p>Projections that push the ejector assembly back as the mold closes. Also called surface pins or return pins.</p>
            <br>

            <h4>Movable Clamping Plate or Bottom plate</h4>
            <p>This plate holds the movable side of the mold like spacer block, support plate, cavity plate and ejector mechanism to the movable platen of the injection machine.</p>
            <br>


            {{-- Add Course Details Here --}}
            <div class="mb-4">
                {{-- Youtube Video --}}
                {{-- <div class="container">
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
                </div>    --}}
            </div>

            <div class="mb-4"> 
                {{-- SelfCheck = Hidden By Default  --}}
                <div class="card shadow-sm animated fadeIn hideme" id="selfcheck">
                    <div class="card-header bg-secondary text-white"><h5>Self Check</h5></div>
                    <div class="card-body">
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
                            <button type="submit" class="btn btn-primary mb-2">Save Your Q#2 Progress</button>
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

        </div>
        {{-- Div Card Body End --}}
        <div class="card-footer text-center">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Go Back</a>
        </div>
    </div>

</div>      
@endsection

@section('scripts')
<script>
//  Allow Self Check to Show
var continue = document.getElementById('continue');
continue.addEventListener('click',function(){
    selfcheck.classList.remove('hideme');

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