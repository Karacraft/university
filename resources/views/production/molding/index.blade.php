@extends('layouts.app')

@section('content')
{{-- <p
  class="content-before content-after content-hover-before"
  tw-content-before="🧡"
  tw-content-hover-before="💖"
  tw-content-after="💙️"
>
  Tailwind CSS
</p> --}}
{{-- <svg xmlns="http://www.w3.org/2000/svg">
    <circle cx="20" cy="20" r="10" stroke="black" stroke-width="2" fill="red"/>
 </svg>  --}}

{{-- {{ \Request::route()->getName() }} --}}
{{-- {{ Route::currentRouteAction()}} --}}
<div class="grid grid-cols-12">

        <div class="col-span-12 md:col-span-3 lg:col-span-2">
            <div class="pt-4 pl-4 pb-2 uppercase font-semibold border-b">Molding Menu </div>
            {{-- <div class="pt-4 pl-4 pb-2 uppercase font-semibold border-b content-before" tw-content-before="❄">Molding Menu --}}
                {{-- <span id="triangle-right" aria-hidden="true"></span> --}}
                {{-- <span aria-hidden="true">&#9650;</span> --}}
                {{-- <span aria-hidden="true"><img src="../images/grip.png" alt=""></span> --}}
            {{-- </div> --}}
            
            <ul class="p-2 w-full">
                <li class="">
                    <a id="machines" onclick="showTab('machines');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Machines 1.1</a>
                </li>
                <li class="">
                    <a id="molds" onclick="showTab('molds');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Molds 1.2</a>
                </li>
                <li class="">
                    <a id="materials" onclick="showTab('materials');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Materials 1.3</a>
                </li>
                <li class="">
                    <a id="auxillaries" onclick="showTab('auxillaries');makeActive(this);" class="sidemenu block px-2 py-1 hover:bg-blue-700 hover:rounded hover:text-white cursor-pointer">Auxiliaries 1.4</a>
                </li>
            </ul>
        </div>

        <div class="col-span-12 md:col-span-9 lg:col-span-10">
            
            <div id="machines" class="mytabs p-4 w-full h-full">
                {{-- Heading --}}
               
                <div class="pb-2 uppercase font-semibold ">Machines 1.1</div>
                {{-- Content --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                    <x-video-card tab-header="General Design & Function 1.1.1" route-name="{{ route('production.molding.gendesign') }}" image="{{ asset('images/production/moulding/gdf.jpg') }}" />

                    <x-video-card tab-header="Injection Unit 1.1.2" route-name="{{ route('production.molding.injectunit') }}" image="{{ asset('images/production/moulding/injector1.jpg') }}" />

                    <x-video-card tab-header="Clamping Unit 1.1.3" route-name="{{ route('production.molding.clampingunit') }}" image="{{ asset('images/production/moulding/clampingunit.jpg') }}" />
                    
                    <x-video-card tab-header="Process Troubleshooting 1.1.4" route-name="{{ route('production.molding.processtroubleshoot') }}" image="{{ asset('images/production/moulding/troubleshoot.jpg') }}" />

                    <x-video-card tab-header="Energy 1.1.5" route-name="{{ route('production.molding.energy') }}" image="{{ asset('images/production/moulding/energy.jpg') }}"/>

                    <x-video-card tab-header="Efficiency 1.1.6" route-name="{{ route('production.molding.efficiency') }}" image="{{ asset('images/production/moulding/efficiency.jpg') }}"/>
                    
                    <x-video-card tab-header="Hydraulics 1.1.7" route-name="{{ route('production.molding.hydraulics') }}" image="{{ asset('images/production/moulding/hydraulics.jpg') }}"/>

                    <x-video-card tab-header="Control Panels / PLC 1.1.8" route-name="{{ route('production.molding.controlpanel') }}" image="{{ asset('images/production/moulding/controlpanel.jpg') }}"/>

                    <x-video-card tab-header="Process Parameters 1.1.9" route-name="{{ route('production.molding.processparam') }}" image="{{ asset('images/production/moulding/processparameters.jpg') }}"/>

                    <x-video-card tab-header="Materials / Parts Movement 1.1.10" route-name="{{ route('production.molding.matpartsmovement') }}" image="{{ asset('images/production/moulding/matpartsmovement.jpg') }}"/>

                </div>

            </div>

            <div id="molds" class="mytabs p-4 w-full h-full hidden">
                <div class="pb-2 uppercase font-semibold">Molds 1.2</div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">
                    <x-video-card tab-header="Mold Types 1.2.1" route-name="{{ route('production.molding.moldtype') }}" image="{{ asset('images/mould_type.jpg') }}" />
                   
                    <x-video-card tab-header="Runner System 1.2.2" route-name="{{ route('production.molding.runner') }}" image="{{ asset('images/mould_runner.jpg') }}" />
                   
                    <x-video-card tab-header="Gating System 1.2.3" route-name="{{ route('production.molding.gatting') }}"  image="{{ asset('images/mould_gatting.jpg') }}"  />
                   
                    <x-video-card tab-header="Components 1.2.4" route-name="{{ route('production.molding.component') }}"  image="{{ asset('images/mould_component.jpg') }}"  />
                   
                    <x-video-card tab-header="Maintenance 1.2.5" route-name="{{ route('production.molding.maintenance') }}"  image="{{ asset('images/mold_maintenance.jpg') }}"  />
                </div>
            </div>

            <div id="materials" class="mytabs p-4 w-full h-full hidden">
                <div class="pb-2 uppercase font-semibold">Materials 1.3</div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                    <x-video-card tab-header="Plastics 1.3.1" route-name="{{ route('production.moulding.materials.plastics') }}" image="{{ asset('images/production/moulding/plastics.jpg') }}" />

                    <x-video-card tab-header="PolyPropylene(PP) 1.3.2" route-name="{{ route('production.moulding.materials.pp') }}" image="{{ asset('images/production/moulding/polypropylene.jpg') }}" />

                    <x-video-card tab-header="Acrylonitrile Butadiene Styrene (ABS) 1.3.3" route-name="{{ route('production.moulding.materials.abs') }}" image="{{ asset('images/production/moulding/abs.jpg') }}" />

                    <x-video-card tab-header="Polyamide (Nylon) 1.3.4" route-name="{{ route('production.moulding.materials.nylon') }}" image="{{ asset('images/production/moulding/polyamide.jpg') }}" />
                   
                    <x-video-card tab-header="High Density Polyethylene (HDPE) 1.3.5" route-name="{{ route('production.moulding.materials.hdpe') }}" image="{{ asset('images/production/moulding/hdpe.jpg') }}" />

                    <x-video-card tab-header="Polycarbonate (PC) 1.3.6" route-name="{{ route('production.moulding.materials.pc') }}" image="{{ asset('images/production/moulding/polycarbonate.jpg') }}" />

                    <x-video-card tab-header="Polyethylene (PE) 1.3.7" route-name="{{ route('production.moulding.materials.pe') }}" image="{{ asset('images/production/moulding/polyethylene.jpg') }}" />
                   
                </div>
            </div>

            <div id="auxillaries" class="mytabs p-4 w-full h-full hidden">

                <div class="pb-2 uppercase font-semibold">Auxillaries 1.4</div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2">

                    <x-video-card tab-header="Chiller 1.4.1" route-name="{{ route('production.moulding.auxillaries.chiller') }}" image="{{ asset('images/production/moulding/chiller.jpg') }}" />

                    <x-video-card tab-header="Cooling Tower 1.4.2" route-name="{{ route('production.moulding.auxillaries.coolingtower') }}" image="{{ asset('images/production/moulding/coolingtower.jpg') }}" />

                    <x-video-card tab-header="Mold Temperature Controller 1.2.3" route-name="{{ route('production.moulding.auxillaries.modtempcontroller') }}" image="{{ asset('images/production/moulding/moldtemperaturecontroller.jpg') }}" />

                    <x-video-card tab-header="Hot Runner Temperature Controller 1.2.4" route-name="{{ route('production.moulding.auxillaries.hotrunnertempcontroller') }}" image="{{ asset('images/production/moulding/hotrunnertempcontroller.jpg') }}" />

                    <x-video-card tab-header="Material Drying & Dehumidifying Unit 1.2.5" route-name="{{ route('production.moulding.auxillaries.materialdryingdehumid') }}" image="{{ asset('images/production/moulding/matdhumidunit.jpg') }}" />
                    
                </div>

            </div>
         
        </div>
   </div>

@endsection

@section('scripts')
<script>
document.addEventListener("DOMContentLoaded",()=>{
    
    let activeLink = localStorage.getItem("activeLink")
    if (activeLink != "molding" || activeLink == "")
    { 
        localStorage.clear()
        localStorage.setItem("activeLink","molding")
        console.log('local storage cleared')
    }
    let tabID = localStorage.getItem("activeTab")
    if (tabID != null)
    {
        console.log("in tab id " + tabID);
        localStorage.setItem('activeTab',tabID)
        showTab(tabID)
        makeActive(document.getElementById(tabID))
    } else {
        
        console.log("in tabid none");
        localStorage.setItem('activeTab',"machines")
        showTab("machines")
        makeActive(document.getElementById("machines"))
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