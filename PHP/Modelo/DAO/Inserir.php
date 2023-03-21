<?php
    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    require_once("Conexao.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;

    class Inserir{
        

        public function cadastrar(Conexao $conexao, string $CPF, string $nome, string $usuario, string $senha, string $email, string $dataNasci){
            
            $key = bin2hex(random_bytes(8));

            try{
                $conn = $conexao->conectar();
                $sql  = "insert into cadastro (CPF, nome, usuario, senha, email, dataNasci) values ('$CPF', '$nome', '$usuario', '$senha', '$email', '$dataNasci')";
                $result = mysqli_query($conn, $sql);
                $sql2 = "INSERT INTO USERS (ID, LOGIN, SENHA, SECRET_KEY) VALUES ('', '$usuario', '$senha', '$key')";
                $result2 = mysqli_query($conn, $sql2);
                if($result & $result2){
                    return "<br><br> Inserido com sucesso!";
                }
                
            }catch(Execpt $erro){
                echo $erro;
            }//Fim do try catch
        }//FIm do método cadastrar
        
    }//Fim da classe Inserir 
?>
