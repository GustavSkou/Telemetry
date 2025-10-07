<x-layout>
@vite('resources/css/app.css')
@vite('resources/css/dashboard.css')
    <ul class="route-list">
        @foreach ($routes as $route)
        <li>
            <h1>{{ $route->name }}</h1>
        </li>
        @endforeach
    </ul>
</x-layout>