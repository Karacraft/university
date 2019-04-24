{{-- Include Segment Navigation Here --}}
<nav class="navbar navbar-expand-sm navbar-dark bg-primary p-1 py-0">

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Molding
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('production.molding') }}">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.moulding') }}">Moulding</a> --}}
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Paint Shop
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('production.paintshop') }}">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.paintshop') }}">Paintshop</a> --}}
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            EPP
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="{{ route('production.epp') }}">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.epp') }}">Epp</a> --}}
        </div>
    </div> 

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
            Vibration Welding
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.epp') }}">Epp</a> --}}
        </div>
    </div> 
 
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
            Lamps
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.epp') }}">Epp</a> --}}
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
            Vacuum Metailizing
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.epp') }}">Epp</a> --}}
        </div>
    </div>

    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" disabled>
            Chrome Plating
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Level # 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('leveltwo') }}">Level # 2</a>
            {{-- <a class="nav-link bg-primary" href="{{ route('production.epp') }}">Epp</a> --}}
        </div>
    </div>

</nav>