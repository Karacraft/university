{{-- Convert into Component --}}
<div class="row text-center text-white">
    <div class="col-lg-1 col-md-1 col-sm-1">
        <a href="{{$left}}"><i class="fas fa-chevron-left text-white"></i></a>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10">
        {{$slot}}
    </div>
    <div class="col-lg-1 col-md-1 col-sm-1">
        <a href="{{$right}}"><i class="fas fa-chevron-right text-white"></i></a>
    </div>
</div>