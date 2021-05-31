@extends('layouts.app')

@section('content')

        <div class="card border-primary mb-3">
            <div class="card-header bg-primary">
                @component('includes.course_header_links')
                    @slot('left')
                        {{ route('production.molding.matpartsmovement') }}
                    @endslot
    
                    @slot('right')
                        {{ route('production.molding.injectunit') }}
                    @endslot
                    <h5>Molding &rarr; Machines &rarr; General Design & Functions 1.1.1</h5>
                @endcomponent
            </div>
    
            <div class="card-body">
                <h3 class="card-title ml-3">General Design & Functions</h3>
                <hr>
                <br>
    
                {{-- Youtube Video --}}
                <div class="mb-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/l1jNrmpx-Rw" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>  
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/DbaWBXe9-vQ" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>    
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IE2njX3jKdk" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j3PwubgTSKo" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>  
                    </div>  
                </div>
    
            </div>
            {{-- Div Card-Body Ends here --}}
            <x-go-back />
@endsection
