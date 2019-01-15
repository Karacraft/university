@extends('layouts.app')


@section('content')
     {{-- Create Responvive Departments List --}}
     <div class="container-flex">
        {{-- Tabls for Every Department --}}
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href="#moulding" data-toggle="tab">Moulding</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#epp" role="tab" data-toggle="tab">Epp</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#sw" role="tab" data-toggle="tab">SW</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#vm" data-toggle="tab">VM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#2wheeler" data-toggle="tab">2 Wheeler</a>
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
                <a class="nav-link"  href="#lasiesassy" data-toggle="tab">Ladies Assy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#lamps" data-toggle="tab">Lamps</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="#abm" data-toggle="tab">ABM</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active">&nbsp;</div>
            <div role="tabpanel" class="tab-pane fade" id="moulding">Show Production Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="epp">Show Delivery Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="sw">Show SW Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="vm">Show VM Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="plantss">Show Plant SS Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="pe">Show Material Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="efficiency">Show Efficiency Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="qa">Show Quality Assurance Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="pd">Show Product Development Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="it">Show Information Tech Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="hr">Show Human Resource Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="admin">Show Admin Menu</div>
            <div role="tabpanel" class="tab-pane fade" id="finance">Show Finance Menu</div>
        </div>
    </div>
@endsection
