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
    <div class="container mt-5 pt-5 animated fadeIn">
        <div class="row h-100 justify-content-center align-self-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row align-items-center h-100">
                            {{-- Sign In Column --}}
                            <div class="col text-muted pt-5 pl-5 pr-5">
                                <h3>Log In</h3>
                                <form action="{{ route('powerbilogin') }}" method="post">
                                    @csrf
                                    <div class="form-group mt-2">
                                        <label for="email">EMAIL</label>
                                        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                                        @if ($errors->has('email')) <p class="text-danger">{{ $errors->first('email') }}</p> @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">PASSWORD</label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control" id="password" onkeyup="this.value = this.value.toLowerCase();">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-eye" id="showpass"></i>
                                                    </div>
                                                </div>
                                        </div>
                                        @if ($errors->has('password')) <p class="text-danger">{{ $errors->first('password') }}</p> @endif
                                    </div>

                                    <div class="form-group mt-5">
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>

                                    {{-- <div class="form-group text-center">
                                        <a href="http://">Forgot Password?</a>
                                        <br>
                                        <a href="">Send a New Registration Email</a>
                                    </div> --}}

                                </form>
                            </div>
                            
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
    </script>

</body>

</html>
