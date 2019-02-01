@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

    <div class="mt-4 animated fadeIn">

        <div class="row mt-2">
            <div class="col-3">
                <div>
                    <h4 class="border-top border-bottom shadow-sm p-2">Moulding</h4>
                    {{-- Level Navigation --}}
                    <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                        <span class="btn btn-warning">Select Level</span>
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="options" autocomplete="off" id="level1check" onchange="toggleCheckbox(this)"> Level-01
                        </label>
                        <label class="btn  btn-outline-primary">
                            <input type="radio" name="options" autocomplete="off" id="level2check" onchange="toggleCheckbox(this)"> Level-02
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-9 hideme" id="progress">
                <div class="row animated fadeIn">
                    <div class="col-3">
                        <h4 class="border-top border-bottom shadow-sm p-2">Course Progress</h4>
                    </div>

                    {{-- Progresss Table --}}
                    <div class="col-8 hideme animated fadeIn" id="prog">
                        <table class="table table-sm text-center ">
                            <thead >
                                <tr>
                                    <th>&nbsp</th>
                                    <th>Machine 1.1</th>
                                    <th>Moulds 1.2</th>
                                    <th>Auxillaries 1.3</th>
                                    <th>Maintenance 1.4</th>
                                    <th>Product Planning 1.5</th>
                                    <th>Quality 1.6</th>
                                    <th>Costing 1.7</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Knowledge</td>
                                    <td><div id="mychart"></div><div>75%</div></td>
                                    <td><div id="mychart2"></div><div>60%</div></td>
                                    <td><div id="mychart3"></div><div>80%</div></td>
                                    <td><div id="mychart4"></div><div>55%</div></td>
                                    <td><div id="mychart5"></div><div>90%</div></td>
                                    <td><div id="mychart11"></div><div>60%</div></td>
                                    <td><div id="mychart12"></div><div>80%</div></td>
                                </tr>
                                <tr>
                                    <td>Self Test</td>
                                    <td><div id="mychart6"></div><div>80%</div></td>
                                    <td><div id="mychart7"></div><div>55%</div></td>
                                    <td><div id="mychart8"></div><div>90%</div></td>
                                    <td><div id="mychart9"></div><div>75%</div></td>
                                    <td><div id="mychart10"></div><div>60%</div></td>
                                    <td><div id="mychart13"></div><div>55%</div></td>
                                    <td><div id="mychart14"></div><div>90%</div></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-1">
                            
                    </div>
                </div>
                
            </div>
        </div>

        {{-- Sub-Level Buttons --}}
        <div class="mt-4">
            {{-- Level 01 --}}
            <div id="level1courses" class="hideme mt-2 animated fadeIn">
                <h4>Level-01</h4>
                {{-- Create a row to display proper cards --}}
                <div class="row">
                    <div class="col-2">
                        <a id="machine" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Machines 1.1</a>
                    </div>
                    <div class="col-2">
                        <a id="moulds" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Moulds 1.2</a>
                    </div>
                    {{-- <div class="col">
                        <a id="aux" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Auxillaries 1.3</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="maint" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Maintenance 1.4</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="pp" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Production Planning 1.5</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="quality" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Quality 1.6</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="costing" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Costing 1.7</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="quiz" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Course Quiz</a>
                    </div> --}}
                </div>
              
            </div>
            {{-- Level 01 --}}

            {{-- Level 02 --}}
        <div id="level2courses" class="hideme mt-2 ml-5 animated fadeIn">
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
            {{-- Level 02 --}}

        </div>

        {{-- Sub-Level Courses MACHINES 1.1 --}}
        <div class="mt-4 hideme animated fadeIn " id="machinecourses">
            <div class="row m-2">

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Material 1.1.1
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.materials') }}">
                                <img src="{{ asset('images/material.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            General Design & Function 1.1.2
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.gendesign') }}">
                                <img src="{{ asset('images/gdf.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Injection Unit 1.1.3
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.injectunit') }}">
                                <img src="{{ asset('images/injector1.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Clamping Unit 1.1.4
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.clampingunit') }}">
                                <img src="{{ asset('images/clamping-unit.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>

            <div class="row m-2">

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Drive Unit 1.1.5
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/driveunit.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Control System 1.1.6
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/controlunit.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Efficiency & Energy Consumption 1.1.7
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/energyeffi.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Auxillay Equipments 1.1.8
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/auxequipment.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row m-2">

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Scientific Moulding 1.1.9
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/scientific.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Process Troubleshooting 1.1.10
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.processtroubleshoot') }}">
                                <img src="{{ asset('images/pts.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        {{-- Sub-Level Courses Moulds --}}
        <div class="mt-4 hideme" id="mouldcourses">
            <div class="row m-2">

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Mould Types 1.2.1
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.mouldtype') }}">
                                <img src="{{ asset('images/mould_type.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Runner System 1.2.2
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.moulding.runner') }}">
                                <img src="{{ asset('images/mould_runner.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Gatting System 1.2.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.gatting') }}">
                                    <img src="{{ asset('images/mould_gatting.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                
               
            </div>
        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="auxcourses">
            <h3 class="text-center mt-5">Auxillaries Course Under Construction</h3>
        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="maintcourses">
            <h3 class="text-center mt-5">Maintenance Course Under Construction</h3>
        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="ppcourses">
            <h3 class="text-center mt-5">Production Planning Course Under Construction</h3>
        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="qualitycourses">
            <h3 class="text-center mt-5">Quality Course Under Construction</h3>
        </div>

        {{-- Sub-Level Courses --}}
        <div class="mt-4 hideme" id="costingcourses">
            <h3 class="text-center mt-5">Costing Course Under Construction</h3>
        </div>

        <div class="mt-4 hideme" id="coursequiz">
            <h3 class="text-center mt-5">Course Quiz</h3>
        </div>

    </div>

