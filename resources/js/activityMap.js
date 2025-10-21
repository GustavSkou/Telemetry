import 'leaflet/dist/leaflet.css';
import L from 'leaflet';

// Fix default marker icon paths when bundling with Vite
const iconRetinaUrl = new URL('node_modules/leaflet/dist/images/marker-icon-2x.png', import.meta.url).href;
const iconUrl = new URL('node_modules/leaflet/dist/images/marker-icon.png', import.meta.url).href;
const shadowUrl = new URL('node_modules/leaflet/dist/images/marker-shadow.png', import.meta.url).href;

L.Icon.Default.mergeOptions({ iconRetinaUrl, iconUrl, shadowUrl });

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.map').forEach(el => {

        const activity = el.dataset.activity ? JSON.parse(el.dataset.activity) : null;

        const map = L.map("map-"+activity.id).setView([55.37, 10.41], 10);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
    })
});