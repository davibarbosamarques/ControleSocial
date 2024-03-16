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

                    <h2 class="Titulo">O Direito Fundamental de Acesso a Informação</h2>

                    <p class="wow fadeIn" data-wow-delay="0.3s">Um primeiro reconhecimento do direito de acesso à informação ocorreu após a segunda guerra mundial, em 1946, por ocasião da primeira Assembleia Geral das Nações Unidas. Nessa ocasião, o acesso à informação foi erigido ao status de um direito fundamental e um fator essencial para promover a paz e o progresso no mundo.</p>

                        <!-- CITAÇÃO -->
                            <div class="citacao_texto">
                                <p>Pode-se citar também a Declaração Universal dos Direitos Humanos, proclamada em Assembleia Geral das Nações Unidas, em 1948. A referida Declaração foi referência para as constituições de vários países e democracias modernas. O teor do seu artigo 19 prevê, primariamente, o direito de acesso à informação nos seguintes termos: “Todo ser humano tem direito à liberdade de opinião e expressão; este direito inclui a liberdade de, sem interferência, ter opiniões e de procurar, receber e transmitir informações e ideias por quaisquer meios e independentemente de fronteiras”</p>
                                <p class="citacao blockquote-footer"><strong>(ORGANIZAÇÃO DAS NAÇÕES UNIDAS, 1948, online).</strong></p>
                            </div>
                           <p class="wow fadeIn" data-wow-delay="0.3s"> Pode ser afirmado, sem dúvida, que há uma conexão clara entre o exercício do direito fundamental de acesso à informação, o controle social, a melhoria da gestão pública e o fortalecimento da democracia. Em uma visão cíclica do fenômeno social temos que o acesso à informação permite o controle social que, por sua vez, traz melhorias na gestão pública fortalecendo a democracia</p>

                           <p class="wow fadeIn" data-wow-delay="0.3s"> Para que o direito à informação, na prática, seja efetivado, não basta simplesmente exigir que os órgãos públicos atendam aos pedidos de informação, faz-se necessário uma publicação voluntária, de forma proativa, por parte do poder público. O direito fundamental do acesso à informação está tem previsão no art. 5° da Constituição da República nos seguintes termos:</p>
                        <!-- Balão informativo -->
                    <div class="wow fadeIn balao_informativo1" data-wow-delay="0.3s">
                        <strong><i class="fa-solid fa-lightbulb"></i> Clique nos títulos abaixo para mais informações</strong>
                    </div>
                    <!-- Accordion com texto sobre o que será visto no curso -->
                        <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                            <div class="accordion destaques" id="accordionExample">

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Artigo 5°:
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p><strong>Art. 5°:</strong> Todos são iguais perante a lei, sem distinção de qualquer natureza, garantindo-se aos brasileiros e aos estrangeiros residentes no País a inviolabilidade do direito à vida, à liberdade, à igualdade, à segurança e à propriedade, nos termos seguintes:</p>
                                            <p>[...] XXXIII - todos têm direito a receber dos órgãos públicos informações de seu interesse particular, ou de interesse coletivo ou geral, que serão prestadas no prazo da lei, sob pena de responsabilidade, ressalvadas aquelas cujo sigilo seja imprescindível à segurança da sociedade e do Estado (BRASIL, 1988, online, grifo nosso).</p>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <p class="wow fadeIn" data-wow-delay="0.3s"> Podemos afirmar que do reconhecimento do direito como fundamental até a sua positivação em constituições, como a brasileira de 1988, um longo período de maturação desse direito se evidenciou, levando a um entendimento amplo da sua importância para a consolidação da democracia.</p>

                        </div>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="topico02.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                                    class="fa-solid fa-chevron-right"></i></a>
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