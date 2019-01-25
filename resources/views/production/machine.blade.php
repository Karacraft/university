@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-1">
                <a href="">&#60;</a>
            </div>
            <div class="col-10">
                <h3>Moulding:Machine Course 1.1.1</h3>
            </div>
            <div class="col-1">
                <a href="">&#62;</a>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <h2 class="text-primary">Inject Moulding</h2>
            </div>
            <div class="col-1">
                <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
            </div>
        </div>
        {{-- Add Course Details Here --}}
        <div class="mt-4 mb-4">
            <h3>
                About Inject Moulding In Details
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
        
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe> --}}
                            <video width="320" height="240" controls>

                                    <source src="{{ asset('videos/videoplayback.mp4') }}" type="video/mp4">
                            
                            </video>
                        </div>    
                    </div>    
                    <div class="col-3">
                        <ul class="list-group">
                            <li class="list-group-item active">Related Videos</li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=b1U9W4iNDiQ" target="_blank">Inject Moulding Animation</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=RMjtmsr3CqA" target="_blank">Plastic Injection Moulding</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=WHwTHarf8Ck" target="_blank">Injection moulding of 72 screw caps</a></li>
                        </ul>
                    </div>
                </div>     
            </div>   
            <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
            
            <h3>Question & Answers</h3>
            
            {{-- Question 1 --}}
            <div class="card">
                <div class="card-header bg-primary text-white">Question # 1 - (Sketch & Answer in your own words is requried)</div>
                <div class="container">
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
            </div>

            {{-- Question 2 --}}
            <div class="card mt-2">
                <div class="card-header bg-secondary text-white">Question # 2 - (Sketch & Answer in your own words is requried)</div>
                <div class="container">
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
            </div>

            {{-- Question 3 --}}
            <div class="card mt-2">
                <div class="card-header bg-info text-white">Question # 3 - (Sketch & Answer in your own words is requried)</div>
                <div class="container">
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
            </div>

            <h3 class="mt-4">Multiple Choice Questions</h3>
            <hr>
            
            {{-- Question 4-6--}}
            <div class="container">
                    {{-- Q#4 --}}
                    <div class="m-3">
                        Q#4 - Which of the following processes of moulding is widely used for manufacturing of bottle caps and automotive dashboards?
                    </div>

                    <div class="m-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                Compression moulding
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Transfer moulding
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Injection moulding
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Jet moulding
                            </label>
                        </div>
                    </div>


                    {{-- Q5 --}}
                    <div class="m-3">
                        Q#5 - Complex shape of parts or components cannot be formed by the injection moulding process.
                    </div>

                    <div class="m-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                True
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                False
                            </label>
                        </div>
                    </div>

                     {{-- Q6 --}}
                     <div class="m-3">
                         Q#6 - Which of the following cooling systems is used in injection moulding process to increase solidification rate of components made?
                     </div>
                    
                     <div class="m-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                Air jet cooling system
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Water cooling system
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Cooling with free convection
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                            <label class="form-check-label" for="exampleRadios2">
                                Cooling with fins
                            </label>
                        </div>
                     </div>

                </div>

        </div>

        <div class="mb-3">
            <div class="card">
                <div class="card-body bg-primary text-white">
                    <div class="row text-center">
                        <div class="col"><h2>Test Result</h2>
                            <i class="fas fa-poll-h fa-5x"></i>

                        </div>
                        <div class="col"><h2>Knowledge</h2>
                                <i class="fas fa-brain fa-5x text-info"></i>
                                <h2 class="text-dark mt-2">90%</h2>
                        </div>
                        <div class="col"><h2>Quiz</h2>
                            <i class="fas fa-question fa-5x text-success"></i>
                            <h2 class="text-dark mt-2">86%</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
document.getElementById('departmentnav').classList.add('hideme');
</script>
@endsection