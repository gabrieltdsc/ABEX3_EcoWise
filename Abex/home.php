<?php
session_start();
include 'default/cabecalho.php';
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const barras = document.querySelectorAll(".grafico .barra");

        barras.forEach(barra => {
            let alturaFinal = barra.style.height; 
            barra.style.height = "0%";

            setTimeout(() => {
                barra.style.transition = "height 1.7s ease-in-out";
                barra.style.height = alturaFinal;
            }, 500);
        });
    });
</script>
<title>Ecowise - Inicio</title>
<div class="container-fluid box-banner">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="banner" style="padding: 0px;">
                    <img src="assets/banner.jpg" alt="Banner">
                    <p>meu deus do ceu como que arruma essa div</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid box-card">
    <div class="row no-gutters">
        <div class="col-md-4 box-prop">
            <i class="icone-card fa-solid fa-house"></i>
            <h1>Propriedades</h1>
        </div>
        <div class="col-md-4 box-analise">
            <i class="icone-card fa-solid fa-flask"></i>
            <h1>Análises</h1>
        </div>
        <div class="col-md-4 box-suporte">
            <i class="icone-card fa-solid fa-headset"></i>
            <h1>Suporte</h1>
        </div>
    </div>
</div>

<div class="container-fluid box-grafico">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6">
                    <div class="titulo-grafico">
                        <h1>Composição do solo</h1>
                    </div>
                    <div class="grafico">
                        <div class="barra" style="height: <?php echo $nHeight; ?>%; background-color:rgb(76, 175, 80);" title="<?php echo $n; ?>%">
                            <div class="elemento">Nitrogenio</div>
                        </div>
                        <div class="barra" style="height: <?php echo $pHeight; ?>%; background-color:rgb(33, 150, 243);" title="<?php echo $p; ?>%">
                            <div class="elemento">Fosforo</div>
                        </div>
                        <div class="barra" style="height: <?php echo $kHeight; ?>%; background-color:rgb(255, 87, 34);" title="<?php echo $k; ?>%">
                            <div class="elemento">Potassio</div>
                        </div>
                        <div class="barra" style="height: <?php echo $caHeight; ?>%; background-color:rgb(255, 193, 7);" title="<?php echo $ca; ?>%">
                            <div class="elemento">Calcio</div>
                        </div>
                        <div class="barra" style="height: <?php echo $mgHeight; ?>%; background-color: rgb(75, 59, 255);" title="<?php echo $mg; ?>%">
                            <div class="elemento">Magnesio</div>
                        </div>
                        <div class="barra" style="height: <?php echo $sHeight; ?>%; background-color: rgb(223, 79, 255);" title="<?php echo $s; ?>%">
                            <div class="elemento">Enxofre</div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6">
                    <div class="titulo-grafico">
                        <h1>Resumo do último relatório</h1>
                    </div>
                    
                    <div class="box-texto">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid box-download">
    <div class="row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1>TUDO QUE VOCÊ PRECISA, ONDE VOCÊ ESTIVER, NA PALMA DA SUA MÃO</h1>
                    <p >O aplicativo Ecowise veio trazer facilidade ao agricultor, trazendo informações técnicas, notícias do campo e relatórios personalizados</p>
                    <div class="download-buttons">
                        <a href="#" class="btn btn-dark" style="margin-right: 15px;">
                            <i class="fab fa-apple"></i> App Store
                        </a>
                        <a href="#" class="btn btn-dark">
                            <i class="fab fa-google-play"></i> Google Play
                        </a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img style="border-radius: 10px" class="img-fluid" src="assets/download-img.jpg" alt="Promocional">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid box-info">
    <div class="row">
        <div class="container">
            <div class="row">
                <h1>teste</h1>
            </div>
        </div>
    </div>
</div>

<?php include 'default/footer.php';?>
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
