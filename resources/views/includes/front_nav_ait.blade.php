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
        {{-- Left Side of Navbar --}}
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('production') }}">Production</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PPMC</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">PRODUCTION ENGINEERING</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">Quality Assurance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-primary" href="{{ route('underconstruction') }}" onclick="return false;">Product Development</a>
            </li>
           
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown">
                
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ auth()->user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
        
    </div>

</nav>
{{-- Department Navigation End --}}

</div>
{{-- Navigation Bar --}}