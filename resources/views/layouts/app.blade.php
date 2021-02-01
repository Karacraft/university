<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Extra Styles --}}
    @yield('styles')

</head>
<body>
    {{-- Main App --}}
    <div id="app">
        @yield('content')
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

</body>
</html>
