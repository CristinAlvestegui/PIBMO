<?php



?>

<!DOCTYPE html>
<HTML lang="pt-BR">

    <head>

        <link rel="shortcut icon type" type="imagem/x-icon" href="../fotos/bmo_dance_by_ech0chamber_emotes_ddl73kz.gif"/>
        <title>ASV BMO</title>

        <!--Fontes-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Gluten&display=swap" rel="stylesheet">

        <!--Icones Google-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

        <!--Efeitos-->
        <link rel="stylesheet" type="text/css" href="../CSS/efeitos.css">
        <link rel="stylesheet" type="text/css" href="../CSS/estilodown.css">


    </head>

    <body>
        <div id="start">  
            <div>
                <video autoplay muted loop id="intro">
                    <source src="../fotos/videos/HoradeAventuraIntro.mp4" type="video/mp4">
                </video>
            </div>
            <div id="titulos">
                <h1 style="color: white;">ASV BMO</h1>
                <h4>Vamos jogar videogame?</h4>
            </div>
        </div>
       
        
        <header id="menu">

            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#produtos">Produtos</a></li>
                    <li><a href="index.php#downloads">Downloads</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/">News</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/docs">Sobre</a></li><!--Página de Wordpress--> 
                    <li class="dropLogin">
                        <a href="Login.php">Entrar</a>
                        <ul class="hide">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Suporte</a></li>
                            <li><a href="#">Alterar</a></li>
                            <li><a href="index.php">Sair</a></li>
                        </ul>
                    </li>   
                </ul>
            </nav>
        </header>

        <!--Imagem grande com animação em Java Script-->

        <div id="produtos" class="grid-container">

           <div id="semanal1"><img width="300px" class="banner" src="../fotos/bmocoracao.png" alt="produtoSemanal"></div>
            <div id="semanal2">Semanal</div>
            <div id="semanal3">R$19,99</div>
            <button class="Example-btn5" id="semanal4">Comprar</button>

            <div id="mensal1"><img width="250px" class="banner" src="../fotos/bmoCAfe.gif" alt="produtoMensal"></div>
            <div id="mensal2">Mensal</div>
            <div id="mensal3">R$71,99</div>
            <button class="Example-btn5" id="mensal4">Comprar</button>

            <div id="anual1"><img width="300px" class="banner" src="../fotos/bmo_by_dayeer_kun_d65rvo8.gif" alt="produtoAnual"></div>
            <div id="anual2">Anual</div>
            <div id="anual3">R$719,99</div>
            <button class="Example-btn5" id="anual4">Comprar</button>

        </div>
        <!--Fim do div de produtos-->

        <div id="free"> 
            <a href="downloads.html"><h3>Teste gratis por 7 dias !!!</h3> </a>
        </div>
        <!--Fim do div de teste gratis-->

        <div id="news">

            <h3>Atualizações</h3>
            <h4>Patch: 0.1</h4>
            <p>0.1: Correção de BUGS, estabilidade e reconhecimento de voz do aplicativo melhorado.</p>

             <!--Tabela de detalhes de lançamento-->
             <table>
                <thead>
                    <tr>
                        <th>Lançamento</th>
                        <th>Versão</th>
                        <th>S.O.</th>
                        <th>Popularidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>15/09/2022</td>
                        <td>0.1</td>
                        <td>Windows 10</td>
                        <td>*</td>
                    </tr>
                    <tr>
                        <td>30/11/2022</td>
                        <td>0.2</td>
                        <td>Windows 10</td>
                        <td>**</td>
                    </tr>
                </tbody>
            </table>
            <!--FIM da Tabela de detalhes de lançamento-->
        </div>

        <div id="free"> 
            <a href="downloads.html"><h3>Teste gratis por 7 dias !!!</h3> </a>
        </div>

        <div id="downloads">

            <fieldset>
                <h4 class="tituDown">Downloads</h4>
                <fieldset id="fielDown">
                    <img width="55px" src="../fotos/icones/bmo/256px.png"><span class="pdescri"><p>macos</p></span><!--em desenvolvimento, o link não é funcional-->
                    <img width="45px" src="../fotos/icones/iconWindows.png"><span class="pdescri"><p>Windows</p></span>
                    <img width="45px" src="../fotos/icones/iconLinux.png"><span class="pdescri"><p>Linux/Unix</p></span><!--em desenvolvimento, o link não é funcional-->
                    <button>Abaixar</button>
                </fieldset>
                <img id="fotoDown" height="300px" src="../fotos/bmofofo.jpg">
            </fieldset>
                 <!--Foto BEm GRande!! do BMO! na tela vai estar mostrando a ultima versão, como botão para abixar para Windows-->
            
           <div id="free"> 
            <a href="downloads.html"><h3>Teste gratis por 7 dias !!!</h3> </a>
            </div>

            <section>
                <span class="block">
                    <a class="ablock" href="#detalhes">Detalhes
                        <p class="pdetalhes">ASV BMO
                            Está aqui para ajudar você! Para jogar video Games,🎮<br>  
                            assistir filmes!🎥 escutar música!🎼
                            E muitas outras coisas mias que podem fazer juntos!💗
                            Esperamos que este programa simule uma interação 
                            (mesmo que um pouco limitada) divertida e empolgante aos seus fãs com o personagem BMO
                            O ASV BMO é um assistente virtual com temática do personagem 
                            de A Hora de Aventura. Temos como objetivo oferecer uma experiência de imersão e 
                            diversão com o personagem.
                            Nós os alunos da turma TI13N do Senac, criamos este projeto utilizando as bibliotecas de 
                            Python, linguagens de HTML e entre outros para entregar este lindo projeto de PI.
                            Esperamos que todos tenham uma boa degusta do aplicativo e contamos com seu feedback 
                            para melhorar nossa aplicação!
                        </p>
                    </a>
                </span><br>
                
    
                <span class="block">
                    <a class="ablock" href="#sistema">Requisitos do Sistema</a>
                </span>
                <span class="block">
                    <a class="ablock" href="#instrucao">Manual de Instalação</a>
                </span>
            </section>
        </div>

    </body>

    <!--Footer-->
    <a href="#home"><section>Home</section></a>
    <footer class="footer-distributed">
        <div class="foot">
            <div class="footer-left">

                <div id="fotoBmoSobre"><img class="fotoSobreBmo" src="../fotos/dancaBmo.gif" alt="anima"></div>
                <div>
                    <h3>TI13N</h3>
                    <p class="footer-company-name">ASV BMO © 2022</p>
                </div>
                
    
                <div>
                    <span class="material-symbols-outlined">
                        home
                    </span>
                    <p><span>Av. Senador Vergueiro, 400 - Rudge Ramos, São Bernardo do Campo - SP, 09750-000</span></p>
                </div>
    
                <div>
                    <span class="material-symbols-outlined">
                        phone_in_talk
                    </span>
                    <p>+55 (11)4336-7900</p>
                </div>
    
                <div>
                    <span class="material-symbols-outlined">
                        drafts
                    </span>
                    <p><a href="mailto:sbcampo@sp.senac.br">sbcampo@sp.senac.br</a></p>
                </div>
    
                <div>
                    <span class="material-symbols-outlined">
                        web
                    </span>
                    <p><a href="https://asvbmo.azurewebsites.net/docs/">WordPress</a></p>
                </div>
            </div>
    
            <div>
                <h3>Integrantes:</h3> 
                <li>Filipe Serra Silva</li>
                <li>Leonardo Souva Vieira</li>
                <li>Cristina Alvéstegui Subieta</li>
            </div>
    
            <div class="footer-right">
                <p  class="footer-company-about"></p>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-github"></i></a>
            </div>
        </div>
    </footer>

</HTML>
