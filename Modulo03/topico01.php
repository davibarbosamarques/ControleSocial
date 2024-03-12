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
                        <h2 class="Titulo">Contexto Histórico</h2>
                        <!-- Título Pricipal -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A origem do que hoje chamamos de <a
                                href="https://www.gov.br/ouvidorias/pt-br/cidadao/conheca-a-ouvidoria/historia-das-ouvidorias"
                                target="_blank" rel="noopener noreferrer">Ouvidoria Pública</a> remete à Suécia, onde,
                            em 1809, foi
                            criada a figura do Ombudsman (representante do povo), cujo objetivo era receber e encaminhar
                            as queixas dos cidadãos relacionadas a serviços públicos. O Ombudsman recebia ainda críticas
                            e sugestões da população, com a missão de agir no interesse do povo junto ao Parlamento.</p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Posteriormente, vários países passaram a criar essa função, com nomes e configurações
                            diferentes. Na França o termo utilizado é o Médiateur de la Republique; enquanto nos países
                            latinos costuma-se denominar o cargo como Defensor del Pueblo. Nos Estados Unidos foram
                            criadas, a partir da década de 1960, ombudsmen espalhados pela Administração Pública,
                            obedecendo a regulamentos próprios, diferentemente do modelo europeu, em que há apenas um
                            ombudsman, ligado ao Poder Legislativo.
                        </p>

                        <!-- Destaque verde -->
                        <div class="content_box_padrao ">
                            <p class="wow fadeIn" data-wow-delay="0.3s">
                                No Brasil, em meados do século XVI foi nomeado o primeiro Ouvidor-Geral, para
                                figurar
                                como
                                os “ouvidos do rei” e para garantir, como órgão do sistema de justiça, a rigorosa
                                aplicação
                                das “leis da metrópole”. Com o processo de emancipação do país, esse instituto
                                português
                                acabou por ser extinto após a independência do Brasil, em 1822.
                            </p>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A primeira ouvidoria pública brasileira foi criada em 1986, no município de Curitiba. Desde
                            então, e em especial desde a promulgação da Constituição Federal de 1988, as ouvidorias
                            públicas evoluíram rapidamente, sob o impulso das reinvindicações populares por participação
                            nas deliberações do Estado.
                        </p>

                        <!-- IMAGEM COM TEXTO -->
                        <div class="apresentacao_inicial">
                            <div class="img_resp wow zoomIn" data-wow-delay="0.3s">
                                <img src="./imgs/pessoa.png" style="width: 13rem;" alt="">
                                <p class="apresentacao_descricao">Fonte: Imagem retirada do Freepik</p>
                            </div>

                            <!-- Destaque padrão cinza -->
                            <div class="content_box_padrao_cinza">
                                <p class="wow fadeIn" data-wow-delay="0.3s">
                                    Outro importante marco é a promulgação da Lei nº. 13.460/2017, conhecida como Código
                                    de
                                    Defesa dos Usuários do Serviço Público, que reconhece a ouvidoria pública como
                                    instituição essencial à boa prestação dos serviços públicos e prevê o
                                    estabelecimento
                                    das ouvidorias em todos os Poderes e todas as esferas federativas.
                                </p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A referida lei definiu ainda as manifestações dos usuários como reclamações, denúncias,
                            sugestões, elogios e demais pronunciamentos que tenham como objeto a prestação de serviços
                            públicos e a conduta de agentes públicos na prestação e fiscalização de tais serviços.
                        </p>

                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="topico02.php" class="btn btn-outline-success" role="button"
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