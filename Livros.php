<?php

    class Livro{

        protected string $codigo;
        protected string $titulo;
        protected string $ano;
        protected string $valor;
        protected string $unidades;


        public function __construct(int $codigo, string $titulo, string $ano, string $valor, string $unidades){
            $this->codigo = $codigo;
            $this->titulo = $titulo;
            $this->ano = $ano;
            $this->valor = $valor;
            $this->unidades = $unidades;
        }

        public function __get(string $dados){
            return $this->$dados;
        }

        public function __set(string $nomeVariavel, string $valor) : void
        {
            $this->nomeVariavel = $valor;
        }

        public function __toString() : string
        {
            return "<br>Codigo do cliente: ".$this->$codigo."<br>Titulo do livro: ".$this->titulo."<br>Ano que foi lançou: ".$this->ano."<br>Valor do livro: ".$this->valor."<br>Quantas unidades tem: ".$this->unidades;
        }


    }
?>