@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">
    <div class="card border-primary mb-3">
        <div class="card-header bg-primary">
            @component('components.course_header_links')
                @slot('left')
                    {{ route('production.paintshop.robot.yaskawarobots') }}
                @endslot

                @slot('right')
                    {{ route('production.paintshop.robot.dx200prog') }}
                @endslot
                
                @slot('segment')
                    Paint Shop
                @endslot
                @slot('subsegment')
                    Robot
                @endslot
                @slot('heading')
                    NX100 Programming 2.6.2
                @endslot
            @endcomponent
        </div> 

        <div class="card-body">
            <h3 class="card-title ml-3">NX100 Programming</h3>
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
                        https://www.youtube.com/embed/0ZaRF67AfTk?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
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
                        https://www.youtube.com/embed/7x7kR853q8s?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/WkxDPRvNujo?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_                      
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/MfxGd7-VesA?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/dGL2BR5Way4?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/WH9btO8a1V8?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/3pHFE0vFzjo?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/sW0LlVi-x-I?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/R4dWmCK2vLU?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/phLDSneaS_Q?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/XTS9Jv2KVQg?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/AuK6vmqDQ2c?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/hIvcdaOZ4Q4?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/Z2Dlg93BT7g?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/73vLN-iOIh4?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/wWDZbdaciuM?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/2caZ8_v5E_0?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/i42cr5zuYV0?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/rCVkV26JADE?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/P_-OTVJAnPw?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/wuAfzoEdAHI?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/YhSSTZfiyk0?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/9oki0IrU5mw?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
                        @endslot
                    @endcomponent
                    @component('components.youtube')
                        @slot('source')
                        https://www.youtube.com/embed/81KsEjdIhhY?list=PLx67yHRvyFWx8U2BFPX6mWeDFQleG8AH_
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
