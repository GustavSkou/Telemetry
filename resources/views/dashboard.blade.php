<x-layout>
@vite('resources/css/app.css')
@vite('resources/css/dashboard.css')
    <ul class="activity-list">
        @foreach ($activities as $activity)
        <li>
            <x-activityView :activity="$activity"></x-activityView>
        </li>
        @endforeach
    </ul>

    {{ $activities->links() }}
</x-layout>