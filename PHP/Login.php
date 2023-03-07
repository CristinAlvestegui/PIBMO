<?php
    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    require_once("Conexao.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;

    class Login{
        public function logar(Conexao $Connect, string $usuario, string $senha){
            try{
                $conn = $Connect->conectar();
                $sql = "select * from  cadastro where usuario = '$usuario' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($result);

                if($check == 0){
                    echo"Senha ou Usuário Errada!";
                    return;
                }else{
                    hader();//aqui devemos levar para nova pagina com usuário logado pode ser a sessaõ, pagina é carregada novamente com a sessão de login de aquele usuário.
                    exit();
                }
            } catch(Except $erro){
                echo $erro;
            }

        }//Fim do método para logar
    }//Fim da classe consultar


?>

<!--IN PROGRESS-->
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <!--Metas obrigatorios-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Efeitos-->
        <link rel="stylesheet" type="text/css" href="../CSS/loginEfeitos.css">
        
        <!--Fontes-->
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Gluten&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
        <title>Login</title>
    </head>

    <body>
        <header id="menu">
            <nav>
                 <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="index.php#produtos">Produtos</a></li>
                    <li><a href="index.php#downloads">Downloads</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/">News</a></li>
                    <li><a href="https://asvbmo.azurewebsites.net/docs">Sobre</a></li><!--Página de Wordpress--> 
                    <li class="dropLogin">
                        <a>Entrar</a>
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

        <?php
            if(isset($_GET['user'], $_GET['senha'])){
                if($_GET['user'] == $usuario && $_GET['senha'] == $senha){

                }
            }
        ?>

        <div>
            <fieldset>
                <h5>Já tem Cadastro?</h5>
                <form action="" method="GET">
                    <label>Usuário:</label>
                    <input type="text" name="user"><br>
                    <label>Senha:</label>
                    <input type="password" name="senha"><br>
                    <input type="submit" name="logar" value="Login">
                </form>

                <a href="">Esqueceu a senha?</a><br>
                <label>Sou novo aqui</label>
                <a id="novoUser" href="../PHP/Modelo/DAO/inserir.php">Cadastrar</a>
            </fieldset>
        </div>
    </body>
</html>
