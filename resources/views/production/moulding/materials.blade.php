@extends('layouts.app')

@section('content')
<div class="container mt-4 animated fadeIn">

    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('includes.course_header_links')
                @slot('left')
                    
                @endslot

                @slot('right')
                {{ route('production.moulding.gendesign') }}
                @endslot

                <h4>Moulding &rarr; Machines &rarr; Material 1.1.1</h4>
            @endcomponent
        </div>

        <div class="card-body">
            <h3 class="card-title">Materials</h3>
            <br>

            <p>With over 85 thousand types of injection molding plastic materials to choose from, you can only imagine how overwhelming it can be for product designers, entrepreneurs, and others alike to pick just the right material to manufacture their product.</p>
            <p>But don’t get discouraged — it is much easier to pick a material when you look into the overall material composition that plastics used for injection molding fall into. These are the top six materials used throughout the industry:</p>

            <ul>
                <li>Polypropylene (PP)</li>
                <li>Acrylonitrile Butadiene Styrene (ABS)</li>
                <li>Polyamide (Nylon)</li>
                <li>High Density Polyethylene (HDPE)</li>
                <li>Polycarbonate (PC)</li>
                <li>ABS + PC Blend (mostly used for electronics enclosures)</li>
            </ul>
            <br>

            {{-- Youtube Video --}}
            <div class="mb-4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/z4zmfTzzWxs" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="embed-responsive embed-responsive-16by9 mb-3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YduOEGBtNfo" allowfullscreen></iframe>
                            </div>
                        </div>    
                    </div>    
                </div>  
            </div>

            {{-- Add Course Details Here --}}
            <div class="mb-4">
                {{-- SelfCheck = Hidden By Default  --}}
                <div class="card shadow-sm animated fadeIn hideme" id="selfcheck">
                    <div class="card-header bg-secondary text-white">Self Check</div>
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