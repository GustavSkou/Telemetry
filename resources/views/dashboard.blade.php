<x-layout>
@vite('resources/css/app.css')
@vite('resources/css/dashboard.css')
    <ul class="route-list">
        @foreach ($routes as $route)
        <li class="r">
            <x-routeView :route="$route"></x-routeView>
        </li>
        @endforeach
    </ul>
</x-layout>