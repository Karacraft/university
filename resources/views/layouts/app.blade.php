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
<body class="">

    {{-- Include Main Navigation here --}}
    @include('includes.main_navbar')
    {{-- Main App --}}
    @yield('content')

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/web.js') }}"></script>
    @yield('scripts')

</body>
</html>
