{{-- Navigation Bar --}}
<div class="container-flex" id="app">
    {{-- Top Navigation Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="" class="navbar-brand ml-2">
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
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Profile"><i class="fas fa-user fa-2x"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="User Pic">
                        <img src="{{ asset('images/ceo.png') }}" alt="" srcset="" width="30px" class="img-fluid rounded">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    {{-- Top Navigation Bar --}}

    {{-- Department Navigation Start --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">Departments</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'production']) }}">Production</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'delivery']) }}">Delivery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'material']) }}">Material</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'equipment']) }}">Equipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'plantss']) }}">Plant SS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'pe']) }}">PE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'efficiency']) }}">Efficiency</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'qa']) }}">Quality Assurance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-info" href="{{ route('showpage',['id' => 'pd']) }}">Product Development</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning" href="{{ route('showpage',['id' => 'it']) }}">Information Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning" href="{{ route('showpage',['id' => 'hr']) }}">Human Resource</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning" href="{{ route('showpage',['id' => 'mrkt']) }}">Marketing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning" href="{{ route('showpage',['id' => 'admin']) }}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link bg-warning" href="{{ route('showpage',['id' => 'finance']) }}">Finance</a>
                </li>
                    
            </ul>
        </div>
    
    </nav>
    {{-- Department Navigation End --}}

</div>
{{-- Navigation Bar --}}