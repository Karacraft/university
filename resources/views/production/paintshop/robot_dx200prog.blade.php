@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.robot.nx100prog') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.robot.yaskawarobots') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Robot
                @endslot
                @slot('heading')
                    DX200 Programming 2.6.3
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">DX200 Programming</h3>
            <hr>
            <br>
            {{-- Youtube Videos --}}
            <div class="mb-4">
                <div class="container">
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/2iWSpXGilJE
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/pWWgNO8s1pk?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/rEVjKlpXKeI?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/c5li9Haydaw?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/7k_irtJQXfw?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/bDAQFixDg4o?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/J17MnRx-pBc?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/rJOYFEC3BEs?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/b-PSb59pkVI?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/7THbzmVYX3E?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/OaC_9p1yBYs?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/JG1_il2dXcE?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/sFAjUsW1oik?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/StP9nbfl3UE?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/l-JGh79Oqn0?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/IlXbDWVIHq8?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/QXobaUc1WZ8?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/YhSSTZfiyk0?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/81KsEjdIhhY?list=PLx67yHRvyFWxuAAFv7dS3C1_Ikt2NO6wI
                        @endslot
                    @endcomponent
                </div>  
            </div>

        </div>
        {{-- Footer --}}
        @include('includes.footer')
    </div>
</div>
@endsection
