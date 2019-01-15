<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name')}}</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    </head>
<body>
    {{-- Welcome Page is Seperate from rest of the Application --}}

    {{-- Navigation Bar --}}
    <div class="container-flex" id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a href="" class="navbar-brand ml-2">
                {{-- Company Logo --}}
                <img src="{{ asset('images/avtlogo.png') }}" alt="Auvitronics Logo" srcset="" width="40px" height="auto">
                {{-- Company Name --}}
                {{ config('app.name') }}
            </a>
        </nav>
    </div>
    {{-- Navigation Bar --}}
   
    {{-- Login Page --}}
    <div class="container mt-5 pt-5">
        <div class="row h-100 justify-content-center align-self-center">
            <div class="col-10">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            {{-- Sign In Column --}}
                            <div class="col-6 text-muted pt-5 pl-5 pr-5">
                                <h1>Log In</h1>
                                <form action="{{ route('logme') }}" method="post">
                                    {{ csrf_field() }}
                                    <div class="form-group mt-2">
                                        <label for="email">EMAIL</label>
                                        <input type="text" class="form-control" id="email" class="email">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">PASSWORD</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="password" class="password" onkeyup="this.value = this.value.toLowerCase();">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-eye" id="showpass"></i>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="form-group mt-5">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>

                                    <div class="form-group text-center">
                                        <a href="http://">Forgot Password?</a>
                                        <br>
                                        <a href="">Send a New Registration Email</a>
                                    </div>

                                </form>
                            </div>
                            {{-- Sign In COlumn --}}

                            <div class="vl"></div>
                            
                            {{-- Sign Up Column --}}
                            <div class="col-6 text-center text-muted pt-5 pl-5 pr-5">
                                <h1>
                                    First Visit?
                                    <br>
                                Let's Get 
                
                                Started!</h1>
                                <a href="" class="btn btn-primary">Register</a>
                            </div>
                            {{-- Signup COlumn --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Login Page --}}
   
    {{-- <script type="text/javascript" src="js/app.js"></script> --}}

    <script>
    var showpass = document.getElementById("showpass").addEventListener('click',function(){
        
        var password = document.getElementById('password');

        if(password.type === "password")
        {
            password.type = "text"; //Change it to text
            this.classList.remove('fa-eye');    //Remove Icon of Eye
            this.classList.add('fa-eye-slash'); //Add Slash Icon
        }
        else
        {
            password.type = "password"; //Change it to text
            this.classList.add('fa-eye');    //Remove Icon of Eye
            this.classList.remove('fa-eye-slash'); //Add Slash Icon
        }
    })
    function togglePassword()
    {
        
    }
    </script>

</body>

</html>
