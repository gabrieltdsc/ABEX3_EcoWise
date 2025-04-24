<?php
include 'connect.php';

$idUsuario = $_SESSION['id'] ?? null;
if (!$idUsuario) {
    die("Usuário não está logado.");
}

$propriedades = [];
$sqlProp = "SELECT * FROM propriedade WHERE idUsuario = ?";
$stmt = mysqli_prepare($con, $sqlProp);
mysqli_stmt_bind_param($stmt, "i", $idUsuario);
mysqli_stmt_execute($stmt);
$resultProp = mysqli_stmt_get_result($stmt);

while ($row = mysqli_fetch_assoc($resultProp)) {
    $propriedades[] = $row;
}
?>