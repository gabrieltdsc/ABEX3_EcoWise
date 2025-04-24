<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="20x20 (1).png">
    <title>Adicionar usuario</title>
</head>
<body>
    <div class="container-fluid box-add">
        <div class="row">
            <div class="container">
                <div class="row">
                <h1 style="padding-bottom: 20px;">Adicionar usuário</h1>
                    <form method="post" action="adicionarsql.php">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" placeholder="Francisco Amaral" name="nome">
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" class="form-control" placeholder="123.456.789-00" name="cpf">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="exemplo@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" placeholder="(48) 91234-1234" name="telefone">
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="senha">
                        </div>
                        <div class="form-group">
                            <label>Endereço</label>
                            <input type="text" class="form-control" placeholder="Rua Exemplo, 123, Bairro, Cidade" name="endereco">
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Cadastrar</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</body>
</html>