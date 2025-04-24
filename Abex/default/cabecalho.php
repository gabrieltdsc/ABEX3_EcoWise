<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'sql/connect.php';
include 'sql/usuariosql.php';
include 'sql/graficosql.php';
include 'sql/propriedadesql.php';
include 'sql/loginsql.php';
include 'sql/connect.php';
$paginaAtual = basename($_SERVER['PHP_SELF']);

if (isset($_SESSION['id'])) {

    $sql = "SELECT nome, email, telefone FROM usuario WHERE id = " . $_SESSION['id'];
    $resultado = mysqli_query($con, $sql);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $usuario = mysqli_fetch_assoc($resultado);
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $telefone = $usuario['telefone'];
    } else {
        echo "Erro ao buscar os dados do usuário.";
    }
} else {
    echo "<script>alert('Usuário não autenticado.')</script>"; 
    echo "<script>window.location.href = './login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="20x20 (1).png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        function getParameterByName(name, url) {
            if (!url) url = window.location.href;
            name = name.replace(/[\[\]]/g, '\\$&');
            var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                results = regex.exec(url);
            if (!results) return null;
            if (!results[2]) return '';
            return decodeURIComponent(results[2].replace(/\+/g, ' '));
        }

        var usuarioDeletado = getParameterByName('usuario_deletado');
        if (usuarioDeletado === 'true') {
            alert('Usuário deletado com sucesso!');
        }
    </script>
</head>
<div class="container-fluid box-header">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-2 col-sm-2">
                    <div class="logo">
                        <img src="assets/logo.png" alt="logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8">
                    <div class="menu">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link<?php echo ($paginaAtual == 'home.php') ? ' atual' : ' outra'; ?>" aria-current="page" href="home.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo ($paginaAtual == 'propriedade.php') ? ' atual' : ' outra'; ?>" href="propriedade.php">Propriedades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo ($paginaAtual == 'analise.php') ? ' atual' : ' outra'; ?>" href="analise.php">Analises</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link<?php echo ($paginaAtual == 'suporte.php') ? ' atual' : ' outra'; ?>" href="suporte.php">Suporte</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2">
                    <div class="dropdown">
                        <div class="perfil">
                            <p class="nome-header"><?php echo $nome?></p>
                            <img src="assets/perfil/gabriel.jpg" alt="<?php echo $nome?>">
                        </div>
                        <div class="dropdown-content perfil_dropdown">
                            <a href="perfil.php">Meu perfil</a>
                            <a href="configuracoes.php">Configurações<br></a>
                            <a href="./logout.php">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
