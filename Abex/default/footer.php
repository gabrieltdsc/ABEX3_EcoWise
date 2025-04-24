<?php
include 'sql/connect.php';
include 'sql/graficosql.php';
include 'sql/usuariosql.php';
$paginaAtual = basename($_SERVER['PHP_SELF']);
?>
<footer>
<div class="container-fluid box-footer">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <div class="logo-footer">
                        <img src="assets/logo.png" alt="logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-xs-4">
                    <p style="color: #8e99a3;"><?php echo $nomeEmp . ' - ' . $cnpj; ?></p>
                    <a class="link" href="https://maps.app.goo.gl/hoZzmXdGweUoUr2o8" target="_blank"><p>Endereço: <?php echo $endereco . ' - ' . $cidade . '/ ' . $estado; ?></p></a>
                    <a class="link" href="tel:+55<?php echo $telefone; ?>"><p>Telefone: <?php echo $telefone; ?></p></a>
                    <p style="color: #8e99a3;">Redes Sociais</p></a>
                    <div class="box-redes">
                        <a href="https://www.instagram.com" target="_blank" class="rede-social-ig">
                            <i class="fab fa-instagram redes"></i>
                        <a href="https://www.facebook.com" target="_blank" class="rede-social-fb">
                            <i class="fab fa-facebook redes"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="menu-footer">
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
                    <div class="box-tempo">
                        <div id="mrwid80c9ee1b44b731d0e15d043f2e7dc6bb">
                            <script type="text/javascript" async src="https://api.meteored.com/widget/loader/80c9ee1b44b731d0e15d043f2e7dc6bb"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</footer>