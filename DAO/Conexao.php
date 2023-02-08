<?php

    class Conexao{
        
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','livros');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Não Entrei!"; 
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do conectar

    }//fim da classe
?>