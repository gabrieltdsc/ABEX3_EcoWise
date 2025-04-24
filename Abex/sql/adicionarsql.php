<?php
include 'connect.php';
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $insert =  "INSERT INTO `usuario` (`nome`, `cpf`, `email`, `telefone`, `senha`, `endereco`) 
                VALUES ('$nome', '$cpf', '$email', '$telefone', '$senha', '$endereco')";
    
    $insertSql = mysqli_query($con, $insert);
    if($insertSql) {
        header('Location: home.php');
    } else {
        die(mysqli_error($con));
    }

?>