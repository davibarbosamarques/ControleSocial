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
                            A elaboração do orçamento deve seguir alguns princípios por parte da Administração Pública.
                            Alguns destes são doutrinários, mas a maioria encontra-se positivada na legislação:
                            basicamente na Constituição Federal, na Lei n.º 4.320/64 (Lei de Direito Financeiro) e na
                            Lei n.º 101/2000 (Lei de Responsabilidade Fiscal).
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O Art. 2ª da Lei n.º 4.320/1964 introduz: A Lei do Orçamento conterá a discriminação da
                            receita e despesa de forma a evidenciar a política econômica financeira e o programa de
                            trabalho do Governo, obedecidos os princípios de <strong>unidade, universalidade e
                                anualidade.</strong>
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
                                        UNIDADE
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O orçamento deve ser uno, ou seja, deve haver somente um único orçamento por
                                            nível de governo (federal, estadual e municipal). Esse princípio evoluiu
                                            para a chamada totalidade orçamentária a partir da existência de orçamentos
                                            autônomos, mas que são consolidados essencialmente em uma única peça.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        UNIVERSALIDADE
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O orçamento público deve conter todas as receitas a serem arrecadadas e todas
                                            as despesas a serem realizadas para determinado exercício.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        ANUALIDADE
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>As autorizações legislativas devem ser feitas por período determinado no
                                            tempo, uma vez que não haverá autorização legislativa em matéria
                                            orçamentária por tempo indeterminado. O princípio estabelece, portanto, que
                                            a cada 12 meses (exercício financeiro) terá vigência uma nova lei
                                            orçamentária. No Brasil por força do art. 34, da Lei n.º 4.320/1964, este
                                            período coincide com o ano civil, de 01 de janeiro a 31 de dezembro.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Além dos princípios já citados é possível citar:
                        </p>

                        <!-- Caixa interativas -->
                        <div class="wow fadeIn" data-wow-delay="0.3s">
                            <div class="row">
                                <div class="col d-flex justify-content-center gap-3">
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.1s"> Legalidade</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.3s">Exclusividade</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Publicidade</a>
                                    <a class="li_interativo wow fadeInLeft" data-wow-delay="0.6s">Equilíbrio</a>
                                </div>
                            </div>
                        </div>

                        <!-- Balão informativo -->
                        <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                            <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais
                                informações</strong>
                        </div>

                        <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                        <div class="accordion destaques" id="accordionExample">
                            <div>
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapseOne">
                                        LEGALIDADE
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse show"
                                    aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Indica que o orçamento deve ser aprovado pelo poder legislativo por meio de
                                            lei. É um princípio basilar previsto no art. 37 da Constituição, aplicável a
                                            toda a administração pública, que legitima o ciclo orçamentário.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                        EXCLUSIVIDADE
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O orçamento deve contemplar apenas matérias que dizem respeito à previsão de
                                            receita e fixação de despesa. Não é possível a inclusão de emendas que não
                                            tratem de matérias orçamentarias. Exceção ocorre para as autorizações de
                                            créditos suplementares e operações de crédito, inclusive por antecipação de
                                            receita orçamentária (ARO).</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        PUBLICIDADE
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse"
                                    aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O princípio da publicidade, além de ser um princípio orçamentário, é um
                                            princípio constitucional previsto no art. 37 da Constituição, entendido não
                                            somente como uma vedação a cultura do segredo, mas como um dever de informar
                                            por parte do Estado. Em consonância com Princípio da Transparência
                                            possibilita o controle popular e a participação do cidadão na atividade
                                            financeira do Estado.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="heading6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse6" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        EQUILÍBRIO
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A lei orçamentária anual aprovada indicará que o valor da despesa fixada não
                                            será superior ao valor da receita prevista. Vale ressaltar que esse
                                            equilíbrio valerá quando da aprovação da lei, após a execução é comum que os
                                            valores não coincidam, gerando situações de déficit ou superávit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- BOTÕES DE NAVEGAÇÃO -->
                        <div class="text-center">
                            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="topico03.php" class="btn btn-outline-success" role="button"
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