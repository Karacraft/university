@extends('layouts.app')

@section('content')
@include('includes.ait_navbar')
<div class="container mt-5 animated fadeIn">

        <div class="card border-primary mb-3">
            <div class="card-header bg-primary">
                @component('includes.course_header_links')
                    @slot('left')
                        {{ route('production.molding.component') }}
                    @endslot
                    
                    @slot('right')
                        {{ route('production.molding.runner') }}
                    @endslot
                    <h5>Molding &rarr; Machines &rarr; Mold Types 1.2.1 </h5>
                @endcomponent
            </div> 
    
            <div class="card-body">
                <h3 class="card-title">Mold Types</h3>
                <hr>
                <br>
                {{-- Youtube Video --}}
                <div class="mb-4">
                    <div class="container">
                        {{-- The Text --}}
                        <div class="row">
                            <p class="lead">
                                A runner is the channel in the mold that conveys the plastic from the barrel of the injection molding machine to the part. <br>
                                There are two main types of injection molds: 
                            </p>
                        </div>

                        <div class="row">
                            <h4>Cold Runner</h4>
                            <p>
                            In a cold runner mold, the runner is cooled and ejected with the part. Every cycle, a part and a runner are produced. The obvious disadvantage of this system is the waste plastic generated. The runners are either disposed of, or reground and reprocessed with the original material. This adds a step in the manufacturing process. Also, regrind will increase variation in the injection molding process, and could decrease the plastic's mechanical properties.
                            Despite these disadvantages, there are many significant advantages to using a cold runner mold. The mold design is very simple, and much cheaper than a hot runner system. The mold requires less maintenance and less skill to set up and operate. Color changes are also very easy, since all of the plastic in the mold is ejected with each cycle.
                            </p>
                        </div>

                        <div class="row">
                            <p class="lead">There are two major types of cold runner molds</p>
                        </div>

                        <div class="row">
                            <h4>Two Plate Mold</h4>
                            <p>
                                A two plate cold runner mold is the simplest type of mold. It is called a two plate mold because there is one parting plane, and the mold splits into two halves. The runner system must be located on this parting plane; thus the part can only be gated on its perimeter.
                            </p>
                            <p>
                                A three plate mold differs from a two plate in that it has two parting planes, and the mold splits into three sections every time the part is ejected. Since the mold has two parting planes, the runner system can be located on one, and the part on the other. Three plate molds are used because of their flexibility in gating location. A part can be gated virtually anywhere along its surface.
                            </p>
                        </div>

                        <div class="row">
                            <h4>Hot Runner Mold</h4>
                            <p>
                                In a hot runner mold, the runner is situated internally in the mold and kept a temperature above the melting point of the plastic. Runner scrap is reduced or eliminated. The major disadvantages of a hot runner is that it is much more expensive than a cold runner, it requires costly maintenance, and requires more skill to operate. Color changes with hot runner molds can be difficult, since it is virtually impossible to remove all of the plastic from an internal runner system.
                            </p>
                            <p>
                                Hot runners have many advantages. They can completely eliminate runner scrap, so there are no runners to sort from the parts, and no runners to throw away or regrind and remix into the original material. Hot runners are popular in high production parts, especially with a lot of cavities.
                            </p>
                        </div>

                        <div class="row">
                            <p class="lead">Types of Hot Runner Mold</p>
                        </div>

                        <div class="row">
                            <p>
                                Hot runner molds are two plate molds with a heated runner system inside one half of the mold. A hot runner system is divided into two parts: the manifold and the drops. The manifold has channels that convey the plastic on a single plane, parallel to the parting line, to a point above the cavity. The drops, situated perpendicular to the manifold, convey the plastic from the manifold to the part.
                            </p>
                            <p>
                                There are many variations of hot runner systems. Generally, hot runner systems are designated by how the plastic is heated. There are internally and externally heated drops and manifolds.
                            </p>
                            <p>
                                Externally heated hot runner channels have the lowest pressure drop of any runner system (because there is no heater obstructing flow and all the plastic is molten), and they are better for color changes none of the plastic in the runner system freezes. There are no places for material to hang up and degrade, so externally heated systems are good for thermally sensitive materials.
                            </p>
                            <p>
                                Internally heated runner systems require higher molding pressures, and color changes are very difficult. There are many places for material to hang up and degrade, so thermally sensitive materials should not be used. Internally heated drops offer better gate tip control. Internally heated systems also better separate runner heat from the mold because an insulating frozen layer is formed against the steel wall on the inside of the flow channels.
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6lOD3whg3Z0" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>  
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bAYhGI2oA7s" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5zbhPIpwqEU" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>      
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kfgIKwBeG8M" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>   
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_akBDAqFjss" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>   
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12">
                                <div class="embed-responsive embed-responsive-16by9 mb-3">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/IGFCYmSYU5Y" allowfullscreen></iframe>
                                </div>
                            </div>    
                        </div>   
                    </div>  
                </div>
    
            </div>
            {{-- Div Card-Body Ends here --}}
            <div class="card-footer text-center">
                <a href="{{ url()->previous() }}" class="btn btn-sm btn-primary">Go Back</a>
            </div>
        </div>
    </div>
@endsection

