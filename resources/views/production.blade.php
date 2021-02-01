@extends('layouts.app')


@section('content')
{{-- Include Main Navigation here --}}
@include('includes.front_nav_ait')

@include('includes.production_nav')

{{-- https://stackoverflow.com/questions/7273338/how-to-vertically-align-an-image-inside-a-div?page=1&tab=active#tab-top --}}
<div class="text-center" style="margin-top: 10%">
    {{-- <div class="row justify-content-center align-self-center"> --}}
        <span style="display:inline-block;height:100%;vertical-align:middle">
        {{-- <img src="{{ asset('images/avtdarklogo.png') }}" class="img-fluid mx-auto d-block mt-5" alt="Responsive image"> --}}
        <img src="{{ asset('images/avtdarklogo.png') }}" style="vertical-align: middle" alt="Responsive image" width="60%">

    </span>
    {{-- </div> --}}
</div>

@endsection
