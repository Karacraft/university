<nav class="bg-blue-700">
   {{-- https://tailwindui.com/components/application-ui/navigation/navbars --}}
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">

        <div class="relative flex items-center justify-between h-16">

            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">

                <!-- Mobile menu button-->
                <button type="button" class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                    Icon when menu is closed.
        
                    Heroicon name: outline/menu
        
                    Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                    Icon when menu is open.
        
                    Heroicon name: outline/x
        
                    Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>



                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}">
                        <img class="block  h-5 w-auto" src="{{ asset('images/avtlogo.png') }}" alt="Avt Logo">
                    </a>
                    <span class="text-white text-xl pl-2">{{ config('app.name') }}</span>
                </div>

                <div class="hidden lg:block sm:ml-6">
                    <div class="flex space-x-4">

                        {{-- Dropdowns --}}
                        <div class="group inline-block relative pt-1">
                            <a href="{{ route('production') }}" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                <span class="mr-1">Production</span>
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </a>
                            {{-- Here group-hover:block means show all ul simultaneously --}}
                            <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-48">
                                <li class="">
                                    <a class="rounded-t bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.molding') }}">Molding</a>
                                </li>
                                <li class="">
                                    <a class="bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.paintshop') }}">Paintshop</a>
                                </li>
                                <li class="">
                                    <a class=" bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.epp') }}">EPP</a>
                                </li>
                                <li class="">
                                    <a class=" bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.vibweld') }}">Vibration Welding</a>
                                </li>
                                <li class="">
                                    <a class=" bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.lamps') }}">Lamps</a>
                                </li>
                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="{{ route('production.vacmet') }}">Vacuum Metalizing</a>
                                </li>
                                <li class="">
                                    <a class="rounded-b bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap" href="">Chrome Plating</a>
                                </li>
                            </ul>
                        </div>
                        {{-- PPMC --}}
                        <div class="group inline-block relative pt-1">
                            <a href="#" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                <span class="mr-1">PPMC</span>
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </a>
                        </div>
                        {{-- Quality --}}
                        <div class="group inline-block relative pt-1">
                            <a href="#" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                <span class="mr-1">Quality</span>
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </a>
                        </div>
                        {{-- Product Development --}}
                        <div class="group inline-block relative pt-1">
                            <a href="#" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                <span class="mr-1">Product Development</span>
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </a>
                        </div>
                        {{-- Register & Login --}}
                        @guest
                        <a href="{{ route('register') }}" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium bg-indigo-600">
                            Register
                        </a>
                        @endguest
                        
                        @auth
                        <div class="group inline-block relative pt-1">
                            <a href="#" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md text-sm font-medium" aria-current="page">
                                <span class="mr-1">{{ auth()->user()->name }}</span>
                                <svg
                                    class="fill-current h-4 w-4"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20"
                                >
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </a>
                            <ul class="absolute hidden text-gray-700 pt-1 group-hover:block w-48">
                                <li class="">
                                    <a href="{{ route('logout') }}" class="rounded-b bg-gray-200 hover:bg-blue-700 hover:text-white py-2 px-4 block whitespace-no-wrap"  
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        
                        @else
                        <a href="{{ route('login') }}" class="text-white py-1 px-2 inline-flex items-center px-3 py-2 rounded-md bg-indigo-600 text-sm font-medium">
                            Login
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
              

         
        </div>

    </div>
    

    {{-- @include('includes.level_one_menu') --}}

</nav>