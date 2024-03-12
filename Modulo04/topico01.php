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
                            Tradicionalmente o orçamento foi concebido como um instrumento de controle a partir da
                            limitação do poder dos governantes, seja do Monarca ou do Poder Executivo. Alguns documentos
                            históricos demarcam a gênese do orçamento:
                        </p>

                        <!-- Balão informativo -->
                        <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                            <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais
                                informações</strong>
                        </div>

                        <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                        <div class="accordion destaques" id="accordionExample">
                            <div>
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        CARTA MAGNA
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p> Inglaterra, 1215, a nobreza da Inglaterra impôs ao Rei João Sem Terra que a
                                            cobrança de tributos ocorreria com a aprovação do Conselho Comum.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        BILL OF RIGHTS
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Inglaterra, 1689, ratificou-se a regra que a cobrança de impostos deveria ser
                                            autorizada pelo parlamento.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        ASSEMBLEIA NACIONAL DA VIRGÍNIA
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>EUA, 1765, em contraponto ao domínio inglês e ao aumento do Imposto do selo,
                                            os colonos contestavam cobrança de impostos pela Coroa Inglesa.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        DECLARAÇÃO DOS DIREITOS DO HOMEM E DO CIDADÃO
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>França, 1789, consagrando que: “Todos os cidadãos têm direito de verificar
                                            por si, ou pelos seus representantes, da necessidade de contribuição
                                            pública, de consenti-la livremente, de observar o seu emprego e de lhe fixar
                                            a repartição, a coleta, a cobrança e a duração”.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            No <strong>absolutismo</strong> cabia exclusivamente aos monarcas cobrar impostos e dar
                            destinação ao seu
                            produto, sem fiscalização alguma e sem regras às quais precisasse obedecer. A boa técnica
                            orçamentária limita o aumento de obrigações tributárias, bem como o aumento dos gastos
                            administrativos.
                        </p>

                        <!-- Destaque padrão -->
                        <div class="content_box_padrao_cinza">
                            <!-- Parágrafo sem a biblioteca de animação com exemplo de tooltip  -->
                            <p>
                                Na clássica lição do
                                <a class="link_tooltip" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                    data-bs-title="Aliomar de Andrade Baleeiro (Salvador, 5 de maio de 1905 – Rio de Janeiro, 3 de março de 1978) foi um jornalista, advogado, professor, jurisconsulto e político brasileiro. Foi deputado federal pela Bahia e pela Guanabara e ministro do Supremo Tribunal Federal, tendo presidido a corte de 1971 a 1973.">
                                    Professor Aliomar Baleeiro
                                </a>
                                , o orçamento é um ato pelo qual o Poder legislativo autoriza o Poder executivo, por um
                                certo período e em pormenor, a realização das despesas destinadas ao funcionamento dos
                                serviços públicos e outros fins adotados pela política econômica e geral do país, assim
                                como a arrecadação de receitas criadas em lei.
                            </p>

                        </div>

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