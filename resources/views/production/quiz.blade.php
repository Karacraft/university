@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-1">
                <a href="">&#60;</a>
            </div>
            <div class="col-10 text-center">
                <h3>Moulding:Machine Course 1.1.6</h3>
            </div>
            <div class="col-1">
                <a href="">&#62;</a>
            </div>
        </div>
        <hr>
        {{-- Add Course Details Here --}}
        <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
    </div>
@endsection

@section('scripts')
<script>
document.getElementById('departmentnav').classList.add('hideme');
</script>
@endsection