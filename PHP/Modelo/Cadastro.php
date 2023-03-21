<?php
    namespace BMO\ASVBMOSite\PHP\Modelo;

    require_once("DAO/Conexao.php");
    require_once("DAO/Inserir.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;
    use BMO\ASVBMOSite\PHP\Modelo\DAO\Inserir;

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!--Metas Obrigatórios-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro</title>
        <link rel="shortcut icon type" type="imagem/x-icon" href="../fotos/eleitor.png"/>

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../../CSS/estilocadastro.css">

         <!--Fontes-->
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Gluten&display=swap" rel="stylesheet">
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    </head>
    <body>
        <header id="menu">
            <nav>
                <ul>
                    <li><a href="../Index.php">Inicio</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="../Index.php#downloads">Downloads</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/">News</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/docs">Sobre</a></li> 
                </ul>
            </nav>
        </header>

        <fieldset>
            <legend>Novo Usuário</legend>
            <form method="POST">
                
                <!--Dados Pessoais-->
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                <label for="login">Usuário:</label>
                <input type="text" id="login" name="usuario" required><br><br>
                <label for="cpf">C.P.F:</label>
                <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" required><br><br>
                <label for="dataNasci">Data de Nascimento:</label>
                <input name="dataNasci" type="date" id="dataNasci" class="estiloInput" required><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" ><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@exemplo.com" required><br><br>
        
                <input type="checkbox" id="termos" required><!--aqui devemos colocar uma regra para somente enviar o forumulário if checkbox is marked!-->
                <label for="termos">Concordo com a politica de privacidade</label><br><br>
                <button type="submit" name="enviar" id="btn" value="Cadastrar"> Cadastrar</button>

                <?php
                    if(isset($_POST['enviar'])){

                        $conn = new Conexao;
                        $inn = new Inserir;
                        ECHO $inn-> cadastrar($conn, $_POST['cpf'], $_POST['nome'], $_POST['usuario'], $_POST['senha'], $_POST['email'], $_POST['dataNasci']);
                    }

                ?>

            </form>
        </fieldset>        
    </body>
</html>
