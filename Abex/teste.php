<?php
// include 'default/cabecalho.php';
?>

<title>Ecowise - Teste</title>
<style>
    .box-topico {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        height: 350px;
        /* width: 100%; */
        background-color:rgb(185, 185, 185);
    }
    .box-topico > div {
        flex: 1;
    }
    .box-topico:hover {
        /* background-image: url('assets/banner.jpg'); */
        transition: ease-in-out 0.5s !important;
    }
    .box-prop {
    position: relative;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('assets/teste/prop.png');
    background-size: cover;
    background-position: center;
    }

    .box-prop::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Camada preta com 50% de transparência */
        transition: opacity 0.1s ease-in-out;
    }

    .box-prop:hover::after {
        opacity: 0; /* Remove a camada preta ao passar o mouse */
    }
    .box-analise {
    position: relative;
    height: 100%;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-image: url('assets/teste/analise.png');
    background-size: cover;
    background-position: center;
    }

    .box-analise::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Camada preta com 50% de transparência */
        transition: opacity 0.1s ease-in-out;
    }

    .box-analise:hover::after {
        opacity: 0; /* Remove a camada preta ao passar o mouse */
    }

    .box-suporte {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

</style>
<div class="container-fluid box-banner">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="box-topico">
                    <div class="col-xs-4">
                        <div class="box-prop">
                            <i class="fa-brands fa-google-play"> Playstore</i>
                            <h1>1</h1>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box-analise">
                            <i class="fa-brands fa-google-play"> Playstore</i>
                            <h1>2</h1>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="box-suporte">
                            <i class="fa-brands fa-google-play"> Playstore</i>
                            <h1>3</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
// include 'default/footer.php';
?>
<!-- <div class="container-fluid box-content">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-dark">
                        <thead>
                            <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Status</th>
                            <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM usuario";
                            $result = mysqli_query($con, $sql);
                            if($result) {
                                while($row = mysqli_fetch_assoc($result)) { 
                                    $id = $row['id'];
                                    $primeiro = $row['nome'];
                                    $email = $row['email'];
                                    $telefone = $row['telefone'];
                                    $status = $row['status'];
                            ?>
                            <tr class="table-light text-center">
                                <th><?php echo $id; ?></th>
                                <td><?php echo $primeiro; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $telefone; ?></td>
                                <td>
                                <?php if($status == '1') { ?>
                                    <button class="btn btn-success">Ativo</button>
                                <?php } else { ?>
                                    <button class="btn btn-dark">Inativo</button>
                                <?php } ?>
                                </td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="options">
                                        <button class="btn btn-primary"><a class="btn-font "href="update.php?updateid=<?php echo $id; ?>">Editar</a></button>
                                        <button class="btn btn-danger"><a class="btn-font" href="delete.php?deleteid=<?php echo $id; ?>">Deletar</a></button>
                                    </div>
                                </td>
                            </tr>
                            <?php    
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-6 col-lg-6 col-md-12 col-sm-12">
                    <div style="border: 1px solid red;">
                        <div class="info">
                            <h1>Informações</h1>
                            <p>Usuarios: 10</p>
                            <p>Propriedades: 10</p>
                            <p>Agronomos: 10</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