@endsection

@section('scripts')
<script>
// Divisions
var level1courses = document.getElementById('level1courses');
var level2courses = document.getElementById('level2courses');
//  Courses
var machine = document.getElementById('machinecourses');
var moulds = document.getElementById('mouldcourses');
var aux = document.getElementById('auxcourses');
var maint = document.getElementById('maintcourses');
var pp = document.getElementById('ppcourses');
var quality = document.getElementById('qualitycourses');
var costing = document.getElementById('costingcourses');
// var quiz = document.getElementById('quiz');
// console.log(quiz);

// Sub Level Buttons
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

// Initially keep courses hidden
function hideCourses()
{
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
}

function showCourse(element)
{
    if(element.id === "machine")
    {
        machine.classList.remove('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "moulds")
    {
        machine.classList.add('hideme');
        moulds.classList.remove('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "aux")
    {
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.remove('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "maint")
    {
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.remove('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "pp")
    {
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.remove('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "quality")
    {
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.remove('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "costing")
    {
        machine.classList.add('hideme');
        moulds.classList.add('hideme');
        aux.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.remove('hideme');
    }


}

document.getElementById('progress').addEventListener('click',function(){
    var x = document.getElementById('prog');
    x.classList.toggle('hideme');
});

var myChart = new DonutChart(document.getElementById("mychart"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .75 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart2 = new DonutChart(document.getElementById("mychart2"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .60 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart3 = new DonutChart(document.getElementById("mychart3"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .80 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart4 = new DonutChart(document.getElementById("mychart4"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .55 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart5 = new DonutChart(document.getElementById("mychart5"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .90 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart6 = new DonutChart(document.getElementById("mychart6"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .80 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart7 = new DonutChart(document.getElementById("mychart7"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .55 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart8 = new DonutChart(document.getElementById("mychart8"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .90 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart9 = new DonutChart(document.getElementById("mychart9"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .75 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart10 = new DonutChart(document.getElementById("mychart10"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .60 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart11 = new DonutChart(document.getElementById("mychart11"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .60 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart12 = new DonutChart(document.getElementById("mychart12"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .80 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart13 = new DonutChart(document.getElementById("mychart13"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .55 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})

var myChart14 = new DonutChart(document.getElementById("mychart14"), {
    r: 15,
    stroke: 4,
    scale: 100,
    items: [
      { label: "A", value: .90 },
    //   { label: "B", value: .1 },
    //   { label: "C", value: .5 },
    ]
})
</script>
@endsection
