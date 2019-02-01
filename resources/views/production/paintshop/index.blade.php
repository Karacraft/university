@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

    <div class="mt-4 animated fadeIn">

        {{-- Level Buttons --}}
        <div class="row mt-2">
            <div class="col-3">
                <div>
                    <h4 class="border-top border-bottom shadow-sm p-2">Paint Shop</h4>
                    {{-- Level Navigation --}}
                    <div class="btn-group btn-group-toggle btn-group-sm" data-toggle="buttons">
                        <span class="btn btn-warning">Select Level</span>
                        <label class="btn btn-outline-primary">
                            <input type="radio" name="options" autocomplete="off" id="level1" onchange="toggleCheckbox(this)"> Level-01
                        </label>
                        <label class="btn  btn-outline-primary">
                            <input type="radio" name="options" autocomplete="off" id="level2" onchange="toggleCheckbox(this)"> Level-02
                        </label>
                    </div>
                </div>
            </div>
            {{-- Progress --}}
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
            {{-- Progress --}}
        </div>

        {{-- Sub-Level Buttons --}}
        <div class="mt-4">
            {{-- Level 01 Segements--}}
            <div id="level1course" class="hideme mt-2 animated fadeIn">
                <h4>Level-01</h4>
                {{-- Create a row to display proper cards --}}
                <div class="row">
                    <div class="col-2">
                        <a id="machine" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Machines 2.1</a>
                    </div>
                    {{-- <div class="col">
                        <a id="maint" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Maintenance 2.2</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="pp" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Production Planning 2.3</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="quality" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Quality 2.4</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="costing" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Costing 2.5</a>
                    </div> --}}
                    {{-- <div class="col">
                        <a id="quiz" class="btn btn-secondary shadow-sm text-white btn-sm btn-block" onclick="showCourse(this)">Course Quiz</a>
                    </div> --}}
                </div>
              
            </div>
            {{-- Level 01 Segments --}}

            {{-- Level 02 --}}
            <div id="level2course" class="hideme mt-2 ml-5 animated fadeIn">
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

        {{-- Topics of MACHINES 1.1 --}}
        <div class="mt-4 hideme animated fadeIn " id="machinecourses">
            <div class="row m-2">
                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Material 2.1.1
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.materials') }}">
                                <img src="{{ asset('images/ps_machine_material.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Spary Booth & Air Handling Unit 2.1.2
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.sprayboothahu') }}">
                                <img src="{{ asset('images/ps_machine_ahu.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Robot 2.1.3
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.robot') }}">
                                <img src="{{ asset('images/ps_machine_robot.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Spray Gun with Pump 2.1.4
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.sprayguns') }}">
                                <img src="{{ asset('images/ps_machine_spraygun.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>
               
            </div>

            <div class="row m-2">

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            I.R Oven 2.1.5
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.iroven') }}">
                                <img src="{{ asset('images/ps_machine_over_ir.jpg') }}" class="card-img-bottom">
                            </a>
                            {{-- <img src="{{ asset('images/ps_machine_over_ir.jpg') }}" class="card-img-bottom"> --}}
                        </div>
                    </div>
                </div>

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Teaching Controller Unit 2.1.6
                        </div>
                        <div class="card-body bg-secondary">
                            <img src="{{ asset('images/ps_machine_tc.jpg') }}" class="card-img-bottom">
                        </div>
                    </div>
                </div> --}}

                <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Coneyors 2.1.7
                        </div>
                        <div class="card-body bg-secondary">
                            <a href="{{ route('production.paintshop.conveyors') }}">
                                <img src="{{ asset('images/conveyor.jpg') }}" class="card-img-bottom">
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Efficiency & Energy Consumption 2.1.8
                        </div>
                        <div class="card-body bg-secondary">
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row m-2">

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Process Troubleshooting 2.1.9
                        </div>
                        <div class="card-body bg-secondary">
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-3">
                    <div class="card bg-primary shadow-sm, text-white">
                        <div class="card-header bg-primary">
                            Viscosity Cup 2.1.10
                        </div>
                        <div class="card-body bg-secondary">
                        </div>
                    </div>
                </div> --}}

            </div>

        </div>
      
        {{-- Topics Of Maintenance --}}
        <div class="mt-4 hideme" id="maintcourses">
            <h3 class="text-center mt-5">Maintenance Course Under Construction</h3>
        </div>

        {{-- Topics Of Production Polanning--}}
        <div class="mt-4 hideme" id="ppcourses">
            <h3 class="text-center mt-5">Production Planning Course Under Construction</h3>
        </div>

        {{-- Topics Of Quality--}}
        <div class="mt-4 hideme" id="qualitycourses">
            <h3 class="text-center mt-5">Quality Course Under Construction</h3>
        </div>

        {{-- Topics Of Costing--}}
        <div class="mt-4 hideme" id="costingcourses">
            <h3 class="text-center mt-5">Costing Course Under Construction</h3>
        </div>

        {{-- <div class="mt-4 hideme" id="coursequiz">
            <h3 class="text-center mt-5">Course Quiz</h3>
        </div> --}}

    </div>

@endsection

@section('scripts')
<script>
// Divisions
var level1course = document.getElementById('level1course');
var level2course = document.getElementById('level2course');
//  Courses For Paint Shop
var machine = document.getElementById('machinecourses');
var maint = document.getElementById('maintcourses');
var pp = document.getElementById('ppcourses');
var quality = document.getElementById('qualitycourses');
var costing = document.getElementById('costingcourses');
// var quiz = document.getElementById('quiz');

// Sub Level Buttons
function toggleCheckbox(element)
{
    if(element.id == 'level1')
    {
        level1course.classList.remove('hideme');
        level2course.classList.add('hideme');
    }
    if(element.id === 'level2')
    {
        level1course.classList.add('hideme');
        level2course.classList.remove('hideme');
    }
    //  Hide Courses
    hideCourses();
}

// Initially keep courses hidden
function hideCourses()
{
        machine.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
}

//  Show the Course Topics
function showCourse(element)
{
    if(element.id === "machine")
    {
        machine.classList.remove('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "maint")
    {
        machine.classList.add('hideme');
        maint.classList.remove('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "pp")
    {
        machine.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.remove('hideme');
        quality.classList.add('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "quality")
    {
        machine.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.remove('hideme');
        costing.classList.add('hideme');
    }
    else if(element.id === "costing")
    {
        machine.classList.add('hideme');
        maint.classList.add('hideme');
        pp.classList.add('hideme');
        quality.classList.add('hideme');
        costing.classList.remove('hideme');
    }


}
//  Progress Listener
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
