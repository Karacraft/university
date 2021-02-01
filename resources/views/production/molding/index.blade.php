@extends('layouts.app')

@section('content')
    {{-- Include Navigation --}}
    @include('includes.front_nav_ait')
    @include('includes.production_nav')

    {{-- Make Container Flew --}}
    <div class="container-flex animated fadeIn">
        {{-- Add Heading Of Page --}}
        @component('components.page_heading')
            @slot('heading')
                Molding
            @endslot
        @endcomponent
        {{-- Tab Headings --}}
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
                <a class="nav-link" id="auxillaries-tab" data-toggle="tab" role="tab" aria-controls="auxillaries" aria-selected="false" href="#auxillaries">Auxiliaries 1.4</a>
            </li>
        </ul> 
        {{-- Tabs Content --}}
        <div class="tab-content" id="myTabContent">
            {{-- Machines 1.1 Data --}}
            <div class="tab-pane fade show active" id="machines" role="tabpanel" aria-labelledby="machines-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    {{-- General Designs --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            General Design & Function 1.1.1
                        @endslot
                        @slot('route')
                            {{ route('production.molding.gendesign') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/gdf.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Injection Unit --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Injection Unit 1.1.2
                        @endslot
                        @slot('route')
                            {{ route('production.molding.injectunit') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/injector1.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Clamping Unit --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Clamping Unit 1.1.3
                        @endslot
                        @slot('route')
                            {{ route('production.molding.clampingunit') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/clampingunit.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Process Troubleshooting --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Process Troubleshooting 1.1.4
                        @endslot
                        @slot('route')
                            {{ route('production.molding.processtroubleshoot') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/troubleshoot.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Energy --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                        Energy 1.1.5
                        @endslot
                        @slot('route')
                            {{ route('production.molding.energy') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/energy.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Energy --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Efficiency 1.1.6
                        @endslot
                        @slot('route')
                            {{ route('production.molding.efficiency') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/efficiency.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Hydraulics --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Hydraulics 1.1.7
                        @endslot
                        @slot('route')
                            {{ route('production.molding.hydraulics') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/hydraulics.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Control Panels / PLC --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Control Panels / PLC 1.1.8
                        @endslot
                        @slot('route')
                            {{ route('production.molding.controlpanel') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/controlpanel.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Process Parameters 1.1.9 --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Process Parameters 1.1.9
                        @endslot
                        @slot('route')
                            {{ route('production.molding.processparam') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/processparameters.jpg') }}
                        @endslot
                    @endcomponent
                    {{-- Materials / Parts Movement 1.1.10  --}}
                    @component('components.tab_content')
                        @slot('tabheader')
                            Materials / Parts Movement 1.1.10 
                        @endslot
                        @slot('route')
                            {{ route('production.molding.matpartsmovement') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/matpartsmovement.jpg') }}
                        @endslot
                    @endcomponent

                </div>
            </div>
            {{-- Mold 1.2 Data --}}
            <div class="tab-pane fade" id="molds" role="tabpanel" aria-labelledby="mold-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Mold Types 1.2.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.moldtype') }}">
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
                                Gating System 1.2.3
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

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Maintenance 1.2.5
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.molding.maintenance') }}" target="_blank">
                                    <img src="{{ asset('images/mold_maintenance.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Materials 1.3 Data --}}
            <div class="tab-pane fade" id="materials" role="tabpanel" aria-labelledby="materials-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Plastics 1.3.1
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.plastics') }}" >
                                    <img src="{{ asset('images/production/moulding/plastics.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                PolyPropylene(PP) 1.3.2
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.pp') }}" >
                                    <img src="{{ asset('images/production/moulding/polypropylene.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Acrylonitrile Butadiene Styrene (ABS) 1.3.3
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.abs') }}" >
                                    <img src="{{ asset('images/production/moulding/abs.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Polyamide (Nylon) 1.3.4
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.nylon') }}" >
                                    <img src="{{ asset('images/production/moulding/polyamide.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                High Density Polyethylene (HDPE) 1.3.5
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.hdpe') }}" >
                                    <img src="{{ asset('images/production/moulding/hdpe.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Polycarbonate (PC) 1.3.6
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.pc') }}" >
                                    <img src="{{ asset('images/production/moulding/polycarbonate.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                        <div class="card bg-primary shadow-sm, text-white">
                            <div class="card-header bg-primary">
                                Polyethylene (PE) 1.3.7
                            </div>
                            <div class="card-body bg-secondary">
                                <a href="{{ route('production.moulding.materials.pe') }}" >
                                    <img src="{{ asset('images/production/moulding/polyethylene.jpg') }}" class="card-img-bottom">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            {{-- Auxillaries 1.4 Data --}}
            <div class="tab-pane fade" id="auxillaries" role="tabpanel" aria-labelledby="auxillaries-tab">
                <div class="row m-2 animated fadeIn mt-2">

                    @component('components.tab_content')
                        @slot('tabheader')
                            Chiller 1.4.1
                        @endslot
                        @slot('route')
                            {{ route('production.moulding.auxillaries.chiller') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/chiller.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Cooling Tower 1.4.2
                        @endslot
                        @slot('route')
                            {{ route('production.moulding.auxillaries.coolingtower') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/coolingtower.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Mold Temperature Controller 1.2.3
                        @endslot
                        @slot('route')
                            {{ route('production.moulding.auxillaries.modtempcontroller') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/moldtemperaturecontroller.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Hot Runner Temperature Controller 1.2.4
                        @endslot
                        @slot('route')
                            {{ route('production.moulding.auxillaries.hotrunnertempcontroller') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/hotrunnertempcontroller.jpg') }}
                        @endslot
                    @endcomponent
                    @component('components.tab_content')
                        @slot('tabheader')
                            Material Drying & Dehumidifying Unit 1.2.5
                        @endslot
                        @slot('route')
                            {{ route('production.moulding.auxillaries.materialdryingdehumid') }}
                        @endslot
                        @slot('image')
                            {{ asset('images/production/moulding/matdhumidunit.jpg') }}
                        @endslot
                    @endcomponent

                </div>
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
