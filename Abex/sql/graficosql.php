<?php
include 'connect.php';

// Consulta os dados da tabela 'macro'
$sql = "SELECT * FROM analise where idAnalise = 2 AND idUsuario = 1";
$result = mysqli_query($con, $sql);

// Verifica se a consulta foi bem-sucedida
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $n = $row['n'];
        $p = $row['p'];
        $k = $row['k'];
        $ca = $row['ca'];
        $mg = $row['mg'];
        $s = $row['s'];
    }
}

$maxValue = 100;

$nHeight = ($n / $maxValue) * 100;
$pHeight = ($p / $maxValue) * 100;
$kHeight = ($k / $maxValue) * 100;
$caHeight = ($ca / $maxValue) * 100;
$mgHeight = ($mg / $maxValue) * 100;
$sHeight = ($s / $maxValue) * 100;
?>