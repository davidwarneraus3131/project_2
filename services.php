<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Property Map Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h3 {
            margin-bottom: 15px;
        }

        #property-map {
            width: 100%;
            height: 500px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .leaflet-popup-content a {
            color: #fff;
            background: #4CAF50;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <h3>🗺️ Property Map View</h3>
    <div id="property-map"></div>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <?php
    // Demo data - replace with your real DB data later
    $mapProperties = [
        [
            'id' => 101,
            'name' => 'Cozy Apartment',
            'location' => 'Mumbai, Maharashtra',
            'lat' => 19.0760,
            'lng' => 72.8777
        ],
        [
            'id' => 102,
            'name' => 'Luxury Villa',
            'location' => 'Pune, Maharashtra',
            'lat' => 18.5204,
            'lng' => 73.8567
        ],
        [
            'id' => 103,
            'name' => 'Studio Flat',
            'location' => 'Bengaluru, Karnataka',
            'lat' => 12.9716,
            'lng' => 77.5946
        ]
    ];
    ?>

    <script>
        // Get PHP array into JS
        const properties = <?php echo json_encode($mapProperties); ?>;

        // Initialize the map and set default center
        const map = L.map('property-map').setView([19.0760, 72.8777], 6); // Centered around Maharashtra

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Add markers from PHP data
        properties.forEach(property => {
            if (property.lat && property.lng) {
                const marker = L.marker([parseFloat(property.lat), parseFloat(property.lng)]).addTo(map);
                marker.bindPopup(
                    `<b>${property.name}</b><br>${property.location ?? ''}<br>` +
                    `<a href='property-details.php?id=${property.id}'>View Details</a>`
                );
            }
        });
    </script>

</body>
</html>
