@extends('layouts.app')


@section('content')
{{-- Include Main Navigation here --}}
@include('includes.front_nav_ait')

@include('includes.production_nav')


<div class="container d-flex h-100 mt-5">
    <div class="row justify-content-center align-self-center">
        <img src="{{ asset('images/avtdarklogo.png') }}" class="img-fluid mx-auto d-block mt-5" alt="Responsive image" width="40%">
    </div>
</div>

@endsection
