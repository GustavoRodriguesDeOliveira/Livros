<?php

    class Cadastro{

        protected string $codigo;
        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $datan;
        protected string $login;
        protected string $senha;

        public function __construct(int $codigo, string $nome, string $endereco, string $telefone, string $datan, string $login, string $senha){
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->datan = $data;
            $this->login = $login;
            $this->senha = $senha;

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
            return "<br>Codigo do cliente: ".$this->$codigo."<br>Nome: ".$this->nome."<br>Endereço : ".$this->endereco."<br>Data de nascimento,: ".$this->datan."<br>telefone: ".$this->telefone."<br>login: ".$this->login;
        }


    }
?>