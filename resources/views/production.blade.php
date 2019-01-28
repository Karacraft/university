@extends('layouts.app')


@section('content')
     {{-- Create Responvive Departments List --}}
     <div class="">
        {{-- Tabls for Every Department --}}
        <ul class="nav nav-pills animated fadeIn" role="tablist">
            <li class="nav-item">
                <a class="nav-link rounded-0 active" href="#moulding" data-toggle="tab">Moulding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0" href="#epp" data-toggle="tab">Epp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0" href="#sw" data-toggle="tab">SW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#vm" data-toggle="tab">VM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#wheeler" data-toggle="tab">2 Wheeler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#paintshop" data-toggle="tab">Paint Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#hcp" data-toggle="tab">HCP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#chrome" data-toggle="tab">Chrome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#assy" data-toggle="tab">Assembly</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#lamps" data-toggle="tab">Lamps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link rounded-0"  href="#abm" data-toggle="tab">ABM</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content m-2">
            <div class="tab-pane active" id="moulding">
                @include('production.moulding')
            </div>
            <div class="tab-pane" id="epp">
                <div class="text-center">
                    <h3 class="mt-5">About EPP</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="sw">
                <div class="text-center">
                    <h3 class="mt-5">About Steering Wheel</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="vm">
                <div class="text-center">
                    <h3 class="mt-5">About Vaccum Moulding</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="wheeler">
                <div class="text-center">
                    <h3 class="mt-5">About 2 Wheeler</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="paintshop">
                <div class="text-center">
                    <h3 class="mt-5">About Paintshop</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>    
            </div>
            <div class="tab-pane" id="hcp">
                <div class="text-center">
                    <h3 class="mt-5">About Health Care Products</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="chrome">
                <div class="text-center">
                    <h3 class="mt-5">About Chrome</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="assy">
                <div class="text-center">
                    <h3 class="mt-5">About Assembly</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="lamps">
                <div class="text-center">
                    <h3 class="mt-5">About Lamps</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
            <div class="tab-pane" id="abm">
                <div class="text-center">
                    <h3 class="mt-5">About ABM</h3>
                    <img src="{{ asset('images/underconstruction.jpg') }}" class="img-fluid animated fadeIn center mt-5">
                </div>
            </div>
        </div>
    </div>
@endsection
