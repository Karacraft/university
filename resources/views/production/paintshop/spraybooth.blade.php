@extends('layouts.app')

@section('content')
    <div class="container mt-4 animated fadeIn">

        {{-- Course Linkage --}}
        <div class="row text-center bg-primary text-white py-2">
            <div class="col-1">
                {{-- <a href="">&#60;</a> --}}
            </div>
            <div class="col-10">
                <h4>PaintShop &rarr; Spray Booth & AHU &rarr; Material 2.1.2</h4>
            </div>
            <div class="col-1">
                {{-- <a href="">&#62;</a> --}}
            </div>
        </div>
        {{-- Course Heading --}}
        <div class="row py-2">
            <div class="col-12">
                <h2 class="text-primary">Spray Booth & Air Handling Unit (AHU)</h2>
            </div>
            {{-- <div class="col-1">
                <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
            </div> --}}
        </div>

        {{-- Add Course Details Here --}}
        <div class="mb-4 mt-4">
            
            <h5>
            <p>A spray booth is an enclosed or semi-enclosed area used for the spray painting of fabricated items.</p> 
            <p>Spray booths may be equipped with a source of filtered air to keep the atmosphere dust-free, a waterfall backdrop to trap overspray, and an exhaust system to vent the fumes of the evaporating solvents.</p>
            <p>Setting up your own spray booth has many advantages and can be very beneficial to your business, especially considering how simple it is to set up. Using a spray booth is a fantastic method of protecting your work environment from the hazardous materials required when spraying paint.</p>
            <p>Nothing ruins a fresh coat of paint like debris or dust settling on the freshly painted surface. Setting up a spray booth can eliminate the risk of such problems occurring.</p>
                
            </h5>

            {{-- Youtube Video --}}
            {{-- <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="embed-responsive embed-responsive-16by9 mb-3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wJnJxZfSfKM" allowfullscreen></iframe>
                        </div>
                    </div>    
                </div>     
            </div>    --}}
            
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
        result.classList.remove('hideme');
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