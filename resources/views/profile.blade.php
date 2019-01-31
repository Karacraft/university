@extends('layouts.app')

@section('content')
    <div class="container mt-4">
       <div class="card">
            {{-- Header --}}
            <div class="card-header bg-primary text-white">
                Student's Profile
           </div>
           {{-- Body --}}
           <div class="card-body">
                <div class="row">
                    {{-- Profile Data --}}
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/ceo.jpg') }}" class="card-img-top" alt="">
                                <div class="mt-2">
                                    <h5>Syed Abbas-ul-Hussaini
                                        <br>
                                        <small>
                                            C.E.O <span class="text-dark">Auvitronics Limited</span>
                                        </small>
                                    </h5>
                                </div>

                                <div class="mt-3">
                                    <h6 style="font-weight:bold;">ABOUT YOU</h6>
                                    <span style="font-weight:bold">SPECIALITIES</span> 
                                    Mechanical engineering, Product development
                                    plant and machine design. Innovative and creative solutions , root cause analysis and countermeasure. Activity based costing, Management information system.
                                
                                    <h6 style="font-weight:bold;" class="mt-2">Languages</h6>
                                    <span style="font-weight:bold;">English</span> : Fluent <br>
									<span style="font-weight:bold;">Urdu</span> : Fluent <br>
									
									<h6 style="font-weight:bold;" class="mt-2">Education</h6>
									<span style="font-weight:bold;">NED University</span> Bachelors in Engineering, Mechanical Engineering • 1989 - 1993 <br>
								
								    <h6 style="font-weight:bold;" class="mt-2">Organizations</h6>
									<span style="font-weight:bold;">Auvitronics Ltd</span>
									<br>CEO • 1998 - Present<br>
									<span style="font-weight:bold;">Johnson and Philips</span>
									<br>Product Development Manager • 1997 - 1998<br>
									<span style="font-weight:bold;">Zelin PVT Ltd</span>
									<br>Design and Development, Design inchage • 1993 - 1997<br>
								</div>
							</div>
                        </div>
					</div>
					
					{{-- Course Data --}}
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-center mb-2">
                                        <span style="font-size:1.5rem;">Total 11 </span> <span class="fa fa-star checked fa-2x"></span>
                                        <span style="font-size:1.5rem;">out of 24 </span><span class="fa fa-star checked fa-2x"></span>
                                    </div>
                                </div>
                                {{-- Courses --}}
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="onerem bg-primary text-white text-center">
                                                <th>Technology</th>
                                                <th>Achievement</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">Moulding</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">EPP</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">SW</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">VM</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">2 Wheeler</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">Paint Shop</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">HCP</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">Chrome</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">Lamps</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">ABM</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size:1rem;">Mirror</td>
                                                <td class="text-center"><span class="fa fa-star checked fa-2x"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
    </div>
@endsection

@section('scripts')
<script>
document.getElementById('departmentnav').classList.add('hideme');
</script>
@endsection