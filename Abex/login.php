<?php
include 'sql/connect.php';
include 'sql/loginsql.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecowise - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="assets/style.css"> -->
</head>
<style>
.background {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('assets/login/bg-login1.png') center/cover no-repeat;
    filter: blur(3px);
}
.background::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); /* Camada preta */
}
.container-card {
    position: relative;
    z-index: 1;
    background-color: #242323;
    color: white;
}
</style>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="background"></div>
    <div class="card p-4 shadow-lg container-card" style="width: 350px;">
        <h3 class="text-center">Login</h3>
        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>
        <hr>
        <p class="text-center">Não tem conta? <a href="register.php">Registre-se</a></p>
    </div>
</body>