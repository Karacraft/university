@if (\App\Helpers\Functions::getRouteActionName() == "production")

    {{-- Include Production specific Menu Data --}}
    <nav class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-10">

            {{-- Add Level # 1 & Level # 2 in here  --}}
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                
                <a href="{{ route('production.molding') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Molding</a>
            
                <a href="{{ route('production.paintshop') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Paintshop</a>

                <a href="{{ route('production.epp') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">EPP</a>

                <a href="{{ route('production.vibweld') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Vibration Welding</a>

                <a href="{{ route('production.lamps') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Lamps</a>

                <a href="{{ route('production.vacmet') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Vacuum Metalizing</a>

                <a href="" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Chrome Plating</a>

            </div> 

        </div>
    </nav>
@endif

@if (\App\Helpers\Functions::getRouteActionName() == "ppmc")
@endif

@if (\App\Helpers\Functions::getRouteActionName() == "quality")
@endif

@if (\App\Helpers\Functions::getRouteActionName() == "productdevelopment")
@endif