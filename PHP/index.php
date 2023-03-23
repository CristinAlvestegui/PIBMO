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
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Index.php#produtos">Produtos</a></li>
                    <li><a href="Index.php#downloads">Downloads</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/">News</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/docs">Sobre</a></li><!--Página de Wordpress--> 
                </ul>
            </nav>
        </header>


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
            <a href="Modelo/Cadastro.php"><h3>Teste gratis por 7 dias !!!</h3> </a>
        </div>
        <!--Fim do div de teste gratis-->

        <div id="comandos">

            
            <div id="Syste">
            <h1>Manual de Instruções</h1>
                <p>1. Abra o arquivo .exe</p><br>
                <p>2. Toda vez que for falar com BMO aperte (Ctrl+Alt+M)</p><br>
                <p>3. Funções:</p>


                <h5>WEB</h5>
                <p class="leer">
                    YOUTUBE: ('pesquise no youtube por'(O QUE VOCÊ QUER QUE PESQUISE')<br>

                    GOOGLE: ('PROCURA POR(O QUE VOCÊ QUER QUE PESQUISE')<br>

                    NAVEGADOR: ('abrir o navegador', 'abrir navegador', 'abre o navegador', 'abre navegador')

                    WHATSAPP: ('abrir whatsapp')</p>

                <h5>SISTEMA</h5>
                <p class="leer">
                    USER: ('nome de usuário')
                    DOCUMENTOS: ('abrir documentos', 'abre documentos', 'abre diretório de documentos', 
                    'abrir diretório de documentos','abrir o diretório de documentos', 
                    'abre o diretório de documentos')<br>

                    DOWNLOADS:  ('abrir downloads', 'abre downloads', 'abre diretório de downloads',
                    'abrir diretório de downloads','abrir o diretório de downloads', 
                    'abre o diretório de downloads')<br>

                    MUSICAS:    ('abrir músicas', 'abrir diretório de músicas', 'abre músicas', 
                    'abre diretório de músicas','abre o diretório de músicas',
                    'abrir o diretório de músicas')<br>

                    VIDEOS:     ('abre vídeos', 'abrir vídeos','abre diretório de vídeos', 
                    'abrir diretório de vídeos','abrir o diretório de vídeos', 
                    'abre o diretório de vídeos')<br>

                    FOTOS:      ('abrir fotos', 'abre fotos', 'abrir diretório de fotos', 
                    'abre diretório de fotos','abre o diretório de fotos', 
                    'abrir o diretório de fotos')<br>

                    HORAS:('que horas são', 'qual o horário de agora', 'qual o horário de hoje', 
                    'horas por favor')<br>

                    DATA:       ('que dia é hoje', 'qual dia é hoje', 'hoje é que dia')<br>

                    DATA E HORA:('qual dia e horário de hoje', 'qual dia e horário', 'dia e horário de hoje', 
                    'data de hoje e horário', 'data e horário de hoje')<br>

                    TEMPERATURA:('qual a temperatura de hoje', 'qual temperatura', 'temperatura de hoje')<br>

                    DISCO LOCAL C: ('abra o disco local c', 'abrir disco local c')
                </p>

                <h5>BMO</h5>
                <p class="leer">
                    OI = ('olá BMO', 'eai BMO', 'salve BMO', 'oi BMO', 'ei BMO')

                    TCHAU = ('falou', 'até mais', 'valeu', 'obrigado', 'tchau')        
                </p>
            </div>
        </div>


        <div id="downloads">

            <fieldset><!--Verder oscuro-->
                <h4 class="tituDown">Downloads</h4>
                <fieldset id="fielDown">
                    <img width="55px" src="../fotos/icones/bmo/256px.png"><span class="pdescri"><a href="#"><p>macos</p></a></span><!--em desenvolvimento, o link não é funcional-->
                    <img width="45px" src="../fotos/icones/iconWindows.png"><span class="pdescri"><a href="#"><p>Windows</p></a></span>
                    <img width="45px" src="../fotos/icones/iconLinux.png"><span class="pdescri"><a href="#"><p>Linux/Unix</p></a></span><!--em desenvolvimento, o link não é funcional-->
                    <button>Baixar</button>
                </fieldset>
                <img id="fotoDown" height="300px" src="../fotos/bmofofo.jpg">
            </fieldset>
            
            
            <!--Foto BEm GRande!! do BMO! na tela vai estar mostrando a ultima versão, como botão para abixar para Windows-->
        </div><!--Fim da div para Downloads-->

        <div id="detalhes">
            <h4 id="tituDeta">Detalhes:</h4>
            <div id="textoDeta">
                <p>
                    <img id="d3Bmo" src="../fotos/bmo3d.jpg" width="290">
                    ASV BMO
                    Está aqui para ajudar você! Para jogar video Games,🎮
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
            </div>
            
        </div>
    </body>

    <!--Footer-->
    <a href="#start"><section>Home</section></a>
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
