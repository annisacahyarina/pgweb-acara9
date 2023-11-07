<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="DIVSIG UGM">
    <meta name="description" content="leaflet basic">
    <!-- Judul pada tab browser -->
    <title>LeafletJS - Kapanewon di Sleman</title>
    <!-- Leaflet CSS Library -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css">
    <!-- Tab browser icon -->
    <link rel="icon" type="image/x-icon" href="http://luk.staff.ugm.ac.id/logo/UGM/Resmi/Warna.gif">
    <style>
        /* Tampilan peta fullscreen */
        html,
        body,
        #map {
            height: 100%;
            width: 100%;
            margin: 0px;
        }
    </style>
</head>

<body>
    <!-- Leaflet JavaScript Library -->
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>

    <div id="map"></div>


    <script>
        /* Initial Map*/ //(note: sesuaikan setView koordinat dan zoom level ke titik tengah lembar peta)
        var map = L.map('map').setView([-7.7, 110.2], 5); //lat, long, zoom 

/* Tile Basemap */ //(note: pilihan basemap diakses pada https://leaflet-extras.github.io/leaflet-providers/preview/)

 var basemap1 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="DIVSIG UGM" target="_blank">DIVSIG UGM</a>' //menambahkan nama//
        });

        var basemap2 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri | <a href="Latihan WebGIS" target="_blank">DIVSIG UGM</a>'
        });

        var basemap3 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri | <a href="Lathan WebGIS" target="_blank">DIVSIG UGM</a>'
        });

        var basemap4 = L.tileLayer('https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptile s.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
        });

        basemap4.addTo(map);


        /* Layer Marker*/
        var marker1 = L.marker([-7.7774, 110.2478], { draggable: true });
        marker1.addTo(map);
        marker1.bindPopup("Moyudan");

        var marker2 = L.marker([-7.7318, 110.2484]);
        marker2.addTo(map);
        marker2.bindPopup("Minggir");

        var marker3 = L.marker([-7.7265, 110.3003]);
        marker3.addTo(map);
        marker3.bindPopup("Seyegan");

        var marker4 = L.marker([-7.7681, 110.2957]);
        marker4.addTo(map);
        marker4.bindPopup("Godean");

        var marker5 = L.marker([-7.7903, 110.3202]);
        marker5.addTo(map);
        marker5.bindPopup("Gamping");

        

        /* Control Layer */
        var baseMaps = {
            "OpenStreetMap": basemap1,
            "Esri World Street": basemap2,
            "Esri Imagery": basemap3,
            "Stadia Dark Mode": basemap4
        };

        var overlayMaps = {
            "Moyudan": marker1,
            "Minggir": marker2,
            "Seyegan": marker3,
            "Godean": marker4,
            "Gamping": marker5
        };

        L.control.layers(baseMaps, overlayMaps, { collapsed: false }).addTo(map);
        /* Scale Bar */
        L.control.scale({
            maxWidth: 150, position: 'bottomright'
        }).addTo(map);

    

   </script>

    
</body>



</html>

