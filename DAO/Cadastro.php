<?php

    require_once('Conexao.php');

    class Cadastro{
        
        public function cadastrar(
            Conexao $conexao, 
            string $nomeDaTabela, 
            string $codigo,
            string $nome,
            string $endereco,
            string $telefone,
            string $datan,
            string $login,
            string $senha)
        {
            try{
                $conn = $conexao->conectar();//Abrindo a conexão com o banco
                $sql  = "insert into $nomeDaTabela (codigo, nome, endereco, telefone, datan, login, senha) 
                values ('','$nome','$endereco','$telefone','$datan','$login','$senha')";//Escrevi o script
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