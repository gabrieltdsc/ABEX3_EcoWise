<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'connect.php';
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Busca o usuário pelo email
    $sql = "SELECT * FROM usuario WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $usuario = mysqli_fetch_assoc($result);

        // Verifica a senha sem hash
        if ($usuario['senha'] == $senha) {
            $_SESSION['id'] = $usuario['id'];
            header("Location: home.php");
            exit();
        } else {
            echo "<script>alert(" . $usuario['email'] . "Email ou senha incorretos!'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert(" . $usuario['email'] . "Email não encontrado!'); window.location.href='login.php';</script>";
    }
}
?>