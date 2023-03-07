<?php
    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    require_once("Conexao.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;

    class Inserir{
        public function cadastrar(Conexao $conex, string $cadastro, string $CPF, string $nome, string $usuario, string $senha, string $email, date $dataNasci){
            try{
                $conn = $conex->conectar();
                $sql  = "insert into $cadastro (CPF, nome, usuario, senha, email, dataNasci) values ($CPF, $nome, $usuario, $senha, $email, $dataNasci)";
                $result = mysqli_query($conn, $sql);
                myslqi_close($conn);
                if($result){
                    return "<br><br> Inserido com sucesso!";
                }
                return "<br><br>Algo deu Errado! :(";
            }catch(Execpt $erro){
                echo "$erro";
            }//Fim do try catch
        }//FIm do método cadastrar
    }//Fim da classe Inserir
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <!--Metas Obrigatórios-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro</title>

        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../../../CSS/estilocadastro.css">

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
                    <li><a href="../../index.php">Inicio</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="../../index.php#downloads">Downloads</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/">News</a></li>
                    <li><a href="sobre.html">Sobre</a></li> 
                </ul>
            </nav>
        </header>

        <fieldset>
            <legend>Novo Usuário</legend>
            <form action="../PHP/cadastro.php" method="GET">
                <!--Dados Pessoais-->
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" /><br><br>
                <label for="login">Usuário:</label>
                <input type="text" id="login" name="usuario" ><br><br>
                <label for="cpf">C.P.F:</label>
                <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" /><br><br>
                <label for="dataNasci">Data de Nascimiento:</label>
                <input name="dataNasci"type="date" id="dataNasci" class="estiloInput"  placeholder="DD/MM/AA" /><br><br>
        
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" ><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@exemplo.com" ><br><br>
            

                <input type="checkbox" id="termos"><!--aqui devemos colocar uma regra para somente enviar o forumulário if checkbox is marked!-->
                <label for="termos">concordo com a politica de privacidade</label><br><br>
                <input type="submit" name="enviar" onclick="cadastrar()" id="btn"></input>
            </form>
        </fieldset>        
    </body>
</html>

<?php
    if(isset($_POST['enviar'])){
        $connect = new Conexao();
        $inn = new Inserir();
        echo $inn-> cadastrar($connect, "cadastro", $_GET['cpf'], $_GET['nome'], $_GET['usuario'], $_GET['senha'], $_GET['email'], $_GET['dataNasci']);
    }
?>
