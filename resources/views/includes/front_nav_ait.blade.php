{{-- Navigation Bar --}}
<div class="container-flex" id="app">
    {{-- Top Navigation Bar --}}
    <nav class="navbar navbar-expand-lg py-0 navbar-dark bg-secondary">
        <a href="{{ route('index') }}" class="navbar-brand ml-2">
            {{-- Company Logo --}}
            <img src="{{ asset('images/avtlogo.png') }}" alt="Auvitronics Logo" srcset="" width="40px" height="auto">
            {{-- Company Name --}}
            {{ config('app.name') }}
        </a>
        {{-- Collapsable Navbar --}}
        {{-- <div class="collapse navbar-collapse" id="navbarUSerArea">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}" title="Student's Profile">
                        <img src="{{ asset('images/ceo.jpg') }}" alt="" srcset="" width="30px" class="img-fluid rounded">
                    </a>
                </li>
            </ul>
        </div> --}}
    </nav>
    {{-- Top Navigation Bar --}}

   {{-- Department Navigation Start --}}
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-1" id="departmentnav">
    
    <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('production') }}">PRODUCTION</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PPMC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PRODUCTION ENGINEERING</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">QUALITY ASSURANCE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PRODUCT DEVELOPMENT</a>
            </li>
           
        </ul>
    </div>

</nav>
{{-- Department Navigation End --}}

</div>
{{-- Navigation Bar --}}