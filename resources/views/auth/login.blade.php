@extends('layouts.app')

@section('content')
    <div class="flex h-screen">

        <div class="w-full max-w-xs m-auto bg-indigo-100 rounded-lg shadow-lg p-5">
            {{-- Header --}}
            <header>
                <img class="w-40 mx-auto mb-5" src="/images/avtdarklogo.png" />
            </header>

            {{-- Form --}}
            
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div>
                    <label for="email" class="block mb-2 text-indigo-500">Email</label>
                    <input required type="text" name="email" id="email" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300">
                    @if ($errors->has('email')) <p class="text-red-900 text-sm">{{ $errors->first('email') }}</p> @endif
                </div>
                <div>
                    <label for="password" class="block mb-2 text-indigo-500">Password</label>
                    <input required type="password" name="password" id="password" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300">
                    @if ($errors->has('password')) <p class="text-red-900 text-sm">{{ $errors->first('password') }}</p> @endif
                </div>
                <div>
                    <input type="submit" value="Login" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded">
                </div>


            </form>
            
            {{-- Footer --}}
            <footer>
                <a class="text-indigo-700 hover:text-pink-700 text-sm float-left" href="#">Forgot Password?</a>
                <a class="text-indigo-700 hover:text-pink-700 text-sm float-right" href="#">Create Account</a>
            </footer>
        </div>

    </div>
    
@endsection