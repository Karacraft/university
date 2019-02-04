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
<body>
    <div id="app" class="mt-5">

        {{-- First Look --}}
        <div class="container  mt-5 pt-5 h-100" id="firstcontainer">
            <div class="row h-100 justify-content-center  mt-5">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center h-100">
                                <div class="col-6 text-muted text-center p-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="https://login.microsoftonline.com/common/oauth2/authorize?client_id=871c010f-5e61-4fb1-83ac-98610a7e9110&response_mode=form_post&response_type=code+id_token&scope=openid+profile&state=OpenIdConnect.AuthenticationProperties%3dZggt_pCQtc5hFII7nnmOZ1pHhxwvHMgtma5ekqMaPocwi2ufkt9A2kib8fl3x12daVBVCsnh99wHW1Byp5kxGStEaW3V_8ZvixUpQju3sAD4U_vQ6sN0yQUciWgqlxcxVoPDEYGdLiMRFUZHuiyhPw&nonce=636848530761595209.MjIwNDY2ZGYtODFjOS00ODI1LThkZWUtMTIxNDM1N2ZlOTE3Nzk4YzYxMTEtZTg0ZC00ZTc1LWJhNjEtMmZkMjI1ZTU2ZTUw&site_id=500453&redirect_uri=https%3a%2f%2fapp.powerbi.com%2f%3fnoSignUpCheck%3d1&post_logout_redirect_uri=https%3a%2f%2fapp.powerbi.com%2f%3fnoSignUpCheck%3d1&resource=https%3a%2f%2fanalysis.windows.net%2fpowerbi%2fapi&nux=1&msafed=0">
                                                <img src="{{ asset('images/dashboard.png') }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 text-center text-muted p-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="" id="aaic" onclick="showSecondContainer(event)">
                                                <img src="{{ asset('images/aaic.png') }}" alt="" class="img-fluid">
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

        {{-- Second Look --}}
        <div class="container  mt-5 pt-5 h-100 hideme animated fadeIn" id="secondcontainer">
            <div class="row h-100 justify-content-center  mt-5">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="row align-items-center h-100">
                                <div class="col-6 text-muted text-center p-5">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ route('ait') }}">
                                                <img src="{{ asset('images/ait.png') }}" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 text-center text-muted p-5">
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
var first = document.getElementById('firstcontainer');
var second = document.getElementById('secondcontainer');

function showSecondContainer(event)
{
    event.preventDefault();
    
    first.classList.add('hideme');
    second.classList.remove('hideme');
}
</script>


</body>
</html>


