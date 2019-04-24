@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

    {{-- Make Container Flew --}}
    <div class="container-flex animated fadeIn">
        {{-- Add Heading Of Page --}}
        <div class="col-lg-3 col-md-6 col-sm-6">
            <h4 class="border-top border-bottom shadow-sm p-2">Molding</h4>
        </div>

        <ul class="nav nav-tabs" id="molding_tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="machines-tab" data-toggle="tab" role="tab" aria-controls="machines" aria-selected="true" href="#machines">Machines 1.1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="molds-tab" data-toggle="tab" role="tab" aria-controls="molds" aria-selected="false" href="#molds">Molds 1.2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="materials-tab" data-toggle="tab" role="tab" aria-controls="materials" aria-selected="false" href="#materials">Materials 1.3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="auxillaries-tab" data-toggle="tab" role="tab" aria-controls="auxillaries" aria-selected="false" href="#auxillaries">Auxillaries 1.4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="mold_defacts-tab" data-toggle="tab" role="tab" aria-controls="mold_defacts" aria-selected="false" href="#mold_defacts">Mold Defects 1.5</a>
            </li>
        </ul> 

        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Machines 1.1 Data --}}
            <div class="tab-pane fade show active" id="machines" role="tabpanel" aria-labelledby="home-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                General Design & Function 1.1.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.gendesign') }}" target="_blank">
                                    <img src="{{ asset('images/gdf.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Injection Unit 1.1.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.injectunit') }}" target="_blank">
                                    <img src="{{ asset('images/injector1.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Clamping Unit 1.1.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.clampingunit') }}" target="_blank">
                                    <img src="{{ asset('images/clamping-unit.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Process Troubleshooting 1.1.4
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.processtroubleshoot') }}" target="_blank">
                                    <img src="{{ asset('images/troubleshoot.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Energy 1.1.5
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.energy') }}" target="_blank">
                                    <img src="{{ asset('images/energy.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Efficiency 1.1.6
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.efficiency') }}" target="_blank">
                                    <img src="{{ asset('images/efficiency.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Hydraulics 1.1.7
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.hydraulics') }}" target="_blank">
                                    <img src="{{ asset('images/hydraulics.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Control Panels / PLC 1.1.8
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.controlpanel') }}" target="_blank">
                                    <img src="{{ asset('images/plc.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Process Parameters 1.1.9
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.processparam') }}" target="_blank">
                                    <img src="{{ asset('images/parameters.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Materials / Parts Movement 1.1.10 
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.matpartsmovement') }}" target="_blank">
                                    <img src="{{ asset('images/material_movement.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Mold 1.2 Data --}}
            <div class="tab-pane fade" id="molds" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Mold Types 1.2.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.mouldtype') }}">
                                    <img src="{{ asset('images/mould_type.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Runner System 1.2.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.runner') }}" target="_blank">
                                    <img src="{{ asset('images/mould_runner.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Gatting System 1.2.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.gatting') }}" target="_blank">
                                    <img src="{{ asset('images/mould_gatting.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Components 1.2.4
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.component') }}" target="_blank">
                                    <img src="{{ asset('images/mould_component.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Materials 1.3 Data --}}
            <div class="tab-pane fade" id="materials" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Poly Propylene [PP] 1.3.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials') }}" >
                                    <img src="{{ asset('images/material.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Acrylonitrile butadiene styrene [ABS] 1.3.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials') }}" >
                                    <img src="{{ asset('images/material.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            {{-- Auxillaries 1.4 Data --}}
            <div class="tab-pane fade" id="auxillaries" role="tabpanel" aria-labelledby="contact-tab">
                The Auxillaries
            </div>
            {{-- Mold Defacts 1.5 Data --}}
            <div class="tab-pane fade" id="mold_defacts" role="tabpanel" aria-labelledby="contact-tab">
                The Mold Defects
            </div>
        </div>

    </div>

@endsection

@section('scripts')
<script>
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
