@extends('layouts.app')

@section('content')
    <div class="container mt-4 animated fadeIn">

        {{-- Course Linkage --}}
        <div class="row text-center bg-primary text-white py-2">
            <div class="col-1">
                {{-- <a href="">&#60;</a> --}}
            </div>
            <div class="col-10">
                <h4>PaintShop &rarr; Machines &rarr; Material 2.1.1</h4>
            </div>
            <div class="col-1">
                {{-- <a href="">&#62;</a> --}}
            </div>
        </div>
        {{-- Course Heading --}}
        <div class="row py-2">
            <div class="col-12">
                <h2 class="text-primary">Material for Paintshop</h2>
            </div>
            {{-- <div class="col-1">
                <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
            </div> --}}
        </div>

        {{-- Add Course Details Here --}}
        <div class="mb-4">
            
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
        
            {{-- Youtube Video --}}
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe> --}}
                            <video width="320" height="240" controls>
                                <source src="{{ asset('videos/materials.webm') }}" type="video/mp4">
                            </video>
                        </div>
                        {{-- Text Below Video --}}
                        <p class="mt-4">There are thousands of variations within each material, so for the purpose of this article, we will be focusing on the main properties of each of these six categories, focusing on hardness, flexibility, weight, and cost.
                            <br>
                            <a class="btn btn-primary text-white mt-2 mb-2" id="continue">Continue</a>
                        </p>    
                    </div>    
                    <div class="col-4">
                        <ul class="list-group">
                            <li class="list-group-item active">Related Videos</li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=b1U9W4iNDiQ" target="_blank">Inject Moulding Animation</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=RMjtmsr3CqA" target="_blank">Plastic Injection Moulding</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=WHwTHarf8Ck" target="_blank">Injection moulding of 72 screw caps</a></li>
                        </ul>
                    </div>
                </div>     
            </div>   
            
            {{-- SelfCheck = Hidden By Default  --}}
            <div class="card border-primary animated fadeIn" id="selfcheck">
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
            <div class="card mt-2" id="result">
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