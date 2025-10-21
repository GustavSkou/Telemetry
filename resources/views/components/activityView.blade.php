@vite('resources/css/dashboard.css')
@vite('resources/js/activityMap.js')
<div class="activityView">

    <div class="user-info">
        <a>{{ $activity->created_by }}</a>
    
        <time datetime="{{ $activity->date->toIso8601String() }}">
            <!--check if the activity date is equal or less then 2 days ago, else display dd-mm-yy-->
            @php $date = $activity->date @endphp

            <!-- is activity date under 2 days old -->
            @if ($date && $date->greaterThan(now()->subDays(2)))
                {{ $date->diffForHumans() }}
            @else
                {{ $date ? $date->format('d-m-Y') : '—' }}
            @endif
        </time>
    </div>

    <div>
        <ul class="infoPanel">
        <!--
            <li id="icon-li">
                <img id="icon" class="icon">
                </li>
        -->
            <li id="name-li">
                <a class="activity-name" href="\activities\{{$activity->id}}">
                    {{ $activity->getTypeName() }}

                </a>
            </li>
        </ul>
    </div>

    <div>
        <ul class="infoPanel">

            <!--DISTANCE-->
            @if ($activity->distance != null) 
                <li>
                    <p>Distance</p>
                    <p>{{ $activity->distance }}</p>
                </li>
            @endif

            <!--ELEVATION GAIN-->
            @if (false) 
                <li>
                    <p>Elev gain</p>
                    <p></p>
                </li>
            @endif
            
            <!--SPEED-->
            @if (false)
                <li>
                    <p>Speed</p>
                    <p></p>
                </li>
            @endif
            
            <!--TIME-->
            @if ($activity->duration != null)
                <li>
                    <p>Time</p>
                    <p>{{ $activity->duration }}</p>
                </li>
            @endif

            <!--HEART RATE-->
            @if ($activity->avgHr != null)
                <li>
                    <p>Avg Hr</p>
                    <p>{{ $activity->avgHr }}</p>
                </li>
            @endif

            <!--CALORIES BURNED-->
            @if ($activity->cal != null)
                <li>
                    <p>Cal</p>
                    <p>{{ $activity->cal }}</p>
                </li>
            @endif
            
        </ul>
    </div>
    
    @if(true) 
        <div id="map-{{ $activity->id }}" class="map" 
            @isset($activity) data-activity='@json($activity)' @endisset></div>
    @endif
</div>