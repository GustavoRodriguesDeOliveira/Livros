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
                        echo "<br>Codigo do cliente: ".$this->$codigo."<br>Titulo do livro: ".$this->titulo."<br>Ano que foi lançou: ".$this->ano."<br>Valor do livro: ".$this->valor."<br>Quantas unidades tem: ".$this->unidades;
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
                    echo "<br>Codigo do cliente: ".$this->$codigo."<br>Titulo do livro: ".$this->titulo."<br>Ano que foi lançou: ".$this->ano."<br>Valor do livro: ".$this->valor."<br>Quantas unidades tem: ".$this->unidades;
                }//fim do while
            }
            catch(Except $erro)
            {
                echo $erro;
            } 
        }//fim do método

    }//fim do consultar
?>