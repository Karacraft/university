{{-- Navigation Bar --}}
<div class="container-flex" id="app">
    {{-- Top Navigation Bar --}}
    @include('includes.avtit_navbar')
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
            {{-- <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PRODUCTION ENGINEERING</a>
            </li> --}}
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