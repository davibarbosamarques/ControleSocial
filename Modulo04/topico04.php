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
                        <h2 class="Titulo">Orçamento Participativo</h2>
                        <!-- Título Pricipal -->

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Inicialmente, iremos apresentar algumas definições de orçamento participativo:
                        </p>

                        <!-- CITAÇÃO -->
                        <div class="citacao_texto">
                            <p>Para Deusvaldo Carvalho o Orçamento Participativo é um instrumento que serve para alocar
                                os recursos públicos de forma eficiente e eficaz de acordo com as demandas sociais.</p>
                            <p class="citacao blockquote-footer"><strong>Orçamento e Contabilidade Pública (2010:
                                    p.20)</strong></p>
                        </div>

                        <!-- CITAÇÃO -->
                        <div class="citacao_texto">
                            <p>O orçamento participativo é um importante instrumento de complementação da democracia
                                representativa, pois permite que o cidadão debata e defina os destinos de uma cidade.
                                Nele, a população decide as prioridades de investimentos em obras e serviços a serem
                                realizados a cada ano, com os recursos do orçamento da prefeitura. Além disso, ele
                                estimula o exercício da cidadania, o compromisso da população com o bem público e a
                                corresponsabilização entre governo e sociedade sobre a gestão da cidade.</p>
                            <p class="citacao blockquote-footer"><strong>Valmir Leôncio da Silva. A Nova Contabilidade
                                    Aplicada ao Setor Público (2013: p. 32).</strong></p>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Fica claro a abrangência do orçamento participativo: uma cidade. No âmbito municipal, a
                            gestão orçamentária participativa incluirá a realização de debates, audiências e consultas
                            públicas sobre as propostas do plano plurianual, da lei de diretrizes orçamentárias e do
                            orçamento anual, como condição obrigatória para sua aprovação pela Câmara Municipal.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            A realização de encontros do poder público com a população, para a definição de gastos,
                            sobretudo com obras e serviços que atendam diretamente os cidadãos, permite a
                            democratização da gestão pública.
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
                                    A LRF assevera que aos instrumentos de transparência da gestão fiscal (planos,
                                    orçamentos e relatórios fiscais) será dada ampla divulgação, inclusive em meios
                                    eletrônicos de acesso público e com o <strong>incentivo à participação popular e
                                        realização de
                                        audiências públicas.
                                </p>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O orçamento participativo, por mais bem instalado que seja numa cidade, não substitui o
                            Poder Legislativo na apreciação da lei orçamentária, mas exige dos indivíduos posturas que
                            vão além do cumprimento de obrigações meramente eleitorais.
                        </p>

                        <!-- CAIXA DE TEXTO IMPORTANTE -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_importante">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                IMPORTANTE
                            </div>
                            <div class="content_box" id="conteudo_importante">
                                <p>Observa-se, pois, o rompimento na forma habitual de alocação de recursos públicos,
                                    onde o cidadão deixa de ser um simples coadjuvante e passa a participar diretamente
                                    do processo orçamentário. Por outro lado, à medida que a população se mostra
                                    distante das decisões referentes ao dinheiro público, mais as necessidades públicas
                                    serão afetadas com a diminuição do cuidado dispensado as mesmas.</p>
                            </div>
                        </div>

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