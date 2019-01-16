<div class="container-flex">

    <div class="mt-4">

        <div class="mt-2">
            <h3>Moulding</h3>
            {{-- Level Navigation --}}
            <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                <label class="btn btn-outline-primary">
                    <input type="radio" name="options" autocomplete="off" id="level1check" onchange="toggleCheckbox(this)"> Level-01
                </label>
                <label class="btn  btn-outline-primary">
                    <input type="radio" name="options" autocomplete="off" id="level2check" onchange="toggleCheckbox(this)"> Level-02
                </label>
            </div>
        </div>

        {{-- Sub-Level Buttons --}}
        <div class="mt-4">

            <div id="level1courses" class="hideme mt-2">
                <h4>Level-01</h4>
                {{-- Create a row to display proper cards --}}
                <div class="row">
                    <div class="col">
                        <a id="machine" class="btn btn-primary text-white btn-sm btn-block" onclick="showCourse(this)">Machine 1.1</a>
                    </div>
                    <div class="col">
                        <a id="molds" class="btn btn-primary text-white btn-sm btn-block" onclick="showCourse(this)">Molds 1.2</a>
                    </div>
                    <div class="col">
                        <a id="aux" class="btn btn-primary text-white btn-sm btn-block" onclick="showCourse(this)">Auxillary 1.3</a>
                    </div>
                    <div class="col">
                        <a id="maint" class="btn btn-primary text-white btn-sm btn-block" onclick="showCourse(this)">Maintenance 1.4</a>
                    </div>
                   
                </div>
              
            </div>

            <div id="level2courses" class="hideme mt-2">
                <h4>Level-02
                    <br>
                    <small><span class="text-danger">Restricted Section</span>
                    <br>Please login with your Auvitronics email to proceed further</small>
                </h4>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ali.jibran@auvitronics.com">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
                        </div>
                        <button class="btn btn-secondary">Login</button>
                    </div>
                </div>
                
            </div>

        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="machinecourses">
            <div class="row">

                <div class="col">
                    <div class="card bg-primary text-white">
                        <div class="card-header">Machine Course 1.1.1</div>
                        <div class="card-body">
                            <h4>Chrome Polisher Machine</h4>
                            Chrome polisher machine~1 171054 
                            <br>
                            <img src="{{ asset('images/chrome1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card bg-primary text-white">
                        <div class="card-header">Machine Course 1.1.2</div>
                        <div class="card-body">
                            <h4>Spectra Chrome Machine</h4>
                            Spectra Chrome has perfected the "spray-on" chrome process
                            <br>
                            <img src="{{ asset('images/chrome2.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card bg-primary text-white">
                        <div class="card-header">Machine Course 1.1.3</div>
                        <div class="card-body">
                            <h4>ABS Plastice Chrome</h4>
                            full automatic ABS chrome plating line for production of all abs plastic part chrome plating
                            <br>
                            <img src="{{ asset('images/chrome3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card bg-primary text-white">
                        <div class="card-header">Machine Course 1.1.4</div>
                        <div class="card-body">
                            <h4>Spray Chrome Paint</h4>
                            Discussion About Spray Chrome Paint
                            <br>
                            <img src="{{ asset('images/chrome4.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

         {{-- Sub-Level Courses --}}
         <div class="mt-4 hideme" id="moldscourses">
                <div class="row">

                        <div class="col">
                            <div class="card bg-primary text-white">
                                <div class="card-header">Moulding Course 1.2.1</div>
                                <div class="card-body">
                                    <h4>Moulding Machine</h4>
                                    Discussion About Injection Moulding
                                    <br>
                                    <img src="{{ asset('images/mould1.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="col">
                            <div class="card bg-primary text-white">
                                <div class="card-header">Moulding Course 1.2.2</div>
                                <div class="card-body">
                                    <h4>Moulding Machine</h4>
                                    Discussion About Injection Moulding
                                    <br>
                                    <img src="{{ asset('images/mould2.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="col">
                            <div class="card bg-primary text-white">
                                <div class="card-header">Moulding Course 1.2.3</div>
                                <div class="card-body">
                                    <h4>Moulding Machine</h4>
                                    Discussion About Injection Moulding
                                    <br>
                                    <img src="{{ asset('images/mould3.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
        
                        <div class="col">
                            <div class="card bg-primary text-white">
                                <div class="card-header">Moulding Course 1.2.4</div>
                                <div class="card-body">
                                    <h4>Moulding Machine</h4>
                                    Discussion About Injection Moulding
                                    <br>
                                    <img src="{{ asset('images/mould4.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
        </div>

         {{-- Sub-Level Courses --}}
         <div class="mt-4 hideme" id="auxcourses">

        </div>

         {{-- Sub-Level Courses --}}
         <div class="mt-4 hideme" id="maintcourses">

        </div>

    </div>


</div>

@section('scripts')
<script>
// Divisions
var level1courses = document.getElementById('level1courses');
var level2courses = document.getElementById('level2courses');
//  Courses
var machine = document.getElementById('machinecourses');
var molds = document.getElementById('moldscourses');
var aux = document.getElementById('auxcourses');
var maint = document.getElementById('maintcourses');

function toggleCheckbox(element)
{
    console.log(element);
    if(element.id === 'level1check')
    {
        level1courses.classList.remove('hideme');
        level2courses.classList.add('hideme');
    }
    else
    {
        level1courses.classList.add('hideme');
    level2courses.classList.remove('hideme');
    }
    hideCourses();
}

function hideCourses()
{
        machine.classList.add('hideme');
        molds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme')
}

function showCourse(element)
{

    if(element.id === "machine")
    {
        machine.classList.remove('hideme');
        molds.classList.add('hideme');
        aux.classList.add('hideme');
        main.classList.add('hideme')
    }
    else if(element.id === "molds")
    {
        machine.classList.add('hideme');
        molds.classList.remove('hideme');
        aux.classList.add('hideme');
        main.classList.add('hideme')
    }


}

</script>
@endsection
