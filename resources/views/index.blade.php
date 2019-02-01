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

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="{{ asset('js/donut-chart.js') }}"></script>
</head>
<body class="bg-primary">
    <div id="app" class="mt-5">

            <div class="container  mt-5 pt-5 h-100">
                    <div class="row h-100 justify-content-center  mt-5">
                        <div class="col-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="row align-items-center h-100">
                                        {{-- Sign In Column --}}
                                        <div class="col-6 text-muted text-center p-5">
                                            <h2>Auvitronics Technology & Business</h3>
                                            <div class="row">
                                                <div class="col">
                                                        <a href="https://app.powerbi.com/?noSignUpCheck=1" class="btn btn-primary btn-block">Dashboard</a>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Sign In COlumn --}}
            
                                        <div class="vl2"></div>
                                        
                                        {{-- Sign Up Column --}}
                                        <div class="col-6 text-center text-muted p-5">
                                            <h2>
                                            Auvitronics 
                                            Artifical   
                                            Intelligence 
                                            Center 
                                            </h2>
                                            <div class="row mb-2">
                                                <div class="col"><a href="{{ route('ait') }}" class="btn btn-primary btn-block">Auvitronics Information Technology</a></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><a href="{{ route('abs') }}" class="btn btn-primary btn-block" onclick="return false;">Auvitronics Business School</a></div>
                                            </div>
                                        </div>
                                        {{-- Signup COlumn --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>

</body>
</html>
