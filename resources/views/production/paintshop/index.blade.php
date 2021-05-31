@extends('layouts.app')

@section('content')
<div class="grid grid-cols-12">

    <div class="col-span-12 md:col-span-3 lg:col-span-2">
        <div class="pt-4 pl-4 pb-2 uppercase font-semibold border-b">Paintshop Menu </div>
        
        <ul class="p-2 w-full">
            <li class="">
                <a id="chemical" onclick="showTab('chemical');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Chemical 2.1</a>
            </li>
            <li class="">
                <a id="spraybooth" onclick="showTab('spraybooth');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Spray Booth 2.2</a>
            </li>
            <li class="">
                <a id="oven" onclick="showTab('oven');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Oven 2.3</a>
            </li>
            <li class="">
                <a id="airfilteration" onclick="showTab('airfilteration');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Air Filteration 2.4</a>
            </li>
            <li class="">
                <a id="paintingequipment" onclick="showTab('paintingequipment');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Painting Equipment 2.5</a>
            </li>
            <li class="">
                <a id="robot" onclick="showTab('robot');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Robot 2.6</a>
            </li>
        </ul>
    </div>

    <div class="col-span-12 md:col-span-9 lg:col-span-10">
        <div id="chemical" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Paintshop 2.1</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="Paint 2.1.1" route-name="{{ route('production.paintshop.chemical.paint') }}" image="{{ asset('images/production/paintshop/paint.jpg') }}" />

                <x-video-card tab-header="Hardener 2.1.2" route-name="{{ route('production.paintshop.chemical.hardner') }}" image="{{ asset('images/production/paintshop/hardner.jpg') }}" />

                <x-video-card tab-header="Thinners 2.1.3" route-name="{{ route('production.paintshop.chemical.thinner') }}" image="{{ asset('images/production/paintshop/thinner.jpg') }}" />
                
                <x-video-card tab-header="IPA 2.1.4" route-name="{{ route('production.paintshop.chemical.ipa') }}" image="{{ asset('images/production/paintshop/ipa.jpg') }}" />

            </div>

        </div>

        <div id="spraybooth" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Spray Booth 2.2</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="Airflow 2.2.1" route-name="{{ route('production.paintshop.spraybooth.airflow') }}" image="{{ asset('images/production/paintshop/airflow.jpg') }}" />

                <x-video-card tab-header="Water Curtain 2.2.2" route-name="{{ route('production.paintshop.spraybooth.watercurtain') }}" image="{{ asset('images/production/paintshop/watercurtain.jpg') }}" />

                <x-video-card tab-header="Paint Filters 2.2.3" route-name="{{ route('production.paintshop.spraybooth.paintfilters') }}" image="{{ asset('images/production/paintshop/paintfilter.jpg') }}" />
                
                <x-video-card tab-header="Conveyor 2.2.4" route-name="{{ route('production.paintshop.spraybooth.conveyor') }}" image="{{ asset('images/production/paintshop/conveyor.jpg') }}" />
                
                <x-video-card tab-header="Painting Jigs 2.2.5" route-name="{{ route('production.paintshop.spraybooth.paintingjigs') }}" image="{{ asset('images/production/paintshop/paintingjig.jpg') }}" />

            </div>

        </div>

        <div id="oven" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Oven 2.3</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="IR Oven 2.3.1" route-name="{{ route('production.paintshop.oven.iroven') }}" image="{{ asset('images/production/paintshop/iroven.jpg') }}" />

                <x-video-card tab-header="UV Oven 2.3.2" route-name="{{ route('production.paintshop.oven.uvoven') }}" image="{{ asset('images/production/paintshop/uvoven.jpg') }}" />

            </div>

        </div>

        <div id="airfilteration" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Air Filteration 2.4</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="Mesh Filter 2.4.1" route-name="{{ route('production.paintshop.airfilteration.meshfilter') }}" image="{{ asset('images/production/paintshop/meshfilter.jpg') }}" />

                <x-video-card tab-header="Bag Filter 2.4.2" route-name="{{ route('production.paintshop.airfilteration.bagfilter') }}" image="{{ asset('images/production/paintshop/bagfilter.jpg') }}" />

                <x-video-card tab-header="Ceiling Filter 2.4.3" route-name="{{ route('production.paintshop.airfilteration.ceilingfilter') }}" image="{{ asset('images/production/paintshop/ceilingfilter.jpg') }}" />

            </div>

        </div>

        <div id="paintingequipment" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Painting Equipment 2.5</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="Spray Guns 2.5.1" route-name="{{ route('production.paintshop.paintingequipments.sprayguns') }}" image="{{ asset('images/production/paintshop/spraygun.jpg') }}" />

                <x-video-card tab-header="Paint Pump 2.5.2" route-name="{{ route('production.paintshop.paintingequipments.paintpumps') }}" image=" {{ asset('images/production/paintshop/paintpump.jpg') }}" />

            </div>

        </div>

        <div id="robot" class="mytabs p-4 w-full h-full">
            {{-- Heading --}}
            <div class="pb-2 uppercase font-semibold ">Robot 2.6</div>
            {{-- Content --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                <x-video-card tab-header="Yaskawa Robots 2.6.1" route-name="{{ route('production.paintshop.robot.yaskawarobots') }}" image="{{ asset('images/production/paintshop/yaskawarobots.jpg') }}" />

                <x-video-card tab-header="NX100 2.6.2" route-name="{{ route('production.paintshop.robot.nx100prog') }}" image="{{ asset('images/production/paintshop/dx100programming.jpg') }}" />

                <x-video-card tab-header="DX200 2.6.3" route-name="{{ route('production.paintshop.robot.dx200prog') }}" image="{{ asset('images/production/paintshop/dx200programming.jpg') }}" />

            </div>

        </div>
    </div>

</div>

@endsection
@section('scripts')
<script>
document.addEventListener("DOMContentLoaded",()=>{

    let activeLink = localStorage.getItem("activeLink")
    if (activeLink != "paintshop" || activeLink == "")
    { 
        localStorage.clear()
        localStorage.setItem("activeLink","paintshop")
        console.log('local storage cleared')
    }
    let tabID = localStorage.getItem("activeTab")
    if (tabID != null)
    {
        // console.log("in tab id " + tabID);
        showTab(tabID)
        makeActive(document.getElementById(tabID))
    } else {
        // console.log("in tabid none");
        localStorage.setItem('activeTab',"chemical")
        showTab("chemical")
        makeActive(document.getElementById("chemical"))
    }
})
function showTab(tabName)
{
    var tabs = document.getElementsByClassName("mytabs");
    for (let index = 0; index < tabs.length; index++) {
        const element = tabs[index];
        if (element.id == tabName)
        {
            element.classList.remove("hidden")
            localStorage.setItem("activeTab",tabName)
        }
        else {
            element.classList.add("hidden")
        }
    }
}

function makeActive(element)
{
    console.log(element);
    var sideMenu = document.getElementsByClassName("sidemenu");
    for (let index = 0; index < sideMenu.length; index++) {
        const element = sideMenu[index];
        element.classList.remove("bg-blue-700")
        element.classList.remove("text-white")
    }
    element.classList.add("bg-blue-700")
    element.classList.add("text-white")
}
</script>
@endsection