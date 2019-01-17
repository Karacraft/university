@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-1">
                <a href="">&#60;</a>
            </div>
            <div class="col-10">
                <h3>Moulding:Machine Course 1.1.1</h3>
            </div>
            <div class="col-1">
                <a href="">&#62;</a>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <h2 class="text-primary">Inject Moulding</h2>
            </div>
            <div class="col-1">
                <a href="{{ url()->previous() }}" title="Go Back to Courses"><i class="fas fa-book fa-2x text-muted"></i></a>
            </div>
        </div>
        {{-- Add Course Details Here --}}
        <div class="mt-4 mb-4">
            <h3>
                About Inject Moulding In Details
            </h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
        
            <div class="container">
                <div class="row">
                    <div class="col-9">
                        <div class="embed-responsive embed-responsive-16by9">
                            {{-- <iframe class="embed-responsive-item" src="//www.youtube.com/embed/zB4I68XVPzQ"></iframe> --}}
                            <video width="320" height="240" controls>

                                    <source src="{{ asset('videos/videoplayback.mp4') }}" type="video/mp4">
                            
                            </video>
                        </div>    
                    </div>    
                    <div class="col-3">
                        <ul class="list-group">
                            <li class="list-group-item active">Related Videos</li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=b1U9W4iNDiQ" target="_blank">Inject Moulding Animation</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=RMjtmsr3CqA" target="_blank">Plastic Injection Moulding</a></li>
                            <li class="list-group-item"><a href="https://www.youtube.com/watch?v=WHwTHarf8Ck" target="_blank">Injection moulding of 72 screw caps</a></li>
                        </ul>
                    </div>
                </div>     
            </div>   
            <p class="mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum id quas nostrum itaque molestias rerum sint, ipsum voluptatem ducimus laboriosam ipsam asperiores autem veritatis sapiente quisquam ipsa accusamus adipisci facere?</p>
        
        
        </div>
    </div>
@endsection

@section('scripts')
<script>
document.getElementById('departmentnav').classList.add('hideme');
</script>
@endsection