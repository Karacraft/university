{{-- USed in Video Link Pages - Refactor --}}
<nav class="flex w-full bg-blue-500">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="{{ route('ait') }}" class="nav-link" title="Go Back">
                <i class="fa fa-chevron-left"></i> AIT
            </a>
        </li>
    </ul>
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