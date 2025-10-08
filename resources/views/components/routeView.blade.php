@vite('resources/css/dashboard.css')
<div class="routeView" id="routeView">

    <ul class="infoPanel">
    <!--
        <li id="icon-li">
            <img id="icon" class="icon">
            </li>
    -->
        <li id="name-li">
            <h2 id="name">{{ $route->name }}</h2>
        </li>
    </ul>

    <ul class="infoPanel">

        <!--DISTANCE-->
        @if (false) 
            <li>
                <p>Distance</p>
                <p></p>
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
    
    @if(false) 
        <div id="tempMapId" class="map"></div>
    @endif
</div>