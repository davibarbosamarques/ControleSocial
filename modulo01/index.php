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
                                --> bem-vindo ao <strong> módulo 01 </strong> do curso Controle Social. Bons estudos! Este módulo abordará uma introdução de conceitos de controle e suas definições, accountability e controle social.
                                </p>
                                </div>
                            </div>

                            <div class="text-center">
                                <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                            <!-- BARRA DE PROGRESSO -->
                            <div id="progress-bar"></div>
                                    
                            <!-- FOOTER -->
    <?php 
        // EGPCE - Intes do menu
        include('layouts/footer.php') 
    ?>                       </div> <!-- apresentacao_inicial -->
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