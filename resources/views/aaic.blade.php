<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/donut-chart.js') }}"></script>
</head>
<body>

    {{-- Loader For Website --}}
    <div class="lds-grid" id="loader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    {{-- Main page --}}
    <div id="app" class="mt-5 hideme">
        <div class="container  mt-5 pt-5 h-100 animated fadeIn" id="secondcontainer">
            <div class="row h-100 justify-content-center  mt-5">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 col-md-12 col-sm-12 text-muted text-center p-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ route('ait') }}">
                                                <img src="{{ asset('images/ait.png') }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 text-center text-muted p-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ route('abs') }}">
                                                <img src="{{ asset('images/abs.png') }}" alt="" class="img-fluid" onclick="return false;">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
document.addEventListener('DOMContentLoaded',function(){
    console.log('dom content loaded');
    document.getElementById('loader').style.display = 'none';
    document.getElementById('app').classList.remove('hideme');
})
</script>


</body>
</html>

