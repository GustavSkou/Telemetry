@vite('resources/css/dashboard.css')

<div class="routeView">

    <div class="user-info">
        <a>{{ $route->created_by }}</a>
    
        <time datetime="{{ $route->date->toIso8601String() }}">
            <!--check if the route date is equal or less then 2 days ago, else display dd-mm-yy-->
            {{ $route->date->diffForHumans() }}
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
                <h2 id="name">{{ $route->getTypeName() }}</h2>
            </li>
        </ul>
    </div>

    <div>
        <ul class="infoPanel">

            <!--DISTANCE-->
            @if ($route->distance != null) 
                <li>
                    <p>Distance</p>
                    <p>{{ $route->distance }}</p>
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
            @if ($route->duration != null)
                <li>
                    <p>Time</p>
                    <p>{{ $route->duration }}</p>
                </li>
            @endif

            <!--HEART RATE-->
            @if ($route->avgHr != null)
                <li>
                    <p>Avg Hr</p>
                    <p>{{ $route->avgHr }}</p>
                </li>
            @endif

            <!--CALORIES BURNED-->
            @if ($route->cal != null)
                <li>
                    <p>Cal</p>
                    <p>{{ $route->cal }}</p>
                </li>
            @endif
            
        </ul>
    </div>
    
    @if(false) 
        <div id="tempMapId" class="map"></div>
    @endif
</div>