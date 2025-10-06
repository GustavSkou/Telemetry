<x-layout>
    @vite("resources/css/upload.css")
    @vite("resources/css/app.css")
    <div class="uploadMenu">
        <h1>Upload activity</h1>
        <form id="gpxForm">
            <input title="fileInput"  type="file"    id="fileInput" accept=".gpx"/>
            <p id="error_p" class="error_p"></p>
        </form>
        <p>Works for .gpx files</p>
    </div>
</x-layout>