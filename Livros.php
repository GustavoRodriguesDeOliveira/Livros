<?php


    class Livros{

        private string $titulo;
        private string $categoria;
        private string $datadel;
        private float $codigo;
        private float $quantidade;
        private float $venda;

        public function __construct(string $titulo, string $categoria, string $datadel, float $codigo, float $quantidade, float $venda){
            $this->titulo      = $titulo;
            $this->categoria     = $categoria;
            $this->datadel = $datadel;
            $this->codigo = $codigo; 
            $this->quantidade = $quantidade;
            $this->venda = $venda;
        }

        public function getTitulo() : string
        {
            return $this->titulo;
        }

        public function setTitulo(string $titulo) : void
        {
            $this->$titulo;
        }

        public function getCategoria() : string
        {
            return $this->categoria;
        }

        public function setCategoria(string $categoria) : void
        {
            $this->categoria = $categoria;
        }

        public function getDatadel() : string
        {
            return $this->datadel;
        }

        public function setDatadel(string $datadel) : void
        {
            $this->datadel = $datadel;
        }

        public function getCodigo() : float
        {
            return $this->codigo;
        }

        public function setCodigo(float $codigo) : void
        {
            $this->codigo = $codigo;
        }

        public function getQuantidade() : float
        {
            return $this->quantidade;
        }

        public function setQuantidade(float $quantidade) : void
        {
            $this->quantidade = $quantidade;
        }

        public function getVenda() : float
        {
            return $this->venda;
        }

        public function setVenda(float $venda) : void
        {
            $this->venda = $venda;
        }


    }
?>