<?php 
    // EGPCE - Intes do menu
    include('layouts/header.php') 
?>

<body>
    <?php 
        // EGPCE - Intes do menu
        include('layouts/menu.php') 
    ?>
    <?php 
        // EGPCE - Intes do menu
        include('layouts/nav.php') 
    ?>


    <!-- CONTEUDO - Begin -->
    <div class="all-conteudo">
        <section class="conteiner-principal">
            <div class="main-content container-fluid">
                <div class="row">

                    <div class="col-md-10 col-sm-8 container-fluid">

                            <!-- Título Pricipal -->
                            <h2 class="Titulo">Resumo do Módulo</h2>
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                            Neste módulo tratamos o controle social como às ações que os cidadãos exercem para monitorar, fiscalizar, avaliar e acompanhar a gestão pública, representando também uma ferramenta indispensável quanto ao mau uso do dinheiro público. O controle social é um complemento indispensável ao controle institucional realizado pelos órgãos que fiscalizam os recursos públicos. Tais premissas serão importantes nos vários instrumentos de participação que veremos nos próximos módulos, dos quais podemos citar:
                            </p>

                           <!-- Caixa interativas -->
                           <div class="wow fadeIn" data-wow-delay="0.3s">
                                <div class="row">
                                    <div class="col d-flex justify-content-center gap-3">
                                        <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s">Acesso à Informação e Transparência;</a>
                                        <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">Governança;</a>
                                        <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Ouvidoria;</a>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-center gap-3">
                                        <a class="li_interativo wow fadeInLeft" data-wow-delay="0.8s">Noções de Orçamento;</a>
                                        <a class="li_interativo wow fadeInLeft" data-wow-delay="0.9s">Orçamento Participativo.</a>
                                    </div>
                                </div>
                            </div> <br>
 
                    </div>
                    <div class="text-center">
                        <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                            <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                        <a href="referencias.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo
                            <i class="fa-solid fa-chevron-right"></i></a>
                    </div>
                    <!-- BARRA DE PROGRESSO -->
                    <div id="progress-bar"></div>

                    <!-- FOOTER -->
                    <?php 
        // EGPCE - Intes do menu
        include('layouts/footer.php') 
    ?>
                </div> <!-- apresentacao_inicial -->
            </div> <!-- col-md-10 col-sm-8 container-fluid -->

    </div> <!-- row -->
    </div> <!-- main-content container-fluid -->
    </section> <!-- section -->
    </div> <!-- all-conteudo -->
    <!-- CONTEUDO - End -->


    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

</body>

</html>