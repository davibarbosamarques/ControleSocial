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

                    <h2 class="Titulo">Diretrizes</h2>

                    <p class="wow fadeIn" data-wow-delay="0.3s">A Lei de Acesso à Informação trouxe cinco diretrizes enumeradas no seu artigo 3°, que são as seguintes:</p>

                           <!-- DESTAQUE COM VÁRIOS ACCORDIONS -->
                           <div class="accordion destaques" id="accordionExample">
                                <div>
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        I - Observância da publicidade como preceito geral e do sigilo como exceção
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Trata-se do princípio da publicidade máxima, sendo a regra geral, só se pode negar o acesso se uma dada informação for declarada, de acordo com critérios estabelecidos em lei, como sigilosa.</p>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        II - Divulgação de informações de interesse público, independentemente de solicitações
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Essa divulgação se chama transparência ativa. A própria Lei Federal 12.527/2011 e a Lei Estadual 15.175/2012 prevêem dispositivos indicando quais informações devem, obrigatoriamente, ser disponibilizadas, independente de requerimento, ressaltando que tais dispositivos não são exaustivos, podendo o órgão competente disponibilizar mais informações do que são obrigados por lei. Possui o intuito de futuramente as informações disponibilizadas ativamente aumentem com o passar do tempo.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        III - Utilização de meios de comunicação viabilizados pela tecnologia da informação
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Informações de interesse público devem ser disponibilizadas ativamente em sites institucionais e no Portal da Transparência. O estado do Ceará ainda fornece a possibilidade de solicitar informações não disponíveis ativamente através do sistema informatizado SOU/SIC, ferramenta que respeita os prazos e regras previstas em legislação. Para cadastramento de pedidos de informação podem ser utilizados também outros meios tais como e-mail, facebook e twitter.</p>
                                        </div>  
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        IV - Fomento ao desenvolvimento da cultura da transparência na administração pública
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Incentivar a todos que fazem a administração pública a exercerem a cultura do acesso, da transparência, conscientizando que o cidadão tem o direito de receber a informação que solicita, independente de explicar suas razões e independente das razões apresentadas.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        V - Desenvolvimento do Controle Social da administração pública
                                        </button>
                                    </h2>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>A Administração Pública deve oferecer os instrumentos necessários e incentivar a sociedade a utilizar as informações públicas disponíveis para que possa realizar o Controle Social.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <a href="topico06.php" class="btn btn-outline-success" role="button" aria-pressed="true">
                                <i class="fa-solid fa-chevron-left"></i> Voltar </a>
                            <a href="topico08.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
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