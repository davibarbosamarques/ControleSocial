<!DOCTYPE html>
<html lang="pt-br">

<?php
include('layouts/header.php');
?>

<body>

    <!-- NAV  -->
    <?php
    include('layouts/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- MENU LATERAL  -->
    <?php
    include('layouts/menu.php');
    ?>
    <!-- FIM DO MENU LATERAL -->

    <!-- CONTEUDO - Begin -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">

                    <div class="col-md-10 col-sm-8 container-fluid">

                        <!-- Título Pricipal -->
                        <h2 class="Titulo">Apresentação</h2>

                        <div class="apresentacao_inicial">

                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/Group 10.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Apresentação -->
                            <div>
                                <p class="texto_dark apresentacao_texto wow zoomIn" data-wow-delay="0.3s">
                                    Olá, <!--<br />
<b>Warning</b>:  Undefined variable $NomeUsuario in <b>/var/www/html/ModeloRecursos/index.php</b> on line <b>32</b><br />
 --> bem-vindo ao <strong> módulo 04 </strong> do curso Controle Social. Este módulo abordará uma introdução de
                                    orçamento e os mecanismos de controle sociais relacionadas ao tema.
                                </p>
                            </div>
                        </div>

                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="topico01.php" class="btn btn-outline-success" role="button"
                                aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
                        </div>

                        <!-- BARRA DE PROGRESSO -->
                        <div id="progress-bar"></div>

                        <!-- FOOTER -->
                        <?php
                        include('layouts/footer.php');
                        ?>
                        <!-- FOOTER END -->



                    </div> <!-- col-md-10 col-sm-8 container-fluid -->

                </div> <!-- row -->
            </div> <!-- main-content container-fluid -->
        </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->

</body>

</html>