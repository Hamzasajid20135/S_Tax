@extends('layouts.app')

@section('content')
    <div class="map"></div>
    <form id="locationForm">
        <label for="latitude">Latitude:</label>
        <input type="text" id="latitude" name="latitude" readonly><br>
        <label for="longitude">Longitude:</label>
        <input type="text" id="longitude" name="longitude" readonly><br>
        <button type="submit">Submit</button>
    </form>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize the map with a default location
            var map = L.map(document.querySelector('.map')).setView([51.505, -0.09], 13);

            // Add a tile layer to the map
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            // Add a marker variable that can be updated on map clicks
            var marker;

            // Function to update the input fields and marker on the map click event
            function onMapClick(e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;

                // Update the input fields
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lng;

                // If a marker already exists, remove it
                if (marker) {
                    map.removeLayer(marker);
                }

                // Add a new marker at the clicked location
                marker = L.marker([lat, lng]).addTo(map)
                    .bindPopup('Selected location: ' + lat + ', ' + lng)
                    .openPopup();
            }

            // Add event listener for map clicks
            map.on('click', onMapClick);
        });
    </script>
@endsection
