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
                        <h3 class="Subtopico">Ouvidoria Geral da República</h3>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Em 1995 foi criada a Ouvidoria-Geral da República, como parte da estrutura do Ministério da
                            Justiça. Ao passo que em 2003, a Ouvidoria-Geral da República foi transferida para a
                            estrutura da Controladoria-Geral da União (CGU), e posteriormente teve seu nome alterado
                            para Ouvidoria-Geral da União (OGU), com competência para exercer a coordenação técnica do
                            segmento de ouvidorias do Poder Executivo federal.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            O Sistema de Ouvidoria do Poder Executivo federal (SisOuv) tem a finalidade de coordenar as
                            atividades de ouvidoria desenvolvidas pelos órgãos e entidades da Administração Pública
                            Federal. O sistema é composto pelo órgão central e pelas unidades setoriais. A Controladoria
                            Geral da União (CGU), por meio da OGU, atua como órgão central, e atuam como órgãos
                            setoriais as ouvidorias e unidades responsáveis pelas atividades de ouvidoria da
                            Administração Pública Federal Direta e Indireta Autárquica e Fundacional, além das Empresas
                            Estatais que prestem serviços públicos ou que recebam recursos do Tesouro Nacional para o
                            custeio total ou parcial de despesas de pessoal. (Decreto n. 9.492, de 5 de setembro de
                            2018).
                        </p>

                        <!-- CAIXA DE TEXTO SAIBA MAIS -->
                        <div class="destaques wow fadeIn" data-wow-delay="0.3s">
                            <div class="caixaprincipal" id="titulo_saibamais">
                                <i class="fa-solid fa-plus"></i>
                                SAIBA MAIS
                            </div>
                            <div class="content_box" id="conteudo_saibamais">
                                <p>As ouvidorias públicas buscam integrar esforços de várias formas, tanto por meio de
                                    mecanismos pontuais, em execução de projetos conjuntos, até redes mais ou menos
                                    estruturadas, que em comum apresentam uma característica de permanência e
                                    coordenação de esforços. Uma atuação conjunta incrementa os esforços pela
                                    transparência e facilita o trabalho das áreas de controle.</p>
                            </div>
                        </div>

                        <!-- Subtopico -->
                        <h3 class="Subtopico" id="item02.2">Canais de comunicação</h3>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Para cumprir a sua missão, a ouvidoria estimula o diálogo entre o usuário do serviço e o
                            Poder Público. A partir das necessidades dos usuários, a ouvidoria pode estabelecer uma
                            estratégia de comunicação para canalizar os meios que garantam maior acessibilidade.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.3s">
                            Independente do canal por meio do qual as manifestações cheguem à ouvidoria, é muito
                            importante que todas elas sejam adequadamente registradas em um repositório de informação
                            único, de modo que não se perca o controle sobre o seu processo de tratamento e que se
                            consiga, sempre que necessário, gerar informações relevantes sobre o desempenho dos serviços
                            da instituição a qual a ouvidoria esteja vinculada. A Controladoria Geral da União - CGU
                            classifica os meios de comunicação da seguinte forma:
                        </p>

                        <!-- Subsubtopico  -->
                        <h4 class="subsubtopico">Meios de comunicação físicos</h4>

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
                                        CARTA
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O usuário escreve livremente a sua mensagem e a envia para a Ouvidoria por
                                            meio dos serviços postais. Para viabilizar essa forma de comunicação, a
                                            Ouvidoria precisa divulgar seu endereço. Dependendo do dimensionamento da
                                            demanda, pode ser necessário criar uma caixa postal apenas para essa
                                            finalidade. Atualmente, não há muitas ouvidorias que recebam um volume
                                            significativo de cartas, mas elas são comuns, por exemplo, na Ouvidoria da
                                            Secretaria do Desenvolvimento Regional do Ministério da Cidadania e na
                                            Ouvidoria do Departamento Penitenciário Nacional.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        FORMULÁRIO IMPRESSO
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Nessa modalidade, a Ouvidoria imprime um formulário com campos pré-definidos
                                            para que o usuário preencha. Os campos são dos tipos: nome, endereço,
                                            telefone, tipo de manifestação, texto da manifestação, entre outros. Os
                                            formulários poderão ser depositados em uma urna criada especificamente para
                                            esse fim, coletados em campanhas de ouvidoria ativa, ou enviados pelo
                                            serviço postal.</p>
                                    </div>
                                </div>
                            </div>

                        </div><br>
                        <!-- Subsubtopico End-->

                        <!-- Subsubtopico  -->
                        <h4 class="subsubtopico">Meios de comunicação eletrônicos</h4>

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
                                        E-MAIL
                                    </button>
                                </h2>
                                <div id="collapse3" class="accordion-collapse collapse show" aria-labelledby="heading3"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Por esse meio de comunicação, o usuário escreve livremente sua mensagem. Para
                                            que possa utilizá-la, é preciso que a Ouvidoria tenha um endereço eletrônico
                                            e que o usuário tenha acesso à internet. Esse é um meio de comunicação
                                            utilizado por muitas ouvidorias, mas pode apresentar uma fragilidade: a
                                            falta de um sistema de protocolo. Muitas vezes, o usuário envia sua
                                            mensagem, mas não recebe um número de registro e nem tem acesso a mecanismos
                                            de acompanhamento do andamento da sua manifestação.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapseTwo">
                                        FORMULÁRIO ELETRÔNICO
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Esse atualmente é um dos meios de comunicação mais utilizados pelas
                                            ouvidorias. Assim como no formulário escrito, há campos específicos a serem
                                            preenchidos. A ouvidoria precisa ter um espaço específico no sítio da
                                            instituição e elaborar um modelo de formulário, normalmente vinculados a
                                            sistemas eletrônicos, responsáveis pela gestão da informação e dos processos
                                            no ambiente corporativo.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseTwo">
                                        REDES SOCIAIS, CHATS E CHATBOTS
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>A maior vantagem das redes sociais, como o Twitter, o Facebook e o Instagram,
                                            é que elas são amplamente disseminadas na população brasileira, de tal
                                            maneira que o atendimento de ouvidoria, quando feito por meio destas
                                            plataformas, toma proveito da familiaridade dos usuários com o meio de
                                            comunicação. O maior cuidado da Ouvidoria ao usar as redes sociais como meio
                                            de comunicação é a adequação da linguagem e a existência de scripts
                                            adequados de atendimento, que permitam aos servidores da ouvidoria prestar
                                            um atendimento padronizado e adequado aos usuários que optam por esse canal.
                                            Em geral, o relacionamento com os usuários em redes sociais se dá por meio
                                            de canais de “bate papo”, também conhecidos por “chats”. Esses canais podem
                                            ser operados por pessoas ou por sistemas que simulam o atendimento humano,
                                            os chamados chatbots.</p>
                                    </div>
                                </div>
                            </div>

                        </div><br>
                        <!-- Subsubtopico End-->

                        <!-- Subsubtopico  -->
                        <h4 class="subsubtopico">Meios de comunicação oral</h4>

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
                                        data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapseOne">
                                        ATENDIMENTO PRESENCIAL
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Em geral, ocorre nas dependências do próprio órgão ou da entidade,
                                            preferencialmente em espaço designado especificamente para essa finalidade,
                                            de forma a assegurar privacidade ao usuário, e com a acessibilidade
                                            necessária. Para além do atendimento nas dependências da instituição,
                                            existem, também, ouvidorias que optam por estratégias de atendimento
                                            externo, por meio de ouvidorias itinerantes ou ativas, isto é, destacando
                                            parte de sua equipe para ir aos locais de concentração dos usuários de
                                            serviços públicos para lá fazer a coleta das manifestações.</p>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapseTwo">
                                        TELEFONE
                                    </button>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>O usuário se comunica com um atendente da ouvidoria por meio da linha
                                            telefônica. Para isso é preciso dimensionar o tamanho da estrutura a ser
                                            oferecida. Caso a procura seja pequena, o telefone pode ser ligado a uma
                                            única linha direta com um único atendente; ou pode fazer parte de uma
                                            central de telefonia, se isso for necessário. Algumas ouvidorias atendem por
                                            meio de tridígitos criados especificamente para essa finalidade.</p>
                                    </div>
                                </div>
                            </div>

                        </div><br>
                        <!-- Subsubtopico End-->

                        <p class="text-end"><strong>Fonte: CGU adaptado</strong></p>

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