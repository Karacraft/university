{{-- Navigation Bar --}}
<div class="container-flex" id="app">
    {{-- Top Navigation Bar --}}
    <nav class="navbar navbar-expand-lg py-0 navbar-dark bg-secondary">
        <a href="{{ route('landing') }}" class="navbar-brand ml-2">
            {{-- Company Logo --}}
            <img src="{{ asset('images/avtlogo.png') }}" alt="Auvitronics Logo" srcset="" width="40px" height="auto">
            {{-- Company Name --}}
            {{ config('app.name') }}
        </a>
        
        <!--
        {{-- Collapse Button --}}
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarUSerArea" aria-controls="navbarUSerArea" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        -->

        {{-- Collapsable Navbar --}}
        <div class="collapse navbar-collapse" id="navbarUSerArea">
            <ul class="navbar-nav ml-auto">
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" title="Courses"><i class="fas fa-book fa-2x"></i></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" title="Announcements"><i class="fas fa-bell fa-2x"></i></a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" title="Profile"><i class="fas fa-user fa-2x"></i></a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}" title="Student's Profile">
                        <img src="{{ asset('images/ceo.jpg') }}" alt="" srcset="" width="30px" class="img-fluid rounded">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Top Navigation Bar --}}

   {{-- Department Navigation Start --}}
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-1" id="departmentnav">
    <a class="navbar-brand text-white" href="#">Departments | </a>
    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link bg-primary {{ Route::currentRouteName() == 'production' ? 'active' : '' }}" href="{{ route('production') }}">Production</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Delivery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Material</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Equipment</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Plant 5S</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">PE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Efficiency</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Quality Assurance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}">Product Development</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning" href="{{ route('underconstruction') }}">Information Technology</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning" href="{{ route('underconstruction') }}">Human Resource</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning" href="{{ route('underconstruction') }}">Marketing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning" href="{{ route('underconstruction') }}">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-warning" href="{{ route('underconstruction') }}">Finance</a>
            </li>
                
        </ul>
    </div>

</nav>
{{-- Department Navigation End --}}

</div>
{{-- Navigation Bar --}}