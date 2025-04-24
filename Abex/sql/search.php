<?php
include 'connect.php';
$pesquisa = '';
if (isset($_GET['pesquisa'])) {
    $pesquisa = mysqli_real_escape_string($con, $_GET['pesquisa']);
}

$query = "SELECT * FROM usuario";
if (!empty($pesquisa)) {
    $query .= " WHERE nome LIKE '%$pesquisa%' OR email LIKE '%$pesquisa%' OR cpf LIKE '%$pesquisa%'";
}

$result = mysqli_query($con, $query);

?>
