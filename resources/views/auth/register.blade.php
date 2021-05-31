@extends('layouts.app')

@section('content')
<div class="flex h-screen">

    <div class="w-full max-w-xs m-auto bg-indigo-100 rounded-lg shadow-lg p-5">
        {{-- Header --}}
        <header class="py-2">
            <span class="text-2xl text-indigo-900 uppercase">{{ __('Register') }}</span>
        </header>

    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-indigo-500">Name</label>
            <input required type="text" name="name" id="name" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @if ($errors->has('name')) <p class="text-red-900 text-sm">{{ $errors->first('name') }}</p> @endif
        </div>
        <div>
            <label for="email" class="block mb-2 text-indigo-500">Email</label>
            <input required type="text" name="email" id="email" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" value="{{ old('email') }}" required autocomplete="email">
            @if ($errors->has('email')) <p class="text-red-900 text-sm">{{ $errors->first('email') }}</p> @endif
        </div>
        <div>
            <label for="password" class="block mb-2 text-indigo-500">{{ __('Password') }}</label>
            <input required type="password" name="password" id="password" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" autocomplete="new-password">
            @if ($errors->has('password')) <p class="text-red-900 text-sm">{{ $errors->first('password') }}</p> @endif
        </div>
        <div>
            <label for="password_confirmation" class="block mb-2 text-indigo-500">{{__('Confirm Password') }}</label>
            <input required type="password" name="password_confirmation" id="password_confirmation" class="w-full p-2 mb-6 text-indigo-700 border-b-2 border-indigo-500 outline-none focus:bg-gray-300" autocomplete="new-password">
            @if ($errors->has('password_confirmation')) <p class="text-red-900 text-sm">{{ $errors->first('password_confirmation') }}</p> @endif
        </div>
        <div>
            <input type="submit" value="{{ __('Register') }}" class="w-full bg-indigo-700 hover:bg-pink-700 text-white font-bold py-2 px-4 mb-6 rounded" >
        </div>


    </form>
</div>

   
</div>
@endsection
