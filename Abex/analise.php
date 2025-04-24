<?php include 'default/cabecalho.php'; ?>
<title>Ecowise - Análises</title>
<head>
    <style>
        body {
            background-color: #1e1e1e;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .box-formulario {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 30px;
        }

        .form-container {
            background-color: #2c2c2c;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 255, 128, 0.2);
            max-width: 800px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #ccc;
        }

        .form-group input {
            width: 100%;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 8px;
            border: 1px solid #444;
            background-color: #444;
            color: white;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-group button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
        }
    </style>
</head>
<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<style>
    #map {
        height: 300px;
        width: 100%;
        margin: 20px 0;
        border-radius: 10px;
        border: 2px solid #4CAF50;
    }
</style>

<div id="map"></div>

<script>
    // Ponto inicial (ex: Chapecó)
    const initialLat = -27.100;
    const initialLon = -52.616;

    // Inicializa o mapa
    let map = L.map('map').setView([initialLat, initialLon], 13);

    // Camada de mapa
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Marcador inicial
    let marker = L.marker([initialLat, initialLon], { draggable: true }).addTo(map);

    // Atualiza inputs com coordenadas do clique no mapa
    map.on('click', function (e) {
        const { lat, lng } = e.latlng;
        marker.setLatLng([lat, lng]);
        document.getElementById("latitude").value = lat.toFixed(5);
        document.getElementById("longitude").value = lng.toFixed(5);
    });

    // Atualiza marcador ao digitar nas inputs
    function updateMarkerFromInputs() {
        const lat = parseFloat(document.getElementById("latitude").value);
        const lon = parseFloat(document.getElementById("longitude").value);

        if (!isNaN(lat) && !isNaN(lon)) {
            marker.setLatLng([lat, lon]);
            map.setView([lat, lon], 15);
        }
    }

    // Atualiza inputs ao arrastar o marcador
    marker.on('dragend', function (e) {
        const pos = marker.getLatLng();
        document.getElementById("latitude").value = pos.lat.toFixed(5);
        document.getElementById("longitude").value = pos.lng.toFixed(5);
    });

    // Eventos dos inputs
    document.getElementById("latitude").addEventListener("input", updateMarkerFromInputs);
    document.getElementById("longitude").addEventListener("input", updateMarkerFromInputs);
</script>
<body>
    <div class="box-formulario">
        <div class="form-container">
            <h2>Registro de Análise de Solo</h2>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="dataColeta">Data da Coleta</label>
                    <input type="date" id="dataColeta" name="dataColeta" required>
                </div>
                <div class="form-group grid-container">
                    <div>
                        <label for="ph">pH</label>
                        <input type="number" id="ph" name="ph" step="0.01">
                    </div>
                    <div>
                        <label for="temperatura">Temperatura (°C)</label>
                        <input type="number" id="temperatura" name="temperatura" step="0.1">
                    </div>
                    <div>
                        <label for="umidade">Umidade (%)</label>
                        <input type="number" id="umidade" name="umidade" step="0.1">
                    </div>
                    <div>
                        <label for="argila">Argila (%)</label>
                        <input type="number" id="argila" name="argila" step="0.1">
                    </div>
                    <div>
                        <label for="profundidade">Profundidade (cm)</label>
                        <input type="number" id="profundidade" name="profundidade" step="0.1">
                    </div>
                    <div>
                        <label for="latitude">Latitude</label>
                        <input type="number" id="latitude" name="latitude" step="0.00001" required>
                    </div>
                    <div>
                        <label for="longitude">Longitude</label>
                        <input type="number" id="longitude" name="longitude" step="0.00001" required>
                    </div>
                </div>

                <div class="form-group grid-container">
                    <div><label for="n">Nitrogênio (N)</label><input type="number" id="n" name="n" step="0.01" required></div>
                    <div><label for="p">Fósforo (P)</label><input type="number" id="p" name="p" step="0.01" required></div>
                    <div><label for="k">Potássio (K)</label><input type="number" id="k" name="k" step="0.01" required></div>
                    <div><label for="ca">Cálcio (Ca)</label><input type="number" id="ca" name="ca" step="0.01" required></div>
                    <div><label for="mg">Magnésio (Mg)</label><input type="number" id="mg" name="mg" step="0.01" required></div>
                    <div><label for="s">Enxofre (S)</label><input type="number" id="s" name="s" step="0.01" required></div>
                </div>

                <div class="form-group grid-container">
                    <div><label for="fe">Ferro (Fe)</label><input type="number" id="fe" name="fe" step="0.01"></div>
                    <div><label for="mn">Manganês (Mn)</label><input type="number" id="mn" name="mn" step="0.01"></div>
                    <div><label for="zn">Zinco (Zn)</label><input type="number" id="zn" name="zn" step="0.01"></div>
                    <div><label for="cu">Cobre (Cu)</label><input type="number" id="cu" name="cu" step="0.01"></div>
                    <div><label for="b">Boro (B)</label><input type="number" id="b" name="b" step="0.01"></div>
                    <div><label for="mo">Molibdênio (Mo)</label><input type="number" id="mo" name="mo" step="0.01"></div>
                    <div><label for="cl">Cloro (Cl)</label><input type="number" id="cl" name="cl" step="0.01"></div>
                </div>

                <div class="form-group">
                    <label for="idUsuario">ID do Usuário</label>
                    <input type="number" id="idUsuario" name="idUsuario">
                </div>

                <div class="form-group">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</body>
<?php include 'default/footer.php'; ?>