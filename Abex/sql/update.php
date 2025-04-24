<?php
include 'connect.php';

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];

    if (isset($_POST['nome1'], $_POST['cpf1'], $_POST['email1'], $_POST['telefone1'], $_POST['senha1'], $_POST['endereco1'])) {
        $nome = $_POST['nome1'];
        $cpf = $_POST['cpf1'];
        $email = $_POST['email1'];
        $telefone = $_POST['telefone1'];
        $senha = $_POST['senha1'];
        $endereco = $_POST['endereco1'];

        $update = "UPDATE usuario 
        SET nome = '$nome', cpf = '$cpf', email = '$email', telefone = '$telefone', senha = '$senha', endereco = '$endereco' 
        WHERE id = '$id'";
        $updateSql = mysqli_query($con, $update);

        if ($updateSql) {
            header('Location: home.php');
        } else {
            die(mysqli_error($con));
        }
    }

    $preencher = "SELECT * FROM usuario WHERE id = '$id'";
    $preencherSql = mysqli_query($con, $preencher);
    $preencherRow = mysqli_fetch_assoc($preencherSql);

    if ($preencherRow) {
        $nome = $preencherRow['nome'];
        $cpf = $preencherRow['cpf'];
        $email = $preencherRow['email'];
        $telefone = $preencherRow['telefone'];
        $senha = $preencherRow['senha'];
        $endereco = $preencherRow['endereco'];
    } else {
        die('Usuário não encontrado.');
    }
} else {
    die('ID não fornecido.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="image/x-icon" href="20x20 (1).png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Atualizar</title>
</head>
<body>
    <div class="container-fluid box-add">
        <div class="row">
            <div class="container">
                <div class="row">
                    <h1 style="padding-bottom: 20px;">Editar usuário</h1>
                    <form method="POST" action="update.php?updateid=<?php echo $_GET['updateid']; ?>">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nome1" value="<?php echo htmlspecialchars($nome); ?>">
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control" name="cpf1" value="<?php echo htmlspecialchars($cpf); ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email1" value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="telefone1" value="<?php echo htmlspecialchars($telefone); ?>">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha1" value="<?php echo htmlspecialchars($senha); ?>">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control" name="endereco1" value="<?php echo htmlspecialchars($endereco); ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
