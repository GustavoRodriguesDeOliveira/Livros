<?php

    require_once('Conexao.php');

    class Cadastroli{
        
        public function cadastrar(
            Conexao $conexao, 
            string $nomeDaTabela, 
            string $codigo,
            string $titulo,
            string $ano,
            string $valor,
            string $unidades)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (codigo, titulo, ano, valor, unidades) 
                values ('','$titulo','$ano','$valor','$unidades)";//Escrevi o script
                $result = mysqli_query($conn,$sql);//Executa a ação do script no banco

                mysqli_close($conn);//fechando a conexão com sucesso!
                
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do cadastrar
    }//fim da classe
?>