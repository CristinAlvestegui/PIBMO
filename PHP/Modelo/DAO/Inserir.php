<?php
    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    require_once("Conexao.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;

    class Inserir{
        
        public function cadastrar(Conexao $conex, string $CPF, string $nome, string $usuario, string $senha, string $email, string $dataNasci){
            try{
                $conn = $conex->conectar();
                $sql  = "insert into cadastro (CPF, nome, usuario, senha, email, dataNasci) values ($CPF, $nome, $usuario, $senha, $email, $dataNasci)";
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

        public function trataData(string $dataNasci){
            $dataNasci = $_GET['dataNasci'];
            $divi = explode('-', $dataNasci);//explode não esta funcionando!!!!!!@@!!
            $dia = var_dump(isset($divi[0]));
            $mes = var_dump(isset($divi[1]));
            $ano = var_dump(isset($divi[2]));
            //$dataSql = array_reverse($divi);
            $dataNasci = $ano.'-'.$mes.'-'.$dia;
            //$dataNasci = date("Y-m-d");//formato que devemos enviar para sql?
            //print_r($divi);  
        }

        public function odeioData(){
            $dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);

            if(!empty($dados['enviar'])){
                var_dump($dados);
                $query = "insert into cadastro(dataNasci) values (:dataNasci)";
                $cad = $connect->prepare($query);
                $cad->bindParam(':dataNasci', $dados['dataNasci']);
                $cad->execute();
            }//Fim do if
        }//Fim da função para tentar inserir data
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
                    <li><a href="https://asvbmo.azurewebsites.net/docs">Sobre</a></li> 
                </ul>
            </nav>
        </header>

        <?php
           
        ?>

        <fieldset>
            <legend>Novo Usuário</legend>
            <form action="Inserir.php" method="GET">
                <!--Dados Pessoais-->
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" /><br><br>
                <label for="login">Usuário:</label>
                <input type="text" id="login" name="usuario" ><br><br>
                <label for="cpf">C.P.F:</label>
                <input type="text" id="cpf" name="cpf" placeholder="XXX.XXX.XXX-XX" /><br><br>
                <label for="dataNasci">Data de Nascimento:</label>
                <input name="dataNasci" type="date" id="dataNasci" class="estiloInput"/><br><br>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" ><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@exemplo.com" ><br><br>
            

                <input type="checkbox" id="termos"><!--aqui devemos colocar uma regra para somente enviar o forumulário if checkbox is marked!-->
                <label for="termos">concordo com a politica de privacidade</label><br><br>
                <input type="submit" name="enviar" id="btn"></input>
            </form>
        </fieldset>        
    </body>
</html>

<?php
    $inn = new Inserir();
    //echo $inn->trataData($dataNasc);

    //$data = date("Y-m-d");
    //$data = date_create($_GET['dataNasci']);

    $dataNasci = "";
    if(isset($dados['dataNasci'])){
        $dataNasci = $dados['dataNasci'];
    }
    if(isset($_GET['enviar'])){
        $connect = new Conexao();
        $inn = new Inserir();
        //$dataVai = $inn-> trataData($_GET['dataNasci']);
        $dataVai = $inn-> odeioData($_GET['dataNasci']);
        //echo $dataVai;
        echo $inn-> cadastrar($connect, $_GET['cpf'], $_GET['nome'], $_GET['usuario'], $_GET['senha'], $_GET['email'], $_GET['dataNasci']);
        
    }
?>
