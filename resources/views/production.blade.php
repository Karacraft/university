@extends('layouts.app')


@section('content')
     {{-- Create Responvive Departments List --}}
     <div class="">
        {{-- Tabls for Every Department --}}
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#moulding" data-toggle="tab">Moulding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#epp" data-toggle="tab">Epp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sw" data-toggle="tab">SW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#vm" data-toggle="tab">VM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#wheeler" data-toggle="tab">2 Wheeler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#paintshop" data-toggle="tab">Paint Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#hcp" data-toggle="tab">HCP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#chrome" data-toggle="tab">Chrome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#molding" data-toggle="tab">Molding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#gentsassy" data-toggle="tab">Gents Assy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#ladiesassy" data-toggle="tab">Ladies Assy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#lamps" data-toggle="tab">Lamps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#abm" data-toggle="tab">ABM</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content m-2">
            <div class="tab-pane active" id="moulding">
                @include('production.moulding')
            </div>
            <div class="tab-pane" id="epp">About EPP</div>
            <div class="tab-pane" id="sw">About Steering Wheel</div>
            <div class="tab-pane" id="vm">About VM</div>
            <div class="tab-pane" id="wheeler">About 2 Wheeler</div>
            <div class="tab-pane" id="paintshop">About PaintShop</div>
            <div class="tab-pane" id="hcp">About HCP</div>
            <div class="tab-pane" id="chrome">About Chrome</div>
            <div class="tab-pane" id="molding">About Molding</div>
            <div class="tab-pane" id="gentsassy">About Gents Assy</div>
            <div class="tab-pane" id="ladiesassy">About Ladies Assy</div>
            <div class="tab-pane" id="lamps">About Lamps</div>
            <div class="tab-pane" id="abm">About ABM</div>
        </div>
    </div>
@endsection
