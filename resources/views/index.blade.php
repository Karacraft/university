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

    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <!-- Center both Container & Inner Items -->
    <div class="flex flex-col h-screen justify-center items-center">
        <!-- This Div will be center on both Axis - Inner Container-->
        <div class="w-3/4 md:w-3/4 lg:w-2/4">

            <div class="flex justify-between">
                <div class="">
                    <a href="http://">
                        <img src="{{ asset('images/dashboard.png') }}" alt="Dashboard" srcset="" class="p-2">
                    </a>
                </div>
                <div class="">
                    <a href="{{ route('aaic')}}">
                        <img src="{{ asset('images/aaic.png') }}" alt="Avt Artificial Intelligence Center" srcset="" class="p-2">
                    </a>
                </div>
            </div>

        </div>

    </div>

</body>
</html>


