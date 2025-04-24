<?php
include 'connect.php';
if(isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $deleteUsuario = "DELETE FROM usuario WHERE id = '$id'";
    $deleteUsuarioSql = mysqli_query($con, $deleteUsuario);

    if($deleteUsuarioSql) {
        header('Location: home.php?usuario_deletado=true');
    } else {
        die(mysqli_error($con));
    }
}