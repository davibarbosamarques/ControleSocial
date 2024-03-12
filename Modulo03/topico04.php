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

                        <!-- Subtopico -->
                        <h3 class="Subtopico">A Carta de Serviços ao Usuário</h3>
                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Um aspecto importante a ser considerado no controle da prestação dos serviços públicos é a
                            forma de sua divulgação. É dever do Estado divulgar informações acerca da existência dos
                            serviços prestados, bem como as formas de acesso a esses serviços e seus compromissos e
                            padrões de qualidade de atendimento ao público. Visando dar mais visibilidade aos serviços
                            públicos, a Lei nº. 13.460/2017 prevê que órgãos e entidades deverão divulgar a Carta de
                            Serviços ao Usuário.
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_importante">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                IMPORTANTE
                            </div>
                            <div class="content_box" id="conteudo_importante">
                                <p>A Carta de Serviços ao Usuário é um documento publicado em página ou portal em que o
                                    ente público insere suas informações básicas e lista todos os serviços públicos por
                                    ele prestados.</p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Essas disposições se sustentam nos princípios de participação do cidadão, acesso à
                            informação e transparência. É necessário definir as etapas, o público-alvo, os locais, os
                            horários e as formas pelas quais os usuários podem ter acesso aos serviços, a partir de um
                            rol mínimo de informações que deverão constar na Carta:
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong> Lei 13.460 - Art. 7º, § 2º:</strong> A Carta de Serviços ao Usuário deverá trazer
                            informações claras
                            e precisas em relação a cada um dos serviços prestados, apresentando, no mínimo, informações
                            relacionadas a:
                        </p>


                        <!-- Lista -->
                        <div class="wow fadeIn col-sm-12 col-md-12" data-wow-delay="0.3s">
                            <ul class="card-style list-group list-group-flush">
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i> Serviços
                                    oferecidos;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i>Requisitos,
                                    documentos, formas e informações necessárias para acessar o serviço;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i>Principais
                                    etapas para processamento do serviço;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i>Previsão do
                                    prazo máximo para a prestação do serviço;</li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i>Forma de
                                    prestação do serviço; </li>
                                <li class="list-group-item"><i class="seta bi bi-arrow-right-short"></i>Locais e formas
                                    para o usuário apresentar eventual manifestação sobre a prestação do serviço.</li>
                            </ul>
                        </div><br>
                        <!-- Lista End-->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Vale destacar que esse conteúdo não é exaustivo. Informações adicionais que possam auxiliar
                            o usuário a compreender e obter o serviço deverá ser incluída no conteúdo da Carta, que será
                            objeto de atualização periódica e de permanente divulgação, mediante publicação em sítio
                            eletrônico do órgão ou entidade na internet <strong>(art. 7º, § 4º).</strong>
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            <strong>Benefícios da Carta de Serviços:</strong>
                        </p>

                        <!-- IMAGEM COM CAIXAS -->
                        <div class="apresentacao_inicial">
                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/pessoa.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>
                            <div>
                                <ul class="box_list wow fadeIn" data-wow-delay="0.3s">
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.3s">
                                        <i class="bi bi-1-circle"></i> É possível avaliar, em tempo real, e de forma
                                        contínua, a satisfação com o serviço prestado;
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.5s">
                                        <i class="bi bi-2-circle"></i>Permite melhor acompanhamento das políticas
                                        públicas por parte dos usuários (controle social);
                                    </li>
                                    <li class="wow zoomIn texto_apresentacao_lista" data-wow-delay="0.5s">
                                        <i class="bi bi-3-circle"></i> Avaliar se os compromissos firmados nas Cartas de
                                        Serviços ao Usuário foram atendidos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- FIM DA IMAGEM COM CAIXAS -->

                        <!-- IMAGEM NO SITE  -->
                        <div class="text-center wow animate__zoomIn" data-wow-delay="0.3s">
                            <div class="zoom">
                                <a href="imgs01/Figura01.png" data-bs-toggle="modal" data-bs-target="#Imagem1">
                                    <img src="imgs/Figura02.png" alt="Imagem que remete a organização" id="img-1">
                                </a>
                            </div>
                        </div>

                        <!-- Imagem - MODAL-->
                        <div class="modal fade text-center" id="Imagem1" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div
                                class="modal-dialog modal-dialog-centered modal-lg d-flex justify-content-center flex-column">
                                <div class="modal-content w-75">
                                    <img class="img-fluid" src="imgs/Figura02.png" alt="Alt da imagem fica aqui">
                                </div>
                                <div class="modal-footer w-75 bg-light justify-content-center">
                                    <p class="text-secondary"><strong>Figura 02:</strong>Carta de Serviços do Poder
                                        Executivo Estadual</p>
                                </div>
                            </div>
                        </div>

                        <!-- Imagem - End-->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A <a href="https://cearadigital.ce.gov.br/" target="_blank" rel="noopener noreferrer">Carta de Serviços</a>
                            do poder Executivo Estadual ao Usuário bem estruturada será o
                            instrumento de transparência dos serviços públicos oferecidos e dos compromissos assumidos
                            pelo Poder Público.
                        </p>


                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="topico03.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="referencias.php" class="btn btn-outline-success" role="button"
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

    <!-- BACK TO TOP -->
    <div id="back_to_top">
        <div id="btn_back">
            <i id="icon_up" class="fa-solid fa-arrow-up"></i>
        </div>
    </div>

</body>

</html>