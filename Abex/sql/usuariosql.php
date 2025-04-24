<?php
include 'connect.php';
$sql = "SELECT * FROM usuario";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $nome = $row['nome'];
    }
}

$sqlEmpresa = "SELECT * FROM empresa";
$empresa = mysqli_query($con, $sqlEmpresa);
if ($result) {
    while ($row = mysqli_fetch_assoc($empresa)) {
        $nomeEmp = $row['nome'];
        $telefone = $row['telefone'];
        $cnpj = $row['cnpj'];
        $endereco = $row['endereco'];
        $cidade = $row['cidade'];
        $estado = $row['estado'];
    }
}
?>