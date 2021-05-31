@extends('layouts.app')


@section('content')
{{-- <div class="flex justify-center items-center pt-48">
    <div class="max-w-xs">
        <img src="{{ asset('images/avtdarklogo.png') }}" >
    </div>
</div> --}}


{{-- @foreach (auth()->user()->roles->all()  as $item)
    🟦 {{ $item->title }}<br>
@endforeach

@foreach ( auth()->user()->permissions->all() as $perm)
    ✔ {{ $perm->title }} <br>
@endforeach --}}

{{-- {{ dd(auth()->user()->hasRole('admin_all','basic_display')) }} --}}
{{-- {{ dd(auth()->user()->can('display_user')) }} --}}
{{-- {{ dd( auth()->user()->givePermissionsTo('display_user') ) }} --}}
{{-- {{ dd( auth()->user()->givePermissionsTo('delete_user') ) }} --}}
{{-- {{ dd(auth()->user()->can('delete_user')) }} --}}

{{-- @role('admin_all')
    Admin All
@endrole

@role ('basic_display')
    Basic Display
@endrole --}}

{{-- 
@hello('Ali Jibran')

@routeis('production')
    This is production route
@endroute --}}

@endsection
