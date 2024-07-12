<!DOCTYPE html>
<html>
<head>
    <title>Live Map with Leaflet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    
    <!-- Custom CSS -->
    <style>
        .map {
            height: 2000px;
        }
    </style>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    
    <!-- Custom JS -->
    @yield('scripts')
</body>
</html>
