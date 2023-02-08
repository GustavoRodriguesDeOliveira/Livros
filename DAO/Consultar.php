<?php


    require_once('Conexao.php');


    class Consultaresfu{

        public function consultarIndividual(
            Conexao $conexao, 
            string $nomeDaTabela,
            int $codigo)
        {
            try{
                $conn   = $conexao->conectar();
                $sql    = "select * from $nomeDaTabela where  = '$codigo'";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    if($dados["Condigo"] == $codigo){
                        echo "<br>Codigo do cliente: ".$this->$codigo."<br>Nome: ".$this->nome."<br>Endereço : ".$this->endereco."<br>Data de nascimento,: ".$this->datan."<br>telefone: ".$this->telefone."<br>login: ".$this->login;
                        return;//Encerrar a operacao
                    }//fim do if
                }//fim do while
                echo "Codigo digitado não foi encontrado!";
            }
            catch(Except $erro)
            {
                echo $erro;
            } 
        }//fim do método


        public function consultarTudo(Conexao $conexao, string $nomeDaTabela){
            try{
                $conn   = $conexao->conectar();
                $sql    = "select * from $nomeDaTabela";
                $result = mysqli_query($conn,$sql);
                
                while($dados = mysqli_fetch_Array($result)){
                    echo "<br>Codigo do cliente: ".$this->$codigo."<br>Nome: ".$this->nome."<br>Endereço : ".$this->endereco."<br>Data de nascimento,: ".$this->datan."<br>telefone: ".$this->telefone."<br>login: ".$this->login;
                }//fim do while
            }
            catch(Except $erro)
            {
                echo $erro;
            } 
        }//fim do método

    }//fim do consultar
?>