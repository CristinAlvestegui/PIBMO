<?php
    namespace BMO\ASVBMOSite\PHP\Modelo\DAO;

    class Conexao{

        public function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'ASVBMO');
                if($conn){
                    return $conn;
                }
                echo "<br>Não entramos! :(";
            }catch(Except $erro){
                echo $erro;
            }//fim do try catch
        }//fim da função para conectar

    }//Fim da classe conexão com base de dados


?>