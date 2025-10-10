<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Telemetry</title>
</head>
<body>
    <header>
        <ul class="navbar">
            <li>
                <a href="/">TeleMetry</a>
            </li>
            <li>
                <a href="/">Dashboard</a>
            </li>
            <li>
                <a href="">Training</a>
            </li>
            <li>
                <a href="/map">Map</a>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">upload</button>
                        <div class="dropdown-content">
                            <a href='/upload/file'>upload file</a>
                            <a href='/upload/manual'>manual entry</a>
                        </div>
                </div>
                
            </li>
        </ul>
    </header>
    
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>