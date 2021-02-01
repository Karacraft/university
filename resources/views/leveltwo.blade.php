@extends('layouts.app')


@section('content')
{{-- Include Main Navigation here --}}
@include('includes.front_nav_ait')

@include('includes.production_nav')
    <div class="container mt-5 pt-5 animated fadeIn">
        <div class="row h-100 justify-content-center align-self-center">
            <div class="card">
                <div class="card-header">
                    <h5>Level 02</h5>
                </div>
                
                <div class="card-body">
                    <div class="card-title">
                        <span class="text-danger">Restricted Section</span>
                    </div>
                    Please login with your Auvitronics email to proceed further
                    <hr>
                    
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="ali.jibran@auvitronics.com">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
                        </div>
                        <button type="submit" class="btn btn-primary" disabled>Login</button>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>

@endsection
