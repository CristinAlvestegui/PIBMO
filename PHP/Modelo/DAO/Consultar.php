<?php

    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    require_once("Conexao.php");

    use BMO\ASVBMOSite\PHP\Modelo\DAO\Conexao;

    class Consultar{
        public function Verificar(Conexao $Connect, string $usuario, string $senha){
            try{
                $conn = $Connect->conectar();
                $sql = "select * from  cadastro where usuario = '$usuario'";
                $result = mysqli_query($conn, $sql);
                $check = mysqli_num_rows($result);

                if($check == 0){
                    echo"Senha ou Usuário Errada!";
                    return;
                }else{
                    hader();//aqui devemos levar para nova pagina com usuário logado.
                    exit();
                }
            } catch(Except $erro){
                echo $erro;
            }

        }//Fim do método para Verificar
    }//Fim da classe consultar

?>