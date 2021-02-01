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