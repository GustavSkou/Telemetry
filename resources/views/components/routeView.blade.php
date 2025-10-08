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
        <li id="distance-li">
            <p>Distance</p>
            <div id="distance"></div>
        </li>
        <li id="elev-li">
            <p>Elev gain</p>
            <div id="elev"></div>
        </li>
        <li id="speed-li">
            <p>Speed</p>
            <div id="speed"></div>
        </li>
        <li id="time-li">
            <p>Time</p>
            <div id="time"></div>
        </li>
        <li id="heartRate-li">
          <p>Avg Hr</p>
          <div id="heartRate"></div>
        </li>
    </ul>

    <div id="tempMapId" class="map"></div>

</div>