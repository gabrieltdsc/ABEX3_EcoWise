<?php
include 'default/cabecalho.php';

// Buscar propriedades do usuário
$sql = "SELECT * FROM propriedade WHERE idUsuario = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "i", $idUsuario);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$propriedades = [];
while ($row = mysqli_fetch_assoc($result)) {
    $propriedades[] = $row;
}
?>
<head>
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #121212;
            color: #FFFFFF;
        }

        .container {
            padding: 40px;
        }

        .box-header {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-cor-header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn-cor-header:hover {
            background-color: #45a049;
        }

        .box-top,
        .box-info {
            background-color: #1e1e1e;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .list-group-item {
            background-color: #2c2c2c;
            color: white;
            border: 1px solid #444;
            cursor: pointer;
        }

        .list-group-item:hover {
            background-color: #4CAF50;
            color: white;
        }

        #map {
            height: 300px;
            width: 100%;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <!-- Lista de propriedades -->
        <div class="col-md-6">
            <div class="box-header">
                <h3>Registrar Propriedade</h3>
                <button class="btn-cor-header">Registrar nova propriedade</button>
            </div>

            <div class="box-top">
                <h4>Propriedades do Usuário</h4>
                <ul class="list-group" id="listaPropriedades">
                    <?php foreach ($propriedades as $prop): ?>
                        <li class="list-group-item"
                            data-nome="<?= htmlspecialchars($prop['nomePropriedade']) ?>"
                            data-lat="<?= $prop['latitude'] ?>"
                            data-lng="<?= $prop['longitude'] ?>">
                            <?= htmlspecialchars($prop['nomePropriedade']) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <!-- Detalhes e mapa -->
        <div class="col-md-6">
            <div class="box-info">
                <h3>Informações da Propriedade</h3>
                <p><strong>Nome:</strong> <span id="propNome">Selecione uma propriedade</span></p>
                <p><strong>Coordenadas:</strong> <span id="propCoord">-</span></p>

                <h4>Localização no Mapa</h4>
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    let map = L.map('map').setView([-27.100, -52.616], 12); // Chapecó como padrão

    // Mapa base (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Marcador inicial
    let marker = L.marker([-27.100, -52.616]).addTo(map);

    // Evento: clique na lista de propriedades
    document.querySelectorAll('.list-group-item').forEach(item => {
        item.addEventListener('click', function () {
            const nome = this.dataset.nome;
            const lat = parseFloat(this.dataset.lat);
            const lng = parseFloat(this.dataset.lng);

            document.getElementById('propNome').textContent = nome;
            document.getElementById('propCoord').textContent = `${lat.toFixed(5)}, ${lng.toFixed(5)}`;

            marker.setLatLng([lat, lng]);
            map.setView([lat, lng], 14);
        });
    });
</script>

<?php include 'default/footer.php'; ?>