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

                        <h2 class="Titulo wow fadeIn" data-wow-delay="0.3s"><span class="iconTitulo"><i
                                    class="bi bi-book-half"></i></span>Referências
                        </h2>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>BRASIL.
                            <strong>Constituição da República Federativa do Brasil de 1988</strong>. Disponível em: <a
                                href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso
                            em: 07 nov. 2020.
                        </p>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>__________.
                            Lei nº. 101, de 04 de maio de 2000. Estabelece normas de finanças públicas voltadas para a
                            responsabilidade na gestão fiscal e dá outras providências. Disponível em:<a
                                href="http://www.planalto.gov.br" target="_blank">http://www.planalto.gov.br</a>. Acesso
                            em: 12 nov. 2020.</p>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>__________.
                            Lei nº. 10.527, de 10 de julho de 2001. estabelece diretrizes gerais da política urbana e dá
                            outras providências. Disponível em:<a href="http://www.planalto.gov.br"
                                target="_blank">http://www.planalto.gov.br</a>. Acesso em: 01 nov. 2020.
                        </p>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i
                                class="bi bi-book me-2"></i>BALEEIRO,<strong>Uma Introdução à ciência das
                                finanças.</strong>14. Ed. Rio de Janeiro: Forense 1994.
                        </p>

                        <p class="Texto wow fadeIn" data-wow-delay="0.3s"> <i class="bi bi-book me-2"></i>CARVALHO,
                            Deusvaldo.<strong>A nova contabilidade aplicada ao setor público.</strong>3 ed. Atlas,
                            2013..
                        </p>
                        <!-- FIM DAS REFERENCIAS  -->

                        <!-- Interação com aluno-->
                        <ul
                            class="none border border-success m-4 p-4 text-rounded rounded rounded-lg wow animate__fadeInLeftBig">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    "Pronto, NOME_DO_ALUNO agora você pode fazer a sua avaliação
                                    clicando em Realizar Atividade Avaliativa.”
                                </h4>
                            </li>
                        </ul>


                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="topico04.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="https://cursos.egp.ce.gov.br/mod/quiz/view.php?id=" target="_blank"
                                class="btn btn-outline-success" role="button" aria-pressed="true">Realizar Atividade
                                Avaliativa<i class="fa-solid fa-chevron-right"></i></a>
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

    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

</body>

</html>